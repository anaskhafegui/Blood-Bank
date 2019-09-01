@extends('layouts.app')
@section('page_title')

<title>reset passwordt</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>P</b>asssowrd</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>password</b> Egypt</span>
    
@endsection


@section('home')



  <!-- Main content -->
  <section class="content">







    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">list of Contact from Client</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
            <div class="form-group">


                {!! Form::open([
                     'action' => 'ResetAdminPasswordController@update',
                    'method' => 'put',
                ]) !!}

                    <label for="email">email</label>
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}

                    <label for="password">password</label>
                    {!! Form::password('password', ['class' => 'form-control']) !!}

                    <label for="password-confirmed">confirm password</label>
                    {!! Form::password('password-confirmed', ['class' => 'form-control']) !!}

                    <button type="submit" class="btn btn-primary">reset password</button>

                {!! Form::close() !!}


            </div>



      </div>
      <!-- /.box-body -->
      </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->


@endsection
