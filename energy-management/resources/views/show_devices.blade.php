

@extends('layouts.app')

@section('content')


@foreach($dev as  $v)



    <tr>
        <td>
            <img src="pictures/lamp.jpg" height="100" width="100" />


        </td>
        <td>
            &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
        </td>

        <td>
            {{ $v->name}}
        </td>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <td>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        </td>
        <td>

            <a href="/assign_device_user/{{$v-> id}}"> assign user to this device </a>

        </td>


    </tr>

@endforeach



@endsection