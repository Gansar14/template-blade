@extends('master')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(session('success'))
              <div class="alert alert-success">
              {{session('success')}}
              </div>
              @endif
              <a class="btn btn-primary mb-3" href="/posts/create">Create New Post</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi Pertanyaan</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diperbaharui</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($posts as $key =>$post)
                   <tr>
                   <td>{{$key +1}}</td>
                   <td>{{$post ->judul}}</td>
                   <td>{{$post->isi}}</td>
                   <td>{{$post->tanggal_dibuat}}</td>
                   <td>{{$post->tanggal_diperbaharui}}</td>
                   <td style="display:flex;">
                   <a href="/posts/{{$post->id}}" class="btn btn-info btn-sm">show</a>
                   <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-sm">edit</a>
                   <form method="POST" action="/posts/{{$post->id}}" >
                   @csrf
                   @method('DELETE')
                   <input type="submit" value="delete" class="btn btn-danger btn-sm">
                   </form>
                   </td>
                   </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- 

              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
               -->
            </div>
@endsection