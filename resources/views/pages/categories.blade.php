<!doctype html>
<html class="no-js" lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diskutier-mit-mir</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <style>
        IMG.logo {width:30%;
            height:2%;
            margin-bottom:4% ;
            margin-left: 69% }

        body{
            background:#F5F6F6
        }

        thead {
            display: table-header-group;
        }

        tr,
        img {
            page-break-inside: avoid;
        }

        h1,td {
            color: #136E91;
        }

        li{
            color: #318CE7;
        }

        table{
            color: #318CE7;
            padding: 15px 15px;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }

        .navigator{
            display: -webkit-inline-box;
            list-style: none;
        }
        .navigator li{
            margin-right: 25%;
        }
        .nav-tabs {
            position: relative;
            left: 70%;
        }
        .search{
            position: relative;
            bottom: 40px;
            left: 22%;
        }
        #forum-table table{
            border: 1px solid;
            width: 100%;
        }
        #forum-table table tbody tr{
            border-bottom: 1px solid;
        }

        #forum-table table thead tr th{
            border-bottom: 2px solid;
            text-align: left;
        }
        #footer-nav{
            display: -webkit-inline-box;
            list-style: none;
        }

        #footer-nav li{
            margin-right: 25%;
        }
        #footer nav{
            text-align: center;
        }

    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<section id="header">
    <img src="{{url('/images/Logo.png')}}"   alt="Logo Diskutier mit mir" class = "logo">

    <h1>Diskutier-mit-mir.de</h1>

    <div>
        <nav>
            <div class="nav-tabs">
                <ul class="navigator">
                    <li><a href="{{url ('startseite') }}">Home</a></li>
                    <li><a href="{{url ('startseite') }}">zum Forum</a></li>
                    <li><a href="{{url ('posting') }}">Neuer Beitrag</a></li>
                </ul>
            </div>
            <div class="search">
                <span class="search-btn"></span>
                <input type="text" placeholder="Suche im Forum">
            </div>
        </nav>
    </div>
</section>
<section id="forum-table">
    <table>
        <thead>
            <tr>
                <td>Bereiche</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Allgemein</td>
            </tr>
            <tr>
                <td>IT</td>
            </tr>
            <tr>
                <td>Sport</td>
            </tr>
        </tbody>
        {{--<tbody>--}}
        {{--@foreach($posts as $post)--}}
            {{--<tr><td><a href="{{route('posts.show',$post->id)}}">{{$post->titel}}</a></td><td>{{$post->created_at}}</td><td>{{$post->categorie}}</td></tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    </table>
</section>
<section id="footer">
    <nav>
        <div><ul id="footer-nav">
                <li>Kontakt</li>
                <li>Über uns</li>
                <li>Impressum</li>
            </ul>
        </div>
    </nav>
</section>

</body>
</html>
