@extends('layouts.app')
@section('page_title')

<title>Cofing</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>C</b>ofing/span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cofing</b> Egypt</span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>
        Cofing
      <small></small>
    
  </section>


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


                {!! Form::model( $model ,[
                     'action' => ['ConfigController@update', '1' ],
                    'method' => 'put',
                ]) !!}

                    <label for="image">Image</label>
                    {!! Form::text('image',$model->image, ['class' => 'form-control']) !!}

                    <label for="email">Email</label>
                    {!! Form::email('email', $model->email, ['class' => 'form-control']) !!}

                    <label for="name">Application-Phone</label>
                    {!! Form::text('phone', $model->phone, ['class' => 'form-control']) !!}

                    <label for="instgram">Instgram_Url</label>
                    {!! Form::text('instgram', $model->instgram, ['class' => 'form-control']) !!}

                    <label for="twitter">Twitter_Url</label>
                    {!! Form::url('twitter', $model->twitter, ['class' => 'form-control']) !!}

                    <label for="facebook">youtube_url</label>
                    {!! Form::url('facebook', $model->facebook, ['class' => 'form-control']) !!}

                    <label for="about">About</label>
                    {!! Form::textarea('about', $model->about, ['class' => 'form-control']) !!}

                    <button type="submit" class="btn btn-primary">Update</button>

                {!! Form::close() !!}


            </div>



      </div>
      <!-- /.box-body -->
      </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->


@endsection
