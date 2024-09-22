<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align:center">
                Contents
            </div>
            <div class="card-body">
                @foreach ($data as $post)
                    <div>
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="" class="btn btn-primary">View</a>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
