<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'stock' => 'required',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view(
            'items.edit',
            ['item' => Item::findOrFail($id)]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'stock' => 'required',
        ]);

        $item->update($request->all());
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }

    public function editStock()
    {
        $items = Item::all();
        return view('items/editStock', compact('items'));
    }

    public function updateStock(Request $request)
    {
        $request->validate([
            'in_out' => 'required',
            'number'  => 'required',
        ]);

        $article = Item::findOrFail($request->item_id);
        if ($request->in_out == 'in') {
            $article->stock = $article->stock + $request->number;
        } elseif ($request->in_out == 'out') {
            $article->stock = $article->stock - $request->number;
        };

        $article->update(['stock' => $article->stock]);

        return redirect()->route('items.index');
    }
}
