<form method="post" action="{{route('truck.update',[$truck])}}">
    Maker: <input type="text" name="truck_maker" value="{{$truck->maker}}">
    Plate: <input type="text" name="truck_plate" value="{{$truck->plate}}">
    Make Year: <input type="text" name="jonas" value="{{$truck->make_year}}">
    Mechanic notes: <textarea name=" truck_mechanic_notices">{{$truck->mechanic_notices}}</textarea>


    <select name="mechanic_id">
        @foreach ($mechanics as $mechanic)
        <option value="{{$mechanic->id}}" @if($mechanic->id == $truck->mechanic_id) selected @endif>
            {{$mechanic->name}} {{$mechanic->surname}}
        </option>
        @endforeach
    </select>
    @csrf
    <button type="submit">EDIT</button>
</form>
