<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
  <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
  <img src="{{url('2-removebg-preview.png')}}"  title="Logo of a company" alt="Logo of a company" class="center" /> 
    <p class="font-bold text-center  mb-5">Registration Form</p>  
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
      <div class="px-5 py-7">
            <form action="{{ route('auth.save') }}" method="post">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                <div>
                <label class="font-semibold text-sm text-gray-600">Username</label>
                <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="username" placeholder="Enter username" value="{{ old('username') }}"/>
                    <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                </div>
                <div>
                <label class="font-semibold text-sm text-gray-600">Unit</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="unit" placeholder="Enter unit" value="{{ old('unit') }}">
                    <span class="text-danger">@error('unit'){{ $message }} @enderror</span>
                </div>
                <div>
                <label class="font-semibold text-sm text-gray-600">Password</label>
                    <input type="password" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="password" placeholder="Enter password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <br>
                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                <br>
                <a href ="{{ route('auth.login') }}">I already have an account, sign in</a>
            </from>
        </div>
    </div>
</div>
</body>
</html>
</x-app-layout>