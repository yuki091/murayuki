<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;
   
class ClothController extends Controller
{   
 
    public function home()
    {
        $clothes = Cloth::all();
        return view('home',['clothes' => $clothes]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $post_data = $request -> excert('imagefile');
        $imagefile = $request -> file('imagefile');

        $temp_path = $imagefile->store('public/temp');

        $category_name = $post_data['category_name'];
        $brand_name = $post_data['brand_name'];
        $memo = $post_data['memo'];

        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path,
            'category_name' => $category_name,
            'brand_name' => $brand_name,
            'memo' => $memo
        );
        $request->put('data',$data);
        return view('home',compact('data'));


        // $cloth = new Cloth;
        // $cloth -> category_name = $request -> category_name;
        // $cloth -> brand_name = $request -> brand_name;
        // $cloth -> memo = $request -> memo;
        // $cloth -> save();

        // Cloth::create($request->all());
        // return redirect('home');

    }
    public function show($id)
    {
        $cloth = Cloth::find($id);
        return view('show',compact('cloth'));
    }
    public function edit($id)
    {
        $cloth = Cloth::find($id);
        return view('edit',compact('cloth'));
    }
    public function update(Request $request, $id)
    {
        $update = [
            'category' => $request -> category,
            'brand' =>$request -> brand,
            'memo' =>$request -> memo
        ];
        Cloth::where('id', $id) ->update($update);
        return back()->with('success', '編集完了しました');
    }
    public function destroy($id)
    {
        Cloth::where('id', $id)->delete();
        return redirect()->route('home')->with('success', '削除しました');
    }
}