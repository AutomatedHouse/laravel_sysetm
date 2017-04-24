@extends('layouts.app')

@section('content')





    <center>
        <table  border="5"  >


            <tr>
                <td>
                    pattern action

                </td>

                <td>

                </td>


                <td>
                    click to see  device open in pattern

                </td>

                <td>

                </td>

                <td>
                    acceptance

                </td>


                <td>

                </td>





            </tr>

            @foreach($pattern as $pater)


                <tr>


                    <td>   device {{$pater->device_id}}      </td>


                    <td>

                    </td>

                    <td>  <a href="/show_event/{{$pater->id}}"> see open devices  </a>      </td>

                    <td>

                    </td>
                    <td>  <a href="">  acceptance </a>       </td>

                    <td>

                    </td>



                </tr>



            @endforeach

        </table>

        <a href="/"> previous page </a>

    </center>


















@endsection