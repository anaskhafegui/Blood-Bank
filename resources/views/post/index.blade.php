@extends('layouts.app')
@section('page_title')

<title>Create Post</title>
    
@endsection

@section('small_title')
<span class="logo-mini"><b>P</b>ost</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Post</b> Egypt</span>
    
@endsection


@section('home')



<section class="content-header">
    <h1>
        List Post
      <small></small>
    
  </section>

  

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">list of Posts</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
      <a href="{{url(route('post.create'))}}" class="btn btn-primary"><i class="fa fa-plus"> New Post</i></a>
      <div class="clearfix"></div>
      <hr>
      @include('flash::message')
      @if (count($records))

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th >Title</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($records as $record)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$record->title}}</td>
              <td class="text-center"><a href="{{url(route('post.edit',$record->id))}}" class="btn btn-success btn-xs"><i class="fa fa-edit">Edit</i></a>
              </td>
              <td class="text-center">
                  {!! Form::open([
                    'action' => ['PostController@destroy',$record->id],
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
