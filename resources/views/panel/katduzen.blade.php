@include('panel.master')
@yield('ust')
@yield('sol')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Kategori ekle</h2>
                <h5>Buradan sitenizin kategori adlarını girebilirsiniz. </h5>

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
                       Kategori ekleme menüsü
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Kategori adı  <small>(Kategori adını yazınız)</small></label>

                                        <input class="form-control" name="katad" value="{{ $kategoriler->katadi }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Kategori sırası  <small>(Kategorinin gözükmesini istediğiniz sırayı belirtiniz.)</small></label>

                                        <input class="form-control" name="sira" value="{{ $kategoriler->sira }}"/>

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

<!-- /. WRAPPER  -->
@yield('alt')