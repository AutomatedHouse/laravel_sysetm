@extends('layouts.app')

@section('content')





<center>
    @foreach($pattern_device as  $v)


        <img src="pictures\3.jpg" height="100" width="100" />
        &nbsp;&nbsp;&nbsp;


        {{ $v->name}}

        <br/>
        <br/>
        <br/>

    @endforeach

    <a href="/pattern_of_rationalize">  previous page</a>
</center>


@endsection