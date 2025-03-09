@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg max-w-2xl">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Client</h2>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium">Client Name</label>
            <input type="text" id="name" name="name" required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-medium">Phone</label>
            <input type="text" id="phone" name="phone" required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-medium">Address</label>
            <textarea id="address" name="address" rows="3" required
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg">
                Save Client
            </button>
        </div>
    </form>
</div>
@endsection
