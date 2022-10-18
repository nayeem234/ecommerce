@extends('partials.backend.backend')
@section('title','customers')
@section('content')
  <div class="col-md-10">
        <div class="card" style="width:100%">

         <a href="{{ url('customerAdd') }}">
            <button type="button" id="button" class="btn btn-primary">Add Customer</button>
        </a>


            <table class="table" id="DataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                     <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile_number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $customer)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                           <td>{{ $customer->address }}</td>
                        <td>
                            {{ $customer->mobile_number }}
                        </td>

                        <td>

                                <a href="{{route('preview',$customer->id)}}" data-id="{{ $customer->id }}"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deleteCustomer/'.$customer->id) }}"><button type="button"
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
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Customer

                </h5>
            </div>
            <div class="modal-body">
                <form action="{{ url('editCustomer') }}" method="post">
                    @csrf
                    <input type="hidden" value="" id="editId" name="editId">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="Name" class="form-control" id="name" name="name" placeholder="Name">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title">email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Email">

                    </div>
                    <div class="form-group">
                        <label for="title">mobile_number</label>
                        <input type="number" class="form-control" id="mobile_number" name="mobile_number"
                            placeholder="mobile_number">

                    </div>
                    <br>
                    <div class="form-group">
                        <label for="description">Address</label>
                        <input type="text" class="form-control" id="Address" name="address" placeholder="address">

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
