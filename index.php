<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Сайт</title>
    <link rel="stylesheet" href="style/preload.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/adaptiv.css">
</head>
<body>
<div id="preloader" class="prepoader">
    <div class="preloader__loader">
        <div class="loadingio-spinner-rolling-rgt21mmte5b">
            <div class="ldio-y5b95icznu9">
                <img src="popup/logo_fon.png" alt="" style="width: 76px; margin-top: 71px;margin-left: 59px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
<!-- Заголовок-->
<div class="header" id="header">
    <div class="header-logo">
        <img src="popup/logo_fon.png" alt="Логотип">
    </div>
    <div class="header-menu" id="header-menu" style="text-align: center;">
        <!-- Здесь ваше меню -->
        <a href="tel:88006008131">8 (800) 600-81-31</a>
        <a href="tel:88125039323">8 (812) 503-93-23</a>
        <a href="info@mltech.shop">info@mltech.shop</a>
    </div>
    <div>
        <button class="header-button" id="header-button">Заказать</button>
    </div>
</div>
<div class="container">
    <form id="form" class="form" autocomplete="off">
        <div class="form__input-box">
            <input class="form__input-inp" type="text" id="name" name="name" placeholder="Имя и Фамилия"
                   autocomplete="off">
        </div>
        <div class="form__input-box">
            <input class="form__input-inp" type="tel" id="tel" name="tel" placeholder="+7(___) ___-__-__"
                   autocomplete="off">
        </div>
        <div class="form__input-box">
            <input class="form__input-inp" id="checkbox" type="checkbox" name="checkbox">
            <label for="checkbox">Я даю свое согласие на обработку моих персональных данных в соответствии с
                <a href="#">Согласием на обработку персональных данных</a></label>
        </div>
        <div>
            <button class="form__btn" type="submit">Заказать</button>
        </div>
        <div class="cl-btn-2">
            <div>
                <div class="leftright"></div>
                <div class="rightleft"></div>
            </div>
        </div>
    </form>
