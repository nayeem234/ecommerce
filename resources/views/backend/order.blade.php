@extends('partials.backend.backend')
@section('title','orders')

@section('content')
<div class="col-md-10">
    <a href="{{ url('orderAdd') }}">
        <button type="button" id="button" class="btn btn-primary">Add Order</button>
    </a>
<table class="table" id="DataTable">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $key => $order)
        <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $order->name }}</td>
               <td> {{$order->price}}</td>
               <td> {{$order->quantity}}</td>
               <td> {{$order->stock}}</td>
               <td>

                <td>
                    {{-- <button type="button" class="btn btn-primary">View</button> --}}
                    <a class="editButton" data-id="{{ $order->id }}" role="button"><button type="button"
                            class="btn btn-warning">edit</button></a>
                    <a href="{{ url('deleteOrder/' . $order->id) }}"><button type="button"
                            class="btn btn-danger">Delete</button></a>
                </td>
               </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

!-- Modal -->
<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Order

                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('editOrder') }}" method="post">
                    @csrf
                    <input type="hidden" value="" id="editId" name="editOrder">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="Name" class="form-control" id="name" name="name" placeholder="Name">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="price">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity">

                    </div>
                    <div class="form-group">
                        <label for="quantity">Stock</label>
                        <input type="text" class="form-control" id="quantity" name="stock" placeholder="quantity">

                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="closeBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
