<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DonacionSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(CancerSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