</div>
<div class="basic" id="basic">
    <div id="message" class="message">
        <img src="slider/1_02384.jpg" alt="">
        <div class="message-title">Спасибо!</div>
        <div class="message-text">Заявка успешно отправлена!</div>
        <div>
            <button class="message-button" id="message-button">Продолжить</button>
        </div>
        <div class="message-logo logo_blue">
            <img src="popup/logo2.png" alt="">
        </div>
        <div class="message-close" id="message-close">
            <img src="popup/close.jpg" alt="">
        </div>
    </div>
    <div class="video" id="video">
        <video autoplay muted playsinline class="bgvideo" id="bgvideo" src="video/video.mp4">
            <source src="video/video.mp4" type="video/mp4"></source>
            <source src="video/video.webm" type="video/webm"></source>
            <source src="video/video.mov" type="video/mov"></source>
        </video>
    </div>
    <!--Слайдер-->
    <div class="slider-active" id="slider-active">
        <div class="slider" id="slider1">
            <?php
            $imageFolder1 = 'slider'; // Замените на реальный путь к папке
            $images1 = scandir($imageFolder1);
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $slideCounter = 0; // Счетчик для data-name
            foreach ($images1 as $image1) {
                $ext1 = strtolower(pathinfo($image1, PATHINFO_EXTENSION));
                if (is_file($imageFolder1 . '/' . $image1) && in_array($ext1, $allowedExtensions)) {
                    $dataName = $slideCounter . '_' . $image1;
                    echo "<div class='slide' data-name='$dataName'>
    <img  class='lazyload' srcset='slider1/$image1 480w, $imageFolder1/$image1 1920w' sizes='(max-width: 600px) 480px, 1920px' data-src='$imageFolder1/$image1' alt=''>
</div>";
                    $slideCounter++;
                }
            }
            ?>
        </div>
    </div>

    <div class="content" id="content">
        <h1 class="content-title">
            MLT
        </h1>
        <div class="content-description">
            Универсальные сервера <strong>U1</strong> и <strong>U2</strong> произведенные в России
        </div>
    </div>
    <div class="any-type" id="any-type">
        <div class="any-type-title">
            Сервера MLT работают
        </div>
        <div class="any-type-text">
            с любым типом охлаждения
        </div>
    </div>
    <div class="air" id="air">
        Воздушное охлаждение
    </div>
    <div class="water" id="water">
        Водяное охлаждение
    </div>
    <div class="immersion" id="immersion">
        Иммерсионное охлаждение
    </div>

    <div class="company" id="company">
        <div class="company-title">
            <div class="company-title-name">
                Компания
            </div>
            <div class="company-title-text">
                «МЕДИА ЛЭНД ТЕКНОЛОДЖИ»
            </div>
        </div>
        <div class="company-text-creation">
            <div class="company-text-creation-title">
                Создала серверы MLT
            </div>
            <div class="company-text-creation-text">
                в Санкт-Петербурге, чтобы они работали по всей России.
            </div>
        </div>
        <div class="company-text-description">
            <div class="company-text-description-title">
                В их основе лежат:
            </div>
            <div class="company-text-description-text">
                универсальность, совместимость и долговечность.
            </div>
        </div>
    </div>
    <div class="created" id="created">
        <div class="created-title-title">
            Создала серверы MLT
        </div>
        <div class="created-title-text">
            в Санкт-Петербурге, чтобы они работали по всей России.
        </div>
        <div class="created-text">
            <div class="created-text-title">
                В их основе лежат:
            </div>
            <div class="created-text-text">
                универсальность, совместимость и долговечность.
            </div>
        </div>
    </div>
    <div class="logo_blue" id="logo_blue">
        <img src="popup/logo2.png" alt="">
    </div>
    <div class="description" id="description">
        <div class="description-title">
            В их основе лежат:
        </div>
        <div class="description-text">
            универсальность, совместимость и долговечность.
        </div>
    </div>
    <div class="convenience" id="convenience">
        Удобство и надежность
    </div>

    <div class="sata" id="sata">
        SATA
    </div>

    <div class="sas" id="sas">
        SAS
    </div>

    <div class="nv" id="nv">
        NvMe
    </div>
    <div class="technological-button" id="technological-button">
        <div class="technological-button-sata" id="technological-button-sata">
            SATA/
        </div>
        <div class="technological-button-sas" id="technological-button-sas">
            SAS/
        </div>
        <div class="technological-button-nv" id="technological-button-nv">
            NvMe
        </div>
    </div>
    <div class="technological-text" id="technological-text">
        Сервера одновременно поддерживает все основные типы дисков
    </div>

    <div class="reliability" id="reliability">
        Для максимальной надежности в работе
    </div>

    <div class="blocks" id="blocks">
        <div class="blocks-block">2</div>
        <div class="blocks-text">блока питания</div>
    </div>

    <div class="rails" id="rails">
        Одни серверные рельсы совместимы с обоими серверными MLT
    </div>

    <div class="capacity" id="capacity">
        Внушительная вместимость
    </div>

    <div class="eight" id="eight">
        <div class="eight-number">
            8
        </div>
        <div class="eight-text">
            PCIx16
        </div>
    </div>

    <div class="troika" id="troika">
        <div class="troika-number">
            3
        </div>
        <div class="troika-text">
            PCIx16
        </div>
    </div>

    <div class="architecture" id="architecture">
        За счет внутренней архитектуры компактности, в сервера MLT 1U можно установить <strong> 3 видеокарты, </strong>ранее
        доступные для установки только в сервера 4U другого производителя
    </div>

    <div class="zero-left" id="zero-left">
        <div class="zero-left-number" id="zero-left-number">
            0
        </div>
        <div class="zero-left-text">
            PCIx16
        </div>
    </div>

    <div class="zero-right" id="zero-right">
        <div class="zero-right-number" id="zero-right-number">
            0
        </div>
        <div class="zero-right-text">
            PCIx16
        </div>
    </div>

    <div class="density" id="density">
        Высокая плотность и универсальность
    </div>

    <div class="left" id="left-1">
        <div class="left-number">
            1
        </div>
    </div>

    <div class="left" id="left-2">
        <div class="left-number">
            2
        </div>
    </div>

    <div class="left" id="left-3">
        <div class="left-number">
            3
        </div>
    </div>

    <div class="left" id="left-4">
        <div class="left-number">
            4
        </div>
    </div>

    <div class="left" id="left-5">
        <div class="left-number">
            5
        </div>
    </div>

    <div class="left" id="left-6">
        <div class="left-number">
            6
        </div>
    </div>

    <div class="left" id="left-7">
        <div class="left-number">
            7
        </div>
    </div>

    <div class="left" id="left-8">
        <div class="left-number">
            8
        </div>
    </div>

    <div class="left" id="left-9">
        <div class="left-number">
            9
        </div>
    </div>

    <div class="left left-two" id="left-10">
        <div class="left-number">
            10
        </div>
    </div>

    <div class="left left-two" id="left-11">
        <div class="left-number">
            11
        </div>
    </div>

    <div class="left left-two" id="left-12">
        <div class="left-number">
            12
        </div>
    </div>

    <div class="left left-two" id="left-13">
        <div class="left-number">
            13
        </div>
    </div>

    <div class="left left-two" id="left-14">
        <div class="left-number">
            14
        </div>
    </div>

    <div class="left left-two" id="left-15">
        <div class="left-number">
            15
        </div>
    </div>

    <div class="left left-two" id="left-16">
        <div class="left-number">
            16
        </div>
    </div>

    <div class="left left-two" id="left-17">
        <div class="left-number">
            17
        </div>
    </div>

    <div class="left left-two" id="left-18">
        <div class="left-number">
            18
        </div>
    </div>

    <div class="left left-two" id="left-19">
        <div class="left-number">
            19
        </div>
    </div>

    <div class="left left-two" id="left-20">
        <div class="left-number">
            20
        </div>
    </div>

    <div class="left left-two" id="left-21">
        <div class="left-number">
            21
        </div>
    </div>

    <div class="left left-two" id="left-22">
        <div class="left-number">
            22
        </div>
    </div>

    <div class="left left-two" id="left-23">
        <div class="left-number">
            23
        </div>
    </div>

    <div class="left left-two" id="left-24">
        <div class="left-number">
            24
        </div>
    </div>

    <div class="right" id="right-1">
        <div class="right-number">
            1
        </div>
    </div>

    <div class="right" id="right-2">
        <div class="right-number">
            2
        </div>
    </div>

    <div class="right" id="right-3">
        <div class="right-number">
            3
        </div>
    </div>

    <div class="right" id="right-4">
        <div class="right-number">
            4
        </div>
    </div>

    <div class="right" id="right-5">
        <div class="right-number">
            5
        </div>
    </div>

    <div class="right" id="right-6">
        <div class="right-number">
            6
        </div>
    </div>

    <div class="right" id="right-7">
        <div class="right-number">
            7
        </div>
    </div>

    <div class="right" id="right-8">
        <div class="right-number">
            8
        </div>
    </div>

    <div class="right" id="right-9">
        <div class="right-number">
            9
        </div>
    </div>

    <div class="right right-two" id="right-10">
        <div class="right-number">
            10
        </div>
    </div>

    <div class="servers" id="servers">
        Сервера MLT обладают потрясающими возможностями. За счет большого количества слотов под диски и PCIe x16
        устройства, они могут использоваться под множество задач, в самых разных сферах. Сервера 2U способные вмещать до
        <strong>56 дисков</strong> и служить, даже сетевым хранилищем
    </div>

    <div class="efficiency" id="efficiency">
        <div class="efficiency-title">
            Экологичность<br>
            и экономичность
        </div>
        <div class="efficiency-text">
            За счет высокой совместимости платформ, в будущем, вам не придется приобретать новый сервер, а лишь заменить
            материнскую плату в корпусе MLT.
        </div>
    </div>
    <div class="efficiency-some" id="efficiency-some">
        Еще несколько причин использовать наши сервера
    </div>

    <div class="guarantee" id="guarantee">
        <div class="guarantee-title-title">
            Гарантия 1 год
        </div>
        <div class="guarantee-title-text">
            на серверную платформу
        </div>
        <div class="guarantee-text">
            При использовании в любом типе охлаждения
        </div>
    </div>
    <div class="button" id="button">
        <button class="button_btn" id="button_btn">Заказать</button>
    </div>
