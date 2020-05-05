<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Воображариум</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(62570344, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/62570344" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <!-- Шапка -->
    <div class="head">
        <div class="voobrzh">
            <h1 class="h1head">Воображариум</h1>
            <h3 class="h3head">Продажа и прокат карнавальных костюмов</h3>
        </div>
        <div class="voobrzhtwo">
            <img style="width: 150px;height: 150px;" src="/image/logotip.svg">
        </div>
    </div>
    <div class="section">
        <div class="nav">
            <a class="button" href="#katalog">Каталог</a>
            <a class="button" href="#prokat">Прокат</a>
            <a class="button" href="#dostavka">Доставка</a>
            <a class="button" href="#onas">О нас</a>
            <a class="button" href="#kontakti">Контакты</a>
        </div>

</div>

    <!-- Т А Й М Е Р -->
    <div style="width: 100%;">
        <h1 class="class="primeriglavtext>АКЦИЯ -20% на все костюмы<br>До конца осталось :</h1>
        <div id="countdown" class="countdown">
            <div class="countdown-number">
                <span class="days countdown-time"></span>
                <span class="tdtext">Дни</span>
            </div>
            <div class="countdown-number">
                <span class="hours countdown-time"></span>
                <span class="tdtext">Часы</span>
            </div>
            <div class="countdown-number">
                <span class="minutes countdown-time"></span>
                <span class="tdtext">Минуты</span>
            </div>
            <div class="countdown-number">
                <span class="seconds countdown-time"></span>
                <span class="tdtext">Секунды</span>
            </div>
        </div>
    </div>
    <!-- Т А Й М Е Р -->

        <h1 id="katalog" class="menushki">КАТАЛОГ</h1>
        <hr class="hrone">

    <!-- Первый блок | Часть первая | Каталог -->
    <div class="primeri">
        <div class="divprimeritextverh">
            <span class="primeriglavtext">Примеры наших костюмов :</span>
        </div>
        <div class="primerichast2">
                <?php require_once('php/costumes.php'); ?>
        </div>
    </div>
    <!-- Первый блок | Часть вторая | Каталог -->
    <div class="katalog_cont">
        <div>
            <div class="kataloggirllevo">
                <img style="width: 450px;height: 450px;" src="/image/sakura1.svg">
            </div>
        </div>

        <div>
            <div class="polniikatalog">
                <span class="primeriglavtext">Для получения полного каталога - заполните форму :</span>
                <div class="obshiilevopravo">
                    <div class="polniikataloglevo">
                        <img style="width: 280px;height: 270px;" src="/image/girl.svg">
                    </div>
                    <div class="polniikatalogpravo">
                        <form method="post" action="php/form_one.php" target="_blank">
                            <span class="primeriglavtext">Ваше имя :</span>
                            <input type="text" id="inptxt1" name="name" maxlength="30" required></input>
                            <span class="primeriglavtext">Ваш email :</span>
                            <input type="email" id="inptxt2" name="email" required></input>
                            <input id="inpknopkakatalog" type="submit" value="Получить каталог">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="kataloggirlpravo">
                <img style="width: 450px;height: 450px;" src="/image/sakura2.svg">
            </div>
        </div>
    </div>
    <!-- Второй блок | Прокат -->
    <h1 id="prokat" class="menushki">ПРОКАТ</h1>
    <div class="prokat_cont">
        <h2 class="h2prokat">Для оформления проката Вам нужно сделать всего 3 шага :</h2>
        <div class="prokat">
            <div class="prokatbloki">
                <h2 class="h2prokatzag">1ый шаг</h2>
                <h2 class="h2prokattext">Выбор костюма</h2>
                <div><img style="width: 100px;height: 100px;" src="/image/dress.svg"></div>
            </div>

            <div class="prokatbloki">
                <h2 class="h2prokatzag">2ой шаг</h2>
                <h2 class="h2prokattext">Оформление договора</h2>
                <img style="width: 100px;height: 100px;" src="/image/dogovor.svg">
            </div>

            <div class="prokatbloki">
                <h2 class="h2prokatzag">3ий шаг</h2>
                <h2 class="h2prokattext">Полная оплата</h2>
                <img style="width: 100px;height: 100px; " src="/image/oplata.svg">
            </div>
        </div>
        <h2 class="h2prokat">... и ваш праздник станет особенным и незабываемым!</h2>
    </div>

    <!-- Третий блок | Доставка -->
    <h1 id="dostavka" class="menushki">ДОСТАВКА</h1>
    <div class="dostavka_cont">
        <div class="dostavkabloki">
            <h2 class="h2onas">Доставка до<br>пункта выдачи</h2>
            <img style="width: 240px;height: 220px; padding: 60px 0 40px 0;" src="/image/place.svg">
            <table>
                <tbody>
                    <tr>
                        <td><img style="width: 30px;height: 30px;" src="/image/galka.svg"></td>
                        <td class="tdtext">СМС оповещение при прибытии заказа</td>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;height: 30px;" src="/image/galka.svg"></td>
                        <td class="tdtext">Заказ будет ждать Вас на пункте 7 дней</td>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;height: 30px;" src="/image/galka.svg"></td>
                        <td class="tdtext">Прием и возврат товара в магазин</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="dostavkablokcenter">
            <img style="width: auto;height: 150px;" src="/image/GIF.gif">
        </div>

        <div class="dostavkabloki">
            <h2 class="h2prokatzag">Доставка курьером<br>до места</h2>
            <img style="width: 280px;height: 270px;" src="/image/deliv.svg">
            <table>
                <tbody>
                    <tr>
                        <td><img style="width: 30px;height: 30px;" src="/image/galka.svg"></td>
                        <td class="tdtext">Оплата наличными при получении</td>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;height: 30px;" src="/image/galka.svg"></td>
                        <td class="tdtext">Курьер позвонит Вам за час до доставки</td>
                    </tr>
                    <tr>
                        <td><img style="width: 30px;height: 30px;" src="/image/galka.svg"></td>
                        <td class="tdtext">Заказ привезут домой или на работу</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <!-- Четвертый блок | О нас-->
    <h1 id="onas" class="menushki">О НАС</h1>
    <div class="onas_cont">
        <div class="onasone">
            <div class="onastwo">
                <h2 class="h2prokatzag">Гарантия качества</h2>
                <img style="width: 200px;height: 200px;" src="/image/kachestvo.svg">
            </div>

            <div class="onastwo">
                <h2 class="h2prokatzag">Индивидуальный подход</h2>
                <img style="width: 200px;height: 200px;" src="/image/podhod.svg">
            </div>

            <div class="onastwo">
                <h2 class="h2prokatzag">Низкие цены</h2>
                <img style="width: 200px;height: 200px;" src="/image/ceni.svg">
            </div>
        </div>

        <div class="onasone">
            <div class="onastwo">
                <h2 class="h2prokatzag">Фирменная<br>служба доставки</h2>
                <img style="width: 200px;height: 200px;" src="/image/dostavka.svg">
            </div>

            <div class="onastwo">
                <h2 class="h2prokatzag">Более 3000<br>довольных клиентов</h2>
                <img style="width: 200px;height: 200px;" src="/image/clients.svg">
            </div>
        </div>

    </div>
    <!-- Пятый блок | Контакты -->
    <h1 id="kontakti" class="menushki">КОНТАКТЫ</h1>
    <div class="kont_cont">
        <h2 class="h2prokat">Вы можете заказать звонок или связаться с нами самостоятельно:</h2>
        <div class="kont_conttwo">
            <div>
                <h2 class="h2prokatzag">Наши контакты :</h2>
                <div class="kontone">
                    <h2 style="padding: 0 20px 0 0;" class="h2prokatzag">г. Москва,<br>ул. Ивантеевская,<br>дом 5, этаж
                        2,<br> офис 11</h2>
                    <h2 style="padding: 0 0 0 20px;" class="h2prokatzag">
                        8(965)140-30-30<br>8(499)200-12-15<br>voobrzhrm@gmail.com<br>ПН - ВС<br>09:00 - 18:00</h2>
                </div>
            </div>

            <div>
                <h2 class="h2prokatzag">Заказать звонок :</h2>
                <div class="konttwo">
                    <form method="post" action="php/form_two.php" target="_blank">
                        <span class="primeriglavtext">Ваше имя :</span>
                        <input type="text" id="inptxt1" name="name" maxlength="30" required></input>
                        <span class="primeriglavtext">Ваш номер :</span>
                        <input type="tel" id="inptxt2" name="tel" maxlength="11" required></input>
                        <input id="inpknopkakontakti" type="submit" value="Заказать звонок">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Футер -->
    <footer class="foot">
        <div class="fotone">
            <p>г. Москва,<br> ул. Ивантеевская<br>дом 5, этаж 2<br>офис 11 </p>
        </div>
        <div class="fottwo">
            <p>Наши соц-сети:</p>
            <div class="social">
                <div>
                    <input id="facebook" type="submit" value="" onClick="window.open('https://facebook.com')"></input>
                </div>

                <div>
                    <input id="instagram" type="submit" value="" onClick="window.open('https://instagram.com')"></input>
                </div>

                <div>
                    <input id="twitter" type="submit" value="" onClick="window.open('https://twitter.com')"></input>
                </div>
            </div>
        </div>
        <div class="fotthree">
            <p><a href="tel:">8(965)140-30-30</a></p>
            <p><a href="tel:">8(495)200-12-15</a></p>
            <p>voobrzhrm@gmail.com</p>
        </div>
    </footer>
</body>
        <script>
            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    total: t,
                    days: days,
                    hours: hours,
                    minutes: minutes,
                    seconds: seconds
                };
            }

            function initializeClock(id, endtime) {
                var clock = document.getElementById(id);
                var daysSpan = clock.querySelector(".days");
                var hoursSpan = clock.querySelector(".hours");
                var minutesSpan = clock.querySelector(".minutes");
                var secondsSpan = clock.querySelector(".seconds");

                function updateClock() {
                    var t = getTimeRemaining(endtime);

                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                        var deadline = new Date('2020-05-30');
                        initializeClock('countdown', deadline);
                    }

                    daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
                    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }
            var deadline = new Date('2020-05-20');
            initializeClock("countdown", deadline);
        </script>
</html>