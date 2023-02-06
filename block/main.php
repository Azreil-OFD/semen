<?php
require 'request.php';
function link_it($text)
{
    $text = preg_replace("/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*)/is", "$1$2<a class=\"text_url\" href=\"$3\">$3</a>", $text); // поиск http://
    $text = preg_replace("/(^|[\n ])([\w]*?)((www|ftp)\.[^ \,\"\t\n\r<]*)/is", "$1$2<a href=\"http://$3\">$3</a>", $text); // поиск www
    return ($text);
}

function link_hesh($text)
{
    $text = preg_replace('/(#[АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯяюэьыъщшчцхфутсрпонмлкйизжёедгвба_-]+)/m',
        "<a class=\"text_hash\" href=\"https://vk.com/feed?q=$1&section=search\">$1</a>", $text); // поиск хештега
    $text = preg_replace('/q=#/m', "q=%23", $text); // замена хештега на %23 для запроса
    return ($text);
}

$jsonData = (array)json_decode(get());

$color = array(
    'first',
    'second',
    'third',
    'fourth',
);
$color_counter = 0;
foreach ($jsonData as $jsonDatum) {
    $jsonDatum = (array)$jsonDatum;
    if ($jsonDatum[0] == 'Internal Server Error') {
        continue;
    }
    $urls = (array)$jsonDatum["image_url"];


    $img_counter = 0;
    foreach ($urls as $url) {
        $img_counter++;

    }

    $grid_css_tag = "";
    $img_css_tag = "";
    if ($img_counter == 1) {
        $img_css_tag = "one_img";
        $grid_css_tag = "one_grid";
    } else if ($img_counter == 2) {
        $grid_css_tag = "two";
    }
    $urls_array = array();
    foreach ($urls as $url) {
        if ($url == "0") {
            continue;
        }
        $urls_array[] = ' <a data-fslightbox="gallery" href=" ' . (string)$url . '"><img class="' . $img_css_tag . '" src=" ' . (string)$url . ' "/></a> ';
    }
    $url_str = "";
    foreach ($urls_array as $url) {
        $url_str = $url_str . $url;
    }

    printf(/** @lang text */ '
            <article class="block">
                <div id="%d" class="info card %s">
                    <h1 class="title">%s</h1>
                    <h2 class="title date">%s</h2>
                    <hr class="line card">
                    <div class="container-card">
                        <div class="grid %s">
                            %s
                        </div>
                        <div class="p">
                            <p>%s</p>
                        </div>
                    </div>
                    <button class="button" type="button"><a href="#%d"
                                                            class="link">ДАЛЕЕ</a></button>
                    <a href="%s" class="vk" target="_blank"><img
                                src="image/vk.png" class="vk_img"></a>
                </div>
            </article>',
        $jsonDatum["id"],
        $color[$color_counter],
        $jsonDatum["title"],
        $jsonDatum["create_at"],
        $grid_css_tag,
        $url_str,
        link_hesh(link_it($jsonDatum["body"])),
        $jsonDatum["id"] + 1,
        $jsonDatum["vk_url"]
    );
    $color_counter++;
    if ($color_counter == 4) {
        $color_counter = 0;
    }

}