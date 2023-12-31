@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1 class="text-center m-4">
                Comics
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($comics as $index => $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h2 class="text-primary">
                            {{ $comic['title'] }}
                        </h2>
                        {{-- <h3>
                            {{ $comic['series'] }}
                            -
                            <small>
                                {{ $comic['sale_date'] }}
                            </small>
                        </h3>
                        <h4 class="text-success">
                            {{ $comic['price'] }}
                        </h4> --}}

                        <a href="{{ route('comics-show', ['index' => $index]) }}" class="btn btn-primary">
                            Check single comic
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection