@extends('layouts.app')
@inject('model', 'App\Governorate')

@section('page_title')

<title>Edit admin</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>U</b>ser</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>User</b> Egypt</span>
    
@endsection


@section('home')

  <!-- Main content -->
  <section class="content">


    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Admin</h3>

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

        {!! Form::model($row , [
            'action' => ['UsersController@update', $row->id],
            'role' => 'form',
            'method' => 'put'
            ]) !!}

        @include('Users.form')
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Edit Admin</button>
        </div>

        {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
      </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->

@endsection
