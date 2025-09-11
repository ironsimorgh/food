<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Menu;
use App\Models\Gllery;
use App\Models\Wishlist;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function RestaurantDetails($id){
        $client = Client::find($id);
        $menus = Menu::where('client_id',$client->id)->get()->filter(function($menu){
            return $menu->products->isNotEmpty();
        });
        $gallerys = Gllery::where('client_id',$id)->get();
        return view('frontend.details_page',compact('client','menus','gallerys'));
    }
    //End Method

    public function AddWishList(Request $request, $id){
        if(Auth::check()){
            $exists = Wishlist::where('user_id',Auth::id())->where('client_id',$id)->first();
            if (!$exists) {
                Wishlist::insert([
                    'user_id'=>Auth::id(),
                    'client_id' => $id,
                    'created_at' => Carbon::now(),
                ]);
                return response()->json(['success' => 'Your Wishlist Add Successfully']);
            } else {
                return response()->json(['error' => 'This Procuct Has Already On Your Wishlist']);
            }
        }else{
            return response()->json(['error' => 'First Login Your Account']);
            
            
        }

    }
 //End Method


}
