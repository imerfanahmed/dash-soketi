<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\App;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create( [
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => \Hash::make( 'password' )
        ] );

        //create a app seeder
        App::create([
            'name' => 'app-name',
            'key'=>'app-key',
            'secret' => 'app-secret',
        ]);
    }
}
