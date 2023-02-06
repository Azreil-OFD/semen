<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Поиск Нефтеюганск</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="SHORTCUT ICON" href="image/favicon.ico" type="image/x-icon">
</head>

<body style="overflow-x:hidden;">
    <!--<div class="cap_photo"><img src="https://extremum.spb.ru/ex/img/Collag.jpg" alt="">-->
    </div>
    <div class="wrapper">
        <div class="b-popup" id="popup1">
            <div class="b-popup-content">
                <p>ДЛЯ СВЯЗИ С НАМИ ЗВОНИТЕ ПО НОМЕРУ<br><br> <a href="tel:+79824146777" style="text-decoration: none; color: black;"> +7(982) 41-46-777</a></p>
            <a class="close_button" href="tel:+79824146777"><img src="image/yes_button.png" class="buttons_for_close"></a>
            <a class="close_button" href="javascript:PopUpHide()"><img src="image/no_button.png" class="buttons_for_close"></a>
            </div>
        </div>
        <div class="b-popup" id="popup2">
            <div class="b-popup-content">
                <p>ДЛЯ ПСИХОЛОГИЧЕСКОЙ ПОДДЕРЖКИ ЗВОНИТЕ ПО НОМЕРУ<br><br> <a style="text-decoration: none; color: black;"> +7(982) 41-46-777</a></p>
            <a class="close_button" href="tel:+79824146777"><img src="image/yes_button.png" class="buttons_for_close"></a>
            <a class="close_button" href="javascript:PopUpHide2()"><img src="image/no_button.png" class="buttons_for_close"></a>
            </div>
        </div>
        <a href="javascript:PopUpShow2()">
            <img src="/image/help.png" alt="help" class="sos_button help">
        </a>
        <a href="javascript:PopUpShow()">
            <img src="image/button.png" alt="sos" class="sos_button">
        </a>
        <header class="header">
            <div class="container">
                <div class="header_body">
                    <a href="#1" class="header_logo">
                        <img src="image/logo.png" alt="">
                    </a>
                    <div class="mobile_button">
                        <a href="javascript:PopUpShow2()">
                            <img src="/image/help.png" alt="help" class="sos_button help">
                        </a>
                    </div>
                    <div class="mobile_button">
                        <a href="javascript:PopUpShow()">
                            <img src="image/button.png" alt="sos" class="sos_button">
                        </a>
                    </div>
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
                                <a href="/memo.php" class="link first menu_link" target="_blank">ПАМЯТКА</a>
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
                    <? require 'block/main.php' ?>
                </main>
            </section>
        </section>
    </div>
    <script src="js/fslightbox.js"></script>
    <script src="js/script.js"></script>
</body>
</html>