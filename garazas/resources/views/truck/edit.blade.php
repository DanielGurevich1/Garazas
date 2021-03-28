@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>

                <div class="card-body">
                    <form method="post" action="{{route('truck.update',[$truck])}}">
                        <div class="form-group">
                            <label>Maker</label>
                            <input type="text" class="form-control" name="truck_maker" value="{{$truck->maker}}">
                            <small class="form-text text-muted">Kažkoks parašymas.</small>
                            <label>Plate</label>
                            <input type="text" class="form-control" name="truck_plate" value="{{$truck->plate}}">
                            <small class="form-text text-muted">Kažkoks parašymas.</small>
                            <label>Plate</label>
                            <input type="text" class="form-control" name="jonas" value="{{$truck->year}}">
                            <small class="form-text text-muted">Kažkoks parašymas.</small>
                            Mechanic notes: <textarea name="truck_mechanic_notices" id="summernote">{{$truck->mechanic_notices}}</textarea>
                            <select name="mechanic_id">
                                @foreach ($mechanics as $mechanic)
                                <option value="{{$mechanic->id}}" @if($mechanic->id == $truck->mechanic_id) selected @endif>
                                    {{$mechanic->name}} {{$mechanic->surname}}
                                </option>
                                @endforeach
                            </select>
                            @csrf
                            <button type="submit" class="btn btn-primary">EDIT</button>
                    </form>
                </div>
            </div>
        </div>







    </div>
</div>
</div>
</div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        $('#summernote').summernote();
    });

</script>
@endsection
