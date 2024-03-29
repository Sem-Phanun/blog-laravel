<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- plugin tailwindcss --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <article class="text-3xl p-6">
                <h1 class="text-center uppercase">Login</h1>
            </article>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email')}}"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" value=""
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
        
                <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button>
                </div>
                <div class="flex items-center m-6">
                    <p>you don't have an account?</p> <a href="{{ route('register') }}" class="px-4 underline text-blue-600">register</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

