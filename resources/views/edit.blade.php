@extends('layouts.app')
@section('content')

    <body>

    <form action="{{route('update',$certain_manufacturer->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="row mb-3" style="justify-content: center">
            <div class="col-sm-10">
                <p>Name:</p><input type="text" class="form-control" name="name" value="{{$certain_manufacturer->name}}">
                <p>Gadget type:</p><input type="text" class="form-control" name="type"
                                          value="{{$certain_manufacturer->provided_product}}">
                <p>Country of origin:</p><input type="text" class="form-control" name="country_of_origin"
                                                value="{{$certain_manufacturer->country_of_origin}}">
                <p>Distributors:</p>
                    @foreach($certain_manufacturers_distributors as $distributors)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$distributors->id}}" name="importers_id[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p>{{$distributors->name}}</p>
                            </label>
                        </div>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="justify-content: center"> Update </button>
    </form>

{{--    <a href="{{route('main_page')}}">Back </a>--}}
    </body>

@endsection
