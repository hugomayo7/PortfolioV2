<div class="section_inner">
    <div class="cavani_tm_portfolio">
        <div class="cavani_tm_title">
            <span>Mes Projets</span>
        </div>
        <div class="portfolio_filter">
{{--            <ul>--}}
{{--                <li><a href="#" class="current" data-filter="*">All</a></li>--}}
{{--            </ul>--}}
        </div>
        <div class="portfolio_list">
            <ul class="gallery_zoom">
                @foreach(\App\Models\Portfolio::all()->sortByDesc('created_at') as $portfolio)
                    <li class="item">
                        <div class="list_inner">
                            <div class="image portfolio-preview-image" style="background-image: url('/storage/{{ $portfolio->images[0] }}'); background-position: center; background-size: contain; border: 1px solid #b1adb7;">
                                <div class="details">
                                    <h3>{{$portfolio->title}}</h3>
                                    <span>{{$portfolio->subtitle}}</span>
                                </div>
                                <a class="cavani_tm_full_link portfolio_popup"
                                   href="javascript:void(0)"
                                   wire:click.prevent="setSelectedPortfolio({{ $portfolio }})"></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
