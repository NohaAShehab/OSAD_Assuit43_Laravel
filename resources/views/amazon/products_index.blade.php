@extends('layouts.app')

@section('title')
    Amazon Website
@endsection
@section('body')


    <table class="table">
        <tr>
            <td> Name</td> <td> Price</td> <td> Description </td>
        </tr>

        @foreach($products as $product)
            <tr>
                <td> {{$product["name"]}}</td>
                <td> {{$product["price"]}}</td>
                <td> {{$product["description"]}}</td>

            </tr>
        @endforeach


    </table>
@endsection
