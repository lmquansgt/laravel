@extends('books.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show book</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>

            </div>

        </div>

    </div>

    <x-alert.success />

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                {{ $book->title }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Author:</strong>

                {{ $book->author }}

            </div>

        </div>

    </div>

@endsection
