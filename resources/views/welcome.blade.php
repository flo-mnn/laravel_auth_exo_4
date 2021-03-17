<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth Exo 4</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                <button type="submit" class="btn btn-dark">Log out</button>
                </form>
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <section class="container bg-dark text-white">
        <h1>Logged In User</h1>
        @if (Auth::check())
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">First</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{Auth::user()->id}}</th>
                <td>{{Auth::user()->name}}</td>
                <td>{{Auth::user()->profiles->first}}</td>
                <td>{{Auth::user()->profiles->age}}</td>
                <td>{{Auth::user()->email}}</td>
              </tr>
            </tbody>
          </table>
        @else
            
        <h5>No user logged in</h5>
        @endif
        
    </section>
    <section class="container bg-dark text-white">
        <h1>All registered Users</h1>
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">First</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->profiles->first}}</td>
                    <td>{{$user->profiles->age}}</td>
                    <td>{{$user->email}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>