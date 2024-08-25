@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="column">
  <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $viewData["description"] }}</p>
    </div>
    <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $viewData["email"] }}</p>
    </div>
    <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $viewData["address"] }}</p>
    </div>
    <div class="col-lg-4 mx-auto">
        <p class="lead">{{ $viewData["phone_number"] }}</p>
    </div>
    </div>
  </div>
</div>
@endsection
