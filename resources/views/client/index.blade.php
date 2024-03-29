@extends('layouts.app')
@section('page_title')

<title>Clients</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>C</b>lients</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Clients</b></span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>
        Clients
      <small></small>
    
  </section>

  

  <!-- Main content -->
   <!-- Main content -->
   <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">list Clients</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        {!! Form::open([
            'method' => 'get',
            'action' => 'ClientController@index'
        ]) !!}
        @include('functions.search')
        <br>

        @if (count($records))
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr >
                            <th>#</th>
                            <th class="text-center">NAME</th>
                            <th class="text-center">email</th>
                            <th class="text-center">birthdate</th>
                            <th class="text-center">phone</th>
                            <th class="text-center">bloodtype</th>
                            <th class="text-center">city</th>
                            <th class="text-center">DELETE</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        @foreach ($records as $record)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$record->name}}</td>
                            <td>{{$record->email}}</td>
                            <td>{{$record->bithday}}</td>
                            <td>{{$record->phone}}</td>
                            <td>{{$record->bloodtype['type']}}</td>
                            <td>{{$record->city['name']}}</td>

                                <td>
                                    {!! Form::open([
                                        'action' => ['ClientController@destroy', $record->id],
                                        'method' => 'DELETE'
                                    ]) !!}

                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-dengar " role="alert">
                no data found
            </div>
        @endif


      </div>
      <!-- /.box-body -->
      </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->


@endsection