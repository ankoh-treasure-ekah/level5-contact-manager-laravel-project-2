@extends('layout.app')

@section('content')

<body class="min-h-screen bg-[#181f2a]">




	<!-- Main -->

	<main class="text-[#ffffff] text-center">

		<section class="bg-[#1c2431]">
			<div class="relative">
				
				<h1 class="text-[1.6rem] pb-4 relative z-10">All your Contacts in one secure location, accessible anywhere.</h1>
			</div>

			<div class="bg-[#181f2a] px-5 pb-6 relative top-[-4.4rem]">
				<p class=" text-[0.9rem] w-[18.8rem] pt-[4.5rem] pb-4 m-auto">Cmanager stores all your most important contacts in one secure location. Access them wherever
					you need</p>
				<a href="{{route('create-contact')}}" class="btn btn-primary">Get started</a>
			</div>

		</section>


	</main>

	<footer class="bg-[#0b1523]"></footer>

</body>

@stop