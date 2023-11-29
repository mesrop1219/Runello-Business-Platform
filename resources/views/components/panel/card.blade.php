@props([
  'title',
  'company',
  'created_at'
])

<div class="mt-3 border rounded-lg px-3 py-4">
    <div class="flex items-center justify-between">
      <div class="info">
        <div class="title"><h3>{{ $title }}</h3></div>
        <div class="title">
          <span class="text-gray-900 text-sm font-bold">{{ $company }}</span>
          <span class="text-gray-900 text-sm font-bold">{{ date('Y-m-d', strtotime($created_at)) }}</span>
        </div>
      </div>
      <div class="read_more">
        <button class="bg-slate-800 text-white px-5 py-2 rounded-md">Read More</button>
      </div>
    </div>
</div>