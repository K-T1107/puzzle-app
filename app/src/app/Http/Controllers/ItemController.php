<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'kinds' => ['required'],
            'effect' => ['required'],
            'explanation' => ['required'],
        ]);

        Item::create($validated);

        return redirect()->route('items.complete')->with('item_name', $validated['name']);
    }

    public function complete()
    {
        return view('auth.complete');
    }

    public function itemList()
    {
        $items = Item::all();
        return view('auth.items', compact('items'));
    }
}
