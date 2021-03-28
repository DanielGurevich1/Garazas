@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>

                <div class="card-body">
                    <form method="POST" action="{{route('truck.store')}}">
                        Maker: <input type="text" name="truck_maker">
                        Plate: <input type="text" name="truck_plate">
                        Make Year: <input type="text" name="year">
                        Mechanic notes: <textarea name="truck_mechanic_notices" id="summernote"></textarea>
                        {{-- important that here we foreach mechanics and not trucks --}}
                        <select name="mechanic_id">
                            @foreach ($mechanics as $mechanic)
                            <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
                            @endforeach
                        </select>
                        @csrf
                        <button type="submit">ADD</button>
                    </form>
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
