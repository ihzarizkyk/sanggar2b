<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
use File;

class GalleryController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::with("category")->get();
        return view("dashboard.gallery.index",compact("gallery"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view("dashboard.gallery.create",compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:gallery,name",
            "photo" => "mimes:jpg,png,pdf"]);

        $gallery = new Gallery;
        $gallery->name = $request->name;
        $gallery->photo = $request->file('photo')->store('photos');
        $gallery->category_id = $request->category;
        $gallery->save();

        return redirect("/dashboard/gallery");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $category = Category::all();
        return view("dashboard.gallery.edit",compact("gallery","category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       $request->validate([
        "name" => "required",
        "category" => "required"]);

       $gallery = Gallery::find($request->id);    
       if($request->file('photo') == ""){
            $gallery->update([
                "name" => $request->name,
                "category_id" => $request->category]);
        }
        else{
            File::delete($gallery->photo);
            $photo = $request->file('photo')->store("photos");

            $gallery->update([
                "photo" => $photo,
                "name" => $request->name,
                "category_id" => $request->category]);
             }


        return redirect("/dashboard/gallery");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        File::delete($gallery->photo);
        $gallery->delete();

        return back();
    }
}
