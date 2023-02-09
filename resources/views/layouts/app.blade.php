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

    <meta name="title" content="Hugo Mayonobe">
    <meta name="description" content="Retrouvez l'ensemble de mes projets ainsi que mon parcours sur mon site portfolio !">
    <meta name="author" content="Hugo Mayonobe">
    <meta name="robots" content="index, follow" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Hugo Mayonobe</title>

    <link rel="canonical" href=" https://mayonobe.fr">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

    @include('layouts.head-css')
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/toastr/toastr.scss'])
    @livewireStyles
    @livewireScripts
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

    <livewire:content />

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
