@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{route('register')}}" method="POST">
                @csrf
                 <div class="mb-4">
                     <label for="name" class="sr-only">Name</label>
                     <input type="text" name="name" id="name" placeholder="Your Name" 
                     class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" autocomplete="off"/>
                 </div>

                 <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" autocomplete="off"/>
                </div>

                 <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email Address" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="" autocomplete="off"/>
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a Password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value=""/>
                </div>

                <div class="mb-4">
                    <label for="confirm" class="sr-only">Confirm Password</label>
                    <input type="password" name="confirm" id="confirm" placeholder="Repeat Password" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" value=""/>
                </div>

                <div>
                    <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection