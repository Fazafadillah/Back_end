<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use PDOException;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Menu::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        try {
            $data = Menu::create($request->all());
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, menu $menu)
    {
        try {
            $data = $menu->update($request->all());
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu $menu)
    {
        try {
            $data = $menu->delete();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
}
