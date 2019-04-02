<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

class OnlineController extends Controller
{
    private $query;

    /**
     * Display a listing of the resource.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getOnline()
    {
        $online = $this->getOnlineJson();

        return response()->json(
            [
                'status' => true,
                'ip' => config('app.server.ip'),
                'port' => config('app.server.port'),
                'players' => [
                    'max' => $online['players']['max'],
                    'online' => $online['players']['online']
                ]
            ]
        );
    }

    public function getOnlineJson()
    {
        try
        {
            $this->query = new MinecraftPing(
                config('app.server.ip'),
                config('app.server.port'),
                3,
                false
            );

            return $this->query->Query();
        }
        catch( MinecraftPingException $e )
        {
            //return $e->getMessage();
            return abort(500);
        }
        /*finally
        {
            if($this->query->Query())
            {
                $this->query->Query()->Close();
            }
        }*/
    }
}
