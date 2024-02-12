<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $orders = array(
            array("order_name"=>"Ford", "product_name"=>"Product 1", "user_id"=>1,"status" =>"cancelled"),
            array("order_name"=>"Toyota", "product_name"=>"Product 2", "user_id"=>2,"status" =>"success"),
            array("order_name"=>"Chevrolet", "product_name"=>"Product 3", "user_id"=>3,"status" =>"cancelled"),
            array("order_name"=>"Honda", "product_name"=>"Product 4", "user_id"=>4,"status" =>"success"),
            array("order_name"=>"Ford1", "product_name"=>"Product 5", "user_id"=>5,"status" =>"cancelled"),
            array("order_name"=>"Toyota1", "product_name"=>"Product 6", "user_id"=>6,"status" =>"success"),
            array("order_name"=>"Chevrolet1", "product_name"=>"Product 7", "user_id"=>7,"status" =>"cancelled"),
            array("order_name"=>"Honda1", "product_name"=>"Product 8", "user_id"=>8,"status" =>"success")
        );

        foreach ($orders as $orderData) {
            order::create($orderData);
        }
    }
}
