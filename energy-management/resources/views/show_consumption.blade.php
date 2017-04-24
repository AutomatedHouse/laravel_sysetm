@extends('layouts.app')

@section('content')

    <center>
    <table  border="5"  >


        <tr>
          <td>
            consumption of hour

          </td>

            <td>

            </td>


            <td>
                  consumption  amount

            </td>

            <td>

            </td>

            <td>
                consumption  cost L.E

            </td>


            <td>

            </td>





        </tr>

    @foreach($consume as $consum)


     <tr>


         <td>  {{$consum->consumption_hour}}      </td>


         <td>

         </td>

         <td>  {{$consum->consumption_amount}}      </td>

         <td>

         </td>
         <td>  {{$consum->consumption_cost}}        </td>

         <td>

         </td>



     </tr>



    @endforeach

    </table>

        <a href="/consumption"> previous page </a>

    </center>







@endsection