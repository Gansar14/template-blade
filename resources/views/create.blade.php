@extends ('master')
 @section('content')


        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/posts">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">judul</label>
                    <input type="text" class="form-control" id="judul" name="judul"placeholder="tulis judul">
                  
                  </div>
                  <div class="form-group">
                    <label for="isi">isi pertanyaan</label>
                    <input type="text" class="form-control" id= "isi" name="isi" placeholder="tulis isi">
                    
                  </div>
                  <div class="form-group">
                    <label for="tanggal_dibuat">tanggal dibuat</label>
                    <input type="date" class="form-control" id ="tanggal_dibuat" name="tanggal_dibuat" placeholder="tanggal di Buat">
                   
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diperbaharui">tanggal diupdate</label>
                    <input type="date" class="form-control"id = "tanggal_diperbaharui" name="tanggal_diperbaharui" placeholder="tanggal dipupdate">
                
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">buat pertanyaan</button>
                </div>
              </form>
            </div>
       
 @endsection