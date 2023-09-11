@extends('layouts.main')

@section('page-title', 'Singolo Comic')

@section('main-content')
<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1 class="text-center m-4">
                Single Comic
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img src="{{ $fumetto['thumb'] }}" class="card-img-top" alt="{{ $fumetto['title'] }}">
                <div class="card-body">
                    <h2 class="text-primary">
                        {{ $fumetto['title'] }}
                    </h2>
                    <h3>
                        {{ $fumetto['series'] }}
                        -
                        <small>
                            {{ $fumetto['sale_date'] }}
                        </small>
                    </h3>
                    <h4 class="text-success">
                        {{ $fumetto['price'] }}
                    </h4>

                    <p>
                        {{ $fumetto['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection