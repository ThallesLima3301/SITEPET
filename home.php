<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----------------- BOX ICONS  --------------->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    <!---------------- CSS  ----------------->
    <link rel="stylesheet" href="./assets/css/HomeStyles.css">

    <title>BNZ Petshop</title>
</head>
<body>
    <!---------- SCROLL TOP  ---------->
    <a href="" class="scrolltop" id="scroll-top">
        <i class='bx bxs-chevron-up scrolltop_icon'></i>
    </a>

    <!------------ HEADER  ------------->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav_logo">BNZ Petshop</a>

            <div class="nav_menu " id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="#home" class="nav_link">Home</a></li>
                    <li class="nav_item"><a href="#about" class="nav_link">Sobre</a></li>
                    <li class="nav_item"><a href="#services" class="nav_link">Serviços</a></li>
                    <li class="nav_item"><a href="#menu" class="nav_link">Depoimentos</a></li>
                    <li class="nav_item"><a href="#contact" class="nav_link">Contato</a></li>
                    <li class="nav_item"><a href="login.php" class="nav_link">Login</a></li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav_toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

        </nav>
    </header>

    <!------------ HOME  ------------->
    <section class="home" id="home">
        <div class="home_container bd-container bd-grid">
            <div class="home_data">
                <h1 class="home_title">BNZ Petshop</h1>
                <h2 class="home_subtitle">Encontre aqui seu<br>melhor amigo. </h2>
                <a href="#menu" class="button">Depoimentos</a>
            </div>

            <img src="./assets/img/home2.png" alt="" class="home_img">
        </div>
    </section>

    <!------------ ABOUT  ------------->
    <section class="about section bd-container" id="about">
        <div class="about_container bd-grid">
            <div class="about_data">
                <span class="section-subtitle about_initial">Sobre nós</span>
                <h2 class="section-title about_initial">A BNZ Petshop <br> é um site de adoção de animais</h2>
                <p class="about_description">Somos uma casa de adoção sem fins lucrativos, com o intuito 
                    de ajudar animais abandonados e em situação de rua a encontrarem um lar.
                </p>
                <a href="#services" class="button">Nossos serviços</a>             
            </div>

            <img src="./assets/img/about2.jpg" alt="" class="about_img">
        </div>
    </section>

    <!------------ SERVICES ------------->
    <section class="services section bd-container" id="services">
        <span class="section-subtitle">Serviços</span>
        <h2 class="section-title">Algumas de nossas funções</h2>

        <div class="services_container bd-grid">
            <div class="services_content">
                 <svg class="services_img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 102.2" style="enable-background:new 0 0 122.88 102.2" xml:space="preserve"><g><path d="M66.41,85.97h21.91c1.76-1.75,3.69-3.57,5.65-5.42c4.11-3.89,8.4-7.95,12.81-13.03c5.04-5.81,5.58-7.82,7.11-13.51 c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37c-0.18-0.48-0.41-0.8-0.68-0.97 c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53c-0.07,0.17-0.17,0.33-0.28,0.47 c-0.46,0.83-1.08,1.64-1.88,2.41L91.14,69.5c-0.75,0.84-2.04,0.91-2.87,0.16c-0.84-0.75-0.91-2.04-0.16-2.87l13.81-15.39 c0.06-0.07,0.12-0.14,0.19-0.2c1.43-1.36,1.88-2.83,1.63-3.9c-0.08-0.33-0.22-0.61-0.42-0.8c-0.19-0.17-0.44-0.29-0.75-0.32v0 c-1.23-0.13-3.04,0.78-5.25,3.39l0,0c-0.06,0.07-0.13,0.14-0.2,0.21l-5.35,4.72l-0.03,0.03c-5.79,5.48-8.28,6.78-12.82,9.15 c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21c-2.4,2.02-3.66,3.66-4.38,5.47 c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.27-0.26,2.52-0.35,3.77C66.47,84.78,66.44,85.38,66.41,85.97L66.41,85.97z M61.32,8.75 C65.4,4.5,68.25,0.83,74.53,0.1C86.31-1.25,97.15,10.82,91.2,22.7c-1.7,3.38-5.14,7.41-8.96,11.36c-4.19,4.34-8.82,8.58-12.07,11.8 l-8.85,8.78l-7.31-7.04c-8.8-8.48-23.15-19.14-23.62-32.36C30.06,5.98,37.36,0.05,45.77,0.16C53.28,0.25,56.43,3.99,61.32,8.75 L61.32,8.75L61.32,8.75z M56.47,85.97H34.55c-1.76-1.75-3.69-3.57-5.65-5.42c-4.11-3.89-8.4-7.95-12.81-13.03 c-5.04-5.81-5.58-7.82-7.11-13.51c-0.29-1.07-0.61-2.27-1.03-3.76l-2.62-9.21l-0.03-0.1c-1.4-4.1-1.51-6.81-0.93-8.37 c0.18-0.48,0.41-0.8,0.68-0.97c0.21-0.14,0.49-0.19,0.78-0.16C6.53,31.5,7.3,31.94,8,32.7l7.78,18.53 c0.07,0.17,0.17,0.33,0.28,0.47c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39c0.75,0.84,2.04,0.91,2.87,0.16 c0.84-0.75,0.91-2.04,0.16-2.87L20.96,51.39c-0.06-0.07-0.12-0.14-0.19-0.2c-1.43-1.36-1.88-2.83-1.63-3.9 c0.08-0.33,0.22-0.61,0.42-0.8c0.19-0.17,0.44-0.29,0.75-0.32v0c1.23-0.13,3.05,0.78,5.25,3.39l0,0c0.06,0.07,0.13,0.14,0.2,0.21 l5.35,4.72l0.03,0.03c5.79,5.48,8.28,6.78,12.82,9.15c0.95,0.5,1.99,1.04,3.28,1.74c0.51,0.28,1.01,0.62,1.5,0.99 c0.52,0.4,1.02,0.81,1.49,1.21c2.4,2.02,3.66,3.66,4.38,5.47c0.75,1.88,1.02,4.17,1.39,7.31c0.15,1.27,0.26,2.52,0.35,3.77 C56.41,84.78,56.44,85.38,56.47,85.97L56.47,85.97z M29.45,86.67c-0.31,0.36-0.5,0.83-0.5,1.34v12.14c0,1.13,0.92,2.04,2.04,2.04 h27.58c1.13,0,2.04-0.91,2.04-2.04V87.9c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96c-0.4-3.43-0.7-5.94-1.66-8.35 c-0.99-2.47-2.58-4.6-5.53-7.09c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31c-1.2-0.65-2.32-1.24-3.34-1.78 c-4.2-2.2-6.5-3.4-11.91-8.52c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61c-3.19-3.73-6.31-4.97-8.7-4.71l-0.01,0v0 c-1.17,0.12-2.17,0.58-2.97,1.28l-5.27-12.56l-0.01,0c-0.08-0.18-0.18-0.35-0.31-0.51c-1.46-1.75-3.31-2.77-5.08-2.95 c-1.21-0.12-2.38,0.14-3.4,0.8c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05l2.6,9.15 c0.38,1.32,0.71,2.59,1.02,3.71c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.88,9.33,13.1,13.32C27.23,84.55,28.33,85.6,29.45,86.67 L29.45,86.67z M33.35,90.05c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06H33.35L33.35,90.05z M93.43,86.67 c0.31,0.36,0.5,0.83,0.5,1.34v12.14c0,1.13-0.91,2.04-2.04,2.04H64.32c-1.13,0-2.04-0.91-2.04-2.04V87.9c0-0.07,0-0.15,0.01-0.22 c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96c0.4-3.43,0.7-5.94,1.66-8.35c0.99-2.47,2.58-4.6,5.53-7.09 c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31c1.2-0.65,2.32-1.24,3.34-1.78c4.2-2.2,6.5-3.4,11.91-8.52 c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61c3.19-3.73,6.31-4.97,8.7-4.71l0.01,0v0c1.17,0.12,2.17,0.58,2.97,1.28l5.27-12.56l0.01,0 c0.08-0.18,0.18-0.35,0.31-0.51c1.46-1.75,3.31-2.77,5.08-2.95c1.21-0.12,2.38,0.14,3.4,0.8c0.97,0.63,1.77,1.61,2.27,2.96 c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15c-0.38,1.32-0.71,2.59-1.02,3.71c-1.7,6.35-2.3,8.6-7.97,15.12 c-4.49,5.17-8.88,9.33-13.1,13.32C95.65,84.55,94.55,85.6,93.43,86.67L93.43,86.67z M89.53,90.05c-0.27,0.06-0.55,0.06-0.83,0 H66.36v8.06h23.49v-8.06H89.53L89.53,90.05z"/></g></svg>
                <h3 class="services_title">Criamos relações</h3>
                <p class="services_description">Conectamos animais perdidos, com seus novos companheiros(as),
                    assim tornando a vida de ambos mais feliz.
                </p>
            </div>
            <div class="services_content">
                <svg class="services_img" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 67.72"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>hand-shake</title><path class="cls-1" d="M3.24,16.78l2.3,28.47c.31,2.94,1,4.83,1.84,5.87a2.82,2.82,0,0,0,2.85.85l.27,0H21.78a3.84,3.84,0,0,0,3.31-1.32l.05-.06A8.31,8.31,0,0,0,26.32,46V14.57a1.21,1.21,0,0,1-.07-.43.49.49,0,0,1,0-.12A2.93,2.93,0,0,0,25,11.92a7.16,7.16,0,0,0-3.88-.78H7a4.3,4.3,0,0,0-3.19,1.17c-.67.8-.91,2.18-.58,4.33v.14ZM93.1,15.57a10.86,10.86,0,0,1,.09-1.43L88,10.65c-.75-.5-1.57-1.08-2.4-1.66-3-2.08-6-4.22-9.33-5.09a26.12,26.12,0,0,0-5.94-.82,20.38,20.38,0,0,0-5.46.6,14,14,0,0,0-3,1.14,10.75,10.75,0,0,0-2.31,1.64L56,10.63a1.59,1.59,0,0,1-.44.52L45.89,22.66a4.21,4.21,0,0,0,.84,1.85,4.09,4.09,0,0,0,1.78,1.26,5.77,5.77,0,0,0,2.52.31,8.21,8.21,0,0,0,4.42-1.83L58.14,22c.68-.56,1.25-1.08,1.81-1.59a24.11,24.11,0,0,1,3.78-3c3-1.8,6-1.86,9,3.12L87.93,48H93.1V15.57Zm1.23-4.39a5.67,5.67,0,0,1,.8-.9A8.24,8.24,0,0,1,100.8,8.5H114c2.77,0,5,.49,6.58,1.69,1.73,1.34,2.55,3.37,2.2,6.29l-2.92,30.21a10.68,10.68,0,0,1-2.2,6.27,6.74,6.74,0,0,1-5.7,2.22H100.09a6.06,6.06,0,0,1-4.26-1.31,8,8,0,0,1-2.15-2.81H89.57a7.09,7.09,0,0,1,.08,4.52,7.43,7.43,0,0,1-2.47,3.5,8.47,8.47,0,0,1-3.87,1.71,7.68,7.68,0,0,1-4.17-.46,10.83,10.83,0,0,1-4.91,3.13A8.53,8.53,0,0,1,69,63.22a10.44,10.44,0,0,1-5.56,3.46,10.22,10.22,0,0,1-6.62-1,9.76,9.76,0,0,1-2.29,1.35,8.61,8.61,0,0,1-3.55.65,9.66,9.66,0,0,1-6.55-2.39,19.2,19.2,0,0,1-3.68-5.09L34.19,48.8H29.11a9,9,0,0,1-1.51,3.63l-.07.1A6.74,6.74,0,0,1,21.7,55H10.61a5.66,5.66,0,0,1-5.56-1.89c-1.3-1.51-2.2-4-2.58-7.57v-.13L.17,17.05c-.46-3.06,0-5.23,1.28-6.71A7.13,7.13,0,0,1,6.87,8.06H21.1a10,10,0,0,1,5.57,1.27h0a5.73,5.73,0,0,1,2.43,3.25h9.55a27.48,27.48,0,0,1,7.13-3.67A19.39,19.39,0,0,1,54,8.27l3.27-3.89.12-.13a13.71,13.71,0,0,1,3-2.16A17.83,17.83,0,0,1,64.06.69,24.23,24.23,0,0,1,70.35,0,29.26,29.26,0,0,1,77,.92h0c3.81,1,7.1,3.31,10.3,5.55.77.54,1.53,1.07,2.35,1.62l4.65,3.09ZM15.77,38.76a2.66,2.66,0,1,1-2.65,2.65,2.66,2.66,0,0,1,2.65-2.65ZM86.36,50.92a1.57,1.57,0,0,1-.88-1L70.06,22.09c-1.71-2.86-3.25-2.94-4.75-2.05A22.52,22.52,0,0,0,62,22.71c-.68.62-1.36,1.24-1.92,1.7l-2.73,2.25a11.38,11.38,0,0,1-6.09,2.5,9,9,0,0,1-3.86-.5,7.28,7.28,0,0,1-3.11-2.22,7.44,7.44,0,0,1-1.59-4.11,1.58,1.58,0,0,1,.45-1.22l8.33-9.91a15,15,0,0,0-4.81.67,25.56,25.56,0,0,0-6.63,3.48,1.5,1.5,0,0,1-1,.33H29.41v30h5.67a1.55,1.55,0,0,1,1.38.84l7,12.15a17.79,17.79,0,0,0,3,4.34,6.77,6.77,0,0,0,4.58,1.6,5.63,5.63,0,0,0,2.3-.42,5.8,5.8,0,0,0,1.31-.75L50.14,55a1.54,1.54,0,0,1,2.71-1.45l4.94,9.23a6.67,6.67,0,0,0,8.87-1.54L59.55,50.06A1.54,1.54,0,0,1,60,47.93a1.56,1.56,0,0,1,2.13.47l7.49,11.77a5.81,5.81,0,0,0,3.78.32,7.65,7.65,0,0,0,3.44-2.24L70.07,45.47A1.55,1.55,0,0,1,72.8,44l7,13.22a4.44,4.44,0,0,0,3,.5,5.27,5.27,0,0,0,2.45-1.08,4.27,4.27,0,0,0,1.45-2,4.12,4.12,0,0,0-.23-3,1.48,1.48,0,0,1-.12-.71Zm20.32-12.16A2.66,2.66,0,1,1,104,41.41a2.66,2.66,0,0,1,2.65-2.65Z"/></svg>
                <h3 class="services_title">Conectamos pessoas</h3>
                <p class="services_description">Somos uma ponte entre uma pessoa que queira doar, 
                    e outras com a intenção de adotar um novo animalzinho.
                </p>
            </div>
            <div class="services_content">
                <svg class="services_img" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 113.6"><title>internet</title><path d="M71.89,100.56q-3.86,3.82-8.37,7.63c1.26-.17,2.52-.38,3.74-.62a49.38,49.38,0,0,0,7.08-2c.14.22.28.43.43.64.37.51.71.94,1,1.27l0,0,0,0a16.4,16.4,0,0,0,2.13,2,55.29,55.29,0,0,1-9.73,2.92,58.73,58.73,0,0,1-22.83,0,53.48,53.48,0,0,1-10.6-3.27.26.26,0,0,1-.14-.07A62.1,62.1,0,0,1,25,103.89,54.41,54.41,0,0,1,16.6,97a52.69,52.69,0,0,1-6.89-8.38A59.79,59.79,0,0,1,4.46,79,55.79,55.79,0,0,1,1.12,68.22a58.73,58.73,0,0,1,0-22.83A52.86,52.86,0,0,1,4.4,34.79a.33.33,0,0,1,.06-.14A60.34,60.34,0,0,1,9.71,25a54,54,0,0,1,6.89-8.39A52.19,52.19,0,0,1,25,9.71a59.7,59.7,0,0,1,9.67-5.25A54.52,54.52,0,0,1,45.39,1.12a58.73,58.73,0,0,1,22.83,0,53.89,53.89,0,0,1,10.6,3.27.28.28,0,0,1,.13.07,61.75,61.75,0,0,1,9.68,5.25A54.41,54.41,0,0,1,97,16.59,52.27,52.27,0,0,1,103.89,25a58.19,58.19,0,0,1,5.25,9.67,54.52,54.52,0,0,1,3.34,10.74l.12.6-5.42-1.53a47,47,0,0,0-2.6-7.83,54.22,54.22,0,0,0-2.87-5.76H85.08a65.47,65.47,0,0,1,4.2,8.49c-2.07-.57-4.13-1.13-6.16-1.66a65.73,65.73,0,0,0-3.86-6.83h-20v3.41l-.61.22a13.48,13.48,0,0,0-4.36,2.68V30.87h-20q-7.67,11.91-8.62,23.44H51.24q1,2.47,2.09,5H25.62c.31,7.87,3,15.67,7.88,23.44H54.32V61.56c1.59,3.63,3.27,7.29,5,11V82.73h4.76c.77,1.66,1.53,3.31,2.29,5H59.29v17.51a123.84,123.84,0,0,0,10.53-9.65q1.05,2.49,2.07,5ZM114.75,98a4.64,4.64,0,0,1-1.17.79l-.08,0a4.14,4.14,0,0,1-4.36-.6l-11.6-9.84-4,9.77a12.93,12.93,0,0,1-1.19,2.25,9.1,9.1,0,0,1-1.51,1.76,4.78,4.78,0,0,1-7.5-.82,9.28,9.28,0,0,1-.92-1.63c-6.9-17.49-16.26-34.9-23.26-52.4A3.11,3.11,0,0,1,62.65,43c16.77,3.1,38.5,10.19,55.55,14.71,5.3,1.4,6.16,6.07,2.25,9.69a12.21,12.21,0,0,1-2,1.52c-3,1.7-6,3.67-9,5.47l11.55,9.9a4.25,4.25,0,0,1,1,1.26l0,.08a4.28,4.28,0,0,1,.39,1.47v0a4.26,4.26,0,0,1-.16,1.54,4.39,4.39,0,0,1-.72,1.39A94.55,94.55,0,0,1,114.75,98Zm-3-3.84,5.59-6.56c-2.46-2.11-13-10.29-14.09-12.26a2.41,2.41,0,0,1,.83-3.25c3.66-2,8.36-4.86,11.83-7.17a8.38,8.38,0,0,0,1.22-.89,4.42,4.42,0,0,0,.75-.87l.16-.3-.31-.18a3.92,3.92,0,0,0-.76-.26L65,48.6,86.83,97.74a4.8,4.8,0,0,0,.38.7l.22.29.28-.2a4.51,4.51,0,0,0,.73-.89,7.51,7.51,0,0,0,.68-1.33c1.63-4,3.49-9.47,5.4-13.17l.23-.32a2.4,2.4,0,0,1,3.37-.27l13.64,11.57ZM50.13,108.19A105.56,105.56,0,0,1,30.87,87.71H15.16a51.5,51.5,0,0,0,12.61,12,52.81,52.81,0,0,0,8.89,4.8s.07,0,.11.07a49.13,49.13,0,0,0,9.64,3c1.23.24,2.49.45,3.75.62ZM11.89,82.73H27.7a50.6,50.6,0,0,1-7-23.44H5a55.75,55.75,0,0,0,1,7.94A48.27,48.27,0,0,0,9,77a54.16,54.16,0,0,0,2.86,5.76ZM5,54.31H20.75a54.38,54.38,0,0,1,7.77-23.44H11.89A54.16,54.16,0,0,0,9,36.63s0,.07-.07.1a49.91,49.91,0,0,0-3,9.65,51.46,51.46,0,0,0-1,7.93ZM15.13,25.9H31.72A117.72,117.72,0,0,1,50.46,5.35c-1.39.17-2.76.37-4.08.65a48.36,48.36,0,0,0-9.75,3,55.24,55.24,0,0,0-8.89,4.8,51.5,51.5,0,0,0-12.61,12v0Zm48-20.55A114.63,114.63,0,0,1,81.88,25.9h16.6a48.63,48.63,0,0,0-5-5.76,49.81,49.81,0,0,0-7.63-6.27A53.27,53.27,0,0,0,77,9.06s-.06,0-.1-.06a49.15,49.15,0,0,0-9.64-3c-1.36-.27-2.73-.48-4.09-.65v0ZM59.29,8.59V25.9H75.78A115.68,115.68,0,0,0,59.29,8.59Zm-5,96.63V87.71H37a105.67,105.67,0,0,0,17.35,17.51Zm0-79.32V8.59A116.3,116.3,0,0,0,37.82,25.9Z"/></svg>
                <h3 class="services_title">Tornamos mais fácil</h3>
                <p class="services_description">Te oferecemos visibilidade, para que assim,
                    as doações se tornem cada vez mais facilitadas e mais rápidas.
                </p>
            </div>
        </div>
    </section>

    <!------------ MENU ------------->
    <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">Depoimentos</span>
        <h2 class="section-title">Algumas de nossas ações</h2>

        <div class="menu_container bd-grid">
            <div class="menu_content">
                <img src="./assets/img/plate4.jpg" alt="" class="menu_img">
                <h3 class="menu_name">Luke</h3>
                <span class="menu_detail">Uma das fotos do Luke,
                    fantasiado de buzz lightyear pela sua nova dona Cristiane.</span>
            </div>

            <div class="menu_content">
                <img src="./assets/img/plate5.jpg" alt="" class="menu_img">
                <h3 class="menu_name">Billy</h3>
                <span class="menu_detail">Esse é o biily, um dos novos animais
                    que encontraram um novo lar.
                    Foto tirada pelo Pedro (seu novo dono).
                </span>             
            </div>

            <div class="menu_content">
                <img src="./assets/img/plate6.jpg" alt="" class="menu_img">
                <h3 class="menu_name">Salsicha</h3>
                <span class="menu_detail">Foto tirada pelo André, que acabou de adotar 
                    o salsicha, seu novo companheiro.
                </span>
            </div>
        </div>
    </section>

    <!------------ APP ------------->
    <section class="app section bd-container">
        <div class="app_container bd-grid">
            <div class="app_data">
                <span class="section-subtitle app_initial">Aplicativo</span>
                <h2 class="section-title app_initial">Aplicativo em desenvolvimento</h2>
                <p class="app_description">Em breve, estará disponível nosso app, para melhorar
                    ainda mais a nossa interação com novos usuários, e novos animaizinhos.
                </p>

                <div class="app_stores">
                    <a href="#"><img src="./assets/img/app1.png" alt="" class="app_store"></a>
                    <a href="#"><img src="./assets/img/app2.png" alt="" class="app_store"></a>
                </div>
            </div>

            <img src="./assets/img/movil-app2.png" alt="" class="app_img">
        </div>
    </section>

    <!------------ CONTACT US ------------->
    <section class="contact section bd-container" id="contact">
        <div class="contact_container bd-grid">
            <div class="contact_data">
                <span class="section-subtitle contact_initial">Vamos Conversar</span>
                <h2 class="section-title contact_initial">Nosso Contato</h2>
                <p class="contact_description">Estamos disponíveis 24 horas, para tirarem dúvidas, 
                    quanto à adoção, ou a adição de novos animais para terem um novo lar.
                </p>
                
            </div>
            <div class="contact_button">
                <a href="#" class="button">Contatar agora mesmo</a>
            </div>
        
        </div>
    </section>

    <!------------ FOOTER  ------------->
    <footer class="footer section bd-container">
        <div class="footer_container bd-grid">
            <div class="footer_content">
                <a href="#" class="footer_logo">BNZ Petshop</a>
                <span class="footer_description">Site de adoção</span>

                <div>
                    <a href="#" class="footer_social"><i class='bx bxl-facebook' ></i></a>
                    <a href="#" class="footer_social"><i class='bx bxl-instagram' ></i></a>
                    <a href="#" class="footer_social"><i class='bx bxl-twitter' ></i></a>
                </div>
            </div>

            <div class="footer_content">
                <h3 class="footer_title">Serviços</h3>
                <ul>
                    <li><a href="#" class="footer_link">Adoção</a></li>
                    <li><a href="#" class="footer_link">Animais</a></li>
                    <li><a href="#" class="footer_link">Conversar com donos</a></li>
                    <li><a href="#" class="footer_link">Reservar um animal</a></li>
                </ul>
            </div>

            <div class="footer_content">
                <h3 class="footer_title">Informações</h3>
                <ul>
                    <li><a href="#" class="footer_link">Eventos</a></li>
                    <li><a href="#" class="footer_link">Contatos</a></li>
                    <li><a href="#" class="footer_link">Política de privacidade</a></li>
                    <li><a href="#" class="footer_link">Termos e serviços</a></li>
                </ul>
            </div>

            <div class="footer_content">
                <h3 class="footer_title">Endereço</h3>
                <ul>
                    <li><a href="#" class="footer_link">UAM</a></li>
                    <li><a href="#" class="footer_link">Av. Paulista 2000</a></li>
                    <li><a href="#" class="footer_link">São Paulo - SP</a></li>
                    <li><a href="#" class="footer_link">bnzpetshop@email.com</a></li>
                </ul>
            </div>
        </div>

        <p class="footer_copy">&#169; 2021 UAM. </p>
    </footer>
    
    <!--------- SCROLL REVEAL  ---------->
    <script src="https://unpkg.com/scrollreveal"></script>


    <!---------- MAIN JS  ---------->
    <script src="./assets/js/home.js"></script>
</body>
</html>