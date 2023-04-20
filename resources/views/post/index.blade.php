<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>List posts</title>
</head>
<body>
  <h1>List posts</h1>
  
  @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif
  
  <ul>
    @foreach($posts as $post)
      <li>
        <a href="">{{ $post->title }}</a>
        <div><img src={{ url($post->thumbnail) }} style="height:80px"><div>
        {{ $post->content }}
      </li>
    @endforeach
  </ul>

  {{-- {{ $posts->links() }} --}}
  {{ $posts->appends(['sort'=>'votes'])->links() }}
</body>
</html>