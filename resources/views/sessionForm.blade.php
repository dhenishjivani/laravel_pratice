{{-- {{dd(request())}} --}}
@vite('resources/css/app.css')
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
        <form action="loginForm" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Enter Your User Name"
                    value="{{ old('name') }}">
                <span style="color: red;">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                <span style="color: red;">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="password" name="confirmpassword" class="form-control"
                    placeholder="Enter The Same Password">
                <span style="color: red;">
                    @error('confirmpassword')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button type="submit" class="btn btn-outline-info">Login User</button>
        </form>
    </div>
</body>
{{-- {{URL::current()}} --}}
<br>
{{-- {{URL::full()}} --}}
