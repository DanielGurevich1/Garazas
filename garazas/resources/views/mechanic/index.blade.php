@foreach ($mechanics as $mechanic)
{{$mechanic->name}} {{$mechanic->surname}}
<form method="POST" action="{{route('mechanic.destroy', [$mechanic])}}">
    <button style="{{route('mechanic.edit', [$mechanic])}}" type="submit">edit</button>
    @csrf
    <button style="display:inline-block;" type="submit">DELETE</button>
</form>
<br>

@endforeach
