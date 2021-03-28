@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>

                <div class="card-body">

                    @foreach ($trucks as $truck)
                    {{$truck->maker}} {{$truck->plate}}: <a href="{{route('truck.edit',[$truck])}}">[edit]</a>
                    <form method="POST" action="{{route('truck.destroy', [$truck])}}">
                        @csrf
                        <button type="submit">DELETE</button>
                    </form>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
