@extends('layouts.main')

@section('page-title', 'Books')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1>
                Books
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-primary">
                            {{ $book->title }}
                        </h2>
                        <h3 class="text-warning">
                            {{ $book->author }}
                        </h3>
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

                        <a href="{{ route('books.show', ['id' => $book->id]) }}" class="btn btn-primary">
                            Check single book
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection