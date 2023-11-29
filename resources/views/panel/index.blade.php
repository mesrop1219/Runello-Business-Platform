@extends('layouts.admin.basic')

@section('title', 'Runello Orders Board')

@section('content')
  
  <x-panel.container title="Orders List">
    @if (count($orders) == 0)
      <div class="app text-left"><h4 class="text-lg font-mono font-bold">Orders Not Found.</h4></div>
    @else
      @foreach ($orders as $order)
        <x-panel.card 
          title="{{ $order->title }}" 
          company="{{ $order->company }}" 
          created_at="{{ $order->created_at }}" 
        />
      @endforeach
    @endif
  </x-panel.container>

@endsection