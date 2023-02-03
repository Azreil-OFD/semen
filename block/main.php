<?php
require 'request.php';
print "hello";


$post = array(
    "title" => "ПОИСКИ",
    "images_url" => array(
        "https://sun9-east.userapi.com/sun9-34/s/v1/ig2/rLHE0XDqgeBpR7XfR0K2Qn--t2Iwz94gxz9TW8SHEFoGmI0syKduOLRLnS6vx634MIzKu_6M1YYDtCswr4vQmK2G.jpg?size=1600x1200&quality=95&type=album",
        "https://sun9-east.userapi.com/sun9-26/s/v1/ig2/fYJMr9jveNpOcOHj15cJf49mZgGemEuCHupS26lgY75xmmBwqnQC9uqib8Qm01hiz4IeHbWWsvsIWcCyELSxWVt7.jpg?size=1600x1200&quality=95&type=album",
        "https://sun9-east.userapi.com/sun9-76/s/v1/ig2/IQPFdCbosMXtarDsJjHNazBYxB84_ofzaQQhK7GPDKcW4zMtTWRdCycHy39ZdA-4f_d8ifV7umcMIZE6bSfAUxGs.jpg?size=1600x1200&quality=95&type=album",
        "https://sun9-east.userapi.com/sun9-30/s/v1/ig2/0KACUkTGe3DavQuYmtPLQTnkc1BXLLfaOIDEwJtF1np5v8F5xXHLUGFYP6ShrBXTxyDXXjs4KaT2OnGtRHoxVSiO.jpg?size=1600x1200&quality=95&type=album",
        "https://sun9-west.userapi.com/sun9-14/s/v1/ig2/Se7lWFrCMldnJMOZ55SeUpBGEYWIdVwyZzX4ZN8THVpMAuj94nsv8D-XqxKri8po1J5plRiSlNsyCmWF7BKtn4OG.jpg?size=1600x1200&quality=95&type=album",
        "https://sun9-west.userapi.com/sun9-12/s/v1/ig2/ZOmOEiVu43_2V4gaWOQReLzedJTqP1IXA3Vxx-ep_zal84r8Yxvde-yIC_-3uszo3zp6lnY6AQHvwstz9atudDNG.jpg?size=1200x1600&quality=95&type=album",
    ),
    "body" => "Провели поиск, было более 30 человек. Всех благодарю. #нефтеюганск #гумкорпус",
    "vk_url" => "https://vk.com/heart_of_ugra?w=wall-204962426_670"
);

$jsonData = (array)json_decode(get());

foreach ($jsonData as $jsonDatum) {
    $jsonDatum = (array)$jsonDatum;

    $urls = (array)$jsonDatum["image_url"];
    $urls_str = "";
    foreach ($urls as $url) {
        $urls_str = '<a data-fslightbox="gallery" href="' . (string)$url . '"><img src="' . (string)$url . '"></a>';
    }

    printf(/** @lang text */ '
            <article class="block">
                <div id="%d" class="info card second">
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
                    <a href="https://vk.com/gumkorpus86?w=wall-216262291_72%%2Fall" class="vk" target="_blank"><img
                                src="image/vk.png" class="vk_img"></a>
                </div>
            </article>',
        $jsonDatum["id"],
        $jsonDatum["title"],
        $jsonDatum["create_at"],
        $urls_str,
        $jsonDatum["body"],
        $jsonDatum["id"] + 1);
}