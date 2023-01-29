<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="/js/js/qb.js"></script>
    <title>Поиск Нефтеюганск</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="SHORTCUT ICON" href="image/favicon.ico" type="image/x-icon">
</head>

<body style="overflow-x:hidden;">
    <div class="wrapper">
        <div class="b-popup" id="popup1">
            <div class="b-popup-content">
                <p>ДЛЯ СВЯЗИ С НАМИ ЗВОНИТЕ ПО НОМЕРУ<br><br> <a href="tel:+79824146777"> +79824146777</a></p>
                <a class="close_button" href="javascript:PopUpHide()">Закрыть</a>
            </div>
        </div>
        <a href="javascript:PopUpShow()"><img
                src="https://play-lh.googleusercontent.com/ucluQLM-kNsOl9L7-aDbuPQyhEdfLdLenKfhY7m07I2zG2sBJCb8JZQ2q4R1cQX-Lxw"
                alt="sos" class="sos_button"></a>
        <header class="header">
            <div class="container">
                <div class="header_body">
                    <a href="#1" class="header_logo">
                        <img src="image/logo.png" alt="">
                    </a>
                    <div class="header_burger">
                        <span></span>
                    </div>
                    <nav class="header_menu">
                        <ul class="header_list">
                            <li>
                                <a href="/memo.html" target="_blank" class="header_link">ПАМЯТКА</a>
                            </li>
                            <li>
                                <a href="#4" class="header_link">НАЙДЕНЫ</a>
                            </li>
                            <li>
                                <a href="#3" class="header_link">ПОИСКИ</a>
                            </li>
                            <li>
                                <a href="#3" class="header_link">РОМАН ЗАЛОЗНЫХ</a>
                            </li>
                            <li>
                                <a class="header_link" target="_blank" href="https://vk.com/heart_of_ugra">ВКОНТАКТЕ</a>
                            </li>
                            <li>
                                <a class="header_link" target="_blank"
                                    href="https://www.youtube.com/channel/UCQjTSoXJCNLaiKRzbfboE7w">YOUTUBE</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section class="content">
            <section class="first section">
                <header>
                    <a href="#1"><img class="logo" src="image/logo.png" width="250" alt="pic"></a>
                    <h4 class="deviz">Предотвратить, спасти, помочь!</h4>
                    <nav>
                        <ul>
                            <li class="link-c menu_list">
                                <a href="/memo.html" class="link first menu_link" target="_blank">ПАМЯТКА</a>
                                <hr class="line set first">
                            </li>
                            <li class="link-c">
                                <a href="#4" class="link second">НАЙДЕНЫ</a>
                                <hr class="line set second">
                            </li>
                            <li class="link-c">
                                <a href="#3" class="link third">ПОИСКИ</a>
                                <hr class="line set third">
                            </li>
                            <li class="link-c">
                                <a href="#3" class="link fourth">РОМАН ЗАЛОЗНЫХ</a>
                                <hr class="line set fourth">
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <ul class="footer-list">
                            <li class="footer-name">МЫ В СОЦ СЕТЯХ</li>
                            <hr class="line footer">
                            <li class="footer-item"><a href="https://vk.com/heart_of_ugra" class="link"
                                    target="_blank">ВКОНТАКТЕ</a></li>
                            <li class="footer-item last"><a
                                    href="https://www.youtube.com/channel/UCQjTSoXJCNLaiKRzbfboE7w" class="link"
                                    target="_blank">YOUTUBE</a></li>
                        </ul>
                    </footer>
                </header>
            </section>
            <section class="second section">
                <main>
                    <?php
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
                    print('<article class="block">
                    <div id="1" class="info card first">
                        <h1 class="title">'+ $post['title'] +'</h1>
                        <h2 class="title date">12 ноя 2022 в 12:13</h2>
                        <hr class="line card">
                        <div class="container-card">
                            <div class="grid">
                                <a data-fslightbox="gallery" href=""><img src="' +$post["images_url"][0] +'">' +$post["images_url"][0] +'</a>
                            </div>
                            <div class="p">
                                <p>'+  $post['body']  + '</p>
                            </div>
                        </div>
                        <button class="button" type="button"><a href="#2" class="link">ДАЛЕЕ</a></button>
                        <a href="' + $post['vk_url'] + '" class="vk" target="_blank"><img src="image/vk.png" class="vk_img"></a>
                    </div>   
                </article>') 
                        ?>

                    <article class="block">
                        <div id="2" class="info card second">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">4 ноя 2022 18:11</h2>
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
                                    <p>Прошли поиски, в рамках Гранта Губернатора был задействован ДПСО НФГ</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#3" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/gumkorpus86?w=wall-216262291_72%2Fall" class="vk"
                                target="_blank"><img src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="3" class="info card third">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">29 окт 2022 в 22:38</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-52/s/v1/ig2/cPsWgxQ8VulkV3gmgRCgTHAj_tR4R_ZjXUIMmVKCSvq-moXPHHXfP037NbtgQIn4ErXs_SKIigeWs3eq5UgXv9RR.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-52/s/v1/ig2/cPsWgxQ8VulkV3gmgRCgTHAj_tR4R_ZjXUIMmVKCSvq-moXPHHXfP037NbtgQIn4ErXs_SKIigeWs3eq5UgXv9RR.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-3/s/v1/ig2/6KE0pkQDrv7YaXeTwr4yg4lgz_M4arJ_mXxFnUEUBHshwwnb0erez1KD6HX_6pUteRIlRlFZB6L5TLJfUWOqViQB.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-3/s/v1/ig2/6KE0pkQDrv7YaXeTwr4yg4lgz_M4arJ_mXxFnUEUBHshwwnb0erez1KD6HX_6pUteRIlRlFZB6L5TLJfUWOqViQB.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-73/s/v1/ig2/C8k53B2FoW4NzbUXpGNMFWf5j__fbJ89W4YFLAOydNaE9zS6cq1z7_OpaKsVjGkQYHtA8x2NCySaHZ_fbOzs2e0z.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-73/s/v1/ig2/C8k53B2FoW4NzbUXpGNMFWf5j__fbJ89W4YFLAOydNaE9zS6cq1z7_OpaKsVjGkQYHtA8x2NCySaHZ_fbOzs2e0z.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-41/s/v1/ig2/KhzlRg1ZSC7UseTsqxnbteOw1iQVKtlRL5ShPlhTxY6MeBwGH4qrRaMzaWh9gBHS685gFZFgr0BR1ML8BtwuwMiQ.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-41/s/v1/ig2/KhzlRg1ZSC7UseTsqxnbteOw1iQVKtlRL5ShPlhTxY6MeBwGH4qrRaMzaWh9gBHS685gFZFgr0BR1ML8BtwuwMiQ.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-61/s/v1/ig2/rUHHAdGNdlFp1maI-tYoI2WWtb3NIlllGS2cjvIiSCXk4beliHeVPEyCkt7OF92KHV4IqTlRxBhzqa6YK0ZvLETK.jpg?size=1200x1600&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-61/s/v1/ig2/rUHHAdGNdlFp1maI-tYoI2WWtb3NIlllGS2cjvIiSCXk4beliHeVPEyCkt7OF92KHV4IqTlRxBhzqa6YK0ZvLETK.jpg?size=1200x1600&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-38/s/v1/ig2/-U14Lrl1pmlNeFyi9fbRi4XvePv__vIDUIm91m2YmAOTCk_540x5_m21_ZiXSQj8V57CweAL0bpYZFeJxxzADaLw.jpg?size=1200x1600&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-38/s/v1/ig2/-U14Lrl1pmlNeFyi9fbRi4XvePv__vIDUIm91m2YmAOTCk_540x5_m21_ZiXSQj8V57CweAL0bpYZFeJxxzADaLw.jpg?size=1200x1600&quality=95&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Прошли очередные поиски Романа, было более 50 человек, активные жителей города,
                                        представители органов силовых структур.
                                        ДПСО НФГ при поддержке Гуманитарного Добровольческого корпуса организовали штаб,
                                        проинструктировали, проконтролировали ход мероприятия.
                                        Прочесали обширную территорию.Отрицательный результат это тоже результат.</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#4" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/gumkorpus86?w=wall-216262291_57%2Fall" class="vk"
                                target="_blank"><img src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="4" class="info card fourth">
                            <h1 class="title">НАЙДЕН</h1>
                            <h2 class="title date">10 сен 2022 в 22:51</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-26/s/v1/ig2/nazXpqfI58HHlr1O98WKRpm7LtUu7NutLJcIG1AjjJGgTq5aRWVCpCMs6XJu9fk_4su-iL--h0kvsBIsD8IrI8XD.jpg?size=1446x824&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-26/s/v1/ig2/nazXpqfI58HHlr1O98WKRpm7LtUu7NutLJcIG1AjjJGgTq5aRWVCpCMs6XJu9fk_4su-iL--h0kvsBIsD8IrI8XD.jpg?size=1446x824&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery" href="image/posts/2.png"><img
                                            src="image/posts/2.png"></a>
                                    <a data-fslightbox="gallery" href="image/posts/3.jpg"><img
                                            src="image/posts/3.jpg"></a>
                                    <a data-fslightbox="gallery" href="image/posts/4.jpg"><img
                                            src="image/posts/4.jpg"></a>
                                    <a data-fslightbox="gallery" href="image/posts/5.jp"><img
                                            src="image/posts/5.jpg"></a>
                                    <a data-fslightbox="gallery" href="image/posts/6.png"><img
                                            src="image/posts/6.png"></a>
                                </div>
                                <div class="p">
                                    <p>С раннего утра Добровольческий Поисковый Спасательный отряд занимался поисками 13
                                        летнего мальчика Ярослава.
                                        К обеду поиск принял массовый характер, более 28 добровольцев откликнулись на
                                        наш призыв через социальные сети и присоединились к поисковому мероприятию.
                                        Итог: совместными усилиями с сотрудниками ОМВД, под руководством " Москвы", это
                                        позывной при радиообмене, мальчик найден и доставлен в полицию</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#5" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_511" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="5" class="info card first">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">7 сен 2022 в 5:35</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-85/s/v1/ig2/QR3IFHQeX9wrTUknDSIYR8YbQVU-1uztmJJKg9TDtu4TQdm_WCDDOjN_3c27k4e9K0L2N9qxMusc5DbaEe-2ky3t.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-85/s/v1/ig2/QR3IFHQeX9wrTUknDSIYR8YbQVU-1uztmJJKg9TDtu4TQdm_WCDDOjN_3c27k4e9K0L2N9qxMusc5DbaEe-2ky3t.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-35/s/v1/ig2/yeH5v2jiEs1dAn9WwLdLUh7e-teXmnDAnCbxYqX7iaRw5zfegV_3HRXsDJWuYu6dXIjhIsUNC_vKNvZkeBUIAi7Y.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-35/s/v1/ig2/yeH5v2jiEs1dAn9WwLdLUh7e-teXmnDAnCbxYqX7iaRw5zfegV_3HRXsDJWuYu6dXIjhIsUNC_vKNvZkeBUIAi7Y.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-26/s/v1/ig2/E8i-aQuoTEUw_KxPVTk2FTnirC4IB0nriDa6_c4xtq6TuTDEkooHQXtNmXY_WzeoFzSrpurcUFqV7PBNCwizn0ji.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-26/s/v1/ig2/E8i-aQuoTEUw_KxPVTk2FTnirC4IB0nriDa6_c4xtq6TuTDEkooHQXtNmXY_WzeoFzSrpurcUFqV7PBNCwizn0ji.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-19/s/v1/ig2/T5-x-YYAXewvnrJFhCgmhkY14VmporblXnqy4ShhPevnPU1bmUPNxqi9h3nIRbvccSB7eo0tx6e1doBcRQVZXWLa.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-19/s/v1/ig2/T5-x-YYAXewvnrJFhCgmhkY14VmporblXnqy4ShhPevnPU1bmUPNxqi9h3nIRbvccSB7eo0tx6e1doBcRQVZXWLa.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-78/s/v1/ig2/eqiWZ1k8XFMe3-Jrabe8dW4TSJqQ5O4rOfUt6Bh5cGJKIbyo8W8Wt26ydzdbPW6arqGRoP4yUu-usXhYL4J18oM9.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-78/s/v1/ig2/eqiWZ1k8XFMe3-Jrabe8dW4TSJqQ5O4rOfUt6Bh5cGJKIbyo8W8Wt26ydzdbPW6arqGRoP4yUu-usXhYL4J18oM9.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-57/s/v1/ig2/bPkkGyYlgcRwnXdDDQqUZ0kuhi9oqSrfDlhHzj2gh-v8RRxgz4yVYGlvxaMnhnaOxRVFrRvtHlejRRlx87WcNGTu.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-57/s/v1/ig2/bPkkGyYlgcRwnXdDDQqUZ0kuhi9oqSrfDlhHzj2gh-v8RRxgz4yVYGlvxaMnhnaOxRVFrRvtHlejRRlx87WcNGTu.jpg?size=1600x1200&quality=95&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>06.09.2022 провели поисковые мероприятия по розыску Романа Залозных. Более 50
                                        добровольцев, с привлечением БПЛА, розыскной собакой. Поиски продолжаются.</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#6" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_499" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="6" class="info card second">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">15 мая 2022 в 9:02</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-88/s/v1/ig2/BToAFBfkmwu9I9YqTIS0njcbCOJcqQc2RFOCtUnOJNmBzrMxVvYiQG1WRGCy5St-ppihpse1ZMdf92AKB97ASuuS.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-88/s/v1/ig2/BToAFBfkmwu9I9YqTIS0njcbCOJcqQc2RFOCtUnOJNmBzrMxVvYiQG1WRGCy5St-ppihpse1ZMdf92AKB97ASuuS.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-52/s/v1/ig2/puFf5yc8XAykUeTEtjD1KblSgYoVHHM5zd0YxupNHovcn0E2-H5SRRewILYsWrdHNAoeNgIzta4aQS4D0Kb6f7ls.jpg?size=1600x777&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-52/s/v1/ig2/puFf5yc8XAykUeTEtjD1KblSgYoVHHM5zd0YxupNHovcn0E2-H5SRRewILYsWrdHNAoeNgIzta4aQS4D0Kb6f7ls.jpg?size=1600x777&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-61/s/v1/ig2/Df-XAFQlC60o1VcV6pehldWZRKewvNqrssau-EAoQhFojsw7x_GGuPoiwrqBa0FZKXqxRG1vIBIcb8nO3w41dGty.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-61/s/v1/ig2/Df-XAFQlC60o1VcV6pehldWZRKewvNqrssau-EAoQhFojsw7x_GGuPoiwrqBa0FZKXqxRG1vIBIcb8nO3w41dGty.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-27/s/v1/ig2/S889lD77CKWFWF9KpLTlrfV3uydAB6dELLDaBSAyQw_aoBoQoWi5tJu845uGULxpJ5hc-QheUpW1AOQbcYGXnAPa.jpg?size=1200x1600&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-27/s/v1/ig2/S889lD77CKWFWF9KpLTlrfV3uydAB6dELLDaBSAyQw_aoBoQoWi5tJu845uGULxpJ5hc-QheUpW1AOQbcYGXnAPa.jpg?size=1200x1600&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-32/s/v1/ig2/19gane9ds1S7bfqAK57GbQtGIkHUDLrKGh6E0auFZ4wvVD0CJJsF7Xma1DdaYb46kZlyBehhPz_YfvvOvJkWNcja.jpg?size=1280x1190&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-32/s/v1/ig2/19gane9ds1S7bfqAK57GbQtGIkHUDLrKGh6E0auFZ4wvVD0CJJsF7Xma1DdaYb46kZlyBehhPz_YfvvOvJkWNcja.jpg?size=1280x1190&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-45/s/v1/ig2/e8nZokDoO3InrfRtcGxJP8iYoYrsIoqPR2uJGFj-14fNjL6V6CLjJFF0tGVON8k8HI7QSSmH83d4XyYMgfoWgUP6.jpg?size=1280x960&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-45/s/v1/ig2/e8nZokDoO3InrfRtcGxJP8iYoYrsIoqPR2uJGFj-14fNjL6V6CLjJFF0tGVON8k8HI7QSSmH83d4XyYMgfoWgUP6.jpg?size=1280x960&quality=95&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Прошли поисковые мероприятия. Погода позволила проделать огромную поисковую
                                        работу.
                                        Была привлечена спец.техника для прочеса в заболоченной месности.
                                        Большое количество добровольцев, представители силовых ведомств, работаем в
                                        связке.</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#7" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_360" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="7" class="info card third">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">10 мая 2022 в 12:37</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-33/s/v1/ig2/IP8CCOzac8eVINMZIKiAebNhq81PBkaAX5b0igd5e3ffU2tOwPVlALGt2hhrK7K6YD2uMMy9ki57zyYMDjUVtYWn.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-33/s/v1/ig2/IP8CCOzac8eVINMZIKiAebNhq81PBkaAX5b0igd5e3ffU2tOwPVlALGt2hhrK7K6YD2uMMy9ki57zyYMDjUVtYWn.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-20/s/v1/ig2/-x7DU0AMlfz0fJSpAv-sBsmErJdYnEd4pCUPQzAcN9PQuXaaeqQohmRPCo9QNTaRcxOABde7KGUoYk2_-eWt2ixA.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-20/s/v1/ig2/-x7DU0AMlfz0fJSpAv-sBsmErJdYnEd4pCUPQzAcN9PQuXaaeqQohmRPCo9QNTaRcxOABde7KGUoYk2_-eWt2ixA.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-83/s/v1/ig2/1RUafIiy8ei4LWGaWEvsu4xdWTvA1bHT9Z2BEExjaOiL2FhE9A4mM9ysxRqFcVFe5EbkUnSIowLvSMfTtG09tZcq.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-83/s/v1/ig2/1RUafIiy8ei4LWGaWEvsu4xdWTvA1bHT9Z2BEExjaOiL2FhE9A4mM9ysxRqFcVFe5EbkUnSIowLvSMfTtG09tZcq.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-35/s/v1/ig2/scV5emV9pzsoZGUAzwSsokJd1g81EN_8lKlcAA59WlKUXiIQW9YQb2eu9iorYw0Q9YeRqbybNKPbG6BI3itEXHgZ.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-35/s/v1/ig2/scV5emV9pzsoZGUAzwSsokJd1g81EN_8lKlcAA59WlKUXiIQW9YQb2eu9iorYw0Q9YeRqbybNKPbG6BI3itEXHgZ.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-88/s/v1/ig2/cLSK-fVjaHCU2xkk4TFYLSdPTRsQkIgpZH9L4sHGNmSy5zguPt_RiSakd1SDnRyRTU7BOg5tGq80XE7pOYidE98M.jpg?size=1200x1599&quality=95&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-88/s/v1/ig2/cLSK-fVjaHCU2xkk4TFYLSdPTRsQkIgpZH9L4sHGNmSy5zguPt_RiSakd1SDnRyRTU7BOg5tGq80XE7pOYidE98M.jpg?size=1200x1599&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-79/s/v1/ig2/OVrcY2GBTNANUwBGab9O098qvNAeZTLKV_OKejNCrTW-XL3BJszAhX9PbBNUqLmE18fdRDowfjo3vMFuMsLJx8GC.jpg?size=1200x1599&quality=95&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-79/s/v1/ig2/OVrcY2GBTNANUwBGab9O098qvNAeZTLKV_OKejNCrTW-XL3BJszAhX9PbBNUqLmE18fdRDowfjo3vMFuMsLJx8GC.jpg?size=1200x1599&quality=95&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Проводим поиск, режим повышенного внимания, пока без изменений.
                                        Уже более 6 месяцев ДПСО НФГ проводит поисковые мероприятия по поиску Романа,
                                        каждый раз приходят добровольцы, откликнувшиеся на наш призыв о помощи.
                                        ВСЕМ огромное спасибо!!! За то, что Вы есть!!!</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#8" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_346" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="8" class="info card fourth">
                            <h1 class="title">НАЙДЕН</h1>
                            <h2 class="title date">29 мар 2022 в 14:18</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-8/s/v1/ig2/xmuuaZrHbhg6cRvnB1FarjHKkM-jnyefsd3wCPxxJOvV82gakKn69RY3NEtSws37xQLXVq7Far4Qgns_ktRkTAxY.jpg?size=720x508&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-8/s/v1/ig2/xmuuaZrHbhg6cRvnB1FarjHKkM-jnyefsd3wCPxxJOvV82gakKn69RY3NEtSws37xQLXVq7Far4Qgns_ktRkTAxY.jpg?size=720x508&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-10/s/v1/ig2/DTO9NgZXlR2fC99iarIR8ait_27GltKH4rVemN0r5xgQDL_t1yTG7PmE2Iey7nRIcHgBTySf6Rss-_T8xQ2woO51.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-10/s/v1/ig2/DTO9NgZXlR2fC99iarIR8ait_27GltKH4rVemN0r5xgQDL_t1yTG7PmE2Iey7nRIcHgBTySf6Rss-_T8xQ2woO51.jpg?size=1600x1200&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-64/s/v1/ig2/WfJwTNsEpvtrZLm2XzOBBuEc9B6sq8rhPJMB2wMt7P5AaH3dH2ccqH10laLImWvyeGkxzmBW-5ta-NnU-ROleD1e.jpg?size=1600x1200&quality=95&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-64/s/v1/ig2/WfJwTNsEpvtrZLm2XzOBBuEc9B6sq8rhPJMB2wMt7P5AaH3dH2ccqH10laLImWvyeGkxzmBW-5ta-NnU-ROleD1e.jpg?size=1600x1200&quality=95&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Срочно!!! Требуется помощь добровольцев в поиске ребенка.
                                        29.03.2022 , в 18-00, стоянка ТЦ "РАНДЕВУ"
                                        Одеться по погоде, фонари, заряженные телефоны.</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#9" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_255" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="9" class="info card first">
                            <h1 class="title">НАЙДЕНА</h1>
                            <h2 class="title date">26 фев 2022 в 13:23</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-74/s/v1/ig2/Q4iG9U-WcN0ZhDpdHbXpTnhpRuuxH-7stiVcdfQn_FOSKRkIOi-gILHr-zAdl0L7LeT7i02RV-v473n0xgCEW3Zh.jpg?size=1527x2160&quality=95&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-74/s/v1/ig2/Q4iG9U-WcN0ZhDpdHbXpTnhpRuuxH-7stiVcdfQn_FOSKRkIOi-gILHr-zAdl0L7LeT7i02RV-v473n0xgCEW3Zh.jpg?size=1527x2160&quality=95&type=album"></a>
                                    <a data-fslightbox="gallery" href="image/posts/6.jpg"><img
                                            src="image/posts/6.jpg"></a>
                                    <a data-fslightbox="gallery" href="image/posts/7.jpg"><img
                                            src="image/posts/7.jpg"></a>
                                </div>
                                <div class="p">
                                    <p></p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#10" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?z=photo370021885_457243517%2Fwall-204962426_223"
                                class="vk" target="_blank"><img src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="10" class="info card second">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">11 дек 2021 в 10:17</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-83/s/v1/ig2/s-ilMEDjvdDka0nNMZ9R3tOwDWjInIdWlDqrON0fBtyrWRDkAwyWSmI61oNeHGG1WPbYMjnMjt7ua_C9sJwuZOl6.jpg?size=1527x2160&quality=96&type=album"><img
                                            class="one_img"
                                            src="https://sun9-north.userapi.com/sun9-83/s/v1/ig2/s-ilMEDjvdDka0nNMZ9R3tOwDWjInIdWlDqrON0fBtyrWRDkAwyWSmI61oNeHGG1WPbYMjnMjt7ua_C9sJwuZOl6.jpg?size=1527x2160&quality=96&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Знаю, это сложно, понимаю, это трудно, не отрицаю, есть вопросы...но мы не
                                        сдадимся, мы продолжаем помогать в поисках Романа.
                                        Приглашаем ВСЕХ ДОБРОВОЛЬЦЕВ, ПОМОЧЬ В ПОИСКАХ,12.12.2021 в 10-00, КВАНТОРИУМ.
                                    </p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#11" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_176" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="11" class="info card third">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">11 дек 2021 в 1:20</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid two">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-77/s/v1/ig2/rmrabAvsuuvR4mCs5JG324l8bMocyr9mV5qiJGFDMFXjoOKigGiHvNnZfcpn756JWSpkchSYYuS8_oatLzW8_cjy.jpg?size=1600x777&quality=96&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-77/s/v1/ig2/rmrabAvsuuvR4mCs5JG324l8bMocyr9mV5qiJGFDMFXjoOKigGiHvNnZfcpn756JWSpkchSYYuS8_oatLzW8_cjy.jpg?size=1600x777&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-37/s/v1/ig2/qdJPSiJRs_8s0bQTD6WXmxRGxWk7sDcIPwO_-b0oID6FJzpM-mWc27WHEr7o7vg2EhwIkG2twSnxvO0_rNfhzGo6.jpg?size=1600x777&quality=96&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-37/s/v1/ig2/qdJPSiJRs_8s0bQTD6WXmxRGxWk7sDcIPwO_-b0oID6FJzpM-mWc27WHEr7o7vg2EhwIkG2twSnxvO0_rNfhzGo6.jpg?size=1600x777&quality=96&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Сегодня продолжили поиски, сделали все,что могли. Пока что безрезультатно.</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#12" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_175" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="12" class="info card fourth">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">4 дек 2021 в 21:30</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid two">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-56/s/v1/ig2/8-46j4lHBotfJwn8NCYCbK6UDmze2hjVoJ8aofbf8BEOvh4qE5uVGiEhF7lcbtJrpqGv4skUldpXS-0krKSsyCHL.jpg?size=591x1280&quality=96&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-56/s/v1/ig2/8-46j4lHBotfJwn8NCYCbK6UDmze2hjVoJ8aofbf8BEOvh4qE5uVGiEhF7lcbtJrpqGv4skUldpXS-0krKSsyCHL.jpg?size=591x1280&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-north.userapi.com/sun9-80/s/v1/ig2/WSz3mc8rX4QJ4kcfOMNwwtU-bYCSEPpq_Tn-pFbRi7pMybi3uoTyGfjOQeNFuvu3h98JhjlnAp9i8kUOxcResm9H.jpg?size=1600x780&quality=96&type=album"><img
                                            src="https://sun9-north.userapi.com/sun9-80/s/v1/ig2/WSz3mc8rX4QJ4kcfOMNwwtU-bYCSEPpq_Tn-pFbRi7pMybi3uoTyGfjOQeNFuvu3h98JhjlnAp9i8kUOxcResm9H.jpg?size=1600x780&quality=96&type=album"></a>
                                </div>
                                <div class="p">
                                    <p>Мы продолжаем искать Романа, завтра, 5 декабря 2021 очередной поиск, собираемся
                                        около Кванториума, о нашей беде узнают все больше и больше людей, с призывом
                                        помочь,
                                        к нефтеюганцам обратился известный российский режиссер, автор легендарной
                                        "Молодежки", "Универ", "Дылды" Дмитрий Табарчук. Так же нас поддержал известный
                                        человек, режиссер Тихонов-Роу.
                                        Все переживают, все волнуются.</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#13" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_166" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                    <article class="block">
                        <div id="13" class="info card first">
                            <h1 class="title">ПОИСКИ</h1>
                            <h2 class="title date">1 дек 2021 в 16:23</h2>
                            <hr class="line card">
                            <div class="container-card">
                                <div class="grid">
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-61/s/v1/ig2/gLbl0cIl-_qCcAeNip5qxzE93DcUnLJ3Vl5YNlwGCLsz9FV26Srdacqtyh-E--YfZbnEZzixP8uJD5ZmdcujQq9N.jpg?size=1440x1440&quality=96&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-61/s/v1/ig2/gLbl0cIl-_qCcAeNip5qxzE93DcUnLJ3Vl5YNlwGCLsz9FV26Srdacqtyh-E--YfZbnEZzixP8uJD5ZmdcujQq9N.jpg?size=1440x1440&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-33/s/v1/ig2/tFoNQfHONwtGCKXkI7saFQky-drQJwnS4uR63q9iaGxljmUpYspSlMuHofBOUUfKjaXLQyFrJ41UR5lkW3AtgUew.jpg?size=1440x1440&quality=96&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-33/s/v1/ig2/tFoNQfHONwtGCKXkI7saFQky-drQJwnS4uR63q9iaGxljmUpYspSlMuHofBOUUfKjaXLQyFrJ41UR5lkW3AtgUew.jpg?size=1440x1440&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-68/s/v1/ig2/doHT1CqQZ9FM69sajS7450zj3tkgqOzyrqpKjZ9h9qgv14_VkRM2p0Wou2Yy6-dgq_0cve2mRPoiUyzyFmlihH_7.jpg?size=1440x1440&quality=96&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-68/s/v1/ig2/doHT1CqQZ9FM69sajS7450zj3tkgqOzyrqpKjZ9h9qgv14_VkRM2p0Wou2Yy6-dgq_0cve2mRPoiUyzyFmlihH_7.jpg?size=1440x1440&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-west.userapi.com/sun9-54/s/v1/ig2/J95RyGou0fhqHQNO5DYwi2cx2xeDTuSjCsuC3rvBrcTf8A7q3CyBvjkPN06KPvZfAvpKRqfgQohaZ5rNkv1Zyd9_.jpg?size=1600x777&quality=96&type=album"><img
                                            src="https://sun9-west.userapi.com/sun9-54/s/v1/ig2/J95RyGou0fhqHQNO5DYwi2cx2xeDTuSjCsuC3rvBrcTf8A7q3CyBvjkPN06KPvZfAvpKRqfgQohaZ5rNkv1Zyd9_.jpg?size=1600x777&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery"
                                        href="https://sun9-east.userapi.com/sun9-20/s/v1/ig2/c0y8pYVMHVrIMvVWUgZqkag8RUDyaREchUQICQ9pqMqr7mUBgF0tKJYX5NrDkXCN8bP-df-pwa9P8fLQoGEwSQNq.jpg?size=1600x1200&quality=96&type=album"><img
                                            src="https://sun9-east.userapi.com/sun9-20/s/v1/ig2/c0y8pYVMHVrIMvVWUgZqkag8RUDyaREchUQICQ9pqMqr7mUBgF0tKJYX5NrDkXCN8bP-df-pwa9P8fLQoGEwSQNq.jpg?size=1600x1200&quality=96&type=album"></a>
                                    <a data-fslightbox="gallery" href="image/posts/8.jpg"><img
                                            src="image/posts/8.jpg"></a>
                                </div>
                                <div class="p">
                                    <p>Сегодня были проведены обширные поиски Романа...не теряем надежды!!!)
                                        Принимали участие более 90 человек.
                                        СПАСИБО ВСЕМ, КТО БЫЛ С НАМИ!!!</p>
                                </div>
                            </div>
                            <button class="button" type="button"><a href="#1" class="link">ДАЛЕЕ</a></button>
                            <a href="https://vk.com/heart_of_ugra?w=wall-204962426_158" class="vk" target="_blank"><img
                                    src="image/vk.png" class="vk_img"></a>
                        </div>
                    </article>
                </main>
            </section>
        </section>
    </div>
    <script src="js/fslightbox.js"></script>
    <script src="js/script.js"></script>
</body>

</html>