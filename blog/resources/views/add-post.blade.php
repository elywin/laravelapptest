<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('post-created'))
    <div>
        {{Session::get('post-created')}}
    </div>
    @endif
<form method="POST" action="{{route('createPost')}}">
        @csrf
        <label for="title">Title</label>
        <input type="text"  name="title" placeholder="enter post title"><br><br>
        <label for="body">Description</label>
        <textarea name="body" placeholder="enter post title"></textarea><br><br>
        <button type="submit">Add post</button>
    </form>

</body>
</html>