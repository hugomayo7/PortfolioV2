<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .page-break {
            page-break-before: always;
        }

        @page {
            margin: 30px 30px;
        }

        tr:nth-child(even) {
            background-color: #f8e0b9;
        }

        .table td, .table th {
            padding: 0.3rem !important;
            border: 1px solid #eecb89;
        }

        th, td {
            border: 1px solid #f8e0b9;
        }

        .table * {
            font-size: 13px !important;
            border: 1px solid #eecb89;
        }


    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <title>CV MAYONOBE Hugo</title>

</head>

<body>

<main>

    <table>
        <tbody>
        <tr>
            <td style="width: 50%">
                <img src="{{asset('/img/profile2.jpg')}}" alt=""
                     style="width: 180px; margin-left: 50px; margin-right: 100px">
            </td>
            <td style="width: 50%">
                <p style="font-size: 34px !important; margin-bottom: 20px !important;">
                    MAYONOBE <br> Hugo</p>
            </td>
        </tr>
        </tbody>
    </table>
    @if($abouts && $abouts->informations)
        @foreach($abouts->informations as $info)
            @switch($info['type'])
                @case('about')
                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="2"
                                style="font-size: 16px !important; background: #f8e0b9; border: 1px solid #eecb89;">
                                A Propos de moi
                            </th>
                        </tr>
                        <tbody>
                        <tr>
                            <td style="width: 50%">
                                {!! $info['data']['about']['me'] !!}
                            </td>

                            <td style="width: 50%">
                                <ul>
                                    @foreach($info['data']['about']['informations'] as $key => $about_info)
                                        <li>
                                            <span class="first">{{$key}}:</span>
                                            <span class="second">{{$about_info}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @break
                @case('sections')
                    <table class="table">
                        @foreach($info['data']['sections'] as $section)
                            <thead style="width: 50%">
                            <tr>
                                <th colspan="2"
                                    style="font-size: 16px !important; background: #f8e0b9; border: 1px solid #eecb89;">
                                    {{$section['title']}}
                                </th>
                            </tr>
                            </thead>
                            <tbody style="width: 50%">
                            <tr>
                                <td colspan="2">
                                    <ul>
                                        @foreach($section['items'] as $item)
                                            <li>{{$item['item']}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                    @break
            @endswitch
        @endforeach
    @endif
</main>
</body>
</html>
