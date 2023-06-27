<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Custom Auth Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../css/table.css')}}">

</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #000000;">
    <div class="container">
        <a style="color: #ffffff" class="navbar-brand mr-auto" href="#">User : {{ Auth::user()->name }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" >
                <li  class="nav-item">
                    <a style="color: #ffffff" class="nav-link" href="{{route('home')}}">Home Page</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffffff" class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>



<div class="container">
    <a  href="{{route('showadd')}}" class="add-btn">Add New Move</a>
    <table class="content-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Move Name</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($moves as $move)
        <tr>
            <td>{{$move->id}}</td>
            <td>{{$move->moveName}}</td>
            <td><a href="{{route('edite',$move->id)}}" class="up-btn">Edit</a></td>


            <form action="{{route('destroy',$move->id)}}" method="post">
                @method('POST')
                @csrf
            <td><button type="submit" href="" class="btn-del">Delete</button></td>
            </form>

        </tr>
        @endforeach

        </tbody>
    </table>
    <a  href="{{route('deleteAll')}}" class="btn-del-all">Delete All</a>
</div>
@yield('content')
</body>
</html>
