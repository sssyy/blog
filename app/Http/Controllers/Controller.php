<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function idEncode($id)
    {
        $key = env('ID_ENC');

        $idStr = (string) $id;
        return base64_encode($key . $idStr);
    }


    public function idDecode($idStr)
    {
        $tempStr = base64_decode($idStr);
        return substr($tempStr,6,strlen($tempStr)-6);
    }
}
