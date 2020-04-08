<?php

namespace App;


class Cart
{
    public $items = null;
    public $quantity = 0;
    public $totalQty = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }


    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item ];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $this->items[$id] = $storedItem;
    }

    
}
