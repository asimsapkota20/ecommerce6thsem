@extends('layouts.app')
@section('title', 'Edit brands')
@section('content')
    <form action="{{route('brand.update',$brand->id)}}" method="POST">
        @csrf
        <input type="text" name="priority" placeholder="Priority" class="border p-2 rounded-lg w-full mt-2" value="{{old('priority') ?? $brand->priority}}">
        @error('priority')
            <p class="text-red-500">* {{$message}}</p>
        @enderror
        <input type="text" name="name" placeholder="brand Name" class="border p-2 rounded-lg w-full mt-2" value="{{old('name') ?? $brand->name}}">
        @error('name')
            <p class="text-red-500">* {{$message}}</p>
        @enderror
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded-lg mt-2">Update brand</button>
            <a href="{{route('brand.index')}}" class="bg-red-500 text-white px-3 py-2 rounded-lg mt-2 ml-2">Cancel</a>
        </div>
    </form>
@endsection