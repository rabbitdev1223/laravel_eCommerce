<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('zipcode')->nullable();
            $table->boolean('is_primary')->default(false);
            $table->morphs('addressable');
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
        Schema::dropIfExists('addresses');
    }
}
