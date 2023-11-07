@extends('products.layout')

@section('content')
<style>
.bttn
{
    margin-left:1200px;
}

.bttn
{
    background-color: green;

}
.bttn:hover
{
    background-color: green;

}
.bttn1
{
    background-color: green;

}
.bttn1:hover
{
    background-color: green;

}

</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-right">
                <h2>Edit Product Details</h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-primary bttn" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        <input type="text" name="first_name" value="{{ $product->first_name }}" class="form-control" placeholder="first_name">
                    </div><br>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" name="last_name" value="{{ $product->last_name }}" class="form-control" placeholder="last_name">
                </div><br>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Number:</strong>
                    <input type="text" name="number" value="{{ $product->number }}" class="form-control" placeholder="number">
                </div> <br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Products:</strong>
                            <input type="text" name="products" value="{{ $product->products }}" class="form-control" placeholder="products">
                        </div>                                   <br>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary bttn1">Update</button>
            </div>
        </div>

    </form>
@endsection
