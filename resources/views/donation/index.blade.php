@extends('layouts.app')
@section('page_title')

<title>Create Governorate</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>D</b>nation</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>donation</b> Egypt</span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>
        List Donation
      <small></small>
    
  </section>

  

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">list of donations</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
      <a href="{{url(route('governorate.create'))}}" class="btn btn-primary"><i class="fa fa-plus"> New Donation</i></a>
      <div class="clearfix"></div>
      <hr>
      @include('flash::message')
      @if (count($records))

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th >Name</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($records as $record)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td><a href="{{url(route('donation.index',$record->id))}}">{{$record->name}}</a></td>
              <td class="text-center"><i class="fa fa-edit">Edit</i>
              </td>
              <td class="text-center">
                  {!! Form::open([
                    'action' => ['DonationController@destroy',$record->id],
                    'method' => 'delete'
                ]) !!}

                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o">Delete</i></button>
                {!! Form::close() !!}
    
              </td>
              </tr> 
              @endforeach    
            </tbody>  
          </table>
        </div>

        @else 
        <div class="alert alert-danger" role="alert">
            NO Data 
        </div>
    @endif
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
