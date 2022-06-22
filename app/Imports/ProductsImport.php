<?php

namespace App\Imports;

use App\Models\Tag;
use App\Models\Item;
use App\Models\Image;
use App\Models\ItemUom;
use App\Models\Product;
use App\Models\Setting;
use App\Models\ItemOption;
use App\Models\ProductType;
use App\Models\StockStatus;
use Illuminate\Support\Str;
use App\Models\Manufacturer;
use App\Models\ItemOptionType;
use App\Models\ItemOptionValue;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeType;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Generate Main Product
        if ($row['description']) {
            // Generate Product Types and Nest
            if (!empty($row['category'])) {
                $productTypeTitleItems = explode('|', trim($row['category']));

                $productTypeTitle = null;
                $parentProductType = null;

                foreach ($productTypeTitleItems as $type) {
                    $productTypeTitle = strtolower(trim($type));

                    if (empty($productTypeTitle)) {
                        continue;
                    }

                    if (ProductType::where('title', $productTypeTitle)->first()) {
                        $parentProductType = ProductType::where('title', $productTypeTitle)->first();
                        continue;
                    }

                    $parentProductType = ProductType::create([
                        'title' => $productTypeTitle,
                        'product_type_id' => $parentProductType ? $parentProductType->id : null
                    ]);
                }
            }

            // Generate Tags
            if (!empty($row['tags'])) {
                $tagItems = explode('|', trim($row['tags']));

                $tags = collect();

                foreach ($tagItems as $tag) {
                    $tagTitle = strtolower(trim($tag));

                    if (empty($tagTitle)) {
                        continue;
                    }

                    if (Tag::where('title', $tagTitle)->first()) {
                        $tag = Tag::where('title', $tagTitle)->first();
                    } else {
                        $tag = Tag::create([
                            'title' => $tagTitle
                        ]);
                    }

                    $tags->push($tag->id);
                }
            }

            // Generate Product
            $product = Product::create([
                'title' => $row['name'],
                'description' => $row['description'],
                'manufacturer_id' => Manufacturer::where('code', $row['manufacturer_code'])->first()->id,
                'slug' => Str::slug($row['name'], '-'),
                'seo_keyword' => $row['seo_keyword'],
                'meta_description' => $row['meta_description'],
                'product_type_id' => $parentProductType->id
            ]);

            // Attach tags to product
            if ($tags->count() > 0) {
                $product->tags()->attach($tags);

                $tags = Tag::find($tags)->pluck('title');

                $product->update([
                    'meta_keywords' => $tags->implode(',')
                ]);
            }

            // Generate Product Attributes & Types
            if (!empty($row['attributes'])) {
                $productAttributeItems = explode('|', trim($row['attributes']));

                foreach ($productAttributeItems as $attributes) {
                    $attributes = explode(':', trim($attributes));

                    $attributeTypeTitle = strtolower(trim($attributes[0]));

                    if (ProductAttributeType::where('title', $attributeTypeTitle)->first()) {
                        $attributeType = ProductAttributeType::where('title', $attributeTypeTitle)->first();
                    } else {
                        $attributeType = ProductAttributeType::create([
                            'title' => $attributeTypeTitle
                        ]);
                    }

                    $attributes = explode('\\', trim($attributes[1]));

                    foreach ($attributes as $value) {
                        $attributeValue = trim($value);

                        ProductAttribute::create([
                            'product_id' => $product->id,
                            'product_attribute_type_id' => $attributeType->id,
                            'value' => $attributeValue
                        ]);
                    }
                }
            }

            // Add Images to product
            if (!empty($row['images'])) {
                $ProductImages = explode('|', trim($row['images']));

                foreach ($ProductImages as $image) {
                    $img = $product->images()->create([
                        'alt' => $product->title,
                        'src' => trim($image),
                    ]);

                    if (!$product->image_id) {
                        $product->image()->associate($img);
                    }
                }
            }

            // Generate ItemUoms
            if ($row['uom']) {
                $itemUomTitle = strtolower(trim($row['uom']));

                if (ItemUom::where('title', $itemUomTitle)->first()) {
                    $uom = ItemUom::where('title', $itemUomTitle)->first();
                } else {
                    $uom = ItemUom::create([
                        'title' => $itemUomTitle
                    ]);
                }
            }

            // Generate Items
            if (Product::where('title', trim($row['name']))->first()) {

                $quantity = trim($row['quantity']);

                if ($quantity < 1) {
                    $stockStatusTitle = 'Out Of Stock';
                } else {
                    $stockStatusTitle = 'In Stock';
                }

                $stockStatus = StockStatus::where('title', $stockStatusTitle)->first();

                $mpn = strtoupper(trim($row['mpn']));
                $uomTitle = strtoupper(trim($row['uom']));

                if ($row['options']) {
                    $options = explode('|', strtolower(trim($row['options'])));

                    $itemOptionsList = collect();

                    foreach ($options as $option) {
                        $itemOptions = explode(':', trim($option));

                        $itemOptionTypeTitle = trim($itemOptions[0]);

                        if (ItemOptionType::where('title', $itemOptionTypeTitle)->first()) {
                            $itemOptionType = ItemOptionType::where('title', $itemOptionTypeTitle)->first();
                        } else {
                            $itemOptionType = ItemOptionType::create([
                                'title' => $itemOptionTypeTitle
                            ]);
                        }

                        $itemOptionsList->push(collect(array(
                            'title' => $itemOptionType->title,
                            'value' => trim($itemOptions[1])
                        )));
                    }


                    foreach ($itemOptionsList->sortBy('title') as $option) {
                        $internalNumber = $mpn . $option['value'] . $uomTitle;
                    }
                } else {
                    $internalNumber = $mpn . $uomTitle;
                }

                if (Item::where('internal_number', strtoupper($internalNumber))->first()) {
                    $item = Item::where('internal_number', strtoupper($internalNumber))->first();
                } else {
                    $item = Item::create([
                        'product_id' => $product->id,
                        'item_uom_id' => $uom->id,
                        'sale_price' => floatval(trim($row['sale_price'])) * 100,
                        'cost_price' => floatval(trim($row['cost_price'])) * 100,
                        'stock_status_id' => $stockStatus->id,
                        'quantity' => $quantity,
                        'image_id' => $product->image_id,
                        'weight' => floatval(trim($row['weight'])) ? floatval(trim($row['weight'])) : null,
                        'length' => floatval(trim($row['length'])) ? floatval(trim($row['length'])) : null,
                        'width' => floatval(trim($row['width'])) ? floatval(trim($row['width'])) : null,
                        'height' => floatval(trim($row['height'])) ? floatval(trim($row['height'])) : null,
                        'mpn' => $mpn,
                        'internal_number' => strtoupper($internalNumber),
                        'model_number' => trim($row['manufacturer_model_number']) ? trim($row['manufacturer_model_number']) : null,
                    ]);
                }


                if ($row['options']) {
                    if ($itemOptionsList->count() > 0) {
                        foreach ($itemOptionsList as $option) {
                            if (ItemOptionValue::where('title', $option['value'])->first()) {
                                $optionValue = ItemOptionValue::where('title', $option['value'])->first();
                            } else {
                                $optionValue = ItemOptionValue::create([
                                    'title' => $option['value'],
                                ]);
                            }

                            ItemOption::create([
                                'item_id' => $item->id,
                                'item_option_type_id' => ItemOptionType::where('title', $option['title'])->first()->id,
                                'item_option_value_id' => $optionValue->id
                            ]);
                        }
                    }
                }
            }

            return $product;
        } else {

            if (!Product::where('title', trim($row['name']))->first()) {
                return;
            }

            $product = Product::where('title', trim($row['name']))->first();

            // Generate ItemUoms
            if ($row['uom']) {
                $itemUomTitle = strtolower(trim($row['uom']));

                if (ItemUom::where('title', $itemUomTitle)->first()) {
                    $uom = ItemUom::where('title', $itemUomTitle)->first();
                } else {
                    $uom = ItemUom::create([
                        'title' => $itemUomTitle
                    ]);
                }
            }

            $quantity = trim($row['quantity']);

            if ($quantity < 1) {
                $stockStatusTitle = 'Out Of Stock';
            } else {
                $stockStatusTitle = 'In Stock';
            }

            $stockStatus = StockStatus::where('title', $stockStatusTitle)->first();

            $mpn = strtoupper(trim($row['mpn']));
            $uomTitle = strtoupper(trim($row['uom']));

            if ($row['options']) {
                $options = explode('|', strtolower(trim($row['options'])));

                $itemOptionsList = collect();

                foreach ($options as $option) {
                    $itemOptions = explode(':', trim($option));

                    $itemOptionTypeTitle = trim($itemOptions[0]);

                    if (ItemOptionType::where('title', $itemOptionTypeTitle)->first()) {
                        $itemOptionType = ItemOptionType::where('title', $itemOptionTypeTitle)->first();
                    } else {
                        $itemOptionType = ItemOptionType::create([
                            'title' => $itemOptionTypeTitle
                        ]);
                    }

                    $itemOptionsList->push(collect(array(
                        'title' => $itemOptionType->title,
                        'value' => trim($itemOptions[1])
                    )));
                }


                foreach ($itemOptionsList->sortBy('title') as $option) {
                    $internalNumber = $mpn . $option['value'] . $uomTitle;
                }
            } else {
                $internalNumber = $mpn . $uomTitle;
            }

            if (Item::where('internal_number', strtoupper($internalNumber))->first()) {
                $item = Item::where('internal_number', strtoupper($internalNumber))->first();
            } else {
                $item = Item::create([
                    'product_id' => $product->id,
                    'item_uom_id' => $uom->id,
                    'sale_price' => floatval(trim($row['sale_price'])) * 100,
                    'cost_price' => floatval(trim($row['cost_price'])) * 100,
                    'stock_status_id' => $stockStatus->id,
                    'quantity' => $quantity,
                    'image_id' => $product->image_id,
                    'weight' => floatval(trim($row['weight'])) ? floatval(trim($row['weight'])) : null,
                    'length' => floatval(trim($row['length'])) ? floatval(trim($row['length'])) : null,
                    'width' => floatval(trim($row['width'])) ? floatval(trim($row['width'])) : null,
                    'height' => floatval(trim($row['height'])) ? floatval(trim($row['height'])) : null,
                    'mpn' => $mpn,
                    'internal_number' => strtoupper($internalNumber),
                    'model_number' => trim($row['manufacturer_model_number']) ? trim($row['manufacturer_model_number']) : null,
                ]);
            }


            if ($row['options']) {
                if ($itemOptionsList->count() > 0) {
                    foreach ($itemOptionsList as $option) {
                        if (ItemOptionValue::where('title', $option['value'])->first()) {
                            $optionValue = ItemOptionValue::where('title', $option['value'])->first();
                        } else {
                            $optionValue = ItemOptionValue::create([
                                'title' => $option['value'],
                            ]);
                        }

                        ItemOption::create([
                            'item_id' => $item->id,
                            'item_option_type_id' => ItemOptionType::where('title', $option['title'])->first()->id,
                            'item_option_value_id' => $optionValue->id
                        ]);
                    }
                }
            }
        }
    }
}
