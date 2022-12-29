@extends('layouts.app')
@section('content')

    <body>

    <form action="{{route('update_distributor',$certain_distributor->id)}}" method="post">
        @csrf
        <div class="row mb-3" style="justify-content: center">
            <div class="col-sm-10">
                <br> <br>
                <p>Name:</p>
                <input type="text" class="form-control" name="name" value="{{$certain_distributor->name}}">
                <p>Brands:</p>
                <select class="form-select" aria-label="Default select example" name="manufacturer_id">
                    @foreach($allmanufacturers as $brands)
                        <option value="{{$brands->id}}">{{$brands->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success" style="margin-left: 120px"> Save </button>
{{--        <a class="btn btn-primary" href="{{route('main_page')}}">Back </a>--}}
    </form>

    </body>

@endsection
