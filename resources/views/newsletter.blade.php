<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Letter</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/newsletter') }}" method="POST">
                            @csrf
                            <input type="email" class="form-control" name="email" placeholder="Enter email address">
                            <input type="submit" class="btn btn-primary mt-3" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>