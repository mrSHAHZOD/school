<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){

        $orders = DB::table('orders')->latest()->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function show($id){

        $order = DB::table('orders')->where('id', $id)->first();

        if($order->status == 0)
            DB::table('orders')->where('id', $id)->update(['status' => 1]);

        return view('admin.orders.show', compact('order'));
    }

    public function destroy($id){
        DB::table('orders')->where('id', $id)->delete();
        return redirect()->route('admin.orders.index')->with('danger', 'O`chirildi !');
    }
}
