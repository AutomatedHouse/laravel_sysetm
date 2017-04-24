/@extends('layouts.app')

@section('content')
    <center>

    <table>
        <tr>
           <td>
               picture of  device
           </td>
            <td>
                &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
            </td>

            <td>
                name
            </td>
            <td>
            </td>

            <td>
                current state
            </td>




        </tr>


        @foreach($device as  $viewdevice)



            <tr>
                <td>
                    <img src="pictures/lamp.jpg" height="100" width="100" />


                </td>
                <td>
                    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
                </td>

                <td>
                    {{ $viewdevice->name}}
                </td>
                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <td>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </td>
                <td>


                     @if ($viewdevice->current_state == 0 )

                         OFF
                         @endif
                     @if($viewdevice->current_state == 1)
                         ON
                         @endif

                </td>


            </tr>

        @endforeach


    </table>

    </center>

@endsection