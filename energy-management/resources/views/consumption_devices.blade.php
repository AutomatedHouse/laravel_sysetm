/@extends('layouts.app')

@section('content')



@foreach($devices as $device)








                <img src="pictures/lamp.jpg" height="100" width="100" />

                <a href="/consumption_of_specific/{{$device->id}}">  show consumption of this device {{$device->name}}   </a>

               <br/>



@endforeach




@endsection