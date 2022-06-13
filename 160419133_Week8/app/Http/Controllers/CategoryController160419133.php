<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController160419133 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = Category::All();
        return view('category.index', compact('listdata'));
    }

    public function kategoritermahal()
    {
        // $listdata = DB::table('category')
        // ->select('category.nama', DB::raw('SUM(medicine.harga)'), 'stok')
        // ->join('medicine','medicine.category_id','=','category.id')
        // ->groupBy('category.nama')
        // ->orderBy('sum(medicine.harga)', 'DESC')    
        // ->get();
        $listdata = DB::table('category')
        ->select('category.id','category.nama', DB::raw("Sum(medicine.harga) as harga"))
        ->join('medicine','category.id','=','medicine.category_id')
        ->groupBy('category.id','category.nama')
        ->orderBy('harga','desc')
        ->get();
        return view('category.kategoritermahal', compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.insert');        
    }

    public function createmodal()
    {
        return view('category.insert');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->nama = $request->get('name');
        $data->save();
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
        $data = $category;
        return view('category.edit', compact('data'));
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
        $category->nama = $request->get('name');
        $category->save();

        return redirect()->route('category.index')->with('status', 'Category data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try
        {
            $category->delete();
            return redirect()->route('category.index')->with('status', 'Data Category berhasil dihapus');
        }
        catch(\PDOException $e)
        {
            $msg = "Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('category.index')->with('error', $msg);
        }
    }
}
