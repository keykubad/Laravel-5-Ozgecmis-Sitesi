<?php

/*
 * Laravel Özgeçmiş sitesi projesi
 * www.keykubad.com
 * Kodlayan Keykubad => Gürkan Ersan :)
 * Sürüm : Laravel 5.0
 * Yardımcı fonksiyonlarım burada bootstrap\autoload.php den çekiyor
 */

 function editor($text)
 {
        return strip_tags($text);
 }
function input($text)
{
    return strip_tags(htmlspecialchars(addslashes($text)));
}

