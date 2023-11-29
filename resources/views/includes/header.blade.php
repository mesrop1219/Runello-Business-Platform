<header class="border-b-2 px-3">
  <nav class="flex justify-between font-mono container mx-auto h-[80px] items-center max-xl">
    <div class="logo"><a href="{{ route('index') }}"><img class="w-[90px]" src="{{ asset('images/logo.svg') }}" alt=""></div>
    <ul class="flex items-center justify-between max-md:hidden">
      <li class="pr-5"><a href="#" class="font">About Us</a></li>
      <li class="pr-5"><a href="#" class="font">Contact</a></li>
      <li>
        <a href="{{ route('order.page') }}">
          <button class="px-6 py-2 bg-slate-800 text-white rounded-lg">Post an Vacancy</button>
        </a>
      </li>
    </ul>
    <div class="burger cursor-pointer hidden max-md:block">
      <div class="row w-7 h-[3px] bg-blue-700 mb-1 rounded"></div>
      <div class="row w-7 h-[3px] bg-blue-700 mb-1 rounded"></div>
      <div class="row w-7 h-[3px] bg-blue-700 rounded"></div>
    </div>
  </nav>
</header>