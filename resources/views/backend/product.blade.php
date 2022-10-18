@extends('partials.backend.backend')
@section('title','product')
@section('content')
  <div class="col-md-10">
        <div class="card" style="width:100%">

         <a href="{{ url('productAdd') }}">
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
                           <td>{{ $product->name }}</td>
                        <td>
                            {{ $product->description }}
                        </td>
                        <td>

                                <a class="editProduct" data-id="{{ $product->id }}"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deleteProduct/'.$product->id) }}"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Product

                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('editProduct') }}" method="post">
                    @csrf
                    <input type="hidden" value="" id="editId" name="editId">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="Name" class="form-control" id="name" name="name" placeholder="Name">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Title">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" id="Address" name="description" placeholder="description">

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
