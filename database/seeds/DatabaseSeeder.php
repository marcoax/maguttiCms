<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(AdminuserRoleTableSeeder::class);
        $this->call(AdminusersTableSeeder::class);
        $this->call(ArticleTranslationsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(BlockTranslationsTableSeeder::class);
        $this->call(BlocksTableSeeder::class);
        $this->call(CartItemsTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryTranslationsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(DiscountsTableSeeder::class);
        $this->call(DomainTranslationsTableSeeder::class);
        $this->call(DomainsTableSeeder::class);
        $this->call(ExampleArticleTableSeeder::class);
        $this->call(ExampleTranslationsTableSeeder::class);
        $this->call(ExamplesTableSeeder::class);
        $this->call(HpSliderTranslationsTableSeeder::class);
        $this->call(HpslidersTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MediaTranslationsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(NewsTagTableSeeder::class);
        $this->call(NewsTranslationsTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ProductModelTranslationsTableSeeder::class);
        $this->call(ProductModelsTableSeeder::class);
        $this->call(ProductTranslationsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
        $this->call(SpecialPricesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TagTranslationsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
