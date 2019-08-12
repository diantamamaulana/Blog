<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Data Baru</h2><br/>
      <form method="post" action="{{url('artikels')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Foto</label>
            <input type="file" class="form-control" name="foto">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Judul</label>
              <input type="text" class="form-control" name="judul">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Deksripsi</label>
            <input type="text" class="form-control" name="deksripsi">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Pembuat</label>
                <select name="pembuat">
                  <option value="Tommy Piza">Tommy Piza</option>
                  <option value="Joko Handoko">Joko Handoko</option>
                  <option value="Rini Haryati">Rini Haryati</option>  
                  <option value="Andika Mahmudin">Andika Mahmudin</option>  
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" name="kategori">
            </div>
        </div>
        <div class="row"> 
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>