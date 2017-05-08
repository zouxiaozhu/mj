<?php

namespace MJ\Http\Controllers;

use MJ\Jobs\SendRminderEmail;

class MailController extends Controller
{

    /**
     *
     *
     */
    public function tests($start,$stop)
    {
        if ($start < $stop) {
            for ($i = $start; $i <= $stop; $i++) {
                yield $i => $i ;
            }
        } else {
            for ($i = $start; $i >= $stop; $i--) {
                yield $i => $i ; //迭代生成数组： 键=》值
            }
        }


//        for ($i = 0; $i < 100; $i++) {
//            Mail::raw('ceshiceshi wokankna ', function ($message) use ($i) {
//                $message->from('zouxiaozhu520@126.com', 'zouxiaozhu520');
//                $message->subject('群主是' . $i . '个傻逼');
//                $message->to('334384@qq.com');
//                sleep(10);
//
//            });
//        }
    }
    public function test(){
        $this->dispatch(new SendRminderEmail());
    }

}
