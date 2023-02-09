<div>
    <!-- MOBILE MENU -->
    <div class="cavani_tm_topbar">
        <div class="topbar_inner">
            <div class="logo" data-type="text">
                <!-- You can use text or image as logo. data-type values are: "image" and "text"  -->
                <a class="text" href="/"><span>MAYONOBE</span></a>
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
                        <li><a target="_blank" href="https://www.linkedin.com/in/hugo-mayonobe/?originalSubdomain=fr"><img class="svg" src="/img/svg/social/linkedin.svg" alt=""/></a></li>
                        <li><a target="_blank" href="https://github.com/hugomayo7"><img class="svg" src="/img/svg/social/github.svg" alt=""/></a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>Copyright &copy; 2023</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /MOBILE MENU -->

    <!-- HEADER -->
    <div class="cavani_tm_header" wire:ignore>
        <div class="logo" data-type="text">
            <!-- You can use text or image as logo. data-type values are: "image" and "text"  -->
            <a class="text" href="/"><span>MAYONOBE</span></a>
        </div>
        <div class="menu">
            <ul class="tabs transition_link">
                <li class="active"><a wire:click.prevent="updateCurrentTab(0)" href="#home">Accueil</a></li>
                <li><a wire:click.prevent="updateCurrentTab(1)" href="#about">A propos</a></li>
                <li><a wire:click.prevent="updateCurrentTab(2)" href="#portfolio">Portfolio</a></li>
                <li><a wire:click.prevent="updateCurrentTab(3)" href="#contact">Contact</a></li>
            </ul>
            <span class="ccc"></span>
        </div>
    </div>
    <!-- /HEADER -->

    <!-- /CONTENT -->
    <div class="cavani_tm_mainpart">
        <div class="author_image">
            <div class="main ripple" id="ripple" style="filter: brightness(1.3);"></div>
        </div>
        <div class="main_content">

            <div class="cavani_tm_section {{ $currentTab == 0 ? 'animated bounceIn' : ''}}" id="home"
                 style="{{ $currentTab == 0 ? '' : 'display: none' }}">
                @include('pages.home')
            </div>
            <div class="cavani_tm_section {{ $currentTab == 1 ? 'animated bounceIn' : ''}}" id="about"
                 style="{{ $currentTab == 1 ? '' : 'display: none' }}">
                @include('pages.about', ['abouts' => $abouts])
            </div>
            <div class="cavani_tm_section {{ $currentTab == 2 ? 'animated bounceIn' : ''}}" id="portfolio"
                 style="{{ $currentTab == 2 ? '' : 'display: none' }}">
                @include('pages.portfolio')
            </div>
            <div class="cavani_tm_section {{ $currentTab == 3 ? 'animated bounceIn' : ''}}" id="contact"
                 style="{{ $currentTab == 3 ? '' : 'display: none' }}">
                @include('pages.contact')
            </div>

        </div>

        @if($selectedPortfolio)
            <div class="cavani_tm_modalbox" wire:ignore.self>
                <div class="box_inner">
                    <div class="close"><a href="#"><i class="icon-cancel"></i></a></div>
                    <div class="description_wrap">
                        <div class="popup_details">
                            <div class="top_image"><img style="opacity: 1 !important;"
                                                        src="/storage/{{ $selectedPortfolio->images[0] }}" alt="">
                            </div>
                            <div class="portfolio_title" style="margin-bottom: 20px">
                                <h3>{{ $selectedPortfolio->title }}</h3>
                                <span>{{ $selectedPortfolio->subtitle }}</span>
                                <div></div>
                            </div>
                            <div class="main_details">
                                <div class="textbox2">
                                    {!! $selectedPortfolio->content !!}
                                </div>
                                <div class="detailbox">
                                    <ul>
                                        <li>
                                            <span class="first">Auteur</span>
                                            <span>Hugo Mayonobe</span>
                                        </li>
                                        <li>
                                            <span class="first">Technologies</span>
                                            @foreach($selectedPortfolio->tags as $tag)
                                                <span>{{ $tag }}</span><br>
                                            @endforeach
                                        </li>
                                        <li>
                                            <span class="first">Date</span>
                                            <span>{{ $selectedPortfolio->created_at->format('d/m/Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if(count($selectedPortfolio->images) > 1)
                            <div class="additional_images">
                                <ul>
                                    @foreach(array_slice($selectedPortfolio->images, 1) as $img)
                                        <li>
                                            <div class="list_inner">
                                                <div class="my_image">
                                                    <img style="opacity: 1 !important;" src="/storage/{{$img}}" alt=""/>
                                                    <div class="main" data-img-url="img/portfolio/1.jpg"></div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
