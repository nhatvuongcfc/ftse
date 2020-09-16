<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <meta name="description" content="FAST TRACK SE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/979209262629924864/bupqVNFt_400x400.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/blog.css') }}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    {{--  <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/style.css?t=4" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/style-bem.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/menu-clean.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/login.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/lib/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/../skins/style.css" type="text/css" media="all">  --}}

    {{-- <link rel="stylesheet" href="https://www.anhngumshoa.com/theme/frontend/default/css/style.css?t=4" type="text/css" media="all"> --}}
@yield('css')
    

   <style>
       
       .shortcutActive{
           background-color: #007BFF;
           color:#fff;
       }
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
            .card-img-top:hover{
                opacity: 0.5;
            }

    </style>
</head>

<body>
    
    <!-- /#left-panel -->
    <!-- Right Panel -->
    