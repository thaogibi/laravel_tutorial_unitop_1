<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Register</title>
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    {!! Form::open(['url' => 'user/store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('username', 'Username: ') !!}
        {!! Form::text('username', '', ['class' => 'form-control']) !!}
      </div>

      {{-- radio --}}
      <div class="form-group">
        {!! Form::label('gender', 'Gender: ') !!}
        <div class="form-check">
          {!! Form::radio('gender', 'male', 'checked', ['class' => 'form-check-input', 'id' => 'male']) !!}
          {!! Form::label('male', 'Male', ['class' => 'form-check-label']) !!}
        </div>
        
        <div class="form-check">
          {!! Form::radio('gender', 'female', '', ['class' => 'form-check-input', 'id' => 'female']) !!}
          {!! Form::label('female', 'Female', ['class' => 'form-check-label']) !!}
        </div>
      </div>

      {{-- date --}}
      <div class="form-group">
        {!! Form::label('birth', 'DOB: ') !!}
        {!! Form::date('birth', '', ['class' => 'form-control']) !!}
      </div>

      {{-- input email --}}
      <div class="form-group">
        {!! Form::label('email', 'Email: ') !!}
        {!! Form::email('email', '', ['class' => 'form-control']) !!}
      </div>

      {{-- input password --}}
      <div class="form-group">
        {!! Form::label('password', 'Password: ') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
      </div>
      
      {{-- textarea --}}
      <div class="form-group">
        {!! Form::label('intro', 'Intro: ') !!}
        {!! Form::textarea('intro', '',['class' => 'form-control', 'id' => 'intro']) !!}
      </div>

      {{-- select --}}
      <div class="form-group">
        {!! Form::label('city', 'City: ') !!}
        {!! Form::select(
          'city',
          [
            0 => 'Select city',
            1 => "Ha Noi",
            2 => "TP HCM",
            3 => "Phu Tho"
          ],
          '',
          ['class' => 'form-control']
        ) !!}
      </div>


      {{-- checkbox --}}
      <div class="form-group">
        {!! Form::label('skills', 'Skills: ') !!}
        <div class="form-check">
          {!! Form::checkbox('skill', 'html', '', ['class' => 'form-check-input', 'id' => 'html']) !!}
          {!! Form::label('html', 'Html', ['class' => 'form-check-label']) !!}
        </div>
        
        <div class="form-check">
          {!! Form::checkbox('skill', 'php', '', ['class' => 'form-check-input', 'id' => 'php']) !!}
          {!! Form::label('php', 'PHP', ['class' => 'form-check-label']) !!}
        </div>
        </div>
      </div>      
      

      
    
      <div class="form-group">
        {!! Form::submit('Register',  ['name' => 'sm-register', 'value' => 'Register', 'class' => 'btn btn-dark']) !!}
      </div>
    {!! Form::close() !!}

  </div>
</body>
</html>