<div>
<h2>This is Header Component {{$name}}</h2>

<ul>
    @foreach($info as $single)
        {{$single}}
    @endforeach
</ul>
</div>