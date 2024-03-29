<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\customer;
use App\Models\invoice;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['B','P','V']);
        return [
           'customer_id'=>customer::factory(),
           'amount'=>$this->faker->numberBetween(100,2000),
           'status'=>$status,
           'billed_dated'=>$this->faker->dateTimeThisDecade(),
           'paid_dated'=>$status =='P' ? $this->faker->dateTimeThisDecade():NULL,

        ];
    }
}
