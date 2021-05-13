@extends('admin.master')

@section('content')

<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Create New Package</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ route ('packages.index')}}">Packges</a></li>
        <li><i class="fa fa-angle-right"></i>New</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
        <form method="POST" action="{{route('packages.store')}}">
      @csrf
        <div class="row">
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Package Name</label>
              <input class="form-control" name="pname" required id="pname" type="text">
            </fieldset>
          </div>
          <div class="col-lg-2 col-md-2"></div>
          
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Price</label>
              <input class="form-control" name="price" id="price" required type="text">
            </fieldset>
          </div> 
          <div class="col-lg-2 col-md-2"></div>

          <div class="col-md-12" style="padding-top:30px">
             <button type="submit" class="col-lg-12 rounded btn btn-success">Create New Package</button>
          </div>

          
                @if (Session('failure'))

            <div class="alert alert-success" style="display:block;">
                {{ Session('failure') }}
                </div>
                @endif

        </div>
        </form>
    </div>
</div>
@endsection