@extends('layouts.app')
@section('title', $viewData["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Success</div>
                <div class="card-body">
                    <div class="alert alert-success">
                        Product created.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection