<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 col-md-offset-4" style="margin-top:20px;">
          <h4 align="center">Edit Profile</h4>
          <hr>
          <form action="/edit" method="POST">
            @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif

            @csrf
            <div class="form-group">
              <input type="hidden" name="id" value={{ $data->id }}>
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" value={{ $data->first_name }}>
              <span class="text-danger">
                @error('fname')
                {{ $message }}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name" value={{ $data->last_name }}>
              <span class="text-danger">
                @error('lname')
                {{ $message }}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value={{ $data->email }}>
              <span class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value={{ $data->password }}>
              <span class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
              </span>
            </div>

            <br>

            <div class="form-group">
              <button class="btn btn-block  btn-primary" type="submit">Update</button>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>