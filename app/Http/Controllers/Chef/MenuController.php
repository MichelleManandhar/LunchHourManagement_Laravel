<?php

namespace App\Http\Controllers\Chef;

use Illuminate\Http\Request;
use App\Menu;
use App\Order;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function store(Request $request){
        $menus = new Menu;
        $menus->dish = $request->input('dish');
        $menus->category = $request->input('category');
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . "." . $extension;
            $file->move('uploads/menu/', $filename);
            $menus->image = $filename;
        }else{
            return $request;
            $menus->image = '';
        }
        $menus->save();
        // return view('chef.menu')->with('menus', $menus);
        return redirect('/menu')->with('status', 'The food is added to todays menu.');
    }
    
    public function view(Request $request){
        $menus = Menu::all();
        return view('chef.todaymenu')->with('menus', $menus);
    }

    public function fooddelete($id){
        $menus= Menu::findOrFail($id);
        $menus->delete();
        return redirect('/foods')->with('status', 'The selected food is deleted.');
    }

    public function orderemployee(Request $request) {
        $orders = Order::All();
        return view('chef.todayorder')->with('orders', $orders);
    }

    public function ordercomplete($id){
        $orders = Order::findOrFail($id);
        $orders->delete();
        return redirect('chef.orderemployee')->with('status','The Order is completed');
    }
}

