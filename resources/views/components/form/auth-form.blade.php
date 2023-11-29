@props([
  'title',
  'link'
])

<div class="form border font-sans max-w-lg mx-auto mt-6 rounded-lg">
    <div class="form_header text-center mt-4 mb-4"><span class="font-mono">{{ $title }}</span></div>
    <div class="form-content mx-auto max-w-[80%] text-sm">
        <form action="{{ route($link) }}" method="post">
            @csrf
            {{ $slot }}
            <button type="submit" class="mt-4 mb-4 rounded-lg text-white px-7 py-2 bg-slate-700">Submit</button>
        </form>
    </div>
  </div>