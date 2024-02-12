<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\order;
class IndexController extends Controller
{
    public function index()
    {
        // return view('welcome');
        
       
        
        //Query
        // $Data = DB::select('
        //             SELECT 
        //                 o.id AS order_id, 
        //                 o.order_name, 
        //                 o.product_name, 
        //                 u.id AS user_id, 
        //                 u.name AS username, 
        //                 u.email, 
        //                 p.id AS product_id, 
        //                 p.product_name AS product_name, 
        //                 CASE 
        //                     WHEN o.status = "success" THEN "success" 
        //                     ELSE "cancelled" 
        //                 END AS status 
        //             FROM 
        //                 orders o 
        //                 LEFT JOIN users u ON o.user_id = u.id 
        //                 LEFT JOIN products p ON o.product_name = p.product_name
        //         ');
            $data = order::select(
                'orders.id as order_id',
                'orders.order_name',
                'orders.product_name',
                'users.id as user_id',
                'users.name as username',
                'users.email',
                'products.id as product_id',
                'products.product_name as product_name',
                \DB::raw("CASE WHEN orders.status = 'success' THEN 'success' ELSE 'cancelled' END as status")
            )
                ->leftJoin('users', 'orders.user_id', '=', 'users.id')
                ->leftJoin('products', 'orders.product_name', '=', 'products.product_name')
                ->get();
        // Resource::all();
         return view('welcome', ['data' => $data]);
    }
}
