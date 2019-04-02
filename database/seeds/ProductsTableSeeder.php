<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            /*
            [
                //ID сервера
                'server_id'       =>  1,

                //Название товара
                'title'           =>  'VIP 1 SRV1',

                //Описание товара
                'description'     =>  'Администратор пока не добавил описание к товару...',

                //Картинка товара
                'image'           =>  '/images/donate.png',

                //Цена без скидки
                'original_price'  =>  300,

                //Цена со скидкой
                'discount_price'  =>  199,

                //Включить ли доплату данному товару?
                'surcharge'       => true,

                //Команда для выдачи товара. Перменные: %nickname% - никнейм, на которого выдастся товар
                'rcon_cmd'        =>  'say VIP %nickname% 1 SRV1',

                ///Указать true/false на один из них, оба true/false не могут быть. ///

                //Показывать ли первом блоке данный товар? false - оставить без показа на главном блоке, true - показать на главном блоке товаров
                'first'           =>  false,
                //Сделать ли особое выделение товара? false - оставить без выделения, true - сделать выделение товара
                'highlight'       =>  true,

                ///Указать true/false на один из них, оба true/false не могут быть. ///

                //Активный ли товар? false - недоступный, true - активный
                'status'          =>  true,

                //Это не трогать
                'created_at'      =>  Carbon::now(),
            ],
             */
            [
                'server_id'       =>  1,
                'category_id'     =>  1,
                'title'           =>  'VIP 1 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/cash.png',
                'original_price'  =>  300,
                'discount_price'  =>  199,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say VIP 1 SRV1',
                'first'           =>  false,
                'highlight'       =>  true,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  1,
                'category_id'     =>  1,
                'title'           =>  'VIP 2 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  500,
                'discount_price'  =>  399,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 2 SRV1',
                'first'           =>  true,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  1,
                'category_id'     =>  3,
                'title'           =>  'CASE 3 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  500,
                'discount_price'  =>  399,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 3 SRV1',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  1,
                'category_id'     =>  1,
                'title'           =>  'VIP 4 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  500,
                'discount_price'  =>  399,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 4 SRV1',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  1,
                'category_id'     =>  1,
                'title'           =>  'VIP 5 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  500,
                'discount_price'  =>  399,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say VIP 5 SRV1',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  1,
                'category_id'     =>  1,
                'title'           =>  'VIP 6 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  500,
                'discount_price'  =>  399,
                'surcharge'       =>  false,
                'rcon_cmd'        =>  'say %nickname% VIP 6 SRV1',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  1,
                'category_id'     =>  2,
                'title'           =>  'VIP 7 SRV1',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  500,
                'discount_price'  =>  399,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 7 SRV1',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  2,
                'category_id'     =>  1,
                'title'           =>  'VIP 1 SRV2',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/cash.png',
                'original_price'  =>  700,
                'discount_price'  =>  499,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say VIP 1 SRV2',
                'first'           =>  false,
                'highlight'       =>  true,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  2,
                'category_id'     =>  1,
                'title'           =>  'VIP 2 SRV2',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  900,
                'discount_price'  =>  799,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 2 SRV2',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  2,
                'category_id'     =>  3,
                'title'           =>  'VIP 3 SRV2',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  '',
                'original_price'  =>  1500,
                'discount_price'  =>  1199,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 3 SRV2',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  3,
                'category_id'     =>  1,
                'title'           =>  'VIP 1 SRV3',
                'description'     =>  '',
                'description_enable' =>  true,
                'image'           =>  'https://pp.userapi.com/c851324/v851324528/d0ae5/BiCtf6m-Nzc.jpg',
                'original_price'  =>  2500,
                'discount_price'  =>  1499,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 1 SRV3',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  3,
                'category_id'     =>  3,
                'title'           =>  'VIP 2 SRV3',
                'description'     =>  '',
                'description_enable' =>  false,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  2500,
                'discount_price'  =>  1999,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 2 SRV3',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
            [
                'server_id'       =>  3,
                'category_id'     =>  2,
                'title'           =>  'VIP 3 SRV3',
                'description'     =>  '',
                'description_enable' =>  false,
                'image'           =>  '/images/donate.png',
                'original_price'  =>  2500,
                'discount_price'  =>  1999,
                'surcharge'       =>  true,
                'rcon_cmd'        =>  'say %nickname% VIP 3 SRV3',
                'first'           =>  false,
                'highlight'       =>  false,
                'status'          =>  true,
                'created_at'      =>  Carbon::now(),
            ],
        ];

        DB::table( 'products' )->insert($products);
    }
}
