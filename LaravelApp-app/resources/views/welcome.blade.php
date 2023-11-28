<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalinWiki</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/94d5043f77.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<style>
    @font-face {
        font-family: Quiapo;
        src: url("../fonts/Quiapo_Free.otf");
    }

    @font-face {
        font-family: Maragsa;
        src: url("../fonts/Maragsâ-Display.otf");
    }


        {
        margin: 0;
        padding: 0;

    }

    .header {
        min-height: 100vh;
        width: 100%;
        background-color: #201b15;
        display: flex;
        flex-direction: column;
    }

    .header-logo {
        width: 350px;
        height: auto;
    }

    nav {
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;
        background-color: #201b15;
    }

    nav img {
        width: 150px;
    }

    .nav-links {
        /* flex: 1; */
        text-align: right;
    }

    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }

    .nav-links ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
    }

    .nav-links ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: #f44336;
        display: block;
        margin: auto;
        transition: 0.5s;
    }

    .nav-links ul li:hover::after {
        width: 100%;
    }

    .body-logo {
        margin-top: 300px;
        margin-left: auto;
        margin-right: auto;
        width: 200px;
    }

    .text-box {
        width: 90%;
        color: black;
        /* position: absolute; */
        /* top: 30%; */
        /* left: 50%; */
        /* transform: translate(-50%, -50%); */
        text-align: center;
    }

    .text-box h1 {
        margin-top: 20px;
        font-size: 125px;
        font-family: Quiapo;
        color: #efe1ba;
    }

    .text-box #one {
        font-size: 40px;
        font-family: Maragsa;
        color: #d79922;
    }

    .text-box #two {
        font-size: 40px;
        font-family: Maragsa;
        color: #efe1ba;
    }

    .text-box #three {
        margin-top: 50px;
        font-size: 40px;
        font-family: Maragsa;
        color: #efe1ba;
    }

    .search-box {
        height: 50px;
        width: 600px;
        margin: 650px auto 0;
        border-bottom: 3px solid #d79922;
    }

    .row {
        display: flex;
        align-items: center;
        margin-left: 5px;
    }

    input {
        flex: 1;
        height: 50px;
        background: transparent;
        border: 0;
        outline: 0;
        font-size: 18px;
        color: #d79922;
    }

    .body-one {
        min-height: 100vh;
        width: 100%;
        background-color: #efe1ba;
    }

    button {
        background: transparent;
        border: 0;
        outline: 0;
    }

    button .fa-solid {
        width: 25px;
        color: #447ff5;
        font-size: 25px;
        cursor: pointer;
    }

    ::placeholder {
        color: #efe1ba;
    }

    .result-box ul {
        border-top: 1px solid #999;
        padding: 15px 10px;
    }

    .result-box ul li {
        list-style: none;
        border-radius: 3px;
        padding: 15px 10px;
        cursor: pointer;
    }

    .result-box ul li:hover {
        background: #3366cc;
    }
</style>

<script src="resources/js/autocomplete.js"></script>


<body>
    <section class="header font-primary">
        <a class="bg-red-500" href="index.html"><img src="../images/SalinWiki logo large logotype.png" class="header-logo"></a>
        <div class="nav-links bg-cyan-500">
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="#">Dictionary</a></li>
                <li><a href="#">Contribute</a></li>
            </ul>
        </div>


        <div class="text-box bg-red-500">
            <img src="../images/SalinWiki Logo.png" class="body-logo">
            <h1>THE BEST WAY TO LEARN<br>PHILIPPINE LANGUAGES</h1>
            <span id="one">Salin</span><span id="two">Wiki is the best Wiki site for your translation needs
                between<br>existing languages in the Philippines.</span>
            <p id="three">Want to look up for a word?</p>
        </div>

        <div class="search-box">
            <div class="row">
                <input type="text" id="input-box" placeholder="Search here!" autocomplete="off">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="result-box">
                <ul>
                    <li></li>
                </ul>
            </div>

        </div>
    </section>

    <section class="body-one">

    </section>

    <section class="body-two">

    </section>
</body>

</html>