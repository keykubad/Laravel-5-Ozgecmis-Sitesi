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

                            <th>Kategori adı</th>
                            <th>Başlık</th>
                            <th>İşlem</th
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bilgiler as $bilgi)
                        <tr class="odd gradeX">

                            <td>{{ $bilgi->kategori->katadi }}</td>
                            <td>{{ $bilgi->baslik }}</td>
                            <td><a href="{{ URL::to('admin/bilgiduzen/'.$bilgi->id.'') }}"><button class="btn btn-primary"><i class="fa fa-edit "></i> Düzenle</button></a>
                                <a href="{{ URL::to('admin/bilgisil/'.$bilgi->id.'') }}"> <button class="btn btn-danger"><i class="fa fa-pencil"></i> Sil</button></td></a>

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