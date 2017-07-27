<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonMessage($type,$message,$options=[]){
        if(empty($type) || empty($message)){
            return false;
        }

        $notification['type'] = $type;
        $notification['message'] = $message;

        if(isset($options['box']) and !empty($options['box'])){
            $notification['box'] = $options['box'];
        }else{
            switch ($notification['type']){
                case 'FAIL':
                    $notification['box'] = 'error';
                    break;
                case 'OK':
                    $notification['box'] = 'success';
                    break;
            }
        }

        return json_encode($notification);
    }
}
