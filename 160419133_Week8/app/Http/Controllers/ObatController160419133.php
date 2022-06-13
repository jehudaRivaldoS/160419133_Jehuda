<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;
use DB;

class ObatController160419133 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = DB::table('medicine')
        ->select('medicine.id','medicine.name', 'medicine.stok', 'medicine.harga', 'category.nama')
        ->join('category','medicine.category_id','=','category.id')
        ->get();
        return view('obat.index', compact('listdata'));
    }

    public function obatbatuk()
    {
        $listdata = DB::table('medicine')
        ->select('medicine.id','medicine.name', 'medicine.stok', 'medicine.harga', 'category.nama')
        ->join('category','medicine.category_id','=','category.id')
        ->where('category.nama', '=', 'Batuk')
        ->get();
        return view('obat.obatbatuk', compact('listdata'));
    }

    public function stokterbanyak()
    {
        $listdata = DB::table('medicine')
        ->select('name', 'harga', 'stok')
        ->orderBy('stok', 'DESC')
        ->limit(1)
        ->get();
        return view('obat.stokterbanyak', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
