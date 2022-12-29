@extends('layouts.app')
@section('content')

    <body>

    <form action="{{route('add_to_DB')}}" method="post">
        @csrf
        <div class="row mb-3" style="justify-content: center">
            <div class="col-sm-10">
                <p>Name:</p><label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </label>
                @error('name')
                <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                @enderror

                <p>Model:</p>
                <label>
                    <input type="text" class="form-control" name="model" placeholder="Model">
                </label>
                @error('type')
                <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                @enderror

                <p>Price:</p>
                <label>
                    <input type="text" class="form-control" name="price" placeholder="Price">
                </label>
                @error('price')
                <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                @enderror

                <p>Country of origin:</p><label>
                    <input type="text" class="form-control" name="country_of_origin" placeholder="Country of origin">
                </label>
                @error('country_of_origin')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <br><br>
                <p> + Weak Points:</p>
                @foreach($weakness as $weak)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$weak->id}}" name="weakness[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        <p>{{$weak->name}}</p>
                    </label>
                </div>
                @endforeach

            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 300px">+ add</button>
    </form>

    </body>

@endsection
