<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-dark text-dark">
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-6 offset-md-3">
            @foreach($cards as $card)
                <div class="card py-5">
                    <div class="card-body text-center py-5 my-5">
                        <h4 class="card-title font-weight-bold">{{ $card->name }}</h4>
                        <p class="card-text">{{ $card->description }}</p>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-3">
                {{ $cards->links() }}
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
