<?php

namespace App\Http\Controllers;

use App\Models\BeritaUtama;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = BeritaUtama::all();
        $data1 = BeritaUtama::orderBy('title', 'asc')->take(1)->get();
        $data5 = BeritaUtama::orderBy('title', 'asc')->take(5)->get();

        if (!$datas) abort(404);
        return view('halaman.halaman1', compact('datas', 'data1', 'data5'));
    }

    public function hal2()
    {
        $data = BeritaUtama::all();

        if (!$data) abort(404);
        return view('halaman.halaman2', compact('data'));
    }

    public function hal3()
    {
        $data = BeritaUtama::all();
        $data3 = BeritaUtama::orderBy('title', 'asc')->take(3)->get();
        $data6 = BeritaUtama::orderBy('title', 'asc')->take(6)->get();

        if (!$data) abort(404);
        return view('halaman.halaman3', compact('data', 'data3', 'data6'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
