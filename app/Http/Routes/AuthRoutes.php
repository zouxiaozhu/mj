<?php

namespace MJ\Http\Routes;

class AuthRoutes
{
    public function map()
    {
        $api = app('Dingo\Api\Routing\Router');
        $api->version(env('API_VERSION'), function ($api) {
            $api->group(['namespace' => 'MJ\Http\Controllers\In'], function ($api) {
                $api->group(['namespace'=>'Auth'],function($api){
                   $api->group(['prefix'=>'auth','middleware'=>[]],function($api){
                       $api->get('text',function(){return 1111;});

                   });
                });
            });
        });
    }
}