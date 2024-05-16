@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shipping Information</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('checkout.storeShipping') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
    </form>
</div>
@endsection
