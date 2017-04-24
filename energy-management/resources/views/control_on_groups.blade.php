

/@extends('layouts.app')

@section('content')


    <!--  <table> -->



            @foreach($user_groups as  $v)
                <br/> <br/>
                  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                        <img src="pictures/2.jpg" height="100" width="100" />


                &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                        {{ $v->name}}

                &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                  <a class="btn btn-primary"   href="group_con/{{$v->name}}/{{$state='on'}}">
                      <i class="fa fa-btn fa-user"></i> open
                  </a>
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;


                  <a class="btn btn-primary"   href="group_con/{{$v->name}}/{{$state='off'}}">
                      <i class="fa fa-btn fa-user"></i> close
                  </a>

                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;











                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                  &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp;





            @endforeach






@endsection