<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'nickname' => 'Zeldos',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 11.11,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Zeldos',
                'server_id' => 1,
                'product_id' => 3,
                'final_price' => 400.56,
                'status' => true,
                'created_at' => Carbon::now(),
            ],            [
                'nickname' => 1,
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 33.33,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Steve',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 44.44,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Hasky',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Zick',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Zero',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Duck',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Egor',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Lily',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Lolly',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
            [
                'nickname' => 'Zilly',
                'server_id' => 1,
                'product_id' => 1,
                'final_price' => 55.55,
                'status' => true,
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('orders')->insert($orders);
    }
}
