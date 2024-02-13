<h1>{{$heading}}</h1>

@unless(count($listings) == 0)

@foreach($listings as $listing )
<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
</h2>

<p>{{$listing['descriptuon']}}</p>
@endforeach

@else
<p>no listing Found</p>
@endunless