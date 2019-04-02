<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servers = [
            [
                'title' => 'Survival',
                'status' => 1,
                'rcon_ip' => '51.255.144.33',
                'rcon_port' => '44444',
                'rcon_password' => 'A993B3173584B6449B',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'MG',
                'status' => 1,
                'rcon_ip' => 'play.turbocraft.ru',
                'rcon_port' => '25575',
                'rcon_password' => 'Tk76D1VbgsGpi13QT8Coq7r5cG3t1X',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'RPG',
                'status' => 1,
                'rcon_ip' => 'play.turbocraft.ru',
                'rcon_port' => '25575',
                'rcon_password' => 'Tk76D1VbgsGpi13QT8Coq7r5cG3t1X',
                'created_at' => Carbon::now(),
            ]
        ];

        DB::table('servers')->insert($servers);
    }
}
