<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Menu;
use App\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function list(Request $request){
        $menus = Menu::all();
        return view('employee.order')->with('menus', $menus);
    }

    public function order(){
        return view('employee.items');
    }

    public function orderPlaced(Request $request){

        

        $user_id = auth()->user()->id;
        $order = Order::where('user_id',$user_id)->first();
        $menu_id = auth()->user()->id;
        $order = Order::where('menu_id',$menu_id)->first();

        $order = new Order;
        $order->user_id = $user_id;
        $order->menu_id = $menu_id;
        $order->description = $request->input('description');
        $order->quantity = $request->input('quantity');
        $order->save();
        return view('thankyou');
    }

    public function myorder(Request $request){
        $user_id = auth()->user()->id;
        $orders = Order::where('user_id',$user_id);
        return view('employee.myorder')->with('orders',$orders);
    }

   
}

