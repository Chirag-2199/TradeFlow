@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1 class="mt-4">Welcome to TradeFlow</h1>
        <p>This is the main dashboard where you can manage your business operations.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <a href="{{ route('clients.index') }}" class="btn btn-primary w-100">Manage Clients</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('stocks.index') }}" class="btn btn-success w-100">Manage Stock</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('finance') }}" class="btn btn-warning w-100">Financial Reports</a>
            </div>
        </div>
    </div>
@endsection
