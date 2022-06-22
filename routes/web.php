<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminOrdersController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminSupportMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrdersController;
use App\Http\Controllers\Frontend\SupportController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\Frontend\MyAccountController;
use App\Http\Controllers\Frontend\Manager\DashboardController as ManagerDashboardController;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;

// Frontend

Route::get('/support', SupportController::class)->name('support');

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomeController::class)->name('home');

    Route::get('/products/{product:slug}', ProductsController::class)->name('products.show');

    Route::get('/favorites', FavoritesController::class)->name('favorites');

    Route::get('/checkout', CheckoutController::class)->name('checkout');

    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', OrdersController::class)->name('index');
        Route::get('/{order}/invoices', InvoicesController::class)->name('invoices.show');
    });

    Route::get('/my-account', MyAccountController::class)->name('my-account');
});

// Utilities
Route::get('/images', ImageController::class)->name('images');

Route::get('/generate-internal-number', function () {

    $products = Product::all();

    foreach ($products as $product) {
        $manufacturer_code = '';
        $uom = '';
        $mpn = '';
        $o_c_title = '';
        $o_s_title = '';

        if ($product->manufacturer)
            $manufacturer_code = $product->manufacturer->code;

        foreach ($product->items as $item) {
            if ($item->itemUom)
                $uom = strtoupper($item->itemUom->title);

            $mpn = strtoupper($item->mpn);

            foreach ($item->itemOptions as $option) {
                if ($option->itemOptionType->id == 1) //color
                    $o_c_title = strtoupper($option->itemOptionValue->title);
                else //size
                    $o_s_title = strtoupper($option->itemOptionValue->title);
            }

            $valueArr = [];
            array_push($valueArr, $o_c_title);
            array_push($valueArr, $o_s_title);
            asort($valueArr, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
            $itemOptionValuesStr = join($valueArr);

            // to generate internal_number/item_number = Manufacturer->code + item->mpn + item->options + item->uom
            $item->internal_number = $manufacturer_code . $mpn . $itemOptionValuesStr . $uom;
            $item->save();
        }
    }

    dd('generate internal number done!');
})->name('generate.internal_number');



// Backend
Route::middleware(['auth', 'role:super|admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/orders', AdminOrdersController::class)->name('orders.index');

    Route::post('/orders/{order}/updateAddress', [AdminOrdersController::class, 'updateAddress'])->name('orders.updateAddress');

    Route::get('/dashboard', AdminDashboardController::class)->name('dashboard');
    Route::get('/users', AdminUsersController::class)->name('users.index');
    Route::get('/users/{user}', [AdminUsersController::class, 'edit'])->name('users.profile.edit');
    Route::post('/users/{user}/update', [AdminUsersController::class, 'update'])->name('users.profile.update');

    Route::get('/chat', function () {
        return view('admin.chat.index');
    });

    Route::get('/faqs', function () {
        return view('admin.faqs.index');
    })->name('faqs.index');

    Route::get('/products', AdminProductsController::class)->name('products.index');

    Route::get('/users', AdminUsersController::class)->name('users.index');

    Route::get('/support-message', AdminSupportMessageController::class)->name('support-message.index');
});

// Frontend Manager
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/dashboard', [ManagerDashboardController::class, 'index'])->name('dashboard');
});
require __DIR__ . '/auth.php';
