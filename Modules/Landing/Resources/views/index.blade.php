@extends('landing::layouts.master')

@section('content')
    <div id="load" class="load">
        <img src="{{asset('assets/img/hippo_load.gif')}}" width="50%" >
    </div>

    <div id="outer-wrapper" class="animate translate-z-in">

        <div id="inner-wrapper">
            <div id="table-wrapper" class="center">
                <div class="container">
                    <div id="row-header">
                        <header><a href="#" id="brand" class="animate animate fade-in animation-time-3s desktop"><img src="{{asset('assets/img/Assests_Negative logo Horizontal.png')}}" alt="" width="20%"></a></header>
                        <header><a href="#" id="brand" class="animate animate fade-in animation-time-3s mobile"><img src="{{asset('assets/img/mobile_logo.png')}}" alt="" width="20%"></a></header>
                    </div>
                    <!--end row-header-->
                    <div id="row-content">
                        <div id="content-wrapper">
                            <div id="content" class="animate translate-z-in animation-time-2s delay-03s">
                                <!-- <div id="loading" class="loading"></div> -->
                                <h1  class='animate__animated animate__swing animate__infinite infinite'>We're Coming Soon!</h1>
                                <h2 class="opacity-70">Contat us when the site come back!  No worries,no spam </h2>
                                <a href="#contact" class="open-side-panel btn btn-default btn-framed">Get notify</a><br>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end content-wrapper-->
                    </div>
                    <!--end row-content-->
                    <div id="row-footer">
                        <footer>
                            <div class="social-icons">
                            </div>
                        </footer>
                    </div>
                    <!--end row-footer-->
                </div>
                <!--end container-->
            </div>
            <!--end table-wrapper-->
            <div class="background-wrapper has-vignette">
                <div id="particles-js"></div>
                <div class="bg-transfer opacity-90"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end inner-wrapper-->
    </div>
    <div class="side-panel" id="contact">
        <div class="close-panel"><i class="fa fa-chevron-left"></i></div>
        <div class="wrapper">
            <div class="tse-scrollable">
                <div class="tse-content">
                    <div class="wrapper">
                        <div class="container">

                            <h2>Get Notify</h2>
                            <section>
                                <div class="row">
                                    <toast id="toast" style="display:none;background: green; color:white;padding: 10px;width: 500px; margin-left: 50px;z-index: 999;margin-bottom: 50px;" >Thank you</toast>

                                    <!-- <div class="col-md-6 col-sm-6">
                                        <h3>Address</h3>
                                        <address>
                                            4758 Nancy Street
                                            <br>
                                            +1 919-571-2528
                                            <br>
                                            <a href="#">hello@example.com</a>
                                        </address>
                                    </div> -->
                                    <!--end col-sm-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <figure><a href="" class="icon"><i class="fa fa-facebook"></i>Facebook</a></figure>
                                        <!--                                     <figure><a href="" class="icon"><i class="fa fa-twitter"></i>Twitter</a></figure>
                                                                            <figure><a href="" class="icon"><i class="fa fa-youtube"></i>Youtube</a></figure>
                                                                            <figure><a href="" class="icon"><i class="fa fa-pinterest"></i>Pinterest</a></figure> -->
                                    </div>
                                    <!--end col-sm-6-->
                                </div>
                            </section>
                            <!-- <section>
                                <h3>Map</h3>
                                <div class="map" id="map-contact"></div>
                            </section> -->
                            <section>
                                <h3>Subscribe us to get more</h3>
                                <form id="form-contact"  class="form clearfix inputs-underline">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                                <p style="color: red" id="validation-errors_name"></p>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="form-contact-cnumber" name="contact_no" placeholder="Contact no" required>
                                                <p style="color: red" id="validation-errors_contact_no"></p>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                                <p style="color: red" id="validation-errors_email"></p>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="form-contact-message" rows="8" name="comments" placeholder="Your Message" required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn pull-right btn-default btn-framed btn-rounded" id="form-contact-submit">Subscribe us</button>
                                    </div>
                                    <!--end form-group -->
                                    <div class="form-contact-status"></div>
                                </form>
                                <!--end form-contact -->
                            </section>
                        </div>
                        <!--end container-->
                    </div>
                    <!--end wrapper-->
                </div>
                <!--end tse-content-->
            </div>
            <!--end tse-scrollable-->
        </div>
        <!--end wrapper-->
    </div>
    <div class="backdrop"></div>

@endsection
@section('js')
    <script>
        document.onreadystatechange = function () {
            var state = document.readyState
            if (state == 'interactive') {
                document.getElementById('outer-wrapper').style.visibility="hidden";
            } else if (state == 'complete') {
                setTimeout(function(){
                    document.getElementById('load').style.display="none";
                    document.getElementById('outer-wrapper').style.visibility="visible";
                },1000);
            }
        }

    </script>
    <script>

        let nameerror=$('#validation-errors_name');
        let emailerror=$('#validation-errors_email');
        let contact_noerror=$('#validation-errors_contact_no');
        $("#form-contact-name").on("change paste keyup", function() {
            nameerror.text('')
        });
        $('#form-contact-email').on("change paste keyup",function()
        {
            emailerror.text('');

        })

        $('#form-contact-cnumber').on("change paste keyup",function()
        {
            contact_noerror.text('');

        })

        $('#form-contact-submit').click(function (e)
        {
            e.preventDefault();

            let name=$('input[name="name"]').val();
            let email=$('input[name="email"]').val();
            let contact_no=$('input[name="contact_no"]').val();
            let comments=$('textarea[name="comments"]').val();

            nameerror.text('');
            emailerror.text('');
            contact_noerror.text('');

            //Ajax call for the submit contact info
            $.ajax({
                type: 'post',
                url: "{{route('contacts.store')}}",
                data: {
                    'name': name,
                    'email': email,
                    'contact_no': contact_no,
                    'comments': comments,
                    '_token':"{{csrf_token()}}",
                },
                success: function(data)
                {
                    document.getElementById('toast').style.display="block";
                    setInterval(function(){ document.getElementById('toast').style.display="none";
                    },3000);

                },
                error: function (xhr) {

                    $('#validation-errors').html('');
                    $.each(xhr.responseJSON.errors, function(key,value) {
                        $(`#validation-errors_${key}`).append(value[0]);
                        console.log(key,value[0])
                    });
                },

            });

        });

    </script>

@endsection
