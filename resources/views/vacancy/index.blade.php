@extends('layouts.basic')

@section('title', 'Runello Post Order')

@section('content')

  <x-form.auth-form title="Order An Vacancy" link="order.create">
    <div class="form-content w-full">
      <input type="email" class="bg-gray mb-4 w-full border-b-2 pl-1 text-[17px] outline-none border-gray-700" placeholder="contact email" name="email" required>
      <input type="text" class="bg-gray mb-4 w-full border-b-2 pl-1 text-[17px] outline-none border-gray-700" placeholder="telegram username or phone number" name="telegram" required>
      <input type="text" class="bg-gray mb-4 w-full border-b-2 pl-1 text-[17px] outline-none border-gray-700" placeholder="title for post" name="title" required>
      <input type="text" class="bg-gray  mb-4 w-full border-b-2 pl-1 text-[17px] outline-none border-gray-700" placeholder="company name" name="company" required>
      <input type="text" class="bg-gray  mb-4 w-full border-b-2 pl-1 text-[17px] outline-none border-gray-700" placeholder="salary" name="salary" required>
      <textarea name="description" placeholder="description" class="w-full border-b-2 pl-1 text-[17px] outline-none border-gray-700" border-b-2 pb-1 cols="30" rows="10" required></textarea>
    </div>
  </x-form.auth-form>
@endsection