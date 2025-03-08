<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Customer::factory()->count(200)->create()->each(function ($customer) {
            for($i = 0; $i < 15; $i++) {
                Purchase::factory()->create(['customer_id' => $customer->id]);
            }
        });
    }
}
