@extends('partials.backend.backend')
@section('title', 'customers')
@section('content')
    <div class="col-md-10">
        <div class="card">
            <form action="{{url('Add')}}" enctype="multipart/form-data" method="post">
                @csrf
                     <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                        placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" id="formGroupExampleInput"
                        placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">mobile_number</label>
                    <input type="number" class="form-control" name="mobile_number" id="formGroupExampleInput"
                        placeholder="mobile_number">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="formGroupExampleInput"
                        placeholder="address">
                </div>
                <button type="submit" class="btn btn-primary">Add Customer</button>

            </form>
        </div>
    </div>
@endsection
