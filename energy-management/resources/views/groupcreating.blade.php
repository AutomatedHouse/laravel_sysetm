/@extends('layouts.app')

@section('content')


    <form  method="post" action="/grouping">

        {{ csrf_field() }}
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text"  name="group_name" placeholder="group name" height="200">

        @if ($errors->has('group_name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('group_name') }}</strong>
                                    </span>
            @endif
            </div>
            </div>
        <br/>
        <br/>


        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="description" placeholder="group description" width="300" ></textarea>




            @if ($errors->has('description'))
                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                @endif
                </div>
                </div>

          &nbsp;&nbsp;
        <br/>
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        <input type="submit" value="add" name="adding" width="100">

    </form>








    <center>

        <table   border="" >
            <tr>
                <td>

                </td>

                <td>
                    group name
                </td>

                <td>

                    &nbsp;    &nbsp;

                </td>

                <td>
                     description

                </td>

              <td>
                 updating
              </td>

                <td>
                    assign device to group
                </td>

                <td>
                    assign group to user
                </td>


            </tr>

            @foreach($allgroup as $algr)




                <tr>
                    <td>

                    </td>

                    <td>
                        {{$algr->name}}
                    </td>

                    <td>

                    </td>


                    <td>
                        {{$algr->description}}

                    </td>


                    <td>
                        <a href="/update_group/{{$algr->id}}">update</a>
                    </td>

                    <td>
                        <a href="/assign_device/{{$algr->id}}">assign device </a>
                    </td>

                    <td>
                        <a href="/group_user/{{$algr->id}}">assign users </a>
                    </td>




            @endforeach










        </table>

    </center>

@endsection