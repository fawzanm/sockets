\<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class)->create(['email' => 'fawzanm@gmail.com', 'name' => 'M Fawzan']);
        factory(User::class)->create(['email' => 'john@example.com', 'name' => 'John Doe']);
    }
}
