<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> Hi {{ $user->name }}</p>
    <p>Danh sách Bài viết:</p>
    @foreach($user->posts as $post)
        <p>Tiêu đề: {{ $post->title }}</p>
    @endforeach
</body>
</html>
