@extends('landing::layouts.master')

@section('content')
    <section class="landing">
        <div class="landing-inner">
            <img src="{{asset('images/logo2.jpeg')}}" width="200"/>
            <h1>Coming Soon</h1>
            <div class="countdown"></div>
            <br>
            <br>
            <div class="row">
                {{--<div class="col col-span-1"> <label>Checkin <input id="datepicker1" width="270" /></label></div>
                <div class="col col-span-1"><label>Checkout<input id="datepicker2" width="270" /></label></div>
                --}}
                <div class="col col-span-1"><input type="text"  width="270" placeholder="Name.."></div>
                <div class="col col-span-1"> <input type="email" width="270" placeholder="Email.."></div>
                <div class="col col-span-1"> <input type="number" width="270" placeholder="Contact no..."></div>
                <div class="col col-span-1"><textarea  rows="5" cols="35" width="270">Comments...</textarea></div>

            </div>
            <div class="container">
                <a href="#" class="btn-1"><span>Submit</span></a>
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

    </script>

@endsection
