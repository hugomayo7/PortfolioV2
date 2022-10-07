<div class="cavani_tm_section" id="portfolio">
    <div class="section_inner">
        <div class="cavani_tm_portfolio">
            <div class="cavani_tm_title">
                <span>Creative Portfolio</span>
            </div>
            <div class="portfolio_filter">
                <ul>
                    <li><a href="#" class="current" data-filter="*">All</a></li>
                </ul>
            </div>
            <div class="portfolio_list">
                <ul class="gallery_zoom">
                    @foreach(\App\Models\Portfolio::all() as $portfolio)
                    <li class="item">
                        <div class="list_inner">
                            <div class="image">
                                <img src="/storage/{{$portfolio->images[0]}}" alt=""/>
                                <div class="main" data-img-url="/storage/{{$portfolio->images[0]}}"></div>
                                <div class="details">
                                    <h3>{{$portfolio->title}}</h3>
                                    <span>{{$portfolio->subtitle}}</span>
                                </div>
                                <a class="cavani_tm_full_link"
                                   href="{{route('portfolio', $portfolio->slug)}}"></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
