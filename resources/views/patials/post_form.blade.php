<div class="form-group">
   <label for="name">Title </label> 
      {!!  Form::text('title',$model->title,[
         'class' => 'form-control'
     ]) !!}
 </div>
  <div class="form-group">
   <label for="name">Image </label> 
      {!!  Form::text('image',$model->image,[
         'class' => 'form-control'
     ]) !!}
 </div>
 <div class="form-group">
   <label for="name">Content </label> 
      {!!  Form::text('content',$model->content,[
         'class' => 'form-control'
     ]) !!}
 </div>

 <div class="form-group">
   <label for="name">category_id </label> 
      {!!  Form::text('category_id',$model->category_id,[
         'class' => 'form-control'
     ]) !!}
 </div>
  
  <div class="form-group">
     <button class="btn btn-primary" type="submit">Submit</button>
  </div>