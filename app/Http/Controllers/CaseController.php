<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index($case)
    {
        return view('case', ["case"=>$case]);
    }

    public function open($case)
    {
        $case_items = [
            ["color"=>1, "image"=>"https://cdn.csgo.com/item/AK-47%20%7C%20Fuel%20Injector%20(Field-Tested)/300.png"],
            ["color"=>2, "image"=>"https://cdn.csgo.com/item/AWP%20%7C%20BOOM%20(Minimal%20Wear)/300.png"],
            ["color"=>3, "image"=>"https://cdn.csgo.com/item/AK-47 | Frontside Misty (Battle-Scarred)/300.png"],
            ["color"=>4, "image"=>"https://cdn.csgo.com/item/M4A1-S | Hyper Beast (Well-Worn)/300.png"],
            ["color"=>5, "image"=>"https://cdn.csgo.com/item/AWP | Worm God (Minimal Wear)/300.png"],
            ["color"=>6, "image"=>"https://cdn.csgo.com/item/USP-S | Cyrex (Minimal Wear)/300.png"],
            ["color"=>7, "image"=>"https://cdn.csgo.com/item/AUG | Chameleon (Field-Tested)/300.png"],
        ];
        for($i=0;$i<99;$i++) {
            $items[] = $case_items[array_rand($case_items)];
        }

        return ["result"=> true, "items" => $items, "win_slot"=>mt_rand(50,99)];
    }
}
