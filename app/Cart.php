<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
  public $items = null;
  public $totalQty = 0;
  public $totalPrice =0;

    public function __construct($oldcart)
    {
        if($oldcart){
            $this->items = $oldcart->items;
            $this->totalQty = $oldcart->totalQty;
            $this->totalPrice = $oldcart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storeditem = ['qty'=>0 , 'price'=> $item->price , 'item' =>$item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeditem = $this->items[$id];
            }
        }
        $storeditem['qty']++;
        $storeditem['price'] = $item->price *  $storeditem['qty'];
        $this->items[$id] = $storeditem;
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }

  public function remove($item, $id)
  {
       $storeditem = ['qty'=>0 , 'price'=> $item->price , 'item' =>$item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeditem = $this->items[$id];
            }
        }

        $this->totalQty--;
        $this->totalPrice -= $item->price;

  }
}
