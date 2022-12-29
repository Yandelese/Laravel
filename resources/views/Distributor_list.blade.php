@extends('layouts.app')
@section('content')
    <body >
    <table class="table" style="width: 800px; margin-left: 250px; text-align: center">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
        </tr>
        </thead>

        <tbody>
        @foreach($alldistributors as $dist)
        <tr>
                <td>{{$dist->id}}</td>
                <td>{{$dist->name}}</td>
{{--                @foreach($each_distributor_brands_list as $brands)--}}
{{--                    @if($brands->id==$dist->manufacturer_id)--}}
{{--                        <td>{{$brands->name}}</td>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
                <td><a href="{{route('edit_distributor',$dist->id)}}" class="btn btn-success btn-sm">edit</a></td>
                <td><a href="{{route('delete_distributor', $dist->id)}}" class="btn btn-danger btn-sm">delete</a></td>
        </tr>
        @endforeach
        </tbody>

    </table>

@endsection
