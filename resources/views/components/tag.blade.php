@props(['tag'])

<a class="card-tags" href="/tags/{{strtolower($tag->name)}}">{{$tag->name}}</a>
