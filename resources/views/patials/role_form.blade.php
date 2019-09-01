@inject('permission', 'App\Permission')


<div class="form-group">
        <label for="name">Name </label> 
           {!!  Form::text('name',$model->name,[
              'class' => 'form-control'
          ]) !!}
      </div>

      <div class="form-group">
            <label for="name">Display name </label> 
               {!!  Form::text('display_name',$model->display_name,[
                  'class' => 'form-control'
              ]) !!}
          </div>     
          
          <div class="form-group">
                <label for="name">Description</label> 
                   {!!  Form::textarea('description',$model->description,[
                      'class' => 'form-control'
                  ]) !!}
              </div>    
              
              <div class="form-group">
                  <label for="name">Permissions</label><br>
                  <input id="select-all" type="checkbox"><label for='selectAll'>Select All</label>
                  <div class="row">
                      @foreach ($permission->all() as $perm)
                      <div class="col-sm-3">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="permission_list[]" value="{{$perm->id}}"

                                  @if ($model->hasPermission($perm->name))
                                      checked
                                  @endif
                                  >
                                  {{$perm->display_name}}
                              </label>
                          </div>                      
                     </div>
                     @endforeach
             </div>        
            </div>
    @push('scripts')

    <script>
    $("#select-all").click(function(){
        $("input[type=checkbox]").prop('checked', $(this).prop('checked'));

});

    
    
    </script>
        
    @endpush
<div class="form-group">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>