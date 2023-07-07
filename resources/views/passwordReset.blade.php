<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>From In Laravel</title>
</head>

<body>
    <div class="container mt-5">
        <form action="{{url('/reset-password')}}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                    value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            </div>
            <div class="mb-3">
                <input type="password" name="password_confirmation" class="form-control"
                    placeholder="Enter The Same Password">
            </div>
            <div class="mb-3">
                <input type="hidden" value="{{$token}}" class="form-control" name="token">
            </div>
            <button type="submit" class="btn btn-outline-info">Reset Password</button>
            <div class="mb-3">
                {{ session('status') }}
            </div>
        </form>
    </div>
</body>
