<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Membership</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah data Baru</h2><br/>
      <form method="post" action="{{action('MembershipController@update', $user->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">nama:</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">email:</label>
              <input type="email" class="form-control" name="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="row">
        <input type="hidden" class="form-control" name="oldPassword" value="{{$user->password}}">
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <select name="membership">
                @foreach ($memberships as $membership)
                <option value="{{$membership->id}}" @if ($user->membershipId == $membership->id) selected @endif>{{$membership->membership}}</option>
                @endforeach
              </select>
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