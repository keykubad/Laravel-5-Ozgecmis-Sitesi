@include('panel.master')
@yield('ust')
@yield('sol')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Şifre Ayarları</h2>
                <h5>Sitenizin şifre değişikliğini bu kısımdan yapabilirsiniz. </h5>

            </div>
        </div>
        <!-- /. ROW aşağıda uyarı mesajımız mevcut sessiondaki master blade içinde kodumuz-->
        @if(Session::has('mesaj'))

            @yield('uyari')

        @endif
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Site ayar bölümü
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" method="post">
                                    @foreach($users as $user)
                                    @endforeach
                                    <div class="form-group">
                                        <label>Ad Soyad  <small>(Adınızı soyadınızı yazınız)</small></label>

                                        <input class="form-control" name="name" value="{{ $user->name }}"/>

                                    </div>
                                        <div class="form-group">
                                            <label>Email  <small>(Sitenize girişteki kullanıcı adı email adresiniz)</small></label>

                                            <input class="form-control" name="email" value="{{ $user->email }}"/>

                                        </div>
                                    <div class="form-group">
                                        <label>Şifre  <small>(Kontrol panel şifresi)</small></label>

                                        <input class="form-control" type="password" name="password"/>

                                    </div>



                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-default">Kaydet</button>
                                    <button type="reset" class="btn btn-primary">Temizle</button>

                                </form>
                                <br />



                            </div>


                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
@yield('alt')
