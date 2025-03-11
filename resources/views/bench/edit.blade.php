@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit {{ ucfirst($type) }}</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    @if(auth()->user() && auth()->user()->is_admin)
        <form action="{{ route('bench.update', ['type' => $type, 'id' => $item->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Item Name</label>
                <input type="text" name="item_name" class="form-control" value="{{ $item->item_name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{ $item->category }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="{{ $item->quantity }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <input type="text" name="supplier" class="form-control" value="{{ $item->supplier }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Unit Price</label>
                <input type="number" step="0.01" name="unit_price" class="form-control" value="{{ $item->unit_price }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $item->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="active" {{ $item->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="benched" {{ $item->status == 'benched' ? 'selected' : '' }}>Benched</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @else
        <div class="alert alert-danger">You do not have permission to edit this item.</div>
    @endif
</div>
@endsection
