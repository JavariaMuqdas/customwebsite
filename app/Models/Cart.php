<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    //
    public $table = 'cart';

    public static function cartItem()
    {
        if (Session::has('user')) {
            $userId = Session::get('user')['id'];
            return self::where('user_id', $userId)->sum('quantity');
        }

        return 0;
    }
}
