@include('panel.master')
@yield('ust')
@yield('sol')

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Site içi bilgiler</h2>
                <h5>Sitenizin bilgiler kısmını bu alandan doldurabilirsiniz.Kategoriye göre istenen bilgiyi kaydetmeniz yeterli olacaktır. </h5>

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

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control" name="kategori">
                                            @foreach($kategoriler as $kategori)
                                            <option value="{{ $kategori->id }}" @if($kategori->id==$bilgiler->katid) selected @endif>{{ $kategori->katadi }}</option>
                                                @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Bilgi Dereceleri</label>
                                        <select class="form-control" name="derece">
                                            <option value="0.25">Az</option>
                                            <option value="0.50">Orta</option>
                                            <option value="0.75">İyi</option>
                                            <option value="1.00">Çok İyi</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Yıl  <small>(sitenizdeki çalışma alanlarına ait yıl giriniz)</small></label>

                                        <input class="form-control" name="yil" value="{{ $bilgiler->yil }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Başlık  <small>(Özgeçmiş başlıklarını giriniz)</small></label>

                                        <input class="form-control" name="baslik" value="{{ $bilgiler->baslik }}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Açıklama</label>
                                        <textarea name="aciklama" id="yazi1">{!! $bilgiler->aciklama !!}</textarea>
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
<script type="text/javascript">
    CKEDITOR.replace( 'yazi1' );
</script>
@yield('alt')
