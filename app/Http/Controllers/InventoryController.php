<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $userId = auth()->user()->id;
        $itemId = $request->id;

        $itemCount = Inventory::where('user_id', $userId)
            ->where('user_id', $userId)
            ->count();

        if ($itemCount < 1) {
            Inventory::create([
                'user_id' => $userId,
                'items_id' => $itemId
            ]);
        }

        return back();
    }
}
