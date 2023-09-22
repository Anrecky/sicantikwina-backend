<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $brideIsYear = fake()->boolean();
        $groomIsYear = fake()->boolean();
        $wbIsYear = fake()->boolean();
        $wbGender = fake()->randomElement(['male', 'female']);

        return [
            'bride_name' => fake()->name($gender = 'female'),
            'bride_dob' => !$brideIsYear ? fake()->dateTimeBetween('-15 years', '-5 years') : null,
            'bride_year' => $brideIsYear ? (new Carbon(fake()->dateTimeBetween('-15 years', '-5 years')))->year : null,
            'bride_is_year' => $brideIsYear,
            'bride_address' => fake()->optional($weight = 0.25)->address(),
            'bride_phone' => fake()->optional($weight = 0.825)->phoneNumber(),

            'groom_name' => fake()->name($gender = 'male'),
            'groom_dob' => !$groomIsYear ? fake()->dateTimeBetween('-15 years', '-5 years') : null,
            'groom_year' => $groomIsYear ? (new Carbon(fake()->dateTimeBetween('-15 years', '-5 years')))->year : null,
            'groom_is_year' => $groomIsYear,
            'groom_address' => fake()->optional($weight = 0.75)->address(),
            'groom_phone' => fake()->optional($weight = 0.45)->phoneNumber(),

            'whistleblower_name' => fake()->name($wbGender),
            'whistleblower_dob' => !$wbIsYear ? fake()->dateTimeBetween('-70 years', '-16 years') : null,
            'whistleblower_year' => $wbIsYear ? (new Carbon(fake()->dateTimeBetween('-70 years', '-16 years')))->year : null,
            'whistleblower_is_year' => $wbIsYear,
            'whistleblower_address' => fake()->optional($weight = 0.125)->address(),
            'whistleblower_phone' => fake()->optional($weight = 0.645)->phoneNumber(),
            'whistleblower_gender' => $wbGender,

            'relationship' => fake()->words(rand(1, 3), true),
            'chronology' => fake()->optional()->realText(),
        ];
    }
}
