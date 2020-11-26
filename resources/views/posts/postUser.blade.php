<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />



    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                           @foreach($posts as $post)
                                <p><strong>Id: </strong>{{$post->user_id}},
                                    <strong>Title: </strong>{{$post->titel}},
                                    <strong>Description: </strong>{{$post->description}}
                                    <strong>Written by: </strong>{{$post->user->name}}
                                </p>
                           @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
