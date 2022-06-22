<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('item_uom_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('sale_price');
            $table->unsignedInteger('cost_price');
            $table->foreignId('stock_status_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('quantity');
            $table->foreignId('image_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('length', 8, 2)->nullable();
            $table->decimal('width', 8, 2)->nullable();
            $table->decimal('height', 8, 2)->nullable();
            $table->string('mpn');
            $table->string('internal_number')->unique();
            $table->string('model_number')->nullable();
            $table->string('part_number')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
