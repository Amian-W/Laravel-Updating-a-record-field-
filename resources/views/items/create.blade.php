@extends('welcome')
@section('content')
<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
    <a href="{{route('items.index')}}">Back</a></button>
<form method="POST" action="{{route('items.store')}}">
    @csrf
    <div class="mb-6">
      <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 ">Designation</label>
      <input type="designation" id="designation" name='designation' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="item designation" required>
    </div>
    <div class="mb-6">
      <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 ">Stock</label>
      <input type="number" id="stock" name='stock' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
  </form>
  @endsection
  