@extends('header')
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
        <div class="col-xs-12 col-sm-7">
            <!-- ABOUT ME -->
            <div class="box">
                <h2>KISA ÖZGEÇMİŞ</h2>
                <p>{!! input($siteayarlar->hakkimda) !!}</p>
            </div>
            <!-- EDUCATION -->
            <div class="box">
                <h2>{!! input($sira1->katadi) !!}</h2>

                <ul id="education" class="clearfix">
                    @foreach($bilgi1 as $bilgi)
                    <li>
                        <div class="year pull-left">{!! input($bilgi->yil) !!}</div>
                        <div class="description pull-right">
                            <h3>{!! input($bilgi->baslik) !!}</h3>
                            <p>{!! editor($bilgi->aciklama) !!}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- EXPERIENCES -->
            <div class="box">
                <h2>{!! input($sira2->katadi) !!}</h2>
                @foreach($bilgi2 as $bilgi)
                <div class="job clearfix">
                    <div class="col-xs-3">
                        <div class="where">{!! input($bilgi->baslik) !!}</div>
                        <div class="year">{!! input($bilgi->yil) !!}</div>
                    </div>
                    <div class="col-xs-9">
                        <div class="profession">{!! input($bilgi->baslik) !!}</div>
                        <div class="description">{!! editor($bilgi->aciklama) !!}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
            <!-- CONTACT -->
            <div class="box clearfix">
                <h2>İLETİŞİM</h2>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
                    <div class="title only pull-right">{!! input($siteayarlar->tel) !!}</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
                    <div class="title only pull-right">{!! input($siteayarlar->mail) !!}</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
                    <div class="title pull-right">Twitter</div>
                    <div class="description pull-right">{!! input($sosyaller[0]) !!}</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
                    <div class="title pull-right">Facebook</div>
                    <div class="description pull-right">{!! input($sosyaller[1]) !!}</div>
                </div>
                <div class="contact-item">
                    <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
                    <div class="title pull-right">Instagram</div>
                    <div class="description pull-right">{!! input($sosyaller[2]) !!}</div>
                </div>
            </div>
            <!-- SKILLS -->
            <div class="box">
                <h2>{!! input($sira3->katadi) !!}</h2>
                <div class="skills">
                    @foreach($bilgi3 as $bilgi)
                    <div class="item-skills" data-percent="{!! input($bilgi->derece) !!}">{!! input($bilgi->baslik) !!}</div>
                        @endforeach
                    <div class="skills-legend clearfix">
                        <div class="legend-left legend">Az</div>
                        <div class="legend-left legend"><span>orta</span></div>
                        <div class="legend-right legend"><span>İyi</span></div>
                        <div class="legend-right legend">Çok iyi</div>
                    </div>
                </div>
            </div>
            <!-- LANGUAGES -->
            <div class="box">
                <h2>{!! input($sira4->katadi) !!}</h2>
                <div id="language-skills">
                    @foreach($bilgi4 as $bilgi)
                    <div class="skill">{!! input($bilgi->baslik) !!} <div class="icons pull-right"><div style="width: 80%;" class="icons-red"></div></div></div>
                    @endforeach
                </div>
            </div>
            <!-- HOBBIES -->
            <div class="box">
                <h2>{!! input($sira5->katadi) !!}</h2>
                @foreach($bilgi5 as $bilgi)
                <div class="hobby">{!! input($bilgi->baslik) !!}</div>
                @endforeach
            </div>
            <!-- EDUCATION -->
            <!-- EXPERIENCES -->
            <div class="box">
                <h2>{!! input($sira6->katadi) !!}</h2>
                @foreach($bilgi6 as $bilgi)
                    <div class="job clearfix">
                        <div class="col-xs-3">
                            <div class="where">{!! input($bilgi->baslik) !!}</div>
                            <div class="year">{!! input($bilgi->yil) !!}</div>
                        </div>
                        <div class="col-xs-9">
                            <div class="profession">{!! input($bilgi->baslik) !!}</div>
                            <div class="description">{!! editor($bilgi->aciklama) !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Kategoriler foreach bitiş -->
@include('footer')