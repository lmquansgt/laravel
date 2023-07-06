@extends('books.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Library</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>

            </div>

        </div>

    </div>

    <x-alert.success />

    @if (count($books) === 0)

        <h3> There's no book added yet! Try adding one! </h3>

    @else

        <table class="table table-bordered">

            <tr>

                <th>Mark</th>

                <th>No</th>

                <th>Name</th>

                <th>Author</th>

                <th width="280px">Action</th>

            </tr>

            @foreach ($books as $book)

                <tr>

                    <td>
                        <input
                            onchange="updateCheck({{$book->id}})"
                            @checked(in_array($book->id, session('checkList') ?? []))
                            type="checkbox"
                        />
                    </td>

                    <td>{{ ++$i }}</td>

                    <td>{{ $book->title }}</td>

                    <td>{{ $book->author }}</td>

                    <td>

                        <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                            @csrf

                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </table>

    @endif

    {!! $books->links() !!}

@endsection

@push('checkList')
<script src="{{ asset('js/checkList')}}" defer></script>
@endpush
{{-- <script type=text/javascript> --}}
{{--     function updateCheck(bookId) { --}}
{{--         console.log('sending request'); --}}
{{--         axios.post('/check-list', { id: bookId }); --}}
{{--     } --}}
{{-- </script> --}}
