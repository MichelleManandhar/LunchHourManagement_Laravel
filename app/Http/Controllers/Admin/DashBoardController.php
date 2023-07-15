<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Menu;
use App\Order;
use App\Models\Chefs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users', $users);
    }

    public function registeredit(Request $request, $id){
        $users= User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status', 'Your data is updated.');
    }

    public function registerdelete($id){
        $users= User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status', 'Your data is deleted.');
    }

    public function addchef(Request $request){
        $newchef = new Chefs;
        $newchef->name = $request->input('name');
        $newchef->usertype= $request->input('usertype');
        $newchef->email= $request->input('email');
        $newchef->password= $request->input('password');
        $newchef->save();
        return redirect('/role-register')->with('status', 'New Chef added');

    }
    public function menuhistory(){
        $menus = Menu::all();
        return view('admin.menu-history')->with('menus', $menus);
    }
    public function orderhistory(){
        $orders = Order::all();
        return view('admin.order-history')->with('orders', $orders);
    }

}

