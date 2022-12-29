@extends('layouts.app')
@section('content')

    <body >

    <table class="table" style="width: 800px; margin-left: 250px; text-align: center">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Model</th>
            <th scope="col">Price</th>
            <th scope="col">Country of origin</th>
            <th scope="col">Weakness</th>

        </tr>
        </thead>

                @foreach($manufacturers as $brands)
        <tbody>
        <tr>
                    <th scope="row">{{$brands->id}}</th>
                    <td>{{$brands->name}}</td>
                    <td>{{$brands->model}}</td>
                    <td>{{$brands->price}}</td>
                    <td>{{$brands->country_of_origin}}</td>

{{--                    @foreach($weakness_certain_manufactures as $weak)--}}
{{--                    <td>{{$weak->name}}</td>--}}
{{--                    @endforeach--}}

                    <td><a href="{{route('edit_manufactures',$brands->id)}}" class="btn btn-success btn-sm">edit</a></td>
                    <td><a href="{{route('delete_manufactures',$brands->id)}}" class="btn btn-danger btn-sm">delete</a></td>


        </tr>
        </tbody>
        @endforeach

    </table>

@endsection
