@php
    $name = "raihan";
    $value = array("a");
@endphp

<h2>{{$name}}</h2>

<h2>value</h2>

@foreach ($value as $item)
    {{$item}}
@endforeach

@for($i = 0;$i<=10;$i++)
{{$i}}
@endfor

@if(count($value) === 1)
single
@elseif(count($value) > 1)
more then one
@else
No Found
@endif
