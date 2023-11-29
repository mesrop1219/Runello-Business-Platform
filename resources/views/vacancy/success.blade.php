@extends('layouts.basic')

@section('title', 'Order Success')

@section('content')

  <div class="success mx-auto mt-16 max-w-md flex justify-between items-center">
    <img class="w-[150px]" src="{{ asset('images/check.webp') }}" alt="">
    <div class="app ml-5">
      <h1 class="text-base font-bold font-mono">Order Successfully Accepted</h1>
      <div class="subtitle text-center">
        <span class="text-xs text-center">we will contact with you in a few minutes</span>
      </div>
    </div>
  </div>

@endsection