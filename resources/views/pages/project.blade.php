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
        <div class="cavani_tm_section animated">
            <div class="content">
                <div class="top_image">
                    <img src="/storage/{{$portfolio->images[0]}}" alt="">
                </div>
                <div class="portfolio_main_title">
                    <h3>{{$portfolio->title}}</h3>
                    <span>{{$portfolio->subtitle}}</span>
                    <div></div>
                </div>
                <div class="main_details">
                    <div class="textbox">
                        {!! $portfolio->content !!}
                    </div>
                    <div class="detailbox">
                        <ul>
                            <li>
                                <span class="first">Technologies</span>
                                <ul style="list-style: circle; margin-left: 20px">
                                @foreach($portfolio->tags as $tag)
                                    <li><span>{{$tag}}</span></li>
                                @endforeach
                                </ul>
                            </li>
                            <li>
                                <span class="first">Date de création</span>
                                <span>{{$portfolio->created_at->format('d/m/Y')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="additional_images">
                    <ul>
                        <li>
                            <div class="list_inner">
                                <div class="my_image">
                                    <img src="{{asset('img/thumbs/4-2.jpg')}}" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <div class="my_image">
                                    <img src="{{asset('img/thumbs/4-2.jpg')}}" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <div class="my_image">
                                    <img src="{{asset('img/thumbs/4-2.jpg')}}" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
