@extends('layouts.app')

@section('content')
    <div style="margin: 2%; padding: 2%;">
        <h1>List of Destinations</h1>
        
        @if(session('success'))
            <div style="color: green; font-weight: bold;">
                {{ session('success') }}
            </div>
        @endif

        <table border="1" style="width: 100%; margin-top: 20px;">
            <thead>
                <tr>
                    <th>Destination Name</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $destination)
                    <tr>
                        <td>{{ $destination->title }}</td>
                        <td>{{ $destination->description }}</td>
                        <td>
                            @if ($destination->image)
                                <img src="{{ asset('storage/' . $destination->image) }}" alt="Image" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
