<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
  <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
  <img src="{{url('2-removebg-preview.png')}}"  title="Logo of a company" alt="Logo of a company" class="center" /> 
    <p class="font-bold text-center  mb-5">AFPPGMC’s Online Updating</p>  
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
      <div class="px-5 py-7">
            <form action="{{ route('auth.check') }}" method="post">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                <div>
                    <span class="text-danger">@error('username'){{ $message }} @enderror</span>
                    <label class="font-semibold text-sm text-gray-600">Username</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" name="username" placeholder="Enter username"/>
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    <label class="font-semibold text-sm text-gray-600">Password</label>
                    <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" name="password" placeholder="Enter password" />
                    
                </div>
                <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Login
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </button>
                <a href ="{{ route('auth.register') }}">I don't have an account, Create new</a>    
        </div>
      </div>
  </div>
</div>
</body>
</html>
</x-app-layout>

