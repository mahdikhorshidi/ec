<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $date = null;
        if(strpos($request->path(), 'today')) $date = jdate()->format('Y/m/d');
        if (isset($request->date)) $date = $request->date;
        $user = \Auth::id();
        return view('shopping.index', compact('date','user'));
    }
    public function create()
    {
        return view('shopping.create', array('cart' => \Cart::content(), 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
    public function store(Request $request)
    {
        if(\Cart::count() > 0){
            $order = new Order();
            $user = \Auth::id();
            if (isset($request->user_id))
                $user = $request->user_id;
            $request->request->add(['user_id' => $user]);
            $order->fill($request->all())->save();
            foreach(\Cart::content() as $item){
                $orderItem = new Order_item();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $item->id;
                $orderItem->qty_request = $item->qty;
                $orderItem->price = $item->price;
                $orderItem->save();
            }
            \Cart::destroy();
            return redirect('/shop/order');
        }else{
            return redirect('/shop/order');
        }
    }
    public function show(Order $order)
    {
        if (\Auth::id()!=$order->user_id){
            \Toastr::warning('شما فقط به سفارشات خودتان دسترسی دارید.');
            return redirect()->back();
        }
        return view('order.show',
            ['order' => $order]);
    }
    public function cart(Request $request,Product $product) {
        //update/ add new item to cart
        if (isset($request->destroy)) {
            \Cart::destroy();
            return redirect()->back();
        }
        if (isset($product)
            && !isset($request->increment)
            && !isset($request->decrease)
            && !isset($request->update)
            && !isset($request->delete)) {
            \Cart::add(['id' => $product->id,'name' => $product->name,'qty' => '1','price' => $product->lastprice(), 'options' => ['avatar' => $product->avatar]]);
            \Toastr::success('محصول اضافه شد.');
        }

        //increment the quantity
        if (isset($request->rowId) && isset($request->increment)) {
            $item = \Cart::get($request->rowId);
            \Cart::update($request->rowId, $item->qty + 1);
            \Toastr::success('محصول یک واحد اضافه گردید.');
            return redirect()->back();
        }

        //decrease the quantity
        if (isset($request->rowId) && isset($request->decrease)) {
            $item = \Cart::get($request->rowId);
            \Cart::update($request->rowId, $item->qty - 1);
            \Toastr::success('محصول یک واحد کاهش یافت.');
            return redirect()->back();
        }

        //decrease the quantity
        if (isset($request->rowId) && isset($request->update)) {
            \Cart::update($request->rowId, $request->qty);
            \Toastr::success('محصول ویرایش شد.');
            return redirect()->back();
        }
        //decrease the quantity
        if (isset($request->rowId) && isset($request->delete)) {
            \Cart::remove($request->rowId);
            \Toastr::success('محصول حذف شد.');
            return redirect()->back();
        }

        return redirect()->back();
        //return view('shopping.cart', array('cart' => \Cart::content(), 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
}
