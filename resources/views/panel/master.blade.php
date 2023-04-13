
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Özgeçmiş Yönetim Paneli</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="{{ URL::to('assets/css/bootstrap.css') }}" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="{{ URL::to('assets/css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="{{ URL::to('assets/css/custom.css') }}" rel="stylesheet" />
        <!-- TABLE STYLES-->
        <link href="{{ URL::to('assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
        <script type="text/javascript" src="{{ URL::to('ckeditor/ckeditor.js') }}"></script>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Yönetici paneli</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Hoşgeldin {{ Auth::user()->name }} &nbsp; <a href="{{ URL::to('admin/cikis') }}" class="btn btn-danger square-btn-adjust">Çıkış</a> </div>
        </nav>


<!-- Sol kısım -->
@section('sol')
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="{{ URL::to('assets/img/find_user.png') }}" class="user-image img-responsive"/>
                        </li>


                        <li>
                            <a @if(Request::segment(2)=='yonetici') class="active-menu" @endif  href="{{ URL::to('admin/yonetici') }}"><i class="fa fa-dashboard fa-3x"></i> Anasayfa</a>
                        </li>
                        <li>
                            <a @if(Request::segment(2)=='sifre') class="active-menu" @endif  href="{{ URL::to('admin/sifre') }}"><i class="fa fa-user fa-3x"></i> Şifre</a>
                        </li>
                        <li>
                            <a  @if(Request::segment(2)=='siteayar') class="active-menu" @endif href="{{ URL::to('admin/siteayar') }}"><i class="fa fa-desktop fa-3x"></i> Site ayarları</a>
                        </li>
                        <li>
                            <a  @if(Request::segment(2)=='kategoriler') class="active-menu" @endif href="{{ URL::to('admin/kategoriler') }}"><i class="fa fa-sitemap fa-3x"></i> Kategoriler</a>
                        </li>

                        <li>
                            <a  @if(Request::segment(2)=='bilgiler') class="active-menu" @elseif(Request::segment(2)=='bilgiliste') class="active-menu"  @endif href="{{ URL::to('admin/bilgiler') }}"><i class="fa fa-edit fa-3x"></i> Bilgiler</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a  @if(Request::segment(2)=='bilgiler') class="active-menu" @endif href="{{ URL::to('admin/bilgiler') }}">Bilgi Ekle</a>
                                    <a href="{{ URL::to('admin/bilgiliste') }}">Bilgileri Düzenle</a>
                                </li>
                                    </ul>

                                </li>

                        </li>

                    </ul>

                </div>

            </nav>
@stop
@section('alt')
            <!-- /. PAGE INNER  -->

            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="{{ URL::to('assets/js/jquery-1.10.2.js') }}"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

            <!-- METISMENU SCRIPTS -->
            <script src="{{ URL::to('assets/js/jquery.metisMenu.js') }}"></script>
            <!-- MORRIS CHART SCRIPTS -->
            <script src="{{ URL::to('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
            <script src="{{ URL::to('assets/js/morris/morris.js') }}"></script>
            <!-- DATA TABLE SCRIPTS -->
            <script src="{{ URL::to('assets/js/dataTables/jquery.dataTables.js') }}"></script>
            <script src="{{ URL::to('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
            <!-- CUSTOM SCRIPTS -->
            <script src="{{ URL::to('assets/js/custom.js') }}"></script>


    </body>
    </html>
    @stop

@section('uyari')
<div class="alert {{Session::get("type")}}">
    <h5><strong>{{Session::get("title")}}</strong></h5>
    {{Session::get("text")}}
</div>
    @stop