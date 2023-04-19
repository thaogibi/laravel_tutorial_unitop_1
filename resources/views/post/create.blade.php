<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Add new post</h1>
    @if($errors->any())
      <div class="alert alert-danger">
        Oops! something went wrong!
        {{-- <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul> --}}
      </div>
    @endif
    {!! Form::open(['url' => 'post/store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{-- <input type="text" class="form-control" name="title" placeholder="Title..."> --}}
        {!! Form::text('title', '', ['class' => 'form-control', 'name' => 'title', 'placeholder' => 'Title...']) !!}
        @error('title')
          <small class="form-text text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        {{-- <textarea name="content" class="form-control" placeholder="Content..." id="" cols="30" rows="10"></textarea> --}}
        {!! Form::textarea('content', '', ['class' => 'form-control', 'name' => 'content', 'placeholder' => 'Content...', 'id' => '', 'cols' => '30', 'rows' => '10']) !!}
        @error('content')
          <small class="form-text text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        {{-- <input type="submit" name="sm-add" value="Add new"> --}}
        {!! Form::submit('Add new',  ['name' => 'sm-add', 'value' => 'Add new', 'class' => 'btn btn-dark']) !!}
      </div>
    {!! Form::close() !!}
    <form action="post/add" method="POST">
      
    </form>
  </div>
</body>
</html>