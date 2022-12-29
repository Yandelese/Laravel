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
            <th scope="col">Details</th>

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

{{--                    @foreach($each_brands_importers as $imp)--}}
{{--                    @if($imp->id===$brands->id)--}}
{{--                    <td>{{$imp->name}}</td>--}}
{{--                    @endif--}}
{{--                    @endforeach--}}

                <td><a href="{{route('manufacturers_details',$brands->id)}}"> see_more </a></td>
                @endforeach

        </tr>
        </tbody>
    </table>

@endsection
