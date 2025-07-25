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
        $menu = Menu::latest()->get();
        return view('client.backend.menu.all_menu',compact('menu'));
    }
    //end method
    public function AddMenu(){
        
        return view('client.backend.menu.add_menu');
    }
    //end method

    public function StoreMenu(Request $request){
        if($request->file('image')){
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300,300)->save(public_path('upload/menu/'.$name_gen));
            $save_url = 'upload/menu/'.$name_gen;

            Menu::create([
                'menu_name' => $request->menu_name,'image' => $save_url,
            ]);
        }
        $notification = array(
            'message' => 'Menu Insert Successfully',
            'alert-type'=> 'success'
        );
        
        return redirect()->route('all.menu')->with($notification);
    }

    //end method

    public function EditMenu($id) {
        $menu = Menu::find($id);
        return view('client.backend.menu.edit_menu',compact('menu'));

    }

    //end method 

    public function UpdateMenu(Request $request){

        $menu_id = $request->id;

        if($request->file('image')){
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300,300)->save(public_path('upload/menu/'.$name_gen));
            $save_url = 'upload/menu/'.$name_gen;

            Menu::find( $menu_id)->update([
                'menu_name' => $request->menu_name,'image' => $save_url,
            ]);
            $notification = array(
            'message' => 'Menu Updated Successfully',
            'alert-type'=> 'success'
        );
        
        return redirect()->route('all.menu')->with($notification);

        }else{

            Menu::find( $menu_id)->update([
                'menu_name' => $request->menu_name,
            ]);
            $notification = array(
            'message' => 'Menu Updated Successfully',
            'alert-type'=> 'success'
        );
        
        return redirect()->route('all.menu')->with($notification);
            
    }
        }

    //end method 

    public function DeleteMenu($id) {
        $item = Menu::find($id);
        $img = $item->image;
        unlink($img);

        Menu::find($id)->delete();

        $notification = array(
            'message' => 'Menu Delete Successfully',
            'alert-type'=> 'success'
        );
        
        return redirect()->back()->with($notification);
        

    }
    //end method 

    /////Product method start
    public function AllProduct(){
        $product = Product::latest()->get();
        return view('client.backend.product.all_product',compact('product'));
    }
    //end method


    public function AddProduct(){
        $category = Category::latest()->get();
        $city = City::latest()->get();
        $menu = Menu::latest()->get();
        return view('client.backend.product.add_product',compact('category' , 'city','menu'));
    }
    //end method


}
