@extends('layouts.app') {{-- this points to the directory, PHP uses dot notation rather than slash. this points to the layouts folder and the app file. --}}

@section('content') {{-- this points to the '@yield('content')' location in the file described above --}}
	<div class="flex justify-center">
		<div class="w-8/12 bg-white p-6 rounded-lg">
			Posts
		</div>
	</div>
@endsection {{-- I am an end --}}