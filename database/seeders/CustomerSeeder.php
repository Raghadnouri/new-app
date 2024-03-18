<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.php artisan migrate:fresh --seed
     */
    public function run(): void
    {
        customer::factory()
          ->count(25)
          ->hasInvoices(10)
          ->create();

          customer::factory()
          ->count(100)
          ->hasInvoices(5)
          ->create();

          customer::factory()
          ->count(100)
          ->hasInvoices(3)
          ->create();

          customer::factory()
          ->count(5)
          ->create();


    }
}
