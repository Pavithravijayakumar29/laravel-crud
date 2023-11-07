
@extends('products.layout')



@section('content')
<style>
.bttn
{
    background-color: green;

}
.bttn:hover
{
    background-color: green;

}
</style>
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add Product Details</h2>

            </div>

            <div class="pull-right">

            <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <!-- <h2>Add New Product</h2> -->
        </div>
        <div class="pull-right">
            <!-- <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a> -->
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong>Wrong input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

     <div class="row">
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name"><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea><br>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="first_name"><br>
                </div>
        <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <strong>Last Name:</strong>
                      <input type="text" name="last_name" class="form-control" placeholder="last_name"><br>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                  <strong>Number:</strong>
                     <input type="text" name="number" class="form-control" placeholder="number"><br>
       </div>
       <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Products:</strong>
                 <input type="text" name="products" class="form-control" placeholder="products"><br>
   </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
                <button type="submit" class="btn btn-primary bttn">Submit</button>
        </div>
    </div>

</form>

                <!-- <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a> -->

            </div>

        </div>

    </div>

   <br>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <br>

    <table class="table table-bordered">

        <tr>

            <th>SI.N</th>

            {{-- <th>Name</th>

            <th>Details</th> --}}

            <th>First Name</th>

            <th>Last Name</th>

            <th>Number</th>

            <th>Products</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>

            {{-- <td>{{ $product->name }}</td>

            <td>{{ $product->detail }}</td> --}}

            <td>{{ $product->first_name }}</td>

            <td>{{ $product->last_name }}</td>

            <td>{{ $product->number }}</td>

            <td>{{ $product->products }}</td>


            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                    <!-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> -->



                    <a class="btn btn-primary bttn" href="{{ route('products.edit',$product->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger bttn1">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $products->links() !!}



@endsection
