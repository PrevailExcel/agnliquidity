@extends('admin.master')

@section('content')
<link rel="stylesheet" href="{{ asset('dist/plugins/dropify/dropify.min.css') }}">

<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Create Sponsored Post</h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ route ('posts.index')}}">Posts</a></li>
        <li><i class="fa fa-angle-right"></i>New</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
        <form method="POST" enctype="multipart/form-data" action="{{route('posts.store')}}">
      @csrf
        <div class="row">
     
          <div class="col-lg-6 col-md-6">
            <fieldset class="form-group">
              <label>Title</label>
              <input class="form-control" name="title" id="title" type="text">
            </fieldset>
          </div>

          <div class="col-lg-6 col-md-6">
            <fieldset class="form-group">
              <label>Featured Image</label>
              <input type="file" id="input" name="image" class="form-control padding dropify" />
            <fieldset>
            </div>
          
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Post Content</label>
              <textarea class="form-control" name="postbody" id="postbody" rows="3"></textarea>
            </fieldset>
          </div> 
          <div class="col-lg-2 col-md-2"></div>

          <div class="col-md-12" style="padding-top:30px">
             <button type="submit" class="col-lg-12 rounded btn btn-success">Create New Sponsored Post</button>
          </div>

        </div>
        </form>
    </div>
</div>
<script src="{{ asset('dist/plugins/dropify/dropify.min.js') }}"></script> 
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-d??posez un fichier ici ou cliquez',
                        replace: 'Glissez-d??posez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'D??sol??, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>

@endsection