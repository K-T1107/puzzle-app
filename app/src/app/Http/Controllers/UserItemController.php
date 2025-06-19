<?php

namespace App\Http\Controllers;

use App\Models\UserItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserItemController extends Controller
{
    public function userItemList(): View
    {
        $userItems = UserItem::all();
        return view('auth.user_item', compact('userItems'));
    }
}
