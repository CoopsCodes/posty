@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
		<div class="w-6/12 bg-pink-900 p-6 rounded-lg">
			<form action="{{ route('register') }}" method="post">
				@csrf {{-- https://laravel.com/docs/8.x/csrf#csrf-introduction --}}
				<div class="mb-4">
					<label for="name" class="sr-only">Name</label>
					<input type="text" name="name" id="name" placeholder="Your name" class="bg-pink-50 border-2 w-full p-4 rounded-lg" value="{{ old('name') }}" required>
					{{-- Laravel error handling, I prefer to use the semantic 'required' HTML tag in the input. 
						@error('name')
						<div class="text-red-500 mt-2 test-small">
							{{ $message }}
						</div>
						@enderror 
					--}}
				</div>

				<div class="mb-4">
					<label for="username" class="sr-only">Username</label>
					<input type="text" name="username" id="username" placeholder="Username" class="bg-pink-50 border-2 w-full p-4 rounded-lg" value="{{ old('username') }}" required>
				</div>

				<div class="mb-4">
					<label for="email" class="sr-only">Email</label>
					<input type="email" name="email" id="email" placeholder="Email" class="bg-pink-50 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}" required>
				</div>

				<div class="mb-4">
					<label for="password" class="sr-only">Password</label>
					<input type="password" name="password" id="password" placeholder="Password" class="bg-pink-50 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
					@error('password')
						<div class="text-red-500 mt-2 test-small">
							{{ $message }}
						</div>
						@enderror 
				</div>

				<div class="mb-4">
					<label for="password" class="sr-only">Confirm Password</label>
					<input type="password" name="password_confirmation" id="password" placeholder="Repeat Password" class="bg-pink-50 border-2 w-full p-4 rounded-lg" required>
				</div>

				<button type="submit" class="w-full px-4 py-3 rounded font-medium bg-pink-50 text-pink-900"  value="Sign in">Register</button>
			</form>
		</div>
	</div>
@endsection