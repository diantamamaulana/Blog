<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data</h2><br/>
      <form method="post" action="{{action('ArtikelController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Foto</label>
            <input type="file" class="form-control" name="foto" value="{{$artikel->foto}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Judul</label>
              <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Description">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{$artikel->deskripsi}}">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Pembuat</label>
                <select name="pembuat">
                  <option value="Tommy Piza" @if($artikel->pembuat=="Tommy Piza") selected @endif>Tommy Piza</option>
                  <option value="Joko Handoko" @if($artikel->pembuat=="Joko Handoko") selected @endif>Joko Handoko</option>
                  <option value="Rini Haryati" @if($artikel->pembuat=="Rini Haryati") selected @endif>Rini Haryati</option>  
                  <option value="Andika Mahmudin" @if($artikel->pembuat=="Andika Mahmudin") selected @endif>Andika Mahmudin</option>  
                </select>
            </div>
        </div>
        <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="Qty">Kategori</label>
                  <input type="text" class="form-control" name="kategori" value="{{$artikel->kategori}}">
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