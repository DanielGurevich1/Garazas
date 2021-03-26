<form method="POST" action="{{route('truck.store')}}">
    Maker: <input type="text" name="truck_maker">
    Plate: <input type="text" name="truck_plate">
    Make Year: <input type="text" name="year">
    Mechanic notes: <textarea name="truck_mechanic_notices"></textarea>
    {{-- important that here we foreach mechanics and not trucks --}}
    <select name="mechanic_id">
        @foreach ($ as $mechanic)
        <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
        @endforeach
    </select>
    @csrf
    <button type="submit">ADD</button>
</form>
