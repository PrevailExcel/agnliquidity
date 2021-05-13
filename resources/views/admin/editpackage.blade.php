@extends('admin.master')

@section('content')

<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Edit Package - {{$package->name}}</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ route ('packages.index')}}">Packges</a></li>
        <li><i class="fa fa-angle-right"></i>Edit</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
        <form method="POST" action="{{route('packages.update', $package->id)}}">
      @csrf
      @method('PUT')
        <div class="row">
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Package Name</label>
              <input class="form-control" value="{{$package->name}}" name="pname" required id="pname" type="text">
            </fieldset>
          </div>
          <div class="col-lg-2 col-md-2"></div>
          
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Price</label>
              <input class="form-control" name="price" value="{{$package->price}}"  id="price" required type="text">
            </fieldset>
          </div> 
          <div class="col-lg-2 col-md-2"></div>

          <div class="col-md-12" style="padding-top:30px">
             <button type="submit" class="col-lg-12 rounded btn btn-success">Edit Package</button>
          </div>
        </div>
        </form>
    </div>
</div>
@endsection