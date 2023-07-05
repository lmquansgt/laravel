@extends('books.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Book</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>

        </div>

    </div>

</div>

<x-alert.error />

<form action="{{ route('books.store') }}" method="POST">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                <input type="text" name="title" class="form-control" placeholder="Title">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Author:</strong>

                <input class="form-control" name="author" placeholder="Author"></input>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection
