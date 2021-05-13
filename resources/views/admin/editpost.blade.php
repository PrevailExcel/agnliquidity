@extends('admin.master')

@section('content')
<link rel="stylesheet" href="{{ asset('dist/plugins/dropify/dropify.min.css') }}">

<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Edit<small>{{$post->title}}</small></h1>
      <ol class="breadcrumb">
        <li><a href="/admin/dash">Home</a></li>
        <li><i class="fa fa-angle-right"></i><a href="{{ route ('posts.index')}}">Posts</a></li>
        <li><i class="fa fa-angle-right"></i>Edit</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content"> 
      <!-- Small boxes (Stat box) -->
        <form method="POST" enctype="multipart/form-data" action="{{route('posts.update', $post->id)}}">
      @csrf {{ method_field('PUT') }}
        <div class="row">
                                 <div class="col-lg-2 col-md-2"></div>

          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Title</label>
              <input class="form-control" value="{{$post->title}}" name="title" id="title" type="text">
            </fieldset>
          </div>
                         <div class="col-lg-2 col-md-2"></div>

          
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <fieldset class="form-group">
              <label>Post Content</label>
              <textarea class="form-control" name="postbody" id="postbody" rows="3">{{$post->postbody}}</textarea>
            </fieldset>
          </div> 
          <div class="col-lg-2 col-md-2"></div>
        
          <div class="col-md-12" style="padding-top:30px">
             <button type="submit" class="col-lg-12 rounded btn btn-success">Edit Sponsored Post</button>
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
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
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