<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
     
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => $request ["tanggal_dibuat"],
            "tanggal_diperbaharui" => $request["tanggal_diperbaharui"]

    ]);

    return redirect('/posts')->with('success','Postingan Berhasil Disimpan');
    }

    public function index(){
        $posts = DB::table('pertanyaan')->get();
        // dd($posts);
        return view('index', compact('posts'));
    }

    public function show($id){
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($post);
        return view('show',compact('post'));
    }
        public function edit($id){
            $post = DB::table('pertanyaan')->where('id', $id)->first();
            return view('edit', compact('post'));
    }
    public function update($id, Request $request){
        $query = DB::table('pertanyaan')
                ->where('id', $id)
                ->update([
                    'judul' =>$request['judul'],
                    'isi' =>$request['isi'],
                    'tanggal_dibuat'=> $request['tanggal_dibuat'],
                    'tanggal_diperbaharui'=> $request['tanggal_diperbaharui']
                ]);
                return redirect('/posts')->with('success','Berhasil Update post');
    }
    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id',$id)->delete();
        return redirect('/posts')->with('success','Post Berhasil di Delete!');
    }
    
}
