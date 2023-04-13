@include('header')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="photo-header" class="text-center">
                <!-- PHOTO (AVATAR) -->
                <div id="photo">
                    <img src="{{ URL::to('resimler/'.$siteayarlar->resim.'') }}" alt="avatar">
                </div>
                <div id="text-header">
                    <h1>Merhaba,<br> ben <span>{!! input($users->name) !!}</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

            <div class="panel panel-warning">
                @if(Session::get("mesaj")==true)
                <div class="panel-heading">
                    <h5><strong>{{Session::get("title")}}</strong></h5>
                    {{Session::get("text")}}
                </div>
                @endif
                <div class="panel-heading">
                    <h3 class="panel-title">İLETİŞİM FORMU</h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('mailgit') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ad soyad</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adsoyad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Konu</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="konu">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Mesaj</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="mesaj"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    Gönder
                                </button>
                            </div>
                        </div>
                    </form>
            </div>

        </div>
    </div>
</div>

<!-- Kategoriler foreach bitiş -->
@include('footer')