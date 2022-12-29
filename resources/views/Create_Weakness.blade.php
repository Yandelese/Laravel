@extends('layouts.app')
@section('content')

    <body>
            <form action="{{route('add_weakness_to_db')}}" method="post">
                @csrf
                <div class="row mb-3" style="justify-content: center">
                    <div class="col-sm-10">
                        <br>
                        <p>Name:</p><label>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </label>
                        @error('name')
                        <div class="alert alert-danger" style="text-align: center; width: 300px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 120px">+ add</button>
            </form>

    </body>

@endsection
