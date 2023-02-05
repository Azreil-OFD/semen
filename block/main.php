<?php
require 'request.php';

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
    $urls_array = array();
    foreach ($urls as $url) {
        if ($url == "0") {
            continue;
        }
        $urls_array[] = ' <a data-fslightbox="gallery" href=" ' . (string)$url . '"><img src=" ' . (string)$url . ' "/></a> ';
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
                        <div class="grid">
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
        $url_str,
        $jsonDatum["body"],
        $jsonDatum["id"] + 1,
        $jsonDatum["vk_url"]
    );
    $color_counter++;
    if ($color_counter == 4) {
        $color_counter = 0;
    }

}