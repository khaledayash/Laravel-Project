<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Diskutier-mit-mir</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
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
            text-align: center;}
        #titel{
            color: #000;
            font-size: 20px;
        }
        /*#kontent{*/
            /**/
        /*}*/
        #kontent p{
            font-size: 15px;
        }
        #kontent div{
            font-size: 12px;
            border: 1px solid;
        }
        #kategorie{
            font-size: 15px;
        }
        .caption{
            width: 100%;
            border: 1px solid;
        }
        #new-comment{
            width: 100%;
        }



    </style>

</head>
<body>

<section id="header">
    <img src="{{url('/images/Logo.png')}}"   alt="Logo Diskutier mit mir" class = "logo">

    <h1>Diskutier-mit-mir.de</h1>
    <div>
        <nav>
            <div class="nav-tabs">
                <ul class="navigator">
                    <li><a href="{{url ('startseite') }}">Home</a></li>
                    <li><a href="{{url ('categories') }}">zum Forum</a></li>
                    <li><a href="{{url ('posting') }}">Neuer Beitrag</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<h1 id="titel"> Titel: {{$post->titel}}</h1> <br>
<div id="kontent">
<p>Kontent:</p>
<div>{{$post->content}}</div> <br>
</div>
<br>
<span id="kategorie"> Kategorie: {{$post->categorie}}</span> <br>
<div id="kommentaere">
    <p>Kommentäre:</p>
{{--<p>{{var_dump($post->id)}}</p>--}}
@foreach($comments as $comments)
        <div class="thumbnail"><br>
            <div class="caption">
                 {{$comments->comment}}
                {{--<p>{{var_dump($comments)}}</p>--}}
            </div>
        </div>
    </div>

@endforeach
</div> <br>

{{--<p>{{var_dump($comments)}}</p>--}}
<form method="post" action="postingcomment">
    <textarea id="new-comment" name="comments" id="" cols="30" rows="10"></textarea><br>

    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input name="submit" type="submit" value="submit"><br>
</form>




</body>
</html>