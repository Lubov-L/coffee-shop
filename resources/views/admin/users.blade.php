@extends('moonshine::layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-moonshine::table>
                    <x-slot:thead>
                        <th colspan="1">ID</th>
                        <th colspan="1">NAME</th>
                        <th colspan="1">EMAIL</th>
                        <th colspan="1">ROLE</th>
                    </x-slot:thead>
                    <x-slot:tbody>
                        @foreach( $users as $user )
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>{{ $user->role['name'] }}</th>
                            </tr>
                        @endforeach
                    </x-slot:tbody>
                </x-moonshine::table>
            </div>
        </div>
    </div>
@endsection
