<?php


namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Cart
{
    public static function add($product_id, $qty){
        $cart = [];
        $product = Product::find($product_id);
        $set = false;
        $index = 0;

        if (Session::has('cart')){
            $cart =  Session::get('cart');
            foreach ($cart['items'] as $key => $item) {
                if ($item ['id'] == $product_id) {
                    $index = $key;
                    $set = true;
                }
            }
            ///Cart Exists But Item is NEW
            if(!$set){
                $cart['amount'] += $qty * $product->price;
                $cart['qty'] += $qty ;
                array_push($cart['items'],['id' => $product_id, 'qty' => $qty]);
            }
            else{
                if($qty < $cart['items'][$index]['qty']){
                    $cart['amount'] -= ($cart['items'][$index]['qty'] - $qty) * $product->price;
                    $cart['qty'] -= $cart['items'][$index]['qty'] - $qty;
                }else if ($qty > $cart['items'][$index]['qty']){
                    $cart['amount'] += ($qty - $cart['items'][$index]['qty']) * $product->price;
                    $cart['qty'] += $qty - $cart['items'][$index]['qty'];
                }
                $cart['items'][$index]['qty'] = $qty;
            }
        }

        else{
            $cart = [
                'qty' => $qty,
                'amount' => $product->price * $qty,
                'items' => [
                    ['id' => $product_id,
                        'qty' => $qty]
                ]
            ];
        }
        Session::put('cart',$cart);
        return true;
    }

    public static function increase($productId){
        if(!Session::has('cart')) return false;

        $cart =  Session::get('cart');
        $product = Product::find($productId);
        $index = 0;
            
        foreach ($cart['items'] as $key => $item) {
            if ($item ['id'] == $productId) {
                $index = $key;
            }
        }

        $cart['amount'] += $product->price;
        $cart['qty'] ++;
        $cart['items'][$index]['qty'] ++;
        if ($cart['items'][$index]['qty'] > $product->stock){
            return false;
        }

        Session::put('cart',$cart);
        return true;
    }
    
    public static function decrease($productId){
        if(!Session::has('cart')) return false;

        $cart =  Session::get('cart');
        $product = Product::find($productId);
        $index = 0;
            
        foreach ($cart['items'] as $key => $item) {
            if ($item ['id'] == $productId) {
                $index = $key;
            }
        }

        $cart['amount'] -= $product->price;
        $cart['qty'] --;
        $cart['items'][$index]['qty'] --;
       
        if($cart['items'][$index]['qty'] < 1) unset($cart['items'][$index]);

        if($cart['qty'] < 1){
            Session::forget('cart');
        } else {
            Session::put('cart',$cart);
        }
    }

    public static function remove($product_id){
        $cart =  Session::get('cart');
        $product = Product::find($product_id);
        $index = 0;
        foreach ($cart['items'] as $key => $item) {
            if ($item ['id'] == $product_id) {
                $index = $key;
                break;
            }
        }
        $cart['amount'] -= $product->price * $cart['items'][$index]['qty'];
        $cart['qty'] -= $cart['items'][$index]['qty'];
        unset($cart['items'][$index]);

        if($cart['qty'] < 1){
            Session::forget('cart');
        } else {
            Session::put('cart',$cart);
        }
    }

    public static function update($products){
        $cart = Session::get('cart');
        $totalamount = 0;
        $totalqty = 0;
        foreach($cart['items'] as $key =>  $item){

            $product = Product::find($item ['id']);

            $cart['items'][$key]['qty'] = $products[$item['id']];
            if ($cart['items'][$key]['qty'] > $product->stock){
                return redirect()->back()->with('msg', 'Item(s) out of stock');
            }
            $totalqty += $products[$item['id']];
            $totalamount += $products[$item['id']] * $product->price;
        }
        $cart['amount'] = $totalamount;
        $cart['qty'] = $totalqty;
        Session::put('cart',$cart);

        return;
    }

    public static function products(){
        $cart = Session::get('cart');
        $products = [];
        foreach ($cart['items'] as $item) {
            $product = Product::find($item['id']);
            $product['qty'] = $item['qty'];
            array_push($products,$product );
        }
        return $products;
    }

    public static function has($product_id){
        $cart =  Session::get('cart');
        foreach ($cart['items'] as $key => $item) {
            if ($item ['id'] == $product_id) {
                return true;
            }
        }
        return false;
    }

    public static function qty(){
        return Session::get('cart')['qty'];
    }
}