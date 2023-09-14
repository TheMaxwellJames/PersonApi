<!DOCTYPE html>
<html lang="en">



<head>
    @include('index.css')
</head>

<body class="home">

<!-- Header Starts -->


@include('index.header')


<!-- Header Ends -->
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 position-fixed d-none d-lg-block">
            <img src="{{ url('public/img/' . $getrecord[0]->profile) }}" alt="" width="475px" height="100px" style="
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            height: calc(100vh - 80px);
            z-index: 111;
            border-radius: 30px;
            box-shadow: 0 0 7px rgba(0,0,0,.9)
            ">
        </div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                 <img src="{{ url('public/img/' . $getrecord[0]->profile) }}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
               <p>HI THERE</p> <h1 class="text-uppercase poppins-font">I'm {{ @$getrecord[0]->your_name }}<span>{{ @$getrecord[0]->work_experience }}</span></h1>
                <p class="open-sans-font">{{ @$getrecord[0]->description }}</p>
                <a class="button" href="{{url('about')}}">
                    <span class="button-text">more about me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->


@include('index.script')

</body>

</html>
