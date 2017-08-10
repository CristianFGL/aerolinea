<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    //
    /*public function __constrict($carrito)
    {
        if($carrito){
            $this->productSize=$carrito->productSize;
            $this->qty=$carrito->qty;
            $this->price=$carrito->price;

        }
    }*/

    public static function productSize()
    {
    	return count(\Session::get('cart.orderProduct'));
    }

    public static function total(){
    	$total=0;
    	$shopping_cart=\Session::get('cart.orderProduct');
    	foreach ($shopping_cart as $aerolinea) {
    		$total+=$aerolinea->precio*$aerolinea->qty;
    	}
    	return $total;
    }
}
