


    @extends('layouts.app')

@section('content')

    <div class="container">

       <!--<script  type="text/javascript" src="{{asset('jquery/jquery-3.2.1.slim.js')}} "></script> --!>

     <!--   <script type="text/javascript">

       $(function () {
             $('#errormsgs').hide();
           $('#action').click( function (e) {
               e.preventDefault();

               var action= $('input[name = "action"]').val();

           });


             $.ajax({
                 url:'store/}',
                 type:'post',
                 data:action   ,
                 //contentType:'multipart/form-data',
                 processData:false,
                 success:function (action) {

                     alert('action is successfully!:)');
                 },

                 error: function (action) {
                     $('#errormsgs').show();
                     $('#errormsgs').html('');
                     var errors = action.response;
                     $.each(errors,function (k,v) {
                         $('#errormsgs').append(v+"<br/>");

                         
                     });
                 }





             }));
       });



        </script>    !-->



        <br/> <br/>

        <div>
        <img src="pictures\lamp.jpg" value="first device " height="100" width="100" />
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            <img src="pictures/lamp.jpg" value="first device " height="100" width="100"  />
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
            <img src="pictures/lamp.jpg" value="first device " height="100" width="100"  />


        </div>
        <div class="form-group">
            <div >
                <a class="btn btn-primary"   href="store/{{$action='1on'}}">
                    <i class="fa fa-btn fa-user"></i> open device 1
                </a>
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;

               <!-- <button class="btn btn-primary" type="button" name="action" value="2on">
                    <i class="fa fa-btn fa-user"></i> open device 2
                </button>!-->
                <a class="btn btn-primary"   href="store/{{$action='2on'}}">
                    <i class="fa fa-btn fa-user"></i> open device 2
                </a>

                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;
               <!-- <button class="btn btn-primary" type="button" name="action" value="3on">
                    <i class="fa fa-btn fa-user"></i> open device 3
                </button>!-->
                <a class="btn btn-primary"   href="store/{{$action='3on'}}">
                    <i class="fa fa-btn fa-user"></i> open device 3
                </a>


            </div>




        </div>

        <div class="form-group">
            <div >
                <a class="btn btn-primary"  href="store/{{$action='1off'}}">
                    <i class="fa fa-btn fa-user"></i> close device 1
                </a>
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;

               <!-- <button class="btn btn-primary" type="button" name="action" value="2off">
                    <i class="fa fa-btn fa-user"></i> close device 2
                </button> !-->

                <a class="btn btn-primary"  href="store/{{$action='2off'}}">
                    <i class="fa fa-btn fa-user"></i> close device 2
                </a>


                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;
                &nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;


               <!-- <button class="btn btn-primary" type="button" name="action" value="3off">
                    <i class="fa fa-btn fa-user"></i> close device 3
                </button>!-->

                <a class="btn btn-primary"  href="store/{{$action='3off'}}">
                    <i class="fa fa-btn fa-user"></i> close device 3
                </a>

            </div>


        </div>





    </div>




    &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="/control_on_groups">  to control on your group click here .</a>



   <!-- <div class="alert alert-danger" id="errormsgs">


    </div> !-->



@endsection

