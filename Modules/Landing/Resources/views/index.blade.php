@extends('landing::layouts.master')

@section('content')
    <section class="landing">
        <div class="landing-inner">
            {{--<img src="{{asset('images/logo2.jpeg')}}" width="200"/>
           --}}
             <h1 id="demo">we will launch soon</h1>
            <br>
            <span class="fonteo"></span>
            <br>
            <br>
            <br>
            <div class="countdown"></div>
            <br>
            <br>
            <div class="row">
                {{--<div class="col col-span-1"> <label>Checkin <input id="datepicker1" width="270" /></label></div>
                <div class="col col-span-1"><label>Checkout<input id="datepicker2" width="270" /></label></div>
                --}}
                <div class="col col-span-1"> <input id="name" type="text" placeholder="enter your name"></div>
                <div class="col col-span-1"> <input id="email" type="email" width="270" placeholder="Email.."></div>
                <div class="col col-span-1"> <input id="contact_no" type="text" width="270" placeholder="+94........."></div>
                <div class="col col-span-1"> <input id="comments" type="text" width="270" placeholder="Comments..."></div>

            </div>
            <div class="container">
                <a  id="submit" href="#" class="btn-1"><span>Submit</span></a>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        //Datepicker
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap'
        });


        //Launch soon animation
       $(function(){
            $('#demo').jBlink();
        });



        const countdown = document.querySelector('.countdown');

        // Set Launch Date (ms)
        const launchDate = new Date('Jan 1, 2022 13:00:00').getTime();

        // Update every second
        const intvl = setInterval(() => {
            // Get todays date and time (ms)
            const now = new Date().getTime();

            // Distance from now and the launch date (ms)
            const distance = launchDate - now;

            // Time calculation
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display result
            countdown.innerHTML = `
          <div>${days}<span>Days</span></div>
          <div>${hours}<span>Hours</span></div>
          <div>${mins}<span>Minutes</span></div>
          <div>${seconds}<span>Seconds</span></div>
          `;

            // If launch date is reached
            if (distance < 0) {
                // Stop countdown
                clearInterval(intvl);
                // Style and output text
                countdown.style.color = '#17a2b8';
                countdown.innerHTML = 'Launched!';
            }
        }, 1000);

        //Coming soon animation options
        var opts = {
            text: 'Coming soon',
            direction: 'right',
            infinite: true,
            moving: true,
            pauseOnHover: true,
            speed: 3,
            letterIn: function(lr){
                lr.animate({'font-size':'30px', 'margin-left':'5px' ,'font-family':'Lato' })
                lr.css('color','green')

                setTimeout( function(){
                    lr.css('color','blue')
                    lr.animate({'font-size':'20px', 'margin-left':'22px'  })
                }, 100 )

                setTimeout( function(){
                    lr.animate({'font-size':'50px', 'margin-left':'0px' ,'font-family':'Droid serif' })
                    lr.css('color','black')
                }, 200 )
            },
            letterOut: function(lr){
                lr.animate({'font-size':'10px'},500,function(){
                    $(this).fadeOut(300, function(){ $(this).remove() })
                })
            }
        }

        $('.fonteo').fonteo( opts )

    </script>
    <script>
        $('#submit').click(function ()
        {
            let name=$('#name').val();
            let email=$('#email').val();
            let contact_no=$('#contact_no').val();
            let comments=$('#comments').val();


            //Ajax call for the submit contact info
            $.ajax({
                type: 'post',
                url: '/api/sort_order_item',
                data: {
                    'items': items,
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                },
                success: function()
                {
                    alert('looks like it is working...');
                },
            });

        });

    </script>

@endsection
