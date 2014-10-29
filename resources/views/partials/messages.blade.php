@if (Session::has('errors'))
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
  </button>
  <strong>There was a problem</strong>
  <p>@foreach($errors->all() as $error) {{ $error }} <br> @endforeach</p>
</div>
@endif