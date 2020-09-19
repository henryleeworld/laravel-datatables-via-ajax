<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()->times(200)->create()->each(function ($customer) {
            for($i = 0; $i < 15; $i++) {
                Purchase::factory()->create(['customer_id' => $customer->id]);
            }
        });
    }
}
