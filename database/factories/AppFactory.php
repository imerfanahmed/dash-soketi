<?php

namespace Database\Factories;

use App\Models\App;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AppFactory extends Factory
{
    protected $model = App::class;

    public function definition()
    {
        return [
            'key' => $this->faker->word(),
            'secret' => $this->faker->word(),
            'max-connections' => $this->faker->randomNumber(),
            'enable_client_messages' => $this->faker->randomNumber(),
            'enabled' => $this->faker->randomNumber(),
            'max_backend_events_per_sec' => $this->faker->randomNumber(),
            'max_client_events_per_sec' => $this->faker->randomNumber(),
            'max_read_req_per_sec' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
