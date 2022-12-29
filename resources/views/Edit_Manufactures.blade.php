@extends('layouts.app')
@section('content')

    <body>

    <form action="{{route('update_manufacturer',$certain_manufacturer->id)}}" method="post">
        @csrf
        <div class="row mb-3" style="justify-content: center">
            <div class="col-sm-10">
                <p>Name:</p><label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$certain_manufacturer->name}}">
                </label>
                @error('name')
                <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                @enderror

                <p>Model:</p>
                <label>
                    <input type="text" class="form-control" name="model" placeholder="Model" value="{{$certain_manufacturer->model}}">
                </label>
                @error('type')
                <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                @enderror

                <p>Price:</p>
                <label>
                    <input type="text" class="form-control" name="price" placeholder="Price" value="{{$certain_manufacturer->price}}">
                </label>
                @error('price')
                <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                @enderror

                <p>Country of origin:</p><label>
                    <input type="text" class="form-control" name="country_of_origin" placeholder="Country of origin" value="{{$certain_manufacturer->country_of_origin}}">
                </label>
                @error('country_of_origin')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <br><br>
                <p> + Weak Points:</p>
{{--                @foreach($weakness as $weak)--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="checkbox" value="{{$weak->id}}" name="weakness[]">--}}
{{--                        <label class="form-check-label" for="flexCheckDefault">--}}
{{--                            <p>{{$weak->name}}</p>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 300px">Save</button>
    </form>



    </body>

@endsection
