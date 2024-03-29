@extends('layouts.app')

@inject('model', 'App\Governorate')


@section('page_title')



<title>Create post</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>P</b>ost</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>post</b> Egypt</span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>
        Create post
      <small></small>
    
  </section>
  <!-- Main content -->
  <section class="content">


    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">create post</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        @include('patials.validation_errors')

        {!! Form::model($model , [
            'action' => ['PostController@store'  , $category_id]
            ]) !!}

        @include('post.form')
        <div class="form-group">
            <button class="btn btn-primary" type="submit">New Post</button>
        </div>

        {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
      </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->

@endsection
