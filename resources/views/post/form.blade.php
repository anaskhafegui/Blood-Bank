
<div class="form-group">

    <label for="name">Title</label>
    {!! Form::text('title',$model->title, [
        'class' => 'form-control'
    ]) !!}

    <label for="name">content</label>
    {!! Form::text('content',$model->content, [
        'class' => 'form-control'
    ]) !!}


<label for="name">image</label>
{!! Form::text('image',$model->image ,[
    'class' => 'form-control'
]) !!}
</div>

<div class="form-group">
    <button class="btn btn-primary" type="submit">Submit</button>
 </div>