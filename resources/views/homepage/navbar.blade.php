<nav id="header" class="w-full z-30 top-0 text-white fixed navbar">
	<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
		<div class="pl-4 flex items-center w-1/2 xl:w-1/4 md:w-1/4">
			<a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl xl:w-3/4 md:w-3/4 w-full mx-auto" href="{{ route('home') }}">
				<img src="/images/landing/LOGO.svg" class="w-1/2">
			</a>
		</div>
		<div class="block lg:hidden pr-4">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
				</svg>
			</button>
		</div>
		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
			<ul class="list-reset lg:flex justify-end text-red-600 items-center text-small">
				<li class="ml-16">
                    <img src="/images/landing/fac.svg" class="w-1/2 transform hover:-translate-y-1 hover:scale-110">
                    <a class="inline-block py-2 pl-2 no-underline" href="{{ url('/#billing') }}">Facturación</a>
				</li>
				<li class="ml-10">
					<img src="/images/landing/location.svg" class="w-1/2 transform hover:-translate-y-1 hover:scale-110">
					<a class="inline-block py-2 pl-2 no-underline" href="{{ url('/#services') }}">Ubicanos</a>
				</li>
				<li class="ml-10">
                    <img src="/images/landing/client.svg" class="w-1/2 transform hover:-translate-y-1 hover:scale-110">
                    <a class="inline-block py-2 pl-2 no-underline" href="{{ url('/#services') }}">Atención a clientes</a>
				</li>
				<li class="ml-72">
					<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 bg-red-500 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
						<svg class="menu h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<title>Menu</title>
							<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
						</svg>
					</button>
				</li>
			</ul>
		</div>
	</div>
</nav>
