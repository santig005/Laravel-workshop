@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="column">
  <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $description }}</p>
    </div>
    <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $email }}</p>
    </div>
    <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $address }}</p>
    </div>
    <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $phone_number }}</p>
    </div>
    </div>
  </div>
</div>
@endsection
