@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <h1>{{ $viewData['message'] }}</h1>
    <a href="{{ route('product.index') }}" class="btn btn-primary">Back to Products</a>
</div>
@endsection