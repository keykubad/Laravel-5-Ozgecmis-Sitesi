@include('panel.master')
@yield('ust')
@yield('sol')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Site Ayarları</h2>
                <h5>Sitenizin genel ayarlarını bu kısımdan ayarlayabilirsiniz. </h5>

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
                                <form role="form" method="post" enctype="multipart/form-data">
                                    @foreach($ayarlar as $ayar)
                                    @endforeach
                                    <div class="form-group">
                                        <label>Site Başlık  <small>(sitenizin başlık kısmını yazınız)</small></label>

                                        <input class="form-control" name="baslik" value="{{ $ayar->baslik }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Site Anahtar Kelime  <small>(sitenizin etiketleri(keywords) buraya virgül koyarak yazınız)</small></label>

                                        <input class="form-control" name="keyword" value="{{ $ayar->keyword }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Site Etiketleri  <small>(sitenizin etiketleri(keywords) buraya virgül koyarak yazınız)</small></label>

                                        <input class="form-control" name="etiket" value="{{ $ayar->etiket }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Site Açıklama</label>
                                        <textarea class="form-control" rows="3" name="aciklama">{{ $ayar->aciklama }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Site mail</label>

                                        <input class="form-control" name="mail" value="{{ $ayar->mail }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Site Hakkında <small>(kısa özgeçmiş hakkınızda veya ön yazınızı giriniz)</small></label>
                                        <textarea class="form-control" rows="6" name="hakkimda">{{ $ayar->hakkimda }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Site telefon</label>

                                        <input class="form-control" name="tel" value="{{ $ayar->tel }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Site Resim <small>(Özgeçmişinize ekleyeceğiniz resimi yükleyiniz)</small></label>
                                        <input type="file" name="resim"/>
                                        <img src="{{ URL::to('resimler/'.$ayar->resim.'') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Site Sosyal Medya <small>(Sosyal medya hesaplarınızı aralarına virgül koyarak giriniz)</small></label>
                                        <textarea class="form-control" rows="6" name="sosyal">{{ $ayar->sosyal }}</textarea>
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
