@extends('partials.backend.backend')
@section('title','dashboard')
@section('content')

<div class="col-md-10">
        <a href="{{ url('newAdd') }}">
            <button type="button" id="button" class="btn btn-primary">Add Product</button>
        </a>

<table class="table" id="DataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                     <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->title }}</td>
                        <td>
                            {{ $product->description }}
                        </td>
                        <td>
                            {{-- <button type="button" class="btn btn-primary">View</button> --}}
                            <a class="editButton" data-id="{{ $product->id }}" role="button"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deletePost/' . $product->id) }}"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
@endsection
