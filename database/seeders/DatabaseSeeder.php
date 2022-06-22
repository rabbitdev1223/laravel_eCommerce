<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Should be enabled for defaults
        $this->call(StockStatusesTableSeeder::class);
        $this->call(JobTypesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(LocationTypesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ItemUomsTableSeeder::class);

        // If need locations address and users address
        $this->call(AddressesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);

        // departments needs to be after locations/address
        $this->call(DepartmentsTableSeeder::class);
        $this->call(FulfillmentStatusesTableSeeder::class);
        $this->call(ProductTypesTableSeeder::class);
        $this->call(ItemOptionTypesTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(PaymentStatusesTableSeeder::class);
        $this->call(ProductAttributeTypesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);

        // images need to be before users
        $this->call(ImagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // If need to keep transactions
        $this->call(InventoryFlowsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);

        // If need to keep notes
        $this->call(NotesTableSeeder::class);

        // If need to reimport comment out these
        $this->call(ProductsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(ItemOptionValuesTableSeeder::class);
        $this->call(ItemOptionsTableSeeder::class);
        $this->call(ProductAttributesTableSeeder::class);
        $this->call(TaggablesTableSeeder::class);
        $this->call(ProductUserTableSeeder::class);
        $this->call(ContactFormMessagesTableSeeder::class);

        // fake cart filler comment out in almost all cases except to test cart/checkout page
        // $this->call(CartsTableSeeder::class);

        $this->call(FaqsTableSeeder::class);
    }
}
