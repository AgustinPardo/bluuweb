@extends('plantilla')

@section('seccion')

    <h1>Este es mi equipo de trabajo</h1>

    @foreach ($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach

    @if(!empty($nombre))

        @switch($nombre)
            @case($nombre=='Ignacio')
                <h2 class="mt-5">El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias praesentium veniam enim voluptatem at adipisci, voluptatibus voluptates reiciendis omnis assumenda nisi, temporibus a saepe molestiae quaerat, nesciunt ea beatae soluta?</p>
            @break
            @case($nombre=='Juanito')
                <h2 class="mt-5">El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias praesentium veniam enim voluptatem at adipisci, voluptatibus voluptates reiciendis omnis assumenda nisi, temporibus a saepe molestiae quaerat, nesciunt ea beatae soluta?</p>
            @break
            @case($nombre=='Pedrito')
                <h2 class="mt-5">El nombre es {{$nombre}}</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias praesentium veniam enim voluptatem at adipisci, voluptatibus voluptates reiciendis omnis assumenda nisi, temporibus a saepe molestiae quaerat, nesciunt ea beatae soluta?</p>
            @break
                
        @endswitch
       
    @endif

@endsection