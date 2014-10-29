@extends('layout')

@section('content')


<div class="row">
<div class="col-md-12">



<div class="panel panel-default" id="results">
  <div class="panel-heading">Reviews for "{{ $name }}"</div>
  <div class="panel-body">
<?php //echo '<pre>'; print_r($results['feed']->entry); ?>
<ul class="list-group">
@foreach($results['feed']->entry as $review)

@if(isset($review->content))


<li class="list-group-item">
<strong>{{ $review->title->label }}</strong><br>
<p>{{ $review->content->label }}</p>

</li>

@endif

<?php //echo '<pre>'; print_r($review); ?>

 {{--@if(isset($review->author))--}}
{{--<li class="list-group-item">--}}
{{--{{ $review->author->content }}--}}

{{--</li>--}}
 {{--@endif--}}

@endforeach
</ul>
  </div>
</div>
</div>
</div>

@stop