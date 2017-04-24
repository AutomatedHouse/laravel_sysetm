/@extends('layouts.app')

@section('content')



    <input name="group_name" value="{{$device->name}}"  >

    <form  method="post" action="/assign_device_user/{{$device->id}}">

        {{ csrf_field() }}
        <br/><br/>
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        user mail :  <select  name="user_email">

            @foreach($user as $dev)
                <option value="{{$dev->email}}">{{$dev->email}}</option>


            @endforeach
        </select>

        @if ($errors->has('user_email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
            @endif
            </div>
            </div>


            &nbsp;&nbsp;&nbsp;&nbsp;





            <input type="submit" value="add user to this group " name="adding" width="100">

    </form>







    <center>

        <table   border="" >
            <tr>
                <td>

                </td>

                <td>
                    first name
                </td>

                <td>

                    &nbsp;    &nbsp;

                </td>

                <td>
                    email

                </td>






            </tr>

            @foreach($user_device as $v)




                <tr>
                    <td>

                    </td>

                    <td>
                        {{$v->name}}
                    </td>

                    <td>

                    </td>


                    <td>
                        {{$v->email}}

                    </td>






            @endforeach










        </table>

    </center>








    <a href="/devices">  return to the previous page   </a>



@endsection