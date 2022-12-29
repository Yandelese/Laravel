@extends('layouts.app')
@section('content')

    <body>


    <table class="table" style="width: 800px; margin-left: 250px; text-align: center">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Model</th>
            <th scope="col">Price</th>
            <th scope="col">Country of origin</th>
            <th scope="col">Distributor:</th>
            <th scope="col">Weak Points:</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <th scope="row">{{$certain_manufacturer->id}}</th>
                <td>{{$certain_manufacturer->name}}</td>
                <td>{{$certain_manufacturer->model}}</td>
                <td>{{$certain_manufacturer->price}}</td>
                <td>{{$certain_manufacturer->country_of_origin}}</td>
                @foreach($certain_manufacturers_distributors as $certain_distributor)
                    <td>{{$certain_distributor->name}}</td>
                @endforeach

                @foreach($certain_manufacturer_weaknesses as $weaknesses)
                    <td>{{$weaknesses->name}}</td><br>
                @endforeach

                <td>
                        <a href="" class="btn btn-primary btn-sm">Buy Now</a>
{{--                    <a href="@{'/edittable/' + ${st.id}}" class="btn btn-success btn-sm">edit</a>--}}
{{--                    <a href="@{'/deletetable/' + ${st.id}}" class="btn btn-danger btn-sm">delete</a>--}}
                </td>
            </tr>
            </tbody>
    </table>

    <a href="{{route('index')}}" class="btn btn-success btn-sm" style="margin-left: 300px">Back</a>
    </body>

@endsection
