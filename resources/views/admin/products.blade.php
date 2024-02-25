@extends('moonshine::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-moonshine::table>
                    <x-slot:thead>
                        <th colspan="1">ID</th>
                        <th colspan="1">NAME</th>
                        <th colspan="1">DESCRIPTION</th>
                        <th colspan="1">CATEGORY</th>
                        <th colspan="1">COUNT</th>
                        <th colspan="1">PRICE</th>
                    </x-slot:thead>
                    <x-slot:tbody>
                        @foreach( $products as $product )
                            <tr>
                                <th>{{ $product->id }}</th>
                                <th>{{ $product->name }}</th>
                                <th>{{ $product->description }}</th>
                                <th>{{ $product->category['name'] }}</th>
                                <th>{{ $product->count }}</th>
                                <th>{{ $product->price }}</th>
                            </tr>
                        @endforeach
                    </x-slot:tbody>
                </x-moonshine::table>
            </div>
        </div>
    </div>
@endsection
