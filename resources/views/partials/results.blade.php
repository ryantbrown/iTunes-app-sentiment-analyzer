<ul class="list-group">
    @foreach($results['results'] as $result)
  <li class="list-group-item">
    <?php //echo '<pre>'; print_r($result); ?>
    <span class="title">{{ $result->trackName }}</span>
    <span class="badge">{{ date('M jS Y', strtotime($result->releaseDate)) }}</span>
  <a href="/reviews?id={{$result->trackId}}&name={{ $result->trackName }}" target="_blank" class="badge blue">Show Reviews</a>
  </li>
  @endforeach
</ul>