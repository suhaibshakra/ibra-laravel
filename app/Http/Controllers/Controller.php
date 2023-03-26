<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function count_users()
    {
        $user = [
            [
                "id" => 1
            ],
            [
                "id" => 2
            ]
        ];
        if (count($user) == config('app.count_of_users')) {
            return "error";
        }

        if (count($user) == config('app.count_of_users')) {
            return "error";
        }

        if (count($user) == config('app.count_of_users')) {
            return "error";
        }
        if (count($user) == config('app.count_of_users')) {
            return "error";
        }
    }
}
