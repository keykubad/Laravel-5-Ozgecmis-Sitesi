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

                                        <input class="form-control" name="katad"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Kategori sırası  <small>(Kategorinin gözükmesini istediğiniz sırayı belirtiniz.)</small></label>

                                        <input class="form-control" name="sira"/>

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
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Kategori Listesi
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Kategori adı</th>
                            <th>İşlem</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategoriler as $kategori)
                        <tr class="odd gradeX">
                            <td>{{ $kategori->sira }}</td>
                            <td>{{ $kategori->katadi }}</td>
                            <td><a href="{{ URL::to('admin/katduzen/'.$kategori->id.'') }}"><button class="btn btn-primary"><i class="fa fa-edit "></i> Düzenle</button></a>
                                <a href="{{ URL::to('admin/katsil/'.$kategori->id.'') }}"> <button class="btn btn-danger"><i class="fa fa-pencil"></i> Sil</button></td></a>

                        </tr>
                       @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<!-- /. WRAPPER  -->
@yield('alt')