<!--    <div class="prok" id="prok">-->
<!--        <img src="popup/prokrutka.png" alt="">-->
<!--    </div>-->
</div>
<script src="script/lazysizes.min.js" async></script>
<!--JavaScript скрипт-->
<script type="module">
    let video = document.getElementById("bgvideo"), video_del = document.getElementById("video");
    const slider_active = document.getElementById("slider-active"),
        header_menu = document.getElementById("header-menu"), header = document.getElementById("header"),
        preloader = document.getElementById("preloader"), any_type = document.getElementById('any-type'),
        air = document.getElementById('air'), water = document.getElementById('water'),
        immersion = document.getElementById('immersion'),
        company = document.getElementById('company'), logo_blue = document.getElementById('logo_blue'),
        created = document.getElementById('created'),
        description = document.getElementById('description'), convenience = document.getElementById('convenience'),
        sata = document.getElementById('sata'), sas = document.getElementById('sas'),
        nv = document.getElementById('nv'),
        technological_button = document.getElementById('technological-button'),
        technological_text = document.getElementById('technological-text'),
        technological_button_sata = document.getElementById('technological-button-sata'),
        technological_button_sas = document.getElementById('technological-button-sas'),
        technological_button_nv = document.getElementById('technological-button-nv'),
        reliability = document.getElementById('reliability'),
        blocks = document.getElementById('blocks'), rails = document.getElementById('rails'),
        capacity = document.getElementById('capacity'),
        eight = document.getElementById('eight'), troika = document.getElementById('troika'),
        architecture = document.getElementById('architecture'),
        zero_left = document.getElementById('zero-left'), zero_right = document.getElementById('zero-right'),
        density = document.getElementById('density'),
        zero_left_number = document.getElementById('zero-left-number'), left_1 = document.getElementById('left-1'),
        left_2 = document.getElementById('left-2'),
        left_3 = document.getElementById('left-3'), left_4 = document.getElementById('left-4'),
        left_5 = document.getElementById('left-5'),
        left_6 = document.getElementById('left-6'), left_7 = document.getElementById('left-7'),
        left_8 = document.getElementById('left-8'),
        left_9 = document.getElementById('left-9'), left_10 = document.getElementById('left-10'),
        left_11 = document.getElementById('left-11'),
        left_12 = document.getElementById('left-12'), left_13 = document.getElementById('left-13'),
        left_14 = document.getElementById('left-14'),
        left_15 = document.getElementById('left-15'), left_16 = document.getElementById('left-16'),
        left_17 = document.getElementById('left-17'),
        left_18 = document.getElementById('left-18'), left_19 = document.getElementById('left-19'),
        left_20 = document.getElementById('left-20'),
        left_21 = document.getElementById('left-21'), left_22 = document.getElementById('left-22'),
        left_23 = document.getElementById('left-23'),
        left_24 = document.getElementById('left-24'), zero_right_number = document.getElementById('zero-right-number'),
        right_1 = document.getElementById('right-1'), right_2 = document.getElementById('right-2'),
        right_3 = document.getElementById('right-3'),
        right_4 = document.getElementById('right-4'), right_5 = document.getElementById('right-5'),
        right_6 = document.getElementById('right-6'),
        right_7 = document.getElementById('right-7'), right_8 = document.getElementById('right-8'),
        right_9 = document.getElementById('right-9'),
        right_10 = document.getElementById('right-10'), servers = document.getElementById('servers'),
        efficiency = document.getElementById('efficiency'),
        guarantee = document.getElementById('guarantee'), basic = document.getElementById('basic'),
        efficiency_some = document.getElementById('efficiency-some'),
        prok = document.getElementById('prok');
    video.playbackRate = 1.2, video.addEventListener("ended", e => {
        slider_active.style.opacity = "1", video_del.style.opacity = "0", header.style.top = "0", header.style.opacity = "1", content.style.bottom = "-100px", content.style.opacity = "1", preloader.style.opacity = "0"
    });

    $(".header-button").on("click", function () {
        $(".container").css("display", "block")
    }),
        $(".button_btn").on("click", function () {
            $(".container").css("display", "block")
        }),
        $(".cl-btn-2").on("click", function () {
            $(".container").css("display", "none")
        }),
        $(".message-button").on("click", function () {
            $(".message").css("display", "none");
        }),
        $(".message-close").on("click", function () {
            $(".message").css("display", "none");
        });
    let selector = document.querySelector("#tel"), im = new Inputmask("+7(999) 999-99-99");
    im.mask(selector);
    let validation = new JustValidate("form");
    validation.addField("#name", [{rule: "required", errorMessage: "Введите имя и фамилию!"}, {
        rule: "minLength",
        value: 2,
        errorMessage: "Минимум 2 символа!"
    }]).addField("#tel", [{
        validator(e) {
            let t = selector.inputmask.unmaskedvalue();
            return Boolean(Number(t) && t.length > 0)
        }, errorMessage: "Введите телефон"
    }, {
        validator(e) {
            let t = selector.inputmask.unmaskedvalue();
            return Boolean(Number(t) && 10 === t.length)
        }, errorMessage: "Введите телефон полностью"
    }]).addField("#checkbox", [{
        rule: "required",
        errorMessage: "Для продолжения, примите пользовательское соглашение!"
    }]).onSuccess(async function () {
        await (await fetch("mail.php", {
            method: "POST",
            body: JSON.stringify({
                name: document.getElementById("name").value,
                tel: selector.inputmask.unmaskedvalue()
            }),
            headers: {"Content-Type": "application/json; charset=UTF-8"}
        })).text(), $(".message").css("display", "block"), $(".container").css("display", "none"), $("#name").val(""), $("#tel").val("")
    });
    const sliders = document.querySelectorAll(".slider"), content = document.getElementById("content"),
        vid = document.getElementById("video"), button = document.getElementById("button_btn");
    let currentSlideIndexes = Array(sliders.length).fill(0);
    console.log(currentSlideIndexes);
    let autoScrollDirection = "forward", currentStep = 0;
    const scrollSteps = [310];
    const stopSteps = [1, 23, 33, 87, 113, 125, 127, 129, 135, 160, 170, 190, 209, 220, 222, 249, 272, 310];

    function switchSlide(sliderIndex, direction) {
        const currentSlide = sliders[sliderIndex].children[currentSlideIndexes[sliderIndex]];
        currentSlide.style.opacity = 0;
        if (direction === 'forward' && currentSlideIndexes[sliderIndex] < sliders[sliderIndex].children.length - 1) {
            currentSlideIndexes[sliderIndex]++;
        } else if (direction === 'backward' && currentSlideIndexes[sliderIndex] > 0) {
            currentSlideIndexes[sliderIndex]--;
        }
        const nextSlide = sliders[sliderIndex].children[currentSlideIndexes[sliderIndex]];
        nextSlide.style.opacity = 1;
    }
    function startAutoScrolling() {
        for (let i = 0; i < sliders.length; i++) {
            setInterval(() => {
                if (autoScrollDirection === 'forward' && currentStep < scrollSteps[i]) {
                    autoScroll(i, scrollSteps[i]);
                } else if (autoScrollDirection === 'backward' && currentStep > 0) {
                    autoScroll(i, scrollSteps[i]);
                }
            }, 65);
        }
    }
    function autoScroll(sliderIndex, maxStep) {
        if (autoScrollDirection === 'forward' && currentStep < maxStep) {
            switchSlide(sliderIndex, 'forward');
            currentStep++;
            if (currentStep === 22) {
                any_type.style.transition = '0.5s all ease-out';
                any_type.style.opacity = '1';
                any_type.style.bottom = '5%';
            }

            if (currentStep > 23) {
                any_type.style.opacity = '0';
                any_type.style.bottom = '100%';
            }

            if (currentStep === 32) {
                air.style.transition = '0.5s all ease-out';
                air.style.opacity = '1';
                air.style.bottom = '5%';
            }

            if (currentStep > 33) {
                air.style.opacity = '0';
                air.style.bottom = '100%';
            }

            if (currentStep === 41) {
                water.style.transition = '0.5s all ease-out';
                water.style.opacity = '1';
                water.style.bottom = '5%';
            }

            if (currentStep > 87) {
                water.style.opacity = '0';
                water.style.bottom = '100%';
            }

            if (currentStep === 102) {
                immersion.style.transition = '0.5s all ease-out';
                immersion.style.opacity = '1';
                immersion.style.bottom = '5%';
            }

            if (currentStep > 116) {
                immersion.style.opacity = '0';
                immersion.style.bottom = '100%';
            }

            if (currentStep === 124) {
                company.style.opacity = '1';
                company.style.bottom = '30%';
                company.style.transition = '0.5s all ease-out';
                logo_blue.style.opacity = '1';
                basic.style.background = '#ffffff';
            }

            if (currentStep > 125) {
                company.style.opacity = '0';
                company.style.bottom = '100%';
                basic.style.background = '#ffffff';
            }

            if (currentStep === 127) {
                created.style.opacity = '1';
                created.style.bottom = '30%';
                created.style.transition = '0.5s all ease-out';
                basic.style.background = '#ffffff';
            }

            if (currentStep > 127) {
                created.style.opacity = '0';
                created.style.bottom = '100%';
                basic.style.background = '#ffffff';
            }

            if (currentStep === 129) {
                description.style.opacity = '1';
                description.style.bottom = '45%';
                description.style.transition = '0.5s all ease-out';
                basic.style.background = '#ffffff';
            }

            if (currentStep > 129) {
                description.style.opacity = '0';
                logo_blue.style.opacity = '0';
                description.style.bottom = '100%';
                basic.style.background = '#000000';
            }

            if (currentStep === 134) {
                convenience.style.opacity = '1';
                convenience.style.transition = '0.5s all ease-out';
                convenience.style.bottom = '5%';
            }

            if (currentStep > 135) {
                convenience.style.opacity = '0';
                convenience.style.bottom = '100%';
            }

            if (currentStep === 140) { //Кнопка внизу где меняются цвета
                technological_button.style.opacity = '1';
                technological_button.style.transition = '0.5s all ease-out';
                technological_text.style.opacity = '1';
                technological_text.style.transition = '0.5s all ease-out';
            }

            if (currentStep === 151) { //SATA
                sata.style.opacity = '1';
                sata.style.transition = '0.5s all ease-out';
                sata.style.color = '#005CFF';
                sata.style.right = '21%';
                technological_button_sata.style.color = '#005CFF';
            }

            if (currentStep === 155) { //SAS
                sas.style.opacity = '1';
                sas.style.transition = '0.5s all ease-out';
                sas.style.color = '#005CFF';
                sas.style.right = '21%';
                technological_button_sas.style.color = '#005CFF';
            }

            if (currentStep === 159) { //NvMe
                nv.style.opacity = '1';
                nv.style.transition = '0.5s all ease-out';
                nv.style.color = '#005CFF';
                nv.style.right = '19%';
                technological_button_nv.style.color = '#005CFF';
            }

            if (currentStep > 160) {
                technological_button.style.opacity = '0';
                technological_text.style.opacity = '0';
                sata.style.opacity = '0';
                sas.style.opacity = '0';
                nv.style.opacity = '0';
            }

            if (currentStep === 164) {
                reliability.style.opacity = '1';
                reliability.style.transition = '0.5s all ease-out';
                reliability.style.bottom = '60%';
            }

            if (currentStep === 170) {
                blocks.style.opacity = '1';
                blocks.style.transition = '0.5s all ease-out';
                blocks.style.bottom = '5%';
            }

            if (currentStep > 170) {
                reliability.style.opacity = '0';
                blocks.style.opacity = '0';
                reliability.style.bottom = '100%';
                blocks.style.bottom = '100%';
            }

            if (currentStep === 190) {
                rails.style.opacity = '1';
                rails.style.transition = '0.5s all ease-out';
                rails.style.bottom = '5%';
            }

            if (currentStep > 190) {
                rails.style.opacity = '0';
                rails.style.bottom = '100%';
            }

            if (currentStep === 209) {
                capacity.style.opacity = '1';
                capacity.style.transition = '0.5s all ease-out';
                capacity.style.bottom = '5%';
            }

            if (currentStep > 209) {
                capacity.style.opacity = '0';
                capacity.style.bottom = '100%';
            }

            if (currentStep === 220) {
                eight.style.opacity = '1';
                eight.style.transition = '0.5s all ease-out';
                troika.style.opacity = '1';
                troika.style.transition = '0.5s all ease-out';
                architecture.style.opacity = '1';
                architecture.style.transition = '0.5s all ease-out';
                architecture.style.bottom = '5%';
            }

            if (currentStep > 220) {
                architecture.style.opacity = '0';
                architecture.style.bottom = '100%';
            }

            if (currentStep === 222) {
                zero_left.style.opacity = '1';
                zero_left.style.transition = '0.5s all ease-out';
                zero_right.style.opacity = '1';
                zero_right.style.transition = '0.5s all ease-out';
                density.style.opacity = '1';
                density.style.transition = '0.5s all ease-out';
                density.style.bottom = '5%';
            }
            if (currentStep === 225) {
                density.style.opacity = '0';
                density.style.bottom = '100%';
                zero_left_number.style.opacity = '0';
                zero_right_number.style.opacity = '0';
                left_1.style.opacity = '1';
                right_1.style.opacity = '1';
            }
            if (currentStep === 226) {
                left_1.style.opacity = '0';
                left_2.style.opacity = '1';
                right_1.style.opacity = '0';
                right_2.style.opacity = '1';
            }
            if (currentStep === 227) {
                left_2.style.opacity = '0';
                left_3.style.opacity = '1';
                right_2.style.opacity = '0';
                right_3.style.opacity = '1';
            }
            if (currentStep === 228) {
                left_3.style.opacity = '0';
                left_4.style.opacity = '1';
                right_2.style.opacity = '0';
                right_3.style.opacity = '1';
            }
            if (currentStep === 229) {
                left_4.style.opacity = '0';
                left_5.style.opacity = '1';
                right_3.style.opacity = '0';
                right_4.style.opacity = '1';
            }
            if (currentStep === 230) {
                left_5.style.opacity = '0';
                left_6.style.opacity = '1';
                right_4.style.opacity = '0';
                right_5.style.opacity = '1';
            }
            if (currentStep === 231) {
                left_6.style.opacity = '0';
                left_7.style.opacity = '1';
                right_5.style.opacity = '0';
                right_6.style.opacity = '1';

            }
            if (currentStep === 232) {
                left_7.style.opacity = '0';
                left_8.style.opacity = '1';
                right_6.style.opacity = '0';
                right_7.style.opacity = '1';
            }
            if (currentStep === 233) {
                left_8.style.opacity = '0';
                left_9.style.opacity = '1';
                right_7.style.opacity = '0';
                right_8.style.opacity = '1';
            }
            if (currentStep === 234) {
                left_9.style.opacity = '0';
                left_10.style.opacity = '1';
                right_8.style.opacity = '0';
                right_9.style.opacity = '1';
            }
            if (currentStep === 235) {
                left_10.style.opacity = '0';
                left_11.style.opacity = '1';
                right_9.style.opacity = '0';
                right_10.style.opacity = '1';
            }
            if (currentStep === 236) {
                left_11.style.opacity = '0';
                left_12.style.opacity = '1';
            }
            if (currentStep === 237) {
                left_12.style.opacity = '0';
                left_13.style.opacity = '1';
            }
            if (currentStep === 238) {
                left_13.style.opacity = '0';
                left_14.style.opacity = '1';
            }
            if (currentStep === 239) {
                left_14.style.opacity = '0';
                left_15.style.opacity = '1';
            }
            if (currentStep === 240) {
                left_15.style.opacity = '0';
                left_16.style.opacity = '1';
            }
            if (currentStep === 241) {
                left_16.style.opacity = '0';
                left_17.style.opacity = '1';
            }
            if (currentStep === 242) {
                left_17.style.opacity = '0';
                left_18.style.opacity = '1';
            }
            if (currentStep === 243) {
                left_18.style.opacity = '0';
                left_19.style.opacity = '1';
            }
            if (currentStep === 244) {
                left_19.style.opacity = '0';
                left_20.style.opacity = '1';
            }
            if (currentStep === 245) {
                left_20.style.opacity = '0';
                left_21.style.opacity = '1';
            }
            if (currentStep === 246) {
                left_21.style.opacity = '0';
                left_22.style.opacity = '1';
            }
            if (currentStep === 247) {
                left_22.style.opacity = '0';
                left_23.style.opacity = '1';
            }
            if (currentStep === 248) {
                left_23.style.opacity = '0';
                left_24.style.opacity = '1';
                servers.style.opacity = '1';
                servers.style.bottom = '5%';
                servers.style.transition = '0.5s all ease-out';
            }

            if (currentStep > 249) {
                servers.style.opacity = '0';
                servers.style.bottom = '100%';
                left_24.style.opacity = '0';
                right_10.style.opacity = '0';
                zero_left.style.opacity = '0';
                zero_right.style.opacity = '0';
                eight.style.opacity = '0';
                troika.style.opacity = '0';
            }

            if (currentStep === 272) {
                efficiency.style.opacity = '1';
                efficiency.style.transition = '0.5s all ease-out';
                efficiency.style.bottom = '5%';
                efficiency_some.style.opacity = '1';
                efficiency_some.style.top = '15%';
                efficiency_some.style.transition = '0.5s all ease-out';
            }

            if (currentStep > 272) {
                efficiency.style.opacity = '0';
                efficiency_some.opacity = '0';
                efficiency_some.style.top = '-20%';
                efficiency.style.bottom = '100%';
                guarantee.style.opacity = '1';
                guarantee.style.transition = '0.5s all ease-out';
                guarantee.style.bottom = '20%';
            }

            if (currentStep === 310) {
                button.style.opacity = '1';
                header_menu.style.opacity = '1';
            }
        } else if (autoScrollDirection === 'backward' && currentStep > 0) {
            switchSlide(sliderIndex, 'backward');


            if (currentStep === 13) {
                header_menu.style.transition = '4s all ease-out';
                header_menu.style.opacity = '1';
                content.style.opacity = '1';
                content.style.transition = '4s all ease-out';
                prok.style.opacity = '1';
                prok.style.transition = '1s all ease-out';
            }

            if (currentStep < 23) {
                any_type.style.opacity = '0';
                any_type.style.bottom = '0%';
            }

            if (currentStep === 32) {
                any_type.style.transition = '0.5s all ease-out';
                any_type.style.opacity = '1';
                any_type.style.bottom = '5%';
            }

            if (currentStep < 33) {
                air.style.opacity = '0';
                air.style.bottom = '0%';
            }

            if (currentStep === 40) {
                air.style.transition = '0.5s all ease-out';
                air.style.opacity = '1';
                air.style.bottom = '5%';
                water.style.opacity = '0';
            }

            if (currentStep < 45) {
                water.style.opacity = '0';
                water.style.bottom = '0%';
            }

            if ((currentStep === 86) || (currentStep === 90)) {
                water.style.transition = '0.5s all ease-out';
                water.style.opacity = '1';
                water.style.bottom = '5%';
            }

            if (currentStep === 123) {
                immersion.style.transition = '0.5s all ease-out';
                immersion.style.opacity = '1';
                immersion.style.bottom = '5%';
            }

            if (currentStep < 114) {
                immersion.style.opacity = '0';
                immersion.style.bottom = '0%';
            }

            if (currentStep < 124) {
                company.style.opacity = '0';
                company.style.bottom = '0%';
                logo_blue.style.opacity = '0';
            }

            if (currentStep === 126) {
                company.style.opacity = '1';
                company.style.transition = '0.5s all ease-out';
                company.style.bottom = '30%';
                basic.style.background = '#ffffff';
            }

            if (currentStep < 127) {
                created.style.opacity = '0';
                created.style.bottom = '0%';
                basic.style.background = '#ffffff';
            }

            if (currentStep === 128) {
                created.style.opacity = '1';
                created.style.transition = '0.5s all ease-out';
                created.style.bottom = '30%';
                basic.style.background = '#ffffff';
            }

            if (currentStep === 130) {
                description.style.opacity = '1';
                description.style.bottom = '45%';
                description.style.transition = '0.5s all ease-out';
                basic.style.background = '#ffffff';
            }

            if (currentStep < 130) {
                description.style.opacity = '0';
                description.style.bottom = '0%';
            }

            if (currentStep < 126) {
                basic.style.background = '#000000';
            }

            if (currentStep === 134) {
                logo_blue.style.opacity = '1';
            }

            if (currentStep === 136) {
                convenience.style.opacity = '1';
                convenience.style.transition = '0.5s all ease-out';
                convenience.style.bottom = '5%';
            }

            if (currentStep < 135) {
                convenience.style.opacity = '0';
                convenience.style.bottom = '0%';
            }

            if (currentStep === 161) {
                technological_button.style.opacity = '1';
                technological_text.style.opacity = '1';
                sata.style.opacity = '1';
                sas.style.opacity = '1';
                nv.style.opacity = '1';
            }

            if (currentStep < 161) {
                technological_button.style.opacity = '0';
                technological_text.style.opacity = '0';
                sata.style.right = '0%';
                sas.style.right = '0%';
                nv.style.right = '0%';
                sata.style.opacity = '0';
                sas.style.opacity = '0';
                nv.style.opacity = '0';
                technological_button_sata.style.color = '#000000';
                technological_button_sas.style.color = '#000000';
                technological_button_nv.style.color = '#000000';
            }

            if (currentStep === 171) {
                reliability.style.opacity = '1';
                blocks.style.opacity = '1';
                reliability.style.bottom = '60%';
                blocks.style.bottom = '5%';
            }

            if (currentStep < 171) {
                reliability.style.opacity = '0';
                reliability.style.bottom = '0';
                blocks.style.opacity = '0';
                blocks.style.bottom = '0';
            }

            if (currentStep === 191) {
                rails.style.opacity = '1';
                rails.style.bottom = '5%';
            }

            if (currentStep < 191) {
                rails.style.opacity = '0';
                rails.style.bottom = '0%';
            }

            if (currentStep === 210) {
                capacity.style.opacity = '1';
                capacity.style.bottom = '5%';
            }

            if (currentStep < 210) {
                capacity.style.opacity = '0';
                capacity.style.bottom = '0%';
            }

            if (currentStep === 250) {
                servers.style.opacity = '1';
                servers.style.bottom = '5%';
                left_24.style.opacity = '1';
                right_10.style.opacity = '1';
                zero_left.style.opacity = '1';
                zero_right.style.opacity = '1';
                eight.style.opacity = '1';
                troika.style.opacity = '1';
            }

            if (currentStep < 250) {
                servers.style.opacity = '0';
                servers.style.bottom = '0%';
            }

            //числа в обратном порядке
            if (currentStep === 248) {
                left_24.style.opacity = '0';
                left_23.style.opacity = '1';
                right_10.style.opacity = '0';
                right_9.style.opacity = '1';
            }

            if (currentStep === 247) {
                left_23.style.opacity = '0';
                left_22.style.opacity = '1';
                right_9.style.opacity = '0';
                right_8.style.opacity = '1';
            }

            if (currentStep === 246) {
                left_22.style.opacity = '0';
                left_21.style.opacity = '1';
                right_8.style.opacity = '0';
                right_7.style.opacity = '1';
            }

            if (currentStep === 245) {
                left_21.style.opacity = '0';
                left_20.style.opacity = '1';
                right_7.style.opacity = '0';
                right_6.style.opacity = '1';
            }

            if (currentStep === 244) {
                left_20.style.opacity = '0';
                left_19.style.opacity = '1';
                right_6.style.opacity = '0';
                right_5.style.opacity = '1';
            }

            if (currentStep === 243) {
                left_19.style.opacity = '0';
                left_18.style.opacity = '1';
                right_5.style.opacity = '0';
                right_4.style.opacity = '1';
            }

            if (currentStep === 242) {
                left_18.style.opacity = '0';
                left_17.style.opacity = '1';
                right_4.style.opacity = '0';
                right_3.style.opacity = '1';
            }

            if (currentStep === 241) {
                left_17.style.opacity = '0';
                left_16.style.opacity = '1';
                right_3.style.opacity = '0';
                right_2.style.opacity = '1';
            }

            if (currentStep === 240) {
                left_16.style.opacity = '0';
                left_15.style.opacity = '1';
                right_2.style.opacity = '0';
                right_1.style.opacity = '1';
            }

            if (currentStep === 239) {
                left_15.style.opacity = '0';
                left_14.style.opacity = '1';
                right_1.style.opacity = '0';
                zero_right_number.style.opacity = '1';
            }

            if (currentStep === 238) {
                left_14.style.opacity = '0';
                left_13.style.opacity = '1';
            }

            if (currentStep === 237) {
                left_13.style.opacity = '0';
                left_12.style.opacity = '1';
            }

            if (currentStep === 236) {
                left_12.style.opacity = '0';
                left_11.style.opacity = '1';
            }

            if (currentStep === 235) {
                left_11.style.opacity = '0';
                left_10.style.opacity = '1';
            }

            if (currentStep === 234) {
                left_10.style.opacity = '0';
                left_9.style.opacity = '1';
            }

            if (currentStep === 233) {
                left_9.style.opacity = '0';
                left_8.style.opacity = '1';
            }
            if (currentStep === 232) {
                left_8.style.opacity = '0';
                left_7.style.opacity = '1';
            }
            if (currentStep === 231) {
                left_7.style.opacity = '0';
                left_6.style.opacity = '1';
            }
            if (currentStep === 230) {
                left_6.style.opacity = '0';
                left_5.style.opacity = '1';
            }
            if (currentStep === 229) {
                left_5.style.opacity = '0';
                left_4.style.opacity = '1';
            }
            if (currentStep === 228) {
                left_4.style.opacity = '0';
                left_3.style.opacity = '1';
            }
            if (currentStep === 227) {
                left_3.style.opacity = '0';
                left_2.style.opacity = '1';
            }
            if (currentStep === 226) {
                left_2.style.opacity = '0';
                left_1.style.opacity = '1';
            }
            if (currentStep === 225) {
                left_1.style.opacity = '0';
                zero_left_number.style.opacity = '1';
                density.style.opacity = '1';
                density.style.bottom = '5%';
            }

            if (currentStep === 221) {
                zero_left.style.opacity = '0';
                zero_right.style.opacity = '0';
                density.style.opacity = '0';
                architecture.style.opacity = '1';
                architecture.style.bottom = '5%';
            }

            if (currentStep < 221) {
                architecture.style.opacity = '0';
                architecture.style.bottom = '0%';
                eight.style.opacity = '0';
                troika.style.opacity = '0';
            }

            if (currentStep === 273) {
                efficiency.style.opacity = '1';
                efficiency_some.style.opacity = '1';
                efficiency_some.style.top = '10%';
                efficiency.style.bottom = '5%';
                guarantee.style.opacity = '0';
                guarantee.style.bottom = '0%';
            }

            if (currentStep < 273) {
                efficiency.style.opacity = '0';
                efficiency.style.bottom = '0%';
                efficiency_some.style.opacity = '0';
                efficiency_some.style.top = '-20%';
            }

            currentStep--;
        }
        if (stopSteps.includes(currentStep)) {
            autoScrollDirection = 'stop';
        }
    }

    let lastWheel = new Date, b = new Date;
    window.addEventListener('wheel', (event) => {
        if (autoScrollDirection === 'stop') {
            if (event.deltaY > 0 && currentStep > 0 && currentStep < 310) {
                if (new Date - lastWheel < 1130) return
                prok.style.opacity = '0';
                header_menu.style.opacity = '0';
                header_menu.style.transition = '0.5s all ease-out'
                content.style.opacity = '0';
                content.style.transition = '0.5s all ease-out';
                autoScrollDirection = 'forward';
                currentStep++;
                lastWheel = new Date();
                console.log(currentStep);
            } else if (event.deltaY < 0 && currentStep > 12) {
                if (new Date - b < 1130) return
                autoScrollDirection = 'backward';
                currentStep--;
                b = new Date();
                console.log(currentStep);
                button.style.opacity = '0';
                header_menu.style.opacity = '0';
                content.style.opacity = '0';
            }
        }
    });

    setTimeout(startAutoScrolling, 0);
    let c = new Date, v = new Date, event = null;
    document.addEventListener("touchstart", function (e) {
        event = e
    }), window.addEventListener("touchmove", e => {
        if (event && "stop" === autoScrollDirection) {
            if (e.touches[0].pageY - event.touches[0].pageY < 0 && currentStep > 0 && currentStep < 310) new Date - c < 1130 || (console.log("По мне ведут пальцем вниз"), header_menu.style.opacity = "0", header_menu.style.transition = "0.5s all ease-out", content.style.opacity = "0", content.style.bottom = "-100px", content.style.transition = "0.5s all ease-out", autoScrollDirection = "forward", currentStep++, c = new Date, console.log(currentStep)); else if (e.touches[0].pageY - event.touches[0].pageY > 0 && currentStep > 12) {
                if (new Date - v < 1130) return;
                autoScrollDirection = "backward", currentStep--, console.log(currentStep), v = new Date, console.log("По мне ведут пальцем вверх"), button.style.opacity = "0", header_menu.style.opacity = "0", content.style.opacity = "0"
            }
        }
    }), document.addEventListener("touched", function (e) {
        event = null
    });
</script>
<script src="script/jquery-3.6.3.min.js"></script>
<script src="script/inputmask.min.js"></script>
<script src="script/just-validate.min.js"></script>
</body>
</html>
