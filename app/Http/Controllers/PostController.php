<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request){
    //  query builder
    //     $query = DB::table('pertanyaan')->insert([
    //         "judul" => $request["judul"],
    //         "isi" => $request["isi"],
    //         "tanggal_dibuat" => $request ["tanggal_dibuat"],
    //         "tanggal_diperbaharui" => $request["tanggal_diperbaharui"]

    // ]);


// model eloquent
    // $post = new Post;
    // $post->judul = $request["judul"];
    // $post->isi = $request["isi"];
    // $post->tanggal_dibuat = $request["tanggal_dibuat"];
    // $post->tanggal_diperbaharui =$request["tanggal_diperbaharui"];
    // $post->save();
        $post=Post::create([
            "judul" => $request["judul"],
            "isi"=> $request["isi"],
            "tanggal_dibuat" => $request["tanggal_dibuat"],
            "tanggal_diperbaharui" =>$request["tanggal_diperbaharui"]
        ]);
    return redirect('/posts')->with('success','Postingan Berhasil Disimpan');
    }

    public function index(){
        // $posts = DB::table('pertanyaan')->get();
        // dd($posts);

        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show($id){
        // $post = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($post);
        $post= Post::find($id);
        return view('show',compact('post'));
    }

        public function edit($id){
            // $post = DB::table('pertanyaan')->where('id', $id)->first();
            $post= Post::find($id);
            return view('edit', compact('post'));
    }


    public function update($id, Request $request){
        // $query = DB::table('pertanyaan')
        //         ->where('id', $id)
        //         ->update([
        //             'judul' =>$request['judul'],
        //             'isi' =>$request['isi'],
        //             'tanggal_dibuat'=> $request['tanggal_dibuat'],
        //             'tanggal_diperbaharui'=> $request['tanggal_diperbaharui']
        //         ]);

        $update = Post::where('id', $id)->update([
                'judul' =>$request['judul'],
                'isi' =>$request['isi'],
                'tanggal_dibuat'=> $request['tanggal_dibuat'],
                'tanggal_diperbaharui'=> $request['tanggal_diperbaharui']
        ]);
                return redirect('/posts')->with('success','Berhasil Update post');
    }
    public function destroy($id){
        // $query = DB::table('pertanyaan')->where('id',$id)->delete();

        Post::destroy($id);
        return redirect('/posts')->with('success','Post Berhasil di Delete!');
    }
    
}
