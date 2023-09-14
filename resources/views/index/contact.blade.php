<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 23:26:09 GMT -->
<head>
@include('home.css')
</head>

<body class="contact">

<!-- Header Starts -->


@include('home.header')


<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get in <span>touch</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">

        @include('message')

        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                <p class="open-sans-font mb-3">{{ $getrecord->name }}</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span> {{$getrecord->email}}
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span>{{$getrecord->mobile}}
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="https://{{$getrecord->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter"><a title="Twitter" href="https://{{$getrecord->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="Instagram"><a title="Instagram" href="https://{{$getrecord->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="Github"><a title="Github" href="https://{{$getrecord->github}}" target="_blank"><i class="fa fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <form  method="post" action="{{ url('contact/post') }}">
                    @csrf
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" placeholder="YOUR NAME">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" placeholder="YOUR EMAIL">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" placeholder="YOUR SUBJECT">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                <button type="submit" class="button">
                                    <span class="button-text">Send Message</span>
                                    <span class="button-icon fa fa-send"></span>
                                </button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>
<!-- Template JS Files -->


@include('home.script')

</body>



</html>