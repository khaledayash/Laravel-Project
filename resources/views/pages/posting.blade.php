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

    <form method="post" action="posting">
        <label for="titel">Titel Neuer Beitrag:</label><input name="titel" type="text" placeholder="titel"><br>
        <textarea name="content" id="" rows="17" cols="160" placeholder="Beitrag hinzufuegen..."></textarea><br>
        <label for="categorie">Kategorie:</label> <input name="categorie" type="text" placeholder="categorie"><br>

        {{--<textarea name="comments" id="" cols="30" rows="10"></textarea><br>--}}
        {{--<input name="clicked" type="number" placeholder="clicked"><br>--}}
        {{--<input name="userId" type="number" placeholder="userid"><br>--}}
        {{--<input name="checked" type="checkbox" placeholder="checked" checked><br>--}}

        {{--<fieldset name="categorie">--}}
            {{--<label for="categories">Kategorie:</label><br>--}}
            {{--<input type="checkbox" name="categories[]" value="It"> IT <br>--}}
            {{--<input type="checkbox" name="categories[]" value="Sport" > Sport <br>--}}
            {{--<input type="checkbox" name="categories[]" value="Allgemein" > Allgemein <br>--}}
        {{--</fieldset>--}}
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input name="submit" type="submit" value="submit"><br>
    </form>
    <p>Vielen Dank <br>
        Euer Forum Team.</p>
</body>
</html>