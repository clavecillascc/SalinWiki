<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalinWiki</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/94d5043f77.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="rss/images/SalinWiki logo large logotype.png" class="header-logo"></a>
            <div class="nav-links">
                <ul>
                    
                    <li><a href="">Dictionary</a></li>
                    <li><a href="">Contribute</a></li>
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <img src="rss/images/SalinWiki Logo.png" class="body-logo">
            <h1>THE BEST WAY TO LEARN<br>PHILIPPINE LANGUAGES</h1>
            <span id="one">Salin</span><span id="two">Wiki is the best Wiki site for your translation needs between<br>existing languages in the Philippines.</span>
            <p id="three">Want to look up for a word?</p>
        </div>

        <div class="search-box">
            <div class="row">
                 <input type="text" id="input-box" placeholder="Search here!" autocomplete="off" >
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
		<div class="text-box-one"><br><br><br>
			<span id="four">SalinWiki is not just your ordinary Wiki Site.</span><br><br>
			<p id="five"> Aside from being able to seach our dictionary, we<br> also have the following features to make translation<br> of Philippine languages a lot more immersive.</p><br><br><br>
		</div>
		
			<div class="main-body">
			<img src="rss/images/bentobox.png" class="main-content">
		
		</div>
    </section>

    <section class="body-two">
	
		<div class="sub-body">
		<img src="rss/images/users_icon.png" class="users-icon">
	
		</div>
		
		<div class="text-box-two">
		<span id="six">HELP US BREAK EVERY<br>LANGUAGE BARRIER,<br>ONE TRANSLATION AT A TIME!</span><br><br>
		<span id="seven">Salin</span><span id="eight">Wiki's</span><span id="seven"> is to ensure that every Filipino can engage in meaningful<br> interactions without hindrance caused by differing languages.</span>
		<p id="nine"> Join us now by signing up for an account and contribute to our cause today!</p>
		</div>
		
    </section>
	
	<section class="body-three">
	
	<div class="footer-container">
		<img src="rss/images/SalinWiki logo with logotype.png" class="footer-logo">
		
		<img src="rss/images/Pink Shark Icon.png" class="pinkshark-logo">
		
		<img src="rss/images/language_selector.png" class="language-selector">
	
	</div>	
	
	
	<br><p class="copy-right">© 2023 Kalimbahing Pating (Pink Shark). All rights reserved.</p>
	
	</section>
	
</body>
</html>