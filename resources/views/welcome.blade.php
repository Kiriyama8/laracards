<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="col-12 col-md-6 mb-3 text-dark">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="card-title font-weight-bold">{{ $category->name }}</h4>
                                        <img src="{{ asset($category->image) }}" class="img-fluid mb-3" width="80">
                                        <p class="card-text">{{ $category->description }}</p>
                                        <a href="{{ route('category.cards', $category->slug) }}" class="btn btn-dark">Jogar</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
