<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Registration Form</h1>
        <form action="{{url('/register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
                <span class="error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email">
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingTextarea">Address</label>
                <textarea class="form-control" name="address" placeholder="Enter your address here" id="floatingTextarea"></textarea>
            </div>

            <div class="mb-3">
                <label for="birthDate" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="dob" id="birthDate">
            </div>

            <div class="mb-3">
                <label class="form-label">Hobbies&nbsp;&nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox1"
                        value="Dance">
                    <label class="form-check-label" for="inlineCheckbox1">Dance</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox2"
                        value="Writing">
                    <label class="form-check-label" for="inlineCheckbox2">Writing</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox3"
                        value="Reading">
                    <label class="form-check-label" for="inlineCheckbox3">Reading</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox4"
                        value="Watching Series">
                    <label class="form-check-label" for="inlineCheckbox4">Watching Series</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender&nbsp;&nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="state">Select Your State:</label>
                <select id="state" name="state" class="form-select">
                    <option value="">Select</option>
                    <option value="gujrat">Gujrat</option>
                    <option value="up">Uttar Prades</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="city">Select Your City:</label>
                <select id="city" name="city" class="form-select">
                    <option value="">Select</option>
                    <option value="rajkot">Rajkot</option>
                    <option value="ahemdabad">Ahemdabad</option>
                    <option value="vrindavan">Vrindavan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Your Profile:</label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-info">Submit</button>
            </div>
        </form>
        <a href="{{route('register.index')}}"><button class="btn btn-outline-secondary">Show
                Data</button></a><br><br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        {{-- <a href="logout">Logout</a> --}}
    </div>
</body>

</html>
