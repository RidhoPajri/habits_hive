<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AgenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agen = Agen::orderBy('id', 'desc')->get();
        return view('agen.index', compact('agen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agen = new Agen;
        $agen->nama_agen = $request->nama_agen;
        $agen->alamat = $request->alamat;
        $agen->image = $request->image;

        //upload image
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/agen', $name);
            $agen->image = $name;

        }
        $agen->save();
        return redirect()->route('agen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function show(Agen $agen)
    {
        return view('agen.show', compact('agen'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function edit(Agen $agen)
    {
        return view('agen.edit', compact('agen'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agen = Agen::findOrFail($id);
        $agen->nama_agen = $request->nama_agen;
        $agen->alamat = $request->alamat;

        if ($request->hasFile('image')) {
        $agen->deleteImage();
        $img = $request->file('image');
        $name = rand(1000, 9999) . $img->getClientOriginalName();
        $img->move('images/agen', $name);
        $agen->image = $name;

        }
        $agen->save();
        return redirect()->route('agen.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agen  $agen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agen = Agen::findOrFail($id);
        $agen->delete();
        return redirect()->route('agen.index');
    }
}
