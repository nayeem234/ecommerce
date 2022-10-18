@extends('partials.backend.backend')
@section('title', 'orders')
@section('content')
    <div class="col-md-10">
        <div class="card">
            <form action="{{url('add')}}" enctype="multipart/form-data" method="post">
                @csrf
                     <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                        placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="formGroupExampleInput"
                        placeholder="price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Quantity</label>
                    <input type="quantity" class="form-control" name="quantity" id="formGroupExampleInput"  placeholder="quantity">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" id="formGroupExampleInput"
                        placeholder="stock">
                </div>

                <button type="submit" class="btn btn-primary">Add Order</button>

            </form>
        </div>
    </div>
@endsection
