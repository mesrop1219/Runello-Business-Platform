@props([
  'title'
])

<div class="mx-auto font-mono max-w-lg border mt-3 py-4 rounded-lg px-3">
  <div class="header text-center"><h3>{{ $title }}</h3></div>
  <div class="cards">
    {{ $slot }}
  </div>
</div>