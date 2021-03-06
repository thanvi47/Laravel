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
        $customer->phone_number='255';
//            $faker->phoneNumber;
        $customer->password=$faker->password;
        $customer->dept_id=1/2;
        $customer->status=$faker->boolean;
//        $table->timestamps();
        $customer->save();
    }
}
