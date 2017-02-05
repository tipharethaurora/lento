<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class APIModel
{
    public static function music($id)
    {
        return DB::table('lento')
                     ->where('id', $id)
                     ->first();
    }

    public static function musicRand()
    {
        return DB::table('lento')
                 ->inRandomOrder()
                 ->take(1)
                 ->first();
    }

    public static function musicList($row)
    {
        return DB::table('lento')
                     ->inRandomOrder()
                     ->take($row)
                     ->get();
    }

    public static function count()
    {
        return DB::table('lento')->count();
    }

    public static function search($name)
    {
        return DB::table('lento')
                     ->where('name', 'like', '%' . $name . '%')
                     ->orderBy('id', 'desc')
                     ->get();
    }
}