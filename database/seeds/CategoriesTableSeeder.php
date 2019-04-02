<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $categories = [
                [
                    'title' => 'Привилегии',
                    'surcharge' => true,
                    'status' => true,
                    'created_at' => Carbon::now(),
                ],
                [
                    'title' => 'Прочее',
                    'surcharge' => false,
                    'status' => false,
                    'created_at' => Carbon::now(),
                ],
                [
                    'title' => 'Кейсы',
                    'status' => false,
                    'surcharge' => false,
                    'created_at' => Carbon::now(),
                ],
                [
                    'title' => 'Команда сервера',
                    'surcharge' => false,
                    'status' => false,
                    'created_at' => Carbon::now(),
                ],
            ];

            DB::table('categories')->insert($categories);
        }
    }
}
