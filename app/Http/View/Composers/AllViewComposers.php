<?php

namespace App\Http\View\Composers;

use App\Models\banner;
use App\Models\menu;
use App\Models\MenuCat;
use App\Models\product;
use App\Models\Promotion;
use App\Models\rating;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AllViewComposers
{

    protected $users;
    public function __construct()
    {

    }

    public function compose(View $view){


        $data = [

            'menus' =>menu::where('name','!=','Home')->get(),
            'home' =>menu::where('name','home')->take(1)->get(),
            
        ];



        $view->with($data);
    }


}


?>
