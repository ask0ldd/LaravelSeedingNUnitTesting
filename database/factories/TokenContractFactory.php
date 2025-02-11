<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TokenContract>
 */
class TokenContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'token' . random_int(0, 9999),
            'symbol' => Str::random(3),
            'token_address_id' => Address::factory(),
            'decimals' => 18,
        ];
    }
}
