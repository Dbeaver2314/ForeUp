<?php

namespace App\Http\Controllers;

use App\Models\FavoriteItem;
use App\Models\FavoriteList;
use App\Http\Requests\StoreFavoriteListRequest;
use App\Http\Requests\UpdateFavoriteListRequest;
use Illuminate\Http\Request;

class FavoriteListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $userId = $request->input("user_id");
        return FavoriteList::with('FavoriteItem')->where('user_id',"=",$userId)->get();
    }

    public function create(Request $request)
    {
        $data = json_decode($request->input('data'));

        if(FavoriteList::where('title',$data->title)->exists())
        {
            FavoriteList::where('title',$data->title)->delete();
        }

        $favoriteList =  new FavoriteList;
        $favoriteList->user_id = $data->user_id;
        $favoriteList->title = $data->title;
        $favoriteList->save();

        $list = FavoriteList::where('title',$data->title)->first();

        foreach ($data->name as $name) {
            $favoriteItem = new FavoriteItem;

            $favoriteItem->item_name = $name;
            $favoriteItem ->favorite_list_id = $list->id;
            $favoriteItem->save();
        }

        return($this->show($list->id));

    }

    public function show($id)
    {

        return FavoriteList::with('FavoriteItem')->where('id',$id)->get();
    }


}
