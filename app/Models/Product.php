<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public static function search(string $search)
    {
        return match(is_numeric($search)){
            true => self::searchById((int) $search),
            false => self::searchByString($search)
        };
    }

    public static function searchByString(string $search)
    {
        return self::where('description', 'like', '%'.$search.'%')
        ->orWhere('brand','like', '%'.$search.'%')
        ->when(isPalindrome($search), function($query){
            $query->select(
                '*', 
                DB::raw('true as has_discount'),
                DB::raw('ROUND(price - (price/2), 2) as half_price')
            );
        })->get();
    }

    public static function searchById(int $id)
    {

    }

}
