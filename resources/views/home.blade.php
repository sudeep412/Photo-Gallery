@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Photo Gallery</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                    <div class="card-header">Create New Gallery</div>
                    <div class="card-body">
                    <a href="{{route('creategallery)}}" class="btn btn-success btn-block">Create Gallery</a>
                    </div>
            </div>
            </div>
    </div>
</div>
@endsection
