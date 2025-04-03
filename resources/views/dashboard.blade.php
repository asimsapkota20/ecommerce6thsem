@extends('layouts.app')
@section('title','DashBoard')
@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="bg-blue-100 px-4 py-8 rounded-lg shadow flex items-center justify-between">
        <h2 class="text-lg">Total Product</h2>
        <span class="text-4xl font-bold">100</span>
    </div>
    <div class="bg-green-100 px-4 py-8 rounded-lg shadow flex items-center justify-between">
        <h2 class="text-lg">Panding orders</h2>
        <span class="text-4xl font-bold">100</span>
    </div>
    <div class="bg-red-50 px-4 py-8 rounded-lg shadow flex items-center justify-between">
        <h2 class="text-lg">Total Order</h2>
        <span class="text-4xl font-bold">100</span>
    </div>
</div>

@endsection