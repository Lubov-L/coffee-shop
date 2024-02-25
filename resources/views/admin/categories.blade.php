@extends('moonshine::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-moonshine::table>
                    <x-slot:thead>
                        <th colspan="1">ID</th>
                        <th colspan="1">NAME</th>
                    </x-slot:thead>
                    <x-slot:tbody>
                        @foreach( $categories as $category )
                            <tr>
                                <th>{{ $category->id }}</th>
                                <th>{{ $category->name }}</th>
                            </tr>
                        @endforeach
                    </x-slot:tbody>
                </x-moonshine::table>
            </div>
        </div>
    </div>
@endsection
