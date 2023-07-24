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
        <h1 class="text-center">Update Form</h1>
        <form action="{{ route('register.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value={{ $data->name }}>
                <span class="error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value={{ $data->email }}>
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group mb-3">
                <label for="floatingTextarea">Address</label>
                <textarea class="form-control" name="address" placeholder="Enter your address here" id="floatingTextarea">{{ $data->address }}</textarea>
            </div>

            <div class="mb-3">
                <label for="birthDate" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="dob" id="birthDate" value={{ $data->dob }}>
            </div>

            <div class="mb-3">
                <label class="form-label">Hobbies&nbsp;&nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox1" value="Dance"
                        @checked(in_array('Dance', explode(',', $data->hobbies)))>
                    <label class="form-check-label" for="inlineCheckbox1">Dance</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox2"
                        value="Writing" @checked(in_array('Writing', explode(',', $data->hobbies)))>
                    <label class="form-check-label" for="inlineCheckbox2">Writing</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox3"
                        value="Reading" @checked(in_array('Reading', explode(',', $data->hobbies)))>
                    <label class="form-check-label" for="inlineCheckbox3">Reading</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="hobbies[]" type="checkbox" id="inlineCheckbox4"
                        value="Watching Series" @checked(in_array('Watching Series', explode(',', $data->hobbies)))>
                    <label class="form-check-label" for="inlineCheckbox4">Watching Series</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender&nbsp;&nbsp;</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male"
                        {{ $data->gender == 'Male' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female"
                        {{ $data->gender == 'Female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other"
                        {{ $data->gender == 'Other' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio3">Other</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="state">Select Your State:</label>
                <select id="state" name="state" class="form-select">
                    <option value="">Select</option>
                    <option value="gujrat" {{ $data->state == 'gujrat' ? 'selected' : '' }}>Gujrat</option>
                    <option value="up" {{ $data->state == 'up' ? 'selected' : '' }}>Uttar Prades</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="city">Select Your City:</label>
                <select id="city" name="city" class="form-select">
                    <option value="">Select</option>
                    <option value="rajkot" {{ $data->city == 'rajkot' ? 'selected' : '' }}>Rajkot</option>
                    <option value="ahemdabad" {{ $data->city == 'ahemdabad' ? 'selected' : '' }}>Ahemdabad</option>
                    <option value="vrindavan" {{ $data->city == 'vrindavan' ? 'selected' : '' }}>Vrindavan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Your Profile:</label>
                <input type="file" class="form-control" name="image" value="{{$data['Image']}}">
                <img src="{{ asset('storage/Profile/' . $data['Image']) }}" alt="" height="150" width="150">

            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-info">Update</button>
            </div>
        </form>
    </div>
</body>

</html>
