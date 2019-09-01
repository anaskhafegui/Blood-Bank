@extends('layouts.app')
@section('page_title')



<title>Edit Client</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>C</b>lient</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Clients</b> Egypt</span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>
      Client
      <small></small>
    
  </section>

  

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Client</h3>

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
            'action' => ['ClientController@update',$model->id],
            'method' => 'PUT'
        ]) !!}
        <div class="form-group">
            <label for="bithday">bithday </label> 
               {!!  Form::text('bithday',$model->bithday,[
                  'class' => 'form-control'
              ]) !!}
          </div>
        
          <div class="form-group">
              <label for="phone">phone </label> 
                 {!!  Form::text('phone',$model->phone,[
                    'class' => 'form-control'
                ]) !!}
            </div>
        
            <div class="form-group">
                <label for="blood_types_id">blood_types_id </label> 
                   {!!  Form::text('blood_types_id',$model->blood_types_id,[
                      'class' => 'form-control'
                  ]) !!}
              </div> 
              
              <div class="form-group">
                  <label for="city_id">city_id </label> 
                     {!!  Form::text('city_id',$model->city_id,[
                        'class' => 'form-control'
                    ]) !!}
                </div> 
              <div class="form-group">
                  <label for="last_donation_date">last_donation_date </label> 
                     {!!  Form::text('last_donation_date',$model->last_donation_date,[
                        'class' => 'form-control'
                    ]) !!}
                </div>
              <div class="form-group">
                  <label for="email">email</label> 
                     {!!  Form::text('email',$model->email,[
                        'class' => 'form-control'
                    ]) !!}
                </div>
               <div class="form-group">
                  <label for="password">password </label> 
                     {!!  Form::text('password',$model->password,[
                        'class' => 'form-control'
                    ]) !!}
                </div>
               @include('patials.client_form')
                @include('patials.validation_errors')
        {!! Form::close() !!}
        </div>
     </div>

      </div>
      <!-- /.box-body -->
      
    </div>
    <!-- /.box -->

  </section>

@endsection
