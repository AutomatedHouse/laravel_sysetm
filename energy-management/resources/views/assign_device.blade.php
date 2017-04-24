/@extends('layouts.app')

@section('content')



    <input name="group_name" value="{{$group->name}}"  >

    <form  method="post" action="/assign_device/{{$group->id}}">

        {{ csrf_field() }}
        <br/><br/>
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        device name :  <select  name="device_name">

            @foreach($alldevices as $dev)
            <option value="{{$dev->name}}">{{$dev->name}}</option>


            @endforeach
        </select>

        @if ($errors->has('device_name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('device_name') }}</strong>
                                    </span>
            @endif
            </div>
            </div>


            &nbsp;&nbsp;&nbsp;&nbsp;





                <input type="submit" value="add device to this group " name="adding" width="100">

    </form>







    <center>

        <table   border="" >
            <tr>
                <td>

                </td>

                <td>
                    group devices
                </td>

                <td>

                    &nbsp;    &nbsp;

                </td>

                <td>
                    description

                </td>






            </tr>

            @foreach($value as $v)




                <tr>
                    <td>

                    </td>

                    <td>
                        {{$v->name}}
                    </td>

                    <td>

                    </td>


                    <td>
                        {{$v->description}}

                    </td>






            @endforeach










        </table>

    </center>








    <a href="/grouping">  return to the previous page   </a>



   @endsection