<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! input($siteayarlar->baslik) !!}</title>
    <meta name="description" content="{!! input($siteayarlar->aciklama) !!}">
    <meta name="keywords" content="{!! input($siteayarlar->keyword) !!}">
    <meta name="author" content="Keykubad">
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ URL::to('js/html5shiv.js') }}"></script>
    <script src="{{ URL::to('js/respond.min.js') }}"></script>
    <![endif]-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-51302339-1', 'kamsolutions.pl');
        ga('send', 'pageview');
    </script>
</head>
<body>
