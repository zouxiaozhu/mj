<?php

namespace MJ\Providers;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($data) {
            return Response::json(['error_code' => 0, 'data' => $data]);
        });
        Response::macro('error', function ($code, $error_info, $status=200, $sprintf = '') {
            $error_info = $error_info ? trans('errors' . $error_info) : trans('errors' . 'Undefined Error');
            if($sprintf){
                $error_info =sprintf($error_info,$sprintf);
            }
            return Response::json(array('error'=>$code,'error_info'=>$error_info,$status));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
