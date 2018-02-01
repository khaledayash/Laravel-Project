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

<h1>Ihr Beitrag wurde erfolgreich verschickt!</h1>
<p>Vielen Dank <br>
    Euer Forum Team.</p>
</body>
</html>