@extends('layouts.app')

@inject('model', 'App\Client')


@section('page_title')



<title>Create Client</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>C</b>lient</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Client</b></span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>Clients
        
      <small></small>
    
  </section>

  

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Create Client</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
   
        {!! Form::model($model,[
            'action' => 'ClientController@store'
        ]) !!}
        <label for="name">
                @include('patials.client_form')
                @include('patials.validation_errors')
        {!! Form::close() !!}
        </div>
     </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>

@endsection
