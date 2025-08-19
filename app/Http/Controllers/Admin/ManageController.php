<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Menu;
use App\Models\Product;
use App\Models\City;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;
use App\Models\Gllery;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Carbon as SupportCarbon;

class ManageController extends Controller
{
     public function AdminAllProduct(){
        $product = Product::orderBy('id','desc')->get();
        return view('admin.backend.product.all_product',compact('product'));
    }
    //end method
}
