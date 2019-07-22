<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ["status"];
    
    //
    public static function findOrCreateBySessionID($shopping_cart_id)
    {
        if($shopping_cart_id)
        {
            // Busca el carrito De compras con la sesión Generada cuando ingreso al sitio.
            return ShoppingCart::findBySession($shopping_cart_id);
        }
        else
        {
            // Crea un Carrito de compra...
            return ShoppingCart::createWithoutSession();
        }
    }

    public static function findBySession($shopping_cart_id)
    {
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession()
    {
        $shopping_cart = new ShoppingCart;

        $shopping_cart->status = "imcompleted";

        $shopping_cart->save();

        return $shopping_cart;
    }
}
