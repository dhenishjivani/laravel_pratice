{{-- @foreach ($data as $item)
    <br>
    {{ print_r($item) }}
@endforeach --}}
{{-- {{print_r($data)}} --}}
{{-- {{$data}} --}}


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display Data</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Hobbies</th>
                    <th scope="col">Gender</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col" colspan="2" style="text-align: center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['address'] }}</td>
                        <td>{{ $item['dob'] }}</td>
                        <td>{{ $item['hobbies'] }}</td>
                        <td>{{ $item['gender'] }}</td>
                        <td>{{ $item['state'] }}</td>
                        <td>{{ $item['city'] }}</td>
                        {{-- first method of delete with url --}}
                        {{-- <td><a href="{{url('deleteData')}}/{{$item->id}}"><button class="btn btn-outline-danger">Delete</button></a></td> --}}

                        {{-- Second method of delete with route || first param Route nu name second array aema key je url ma pass karava mate je name apyu hoy and second je DB madhi avi che ae --}}
                        <td>
                            <form action="{{ route('register.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('register.edit', $item->id) }}">
                                <button class="btn btn-outline-info">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('register.create') }}"><button class="btn btn-outline-secondary">Add User</button></a>
    </div>
</body>

</html>
