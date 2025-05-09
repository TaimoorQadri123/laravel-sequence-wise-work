<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
   
    <div class="container p-5">
    <form action="" method="post">
   @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input id="" value="{{$studentRecord['name']}}" class="form-control" type="text" name="name" plaaceholder="" aria-describedy="helpId">
        @error('name')
        <small id="helpId" class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input id="" value="{{$studentRecord['email']}}" class="form-control" type="text" name="email" plaaceholder="" aria-describedy="helpId">
        @error('email')
        <small id="helpId" class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input id="" value="{{$studentRecord['password']}}" class="form-control" type="text" name="password" plaaceholder="" aria-describedy="helpId">
        @error('password')
        <small id="helpId" class="text-danger">{{$message}}</small>
        @enderror
    </div>
      <button class="btn btn-info">Update</button>
    </form>
  </div>
  


    </body>
</html>
