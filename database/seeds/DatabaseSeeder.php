<?php

use App\Admin;
use App\Customer;
use App\Package;
use App\Product;
use App\Service;
use App\User;
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
        $this->call(SettingSeeder::class);
        factory(Customer::class, 10)->create();
        $admin = new Admin();
        $admin->name = "Tareq Hossian";
        $admin->email = "admin@admin.com";
        $admin->password = bcrypt("123456");
        $admin->save();

        $product = new Product();
        $product->name = "Demo Product 1";
        $product->description = "Demo Product 1 Description";
        $product->price = 60;
        $product->save();

        $product1 = new Product();
        $product1->name = "Demo Product 2";
        $product1->description = "Demo Product 2 Description";
        $product1->price = 40;
        $product1->save();

        $package1 = new Package();
        $package1->name = "Basic";
        $package1->services = "Hair Extension, Makeup Application, Facial, Nails, Styling";
        $package1->price = 200;
        $package1->save();

        $package2 = new Package();
        $package2->name = "Classic";
        $package2->services = "Hair Extension, Makeup Application, Facial, Nails, Styling";
        $package2->price = 350;
        $package2->save();

        $package3 = new Package();
        $package3->name = "Gold";
        $package3->services = "Hair Extension, Makeup Application, Facial, Nails, Styling";
        $package3->price = 500;
        $package3->save();

        $package4 = new Package();
        $package4->name = "Platinum";
        $package4->services = "Hair Extension, Makeup Application, Facial, Nails, Styling";
        $package4->price = 800;
        $package4->save();


        $service1 = new Service();
        $service1->name = "FACIAL";
        $service1->description = "Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.";
        $service1->save();

        $service2 = new Service();
        $service2->name = "MAKEUP";
        $service2->description = "Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.";
        $service2->save();

        $service3 = new Service();
        $service3->name = "NAIL CARE";
        $service3->description = "Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.";
        $service3->save();

        $service4 = new Service();
        $service4->name = "HAIR CARE";
        $service4->description = "Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.";
        $service4->save();
    }
}
