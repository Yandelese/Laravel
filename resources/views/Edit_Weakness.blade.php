@extends('layouts.app')
@section('content')

    <body>

    <form action="{{route('update_weakness',$certain_weakness->id)}}" method="post">
        @csrf
        <div class="row mb-3" style="justify-content: center">
            <div class="col-sm-10">
                <br> <br>
                <p>Name:</p>
                <input type="text" class="form-control" name="name" value="{{$certain_weakness->name}}">
            </div>
        </div>
        <button type="submit" class="btn btn-success" style="margin-left: 120px"> Save </button>
{{--        <a class="btn btn-primary" href="{{route('main_page')}}">Back </a>--}}
    </form>


    </body>

@endsection
