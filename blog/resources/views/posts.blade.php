<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/add-post">Create post</a><br><br>

    @if(Session::has('postDelete'))
    <div>
        {{Session::get('postDelete')}}
    </div><br><br>
    @endif
    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>DEscription</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td> {{ $post->title }}</td>
                <td> {{ $post->body }}</td>
            <td><a href="/delete-post/{{$post->id}}">Delete</a></td>
            </tr>
            @endforeach

        </tbody>
</body>

</html>
