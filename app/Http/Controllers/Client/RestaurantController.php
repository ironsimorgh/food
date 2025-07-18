<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Menu;
use App\Models\Product;
use App\Models\City;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;
use App\Models\Gllery;

class RestaurantController extends Controller
{
    public function AllMenu(){
        $id = Auth::guard('client')->id();
        $menu = Menu::where('id',$id)->orderBy('id','desc')->get();
        return view('client.backend.menu.all_menu',compact('menu'));
    }
    //end method
}
