@if(session('success'))
<div class="alert alert-dismissable alert-success fade show">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
  <strong>Success!</strong> {{session('success')}}    
</div>
@endif