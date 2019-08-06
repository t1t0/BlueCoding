<?php

namespace App\Http\Controllers;

use App\UserFavorite;
use Illuminate\Http\Request;
use Auth;
use Giphy;

class FavoritesController extends Controller
{

    public function favoritelist(Favorite $favorite)
    {
        
    }
    
    public function addFavorite(Request $request)
    {
        $user = Auth::user();
        $gifid = $request->id;
        $attr = [
            'user_id' => $user->id,
            'gif_id' => $gifid
        ];
        UserFavorite::create($attr);
        return ['Favorite Added Succesfully'];
    }
}
