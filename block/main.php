<section class="second section">
    <main>
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

        $jsonData = json_decode(get());

        foreach ($jsonData as $jsonDatum) {
            ?>
            <article class="block">
                <div id="<? echo $jsonDatum["id"]; ?>" class="info card second">
                    <h1 class="title"><? echo $jsonDatum["title"] ?></h1>
                    <h2 class="title date"><? echo $jsonDatum["create_at"] ?></h2>
                    <hr class="line card">
                    <div class="container-card">
                        <div class="grid">
                            <a data-fslightbox="gallery"
                               href="https://sun9-west.userapi.com/sun9-62/s/v1/ig2/_i2TKEIctHYZOv5cNJ9SyvRx-tshCSBD_nSharD1D6JwpejY5_bZy1n5HSc6II7uawgAZZiq-Ep4Zvb_PEDxQ_bR.jpg?size=1600x1200&quality=95&type=album"><img
                                        src="https://sun9-west.userapi.com/sun9-62/s/v1/ig2/_i2TKEIctHYZOv5cNJ9SyvRx-tshCSBD_nSharD1D6JwpejY5_bZy1n5HSc6II7uawgAZZiq-Ep4Zvb_PEDxQ_bR.jpg?size=1600x1200&quality=95&type=album"></a>
                            <a data-fslightbox="gallery"
                               href="https://sun9-west.userapi.com/sun9-48/s/v1/ig2/09tGjjRMO_Hmh0aWUAbI9JZSOxNbEX5evUVWp-W7dRiyx2PJSHMztsJQlGb1UiXW3Xy7PYFfJnXVs3nmCSlrvzlQ.jpg?size=1600x1200&quality=95&type=album"><img
                                        src="https://sun9-west.userapi.com/sun9-48/s/v1/ig2/09tGjjRMO_Hmh0aWUAbI9JZSOxNbEX5evUVWp-W7dRiyx2PJSHMztsJQlGb1UiXW3Xy7PYFfJnXVs3nmCSlrvzlQ.jpg?size=1600x1200&quality=95&type=album"></a>
                            <a data-fslightbox="gallery"
                               href="https://sun9-north.userapi.com/sun9-80/s/v1/ig2/7ey5RWWFVJ9_Xwwg--ODnQtr5r1cdvx7x9xIDteYQlZfkYzKDDP7DWFy2eWAq0y_ylNAfvGMYZHwWx9kldqQPFmk.jpg?size=1600x1200&quality=95&type=album"><img
                                        src="https://sun9-north.userapi.com/sun9-80/s/v1/ig2/7ey5RWWFVJ9_Xwwg--ODnQtr5r1cdvx7x9xIDteYQlZfkYzKDDP7DWFy2eWAq0y_ylNAfvGMYZHwWx9kldqQPFmk.jpg?size=1600x1200&quality=95&type=album"></a>
                            <a data-fslightbox="gallery"
                               href="https://sun9-north.userapi.com/sun9-78/s/v1/ig2/NJHvGX7-Ip3MiSjj53EawdssIpqokqHthlWp6OE6dIjUt8wLAijzMmOAsROBx_6KoUPjlAr0pl5eoTjjk6BHiUbe.jpg?size=864x1152&quality=95&type=album"><img
                                        src="https://sun9-north.userapi.com/sun9-78/s/v1/ig2/NJHvGX7-Ip3MiSjj53EawdssIpqokqHthlWp6OE6dIjUt8wLAijzMmOAsROBx_6KoUPjlAr0pl5eoTjjk6BHiUbe.jpg?size=864x1152&quality=95&type=album"></a>
                            <a data-fslightbox="gallery"
                               href="https://sun9-west.userapi.com/sun9-46/s/v1/ig2/GQdx_szSLUFIfNEu0aKPD00Eydh4lpIxydDoFPNz5VhoJS73R-ljkfeguovf-iA8IHkhSzZQXIUGf4Wrtjf8O0ON.jpg?size=864x1152&quality=95&type=album"><img
                                        src="https://sun9-west.userapi.com/sun9-46/s/v1/ig2/GQdx_szSLUFIfNEu0aKPD00Eydh4lpIxydDoFPNz5VhoJS73R-ljkfeguovf-iA8IHkhSzZQXIUGf4Wrtjf8O0ON.jpg?size=864x1152&quality=95&type=album"></a>
                            <a data-fslightbox="gallery"
                               href="https://sun9-east.userapi.com/sun9-23/s/v1/ig2/MUB7_zPa8w0c3cu6t9ndwzoTS_SMudCBLoc4iIt_RNit27vg7v05su_1zi0-Ob2To2W47gkCAOIowfO9LjwgbVU5.jpg?size=864x1152&quality=95&type=album"><img
                                        src="https://sun9-east.userapi.com/sun9-23/s/v1/ig2/MUB7_zPa8w0c3cu6t9ndwzoTS_SMudCBLoc4iIt_RNit27vg7v05su_1zi0-Ob2To2W47gkCAOIowfO9LjwgbVU5.jpg?size=864x1152&quality=95&type=album"></a>
                        </div>
                        <div class="p">
                            <p><? echo $jsonDatum["body"] ?></p>
                        </div>
                    </div>
                    <button class="button" type="button"><a href="#<? echo ((integer)$jsonDatum["id"]) + 1 ?>"
                                                            class="link">ДАЛЕЕ</a></button>
                    <a href="https://vk.com/gumkorpus86?w=wall-216262291_72%2Fall" class="vk" target="_blank"><img
                                src="image/vk.png" class="vk_img"></a>
                </div>
            </article>
            <?
        }
        ?>
        </article>
    </main>
</section>