<div class="section_inner" wire:ignore>
    <div class="cavani_tm_about">
        @if($abouts && $abouts->informations)
            @foreach($abouts->informations as $info)
                @switch($info['type'])
                    @case('about')
                        <div class="biography">
                            <div class="cavani_tm_title">
                                <span>A propos de moi</span>
                            </div>
                            <div class="wrapper">
                                <div class="left">
                                    {!! $info['data']['about']['me'] !!}
                                </div>
                                <div class="right">
                                    <ul>
                                        @foreach($info['data']['about']['informations'] as $key => $about_info)
                                            <li>
                                                <span class="first">{{$key}}</span>
                                                <span class="second">{{$about_info}}</span>
                                            </li>
                                        @endforeach
                                        {{--<li><span class="first">Ville:</span><span class="second">La Rochelle, France</span>
                                        </li>
                                        <li><span class="first">Etude:</span><span class="second">Université de La Rochelle</span></li>
                                        <li><span class="first">Diplôme:</span><span class="second">LP - Développement Web & Mobile</span></li>
                                        <li><span class="first">Mail:</span><span class="second"><a
                                                    href="mailto:hugomayonobe@gmail.com">hugomayonobe@gmail.com</a></span></li>
                                        <li><span class="first">Téléphone:</span><span class="second">07 82 64 87 34</span></li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @break
                    @case('sections')
                        <div class="services">
                            <div class="wrapper">
                                @foreach($info['data']['sections'] as $section)
                                    <div class="service_list">
                                        <div class="cavani_tm_title">
                                            <span>{{$section['title']}}</span>
                                        </div>
                                        <div class="list">
                                            <ul>
                                                @foreach($section['items'] as $item)
                                                    <li>{{$item['item']}}</li>
                                                @endforeach
                                                {{--<li>Laravel</li>
                                                <li>Symfony</li>
                                                <li>Flutter</li>
                                                <li>ReactJS</li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                {{--<div class="service_list">
                                    <div class="cavani_tm_title">
                                        <span>Activités</span>
                                    </div>
                                    <div class="list">
                                        <ul>
                                            <li>Développement Web</li>
                                            <li>Développement Mobile</li>
                                            <li>Basketball</li>
                                            <li>Musique</li>
                                            <li>Jeux Vidéos</li>
                                        </ul>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                        @break
                    @case('progresses')
                        <div class="skills">
                            <div class="wrapper">
                                @foreach($info['data']['progress'] as $progress)
                                    @if($progress['type'] == 'linear')
                                        <div class="programming">
                                            <div class="cavani_tm_title">
                                                <span>{{$progress['title']}}</span>
                                            </div>
                                            <div class="cavani_progress">
                                                @foreach($progress['items'] as $key => $value)
                                                    <div class="progress_inner" data-value="{{$value}}">
                                                        <span><span class="label">{{$key}}</span><span class="number">{{$value}}%</span></span>
                                                        <div class="background">
                                                            <div class="bar">
                                                                <div class="bar_in"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @elseif($progress['type'] == 'circular')
                                        <div class="language">
                                            <div class="cavani_tm_title">
                                                <span>{{$progress['title']}}</span>
                                            </div>
                                            <div class="circular_progress_bar">
                                                <ul>
                                                    @foreach($progress['items'] as $key => $value)
                                                        <li>
                                                            <div class="list_inner">
                                                                <div class="myCircle"
                                                                     data-value="{{$value / 100}}"></div>
                                                                <div class="title"><span>{{$key}}</span></div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @break
                    @case('dateables')
                        <div class="resume">
                            <div class="wrapper">
                                @foreach($info['data']['dateable'] as $dateable)
                                    <div class="education">
                                        <div class="cavani_tm_title">
                                            <span>{{$dateable['title']}}</span>
                                        </div>
                                        <div class="list">
                                            <div class="univ">
                                                <ul>
                                                    @foreach($dateable['items'] as $item)
                                                        <li>
                                                            <div class="list_inner">
                                                                <div class="time">
                                                                    <span>{{$item['date']}}</span>
                                                                </div>
                                                                <div class="place">
                                                                    <h3>{{$item['title']}}</h3>
                                                                    <span>{{$item['subtitle']}}</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        @break
                @endswitch
            @endforeach
        @endif
    </div>
</div>
