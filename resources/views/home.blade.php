@extends('layouts.app')
@inject('client', 'App\Client')
@inject('posts', 'App\Post')
@inject('donations', 'App\Donation')
@section('page_title')

<title>Blood Bank</title>
    
@endsection
@section('small_title')
<span class="logo-mini"><b>B</b>Bank</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Blood</b> Bank</span>
    
@endsection
@section('home')



<section class="content-header">
    <h1>
      Admin Dashborad
      <small></small>
      <hr>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
    <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Clients</span>
        <span class="info-box-number">{{$client->count()}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Posts</span>
          <span class="info-box-number">{{$posts->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-phone"></i></span>
  
          <div class="info-box-content">
            <span class="info-box-text">Donations</span>
          <span class="info-box-number">{{$donations->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
</div>
  </section>

  

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>
      </div>
      <!-- /.box-body -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>

@endsection