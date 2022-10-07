<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Hugo Mayonobe</title>

    @include('layouts.head-css')
</head>

<body>

<!-- PRELOADER -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER ALL -->
<div class="cavani_tm_all_wrap" data-magic-cursor="show" data-enter="bounceIn" data-exit="">

    <div class="cavani_tm_left_border"></div>
    <div class="cavani_tm_right_border"></div>

    @include('components.header')

    <!-- /CONTENT -->
    <div class="cavani_tm_mainpart">
        <div class="author_image">
            <div class="main ripple" id="ripple"></div>
        </div>
        <div class="main_content">
            @include('pages.home')
            @include('pages.about')
            @include('pages.portfolio')
{{--            @include('pages.services')--}}
{{--            @include('pages.news')--}}
            @include('pages.contact')
        </div>
    </div>
    <!-- /CONTENT -->

    @include('components.footer')

    <!-- MAGIC CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /MAGIC CURSOR -->

</div>
<!-- / WRAPPER ALL -->

@include('layouts.scripts')
</body>
</html>
