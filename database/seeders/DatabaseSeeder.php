<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\OrdersTableSeeder;
use Database\Seeders\ProductTable;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Mayur',
        //     'email' => 'mayur123@gmail.com',
        // ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductTable::class);
        $this->call(OrdersTableSeeder::class);
        
    }
}
