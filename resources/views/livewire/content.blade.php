<div>
    <!-- MOBILE MENU -->
    <div class="cavani_tm_topbar">
        <div class="topbar_inner">
            <div class="logo" data-type="image">
                <!-- You can use text or image as logo. data-type values are: "image" and "text"  -->
                <a class="image" href="#"><img src="{{asset('img/logo/dark.png')}}" alt=""/></a>
                <a class="text" href="#"><span>MAYONOBE</span></a>
            </div>
            <div class="trigger">
                <div class="hamburger hamburger--slider">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cavani_tm_mobile_menu">
        <div class="inner">
            <div class="wrapper">
                <div class="avatar">
                    <div class="image" data-img-url="/img/about/1.jpg"></div>
                </div>
                <div class="menu_list">
                    <ul class="transition_link">
                        <li class="active"><a wire:click.prevent="updateCurrentTab(0)" href="">Accueil</a></li>
                        <li><a wire:click.prevent="updateCurrentTab(1)" href="">A propos</a></li>
                        <li><a wire:click.prevent="updateCurrentTab(2)" href="">Portfolio</a></li>
                        <li><a wire:click.prevent="updateCurrentTab(3)" href="">Contact</a></li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/facebook.svg')}}" alt=""/></a>
                        </li>
                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/twitter.svg')}}" alt=""/></a>
                        </li>
                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/instagram.svg')}}"
                                             alt=""/></a>
                        </li>
                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/dribbble.svg')}}" alt=""/></a>
                        </li>
                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/tik-tok.svg')}}" alt=""/></a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>Copyright &copy; 2022</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /MOBILE MENU -->

    <!-- HEADER -->
    <div class="cavani_tm_header" wire:ignore>
        <div class="logo" data-type="text">
            <!-- You can use text or image as logo. data-type values are: "image" and "text"  -->
            <a class="image" href="/"><img src="{{asset('img/logo/dark.png')}}" alt=""/></a>
            <a class="text" href="/"><span>MAYONOBE</span></a>
        </div>
        <div class="menu">
            <ul class="tabs">
                <li class="active"><a wire:click.prevent="updateCurrentTab(0)" href="">Accueil</a></li>
                <li><a wire:click.prevent="updateCurrentTab(1)" href="">A propos</a></li>
                <li><a wire:click.prevent="updateCurrentTab(2)" href="">Portfolio</a></li>
                <li><a wire:click.prevent="updateCurrentTab(3)" href="">Contact</a></li>
            </ul>
            <span class="ccc"></span>
        </div>
    </div>
    <!-- /HEADER -->

    <!-- /CONTENT -->
    <div class="cavani_tm_mainpart">
        <div class="author_image">
            <div class="main ripple" id="ripple"></div>
        </div>
        <div class="main_content">

            @if($currentTab == 0)
                @include('pages.home')
            @elseif($currentTab == 1)
                @include('pages.about')
            @elseif($currentTab == 2)
                @include('pages.portfolio')
            @elseif($currentTab == 3)
                @include('pages.contact')
            @endif

        </div>
    </div>
</div>
