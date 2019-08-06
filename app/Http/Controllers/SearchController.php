<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserSearchHistory;
use Giphy;

class SearchController extends Controller
{
    public function results(Request $request){
        $lim = 50;
        $search = $request->search;
        if($request->page){
            $page = $request->page;
        }else{
            $page = 1;
        }
        $off = $page * $lim;
        if($search != ''){
            if (Auth::check()) {
                $user = Auth::user();
                $attr = [
                    'user_id' => $user->id,
                    'search' => $search
                ];
                UserSearchHistory::create($attr);
            }
            $giphys = Giphy::search($search, $limit=$lim, $offset=$off);
        }else{
            $giphys = Giphy::trending($limit=50);
        }
        $total = ceil(($giphys->pagination->total_count)/50);
        //dd($giphys);
        return view('results', compact('giphys', 'total', 'lim', 'search', 'page'));
    }
}
