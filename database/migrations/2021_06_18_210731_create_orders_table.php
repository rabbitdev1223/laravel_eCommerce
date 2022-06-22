<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('total');
            $table->boolean('is_paid')->default(false);
            $table->foreignId('payment_method_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('payment_status_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('order_status_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('fulfillment_status_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('purchase_order_code')->nullable();
            $table->string('address_type')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('zipcode')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
