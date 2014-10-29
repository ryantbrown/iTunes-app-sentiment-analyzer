@extends('layout')

@section('content')

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">iTunes App Search</div>
  <div class="panel-body">
    <form class="form-inline" role="form" id="search-form">
      <div class="form-group">
        <input type="text" class="form-control" name="keywords" placeholder="Search, terms, like, this">
      </div>
      <div class="form-group">
        @include('partials.country-select')
      </div>
      <button type="submit" class="btn btn-default" id="search">Find Apps</button>
    </form>
  </div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">



<div class="panel panel-default" id="results">
  <div class="panel-heading">Search Results</div>
  <div class="panel-body">
    Waiting for search
  </div>
</div>
</div>
</div>

@stop