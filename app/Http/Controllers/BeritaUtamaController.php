<?php

namespace App\Http\Controllers;

use App\Models\BeritaUtama;
use App\Models\BertamaImage;
use Illuminate\Http\Request;

class BeritaUtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bertamas = BeritaUtama::all();
        return view('admin.bertama.bertama', compact('bertamas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bertama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'thumb' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('thumb')) {
            $destinationPath = 'bertama_thumb/';
            $imageName = date('Ymd_His') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['thumb'] = $imageName;
        }

        BeritaUtama::create($input);

        return redirect('/bertama')->with('message', 'Data successfully added');
    }

    public function images(Request $request, $id) //hanya buat nampilin bkn crud
    {
        $bertama = BeritaUtama::find($id);
        if (!$bertama) abort(404);
        $images = $bertama->images;
        return view('admin.bertama.images', compact('bertama', 'images')); //jd yg dlm compact ini adalah variabel yg akan di bawa ke halaman images.blade
    }

    public function removeImg($id)
    {
        $image = BertamaImage::find($id);
        if (!$image) abort(404);
        unlink(public_path('bertama_image/' . $image->image));
        $image->delete();
        return back()->with('message', 'Image Removed');
    }

    /**
     * Display the specified resource.
     */
    public function show(BeritaUtama $beritaUtama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BeritaUtama $bertama) //parameter yg disini harus ngikutin route dari website
    {
        return view('admin.bertama.edit', compact('bertama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BeritaUtama $bertama)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        $input = $request->all();

        if ($thumb = $request->file('thumb')) {
            $destinationPath = 'bertama_thumb/';
            $thumbName = date('Ymd_His') . "." . $thumb->getClientOriginalExtension();
            $thumb->move($destinationPath, $thumbName);
            $input['thumb'] = $thumbName;
        } else {
            unset($input['thumb']);
        }

        $bertama->update($input);

        return redirect('/bertama')->with('message', 'Data successfully edited')->with('titlePage', 'Add Portfolio');
    }

    public function updateImg(Request $request, $id)
    {
        $imageEdit = BeritaUtama::find($id);
        if (!$imageEdit) abort(404);
        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = $imageEdit['title'] . "-" . date('Ymd_His') . "-" . rand(1, 1000) . "." . $image->getClientOriginalExtension();
                $destinationPath = 'bertama_image/';
                $image->move($destinationPath, $imageName);
                BertamaImage::create([
                    'berita_utama_id' => $imageEdit->id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('bertama.images', ['id' => $id])->with('message', 'Data successfully edited');
    }

    public function details($id)
    {
        $bertama = BeritaUtama::find($id);
        if (!$bertama) abort(404);
        $images = $bertama->images;
        return view('pages.detailsbertama', compact('bertama', 'images')); //jd yg dlm compact ini adalah variabel yg akan di bawa ke halaman detailsbertama.blade
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bertama = BeritaUtama::find($id);
        if (!$bertama) {
            abort(404);
        }

        //apus associated images
        foreach ($bertama->images as $image) {
            unlink(public_path('bertama_image/' . $image->image));
            $image->delete();
        }

        //apus thumb image
        unlink(public_path('bertama_thumb/' . $bertama->thumb));
        $bertama->delete();

        return redirect('/bertama')->with('message', 'Data and associated images deleted');
    }
}
