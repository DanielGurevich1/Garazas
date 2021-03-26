@foreach ($trucks as $truck)
{{$truck->maker}} {{$truck->plate}}: <a href="{{route('truck.edit',[$truck])}}">[edit]</a>
<form method="POST" action="{{route('truck.destroy', [$truck])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach
