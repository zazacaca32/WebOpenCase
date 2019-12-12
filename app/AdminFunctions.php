<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use Carbon\Carbon;

class AdminFunctions extends Model
{
    public static function active_users() {
       $active = \App\User::orderBy('id', 'desc')->where([
           ['group', '!=', 'user'],
           ['id', '!=', 12],
       ])->get();
       return $active;
    }

    public static function verify_users() {
        $active = \App\User::orderBy('id', 'desc')->where([
            ['group', '=', 'user'],
            ['id', '!=', 12],
        ])->get();
        return $active;
    }

    public static function user_edit($id) {
        $edit = \App\User::orderBy('id', 'asc')->where('id', '=', $id)->first();
        return $edit;
    }

    public static function edit_date($user) {
        return Carbon::parse($user['timer'])->format('Y-m-d\TH:i');
    }

    public static function user_package($package) {
        if ($package == "lite") {
            $timer = Carbon::now()->addDays(11);
        }
        else if ($package == "standard") {
            $timer = Carbon::now()->addDays(21);
        }
        else if ($package == "pro") {
            $timer = Carbon::now()->addDays(31);
        }
        else if ($package == "user") {
            $timer = Carbon::now();
        }

        return $timer;
    }

    public static function package($active) {
        $all_package = [];
        foreach($active as $key => $actives) {
            if ($active[$key]['group'] == "lite") {
                $package = "/img/box_lite.png";
            }
            else if ($active[$key]['group'] == "standard") {
                $package = "/img/box_stan.png";
            }
            else if ($active[$key]['group'] == "pro") {
                $package = "/img/box_pro.png";
            }
            array_push($all_package, $package);
        }

        return $all_package;
    }

    public static function timer($active)
    {
        $all_timers = [];
        foreach($active as $key => $actives) {
            $seconds = strtotime($active[$key]['timer']) - time();

            $days = floor($seconds / 86400);
            $seconds %= 86400;

            $hours = floor($seconds / 3600);
            $seconds %= 3600;

            $minutes = floor($seconds / 60);
            $seconds %= 60;

            if ($days < 0) {
                $days = 0;
                $hours = 0;
                $minutes = 0;
            }

            $info = "<span>".$days."Д</span><span>".$hours."Ч</span><span>".$minutes."М</span>";

            array_push($all_timers, $info);
        }

        return $all_timers;
    }
}
