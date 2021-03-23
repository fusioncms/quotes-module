<?php

namespace Database\Factories;

use Addon\Quotes\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddonFactory extends Factory
{
	/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
	protected $model = Quote::class;

	/**
     * Define the model's default state.
     *
     * @return array
     */
	public function definition()
	{
		return [
	        'author' => $this->faker->name,
	        'quote'  => $this->faker->sentence,
	    ];
	}
}