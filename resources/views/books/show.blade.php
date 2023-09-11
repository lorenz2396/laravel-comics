@extends('layouts.main')

@section('page-title', $book->title)

@section('main-content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                {{ $book->title }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-primary">
                        {{ $book->title }} (ID: {{ $book->id }})
                    </h2>
                    <h3 class="text-warning">
                        {{ $book->author }}
                    </h3>
                    <h4>
                        Anno: {{ $book->year }}
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection