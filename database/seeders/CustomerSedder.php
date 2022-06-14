<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;
class CustomerSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Faker::create();
        $customer = new Customer;
//        $table->id();
        $customer->name=$faker->name;
        $customer->email=$faker->email;
        $customer->gender='M';
        $customer->phone_number='123';
//            $faker->phoneNumber;
        $customer->password=$faker->password;
        $customer->image=$faker->image;
        $customer->status=$faker->boolean;
//        $table->timestamps();
        $customer->save();
    }
}
