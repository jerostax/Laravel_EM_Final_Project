@if(Session::has('message-danger'))
<div class="alert alert-danger  alert-dismissible fade show" role="alert">
    <p style=''>{{Session::get('message-danger')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
@endif
@if(Session::has('message-success'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
    <p style=''>{{Session::get('message-success')}}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
@endif