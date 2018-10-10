 <?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
   
    <head>
        <meta charset="UTF-8">
        <title>DiHM | Video Sharing website</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="shortcut icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

        body, html {
            height: 100%;
            margin: 0;
        }

        </style>
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/scrolling-nav.css" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

    </head>
    <body>
        <div>
            <header id="navbar" class="header" style="background: linear-gradient(to right, #000f1e , #001e3c); ">
		<a href="index.php" class="logo"><img src="img/dihm.png" height="50px;"></a>
		<input class="menu-btn" type="checkbox" id="menu-btn" />
		<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
		<ul id="menu" class="menu" style="background-color: transparent;color: white;">
			<li><a href="index.php" style="color: white;">Home</a></li>
			
			 <li><div class="dropdown"><a><button class="dropbtn" style="color: white; background-color: transparent;">Movies  <i class="fa fa-caret-down"></i></button></a><div class="dropdown-content">
              <a href="index.php#englishMovies" onclick="hidenav()">English Movies</a>
              <a href="index.php#hindiMovies">Hndi Movies</a>
              <a href="index.php#hindiDubbedMovies">Hindi Dubbed Movies</a>
                </div></div></li>
            <li><div class="dropdown"><a><button class="dropbtn" style="color: white; background-color: transparent;">Series  <i class="fa fa-caret-down"></i></button></a><div class="dropdown-content">
              <a href="index.php#englishSeries">English Series</a>
              <a href="index.php#hindiSeries">Hindi Series</a>
              <a href="index.php#hindiDubbedSeries">Hindi Dubbed Series</a>
                </div></div></li>
            <li><div class="dropdown"><a><button class="dropbtn" style="color: white; background-color: transparent;">Genre  <i class="fa fa-caret-down"></i></button></a><div class="dropdown-content">
              <a href="index.php#actionMovies">Action Movies</a>
              <a href="index.php#romanticMovies">Romantic Movies</a>
              <a href="index.php#comedyMovies">Comedy Movies</a>
                </div></div></li>
            <li  id="userOut"><div class="dropdown"><a><button class="dropbtn" style="color: white; background-color: transparent;">User<i class="fa fa-caret-down"></i></button></a><div class="dropdown-content">
                <a href="login.html">Login</a>
                <a href="signup.html">Sign Up</a>
                </div></div></li>
            
            <li id="userIn" ><div class="dropdown"><a><button class="dropbtn" style="color: white; background-color: transparent;">User<i class="fa fa-caret-down"></i></button></a><div class="dropdown-content">
              <a href="index.php#actionMovies">Account</a>
              <a href="index.php#romanticMovies">My Movies</a>
              <a href="logout.php">Logout</a>
                </div></div></li>
                </ul>
	</header>
            
            <?php if( isset($_SESSION['email']))
            {
            ?>
                  <script>document.getElementById("userOut").style.display = "none";</script>
            <?php }else{ ?>
                 <script>document.getElementById("userIn").style.display = "none";</script>
            <?php } ?>
            
            
            
        </div>
                        <!-- header ends here -->
                
<!--
                <div id="home" !--Logo>
                    <img class="center-image" src="img\movies.jpg" >
                </div>
-->
                    
<!--                    <div class="slideshow-container">-->

                        <div class="mySlides fade">
                           <img itemprop="image" class="center-image" src="img/furious.jpg">
                        </div>

                        <div class="mySlides fade">
                          <img itemprop="image" class="center-image" src="img/1921.jpg">
                        </div>

                        <div class="mySlides fade">
                        <img itemprop="image" class="center-image" src="img/theFifthEstate.jpg">
                        </div>
                        <div class="mySlides fade">
                           <img itemprop="image" class="center-image" src="img/orangeIsTheNewBlack.jpg">
                        </div>

                        <div class="mySlides fade">
                          <img itemprop="image" class="center-image" src="img/ghoul.jpg">
                        </div>

                        <div class="mySlides fade">
                        <img itemprop="image" class="center-image" src="img/poldark.jpg">
                        </div>
                        <div class="mySlides fade">
                           <img itemprop="image" class="center-image" src="img/concealed.jpg">
                        </div>

                        <div class="mySlides fade">
                          <img itemprop="image" class="center-image" src="img/whatIfItWorks.jpg">
                        </div>

                        <div class="mySlides fade">
                        <img itemprop="image" class="center-image" src="img/theNinthPassenger.jpg">
                        </div>
<!--                </div>-->
           
        

<!--        ENGLISH MOVIES STARTS HERE-->
        
        <div id="englishMovies">
            <div id="processSectionBlue">
                <h1 class="processText" style="color: #FFFFFF">English Movies</h1>
                         <div class="movies">
                            <div class="block twoDRotate">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                                <button class="buyNowBtn  buyNowBtnBlue" style="margin-left: 15px;" id="001">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>

            </div>
            <div class="block threeDRotate">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">
                </a> 
                                 <button class="buyNowBtn  buyNowBtnBlue" style="margin-left: 15px;" id="002">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div>
            <div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                 <button class="buyNowBtn  buyNowBtnBlue" style="margin-left: 15px;" id="003">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div>
            <div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div>
            <div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                 <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div><div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                              <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div><div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                           <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div><div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                              <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div><div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a> 
                              <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div><div class="block">
                <a href="actionMovies.html"> 
			         			<img class="lazy" src="img/furious.jpg" alt="Watch Furious (2017) Fmovies">

		      </a>  <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a href="https://www.youtube.com/watch?v=Fnf4TdaOJYg" target="_blank">Watch Trailer</a>
            </div>
                 
        </div>
            </div>
        
        </div>
<!--        ENGLISH MOVIES ENDS HERE-->
        
        
<!--        HINDI MOVIES STARTS HERE-->
        
        <div id="hindiMovies" >
            <div id="processSectionWhite">
                <h1 class="processText" style="color: #001e3c">Hindi Movies</h1>
                
                <div class="movies">
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a>
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiMovies"> 
			             <img class="lazy" src="img/1921.jpg" alt="Watch 1921 (2018) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                </div>
                    
            </div>
        </div>
<!--        HINDI MOVIES END HERE-->
        
<!--        HINDI DUBBED MOVIES STARTS HERE-->
        <div id="hindiDubbedMovies" >
            <div id="processSectionBlue">
                <h1 class="processText" style="color: #FFFFFF">Hindi Dubbed Movies</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiDubbedMovies"> 
			             <img class="lazy" src="img/theFifthEstate.jpg" alt="Watch The Fifth Estate (2013) Fmovies">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
<!--        HINDI DUBBED MOVIES END HERE-->

        
<!--        ENGLISH SERIES STARTS HERE-->
        <div id="englishSeries" >
            <div id="processSectionWhite">
                <h1 class="processText" style="color: #001e3c">English Series</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#englishSeries"> 
			             <img class="lazy" src="img/orangeIsTheNewBlack.jpg" alt="Watch Orange Is the New Black Season 6 ">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
<!--        ENGLISH SERIES ENDS HERE-->
        
        
<!--        HINDI SERIES STARTS HERE-->
        
        <div id="hindiSeries" >
            <div id="processSectionBlue">
                <h1 class="processText" style="color: #FFFFFF">Hindi Series</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#hindiSeries"> 
			             <img class="lazy" src="img/ghoul.jpg" alt="Watch Ghoul Season 1">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                </div>
            </div>
        </div>
<!--        HINDI SERIES END HERE-->
        
<!--        HINDI DUBBED SERIES STARTS HERE-->
        <div id="hindiDubbedSeries" >
            <div id="processSectionWhite">
                <h1 class="processText" style="color: #001e3c">Hindi Dubbed Series</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#hindiDubbedSeries"> 
			             <img class="lazy" src="img/poldark.jpg" alt="Watch Poldark Season 4">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
<!--        HINDI DUBBED SERIES  END HERE-->

        
<!--        ACTION MOVIES STARTS HERE-->        
        <div id="actionMovies" >
            <div id="processSectionBlue">
                <h1 class="processText" style="color: #FFFFFF">Action Movies</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                     <div class="block">
                        <a href="#actionMovies"> 
			             <img class="lazy" src="img/concealed.jpg" alt="Watch Concealed (2017)">
		                  </a> 
                         <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
<!--        ACTION MOVIES ENDS HERE-->
        
        
<!--        ROMANTIC MOVIES STARTS HERE-->
        
        <div id="romanticMovies" >
            <div id="processSectionWhite">
                <h1 class="processText" style="color: #001e3c">Romantic Movies</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#romanticMovies"> 
			             <img class="lazy" src="img/whatIfItWorks.jpg" alt="Watch What If It Works? (2017)">
		                  </a> 
                        <button class="buyNowBtn  buyNowBtnWhite" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
<!--        ROMANTIC MOVIES END HERE-->
        
<!--        COMEDY MOVIES STARTS HERE-->
        <div id="comedyMovies" >
            <div id="processSectionBlue">
                <h1 class="processText" style="color: #FFFFFF">Comedy Movies</h1>
                <div class="movies">
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    <div class="block">
                        <a href="#comedyMovies"> 
			             <img class="lazy" src="img/theNinthPassenger.jpg" alt="Watch The Ninth Passenger (2018)">
		</a>  
                        <button class="buyNowBtn  buyNowBtnBlue" id="watch" style="margin-left: 15px;">Buy Now</button>
                                <a>Watch Trailer</a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        
<!--        COMEDY MOVIES END HERE-->
        
<!-- Video Modal -->
        <div id="video-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <video id="myVideoPlayer" controls></video>
            </div>
        </div>
        <script src="js/scrollreveal.min.js"></script>
        <script src="js/scrolling-nav.js"></script>
        <script src="js/watchVideo.js"></script>
        
        <script>
            $(document).ready(function() {
            if (navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
            }
            else 
            {
                alert('It seems like Geolocation, which is required for this page, is not enabled in your browser.');
            }       
        });

        function successFunction(position) 
        {
            var lat = position.coords.latitude;
            var long = position.coords.longitude;
            alert('Your latitude is :'+lat+' and longitude is '+long+'. We have your location. Any mischief would be recorded and action would be taken accordingly. Enjoy your time responsibly. Thank You!');
        }

        function errorFunction(position) 
        {
            alert('Error!');
        }
	
            function home(){
                window.location.href("index.php");
            };
            
	window.sr = ScrollReveal({reset: true });
	sr.reveal('#home', {dura tion: 500, origin: 'right', scale: 0.5});
	sr.reveal('.block', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#signUp', {duration: 1000, origin: 'left', scale: 0.5});
	sr.reveal('.processText', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#hindiDubbedMovies', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#englishSeries', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#hindiSeries', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#hindiDubbedSeries', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#actionMovies', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#romanticMovies', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#comedyMovies', {duration: 1000, origin: 'left', scale: 0.5});
	sr.reveal('.login-container', {duration: 1000, origin: 'left', scale: 0.5});
//	sr.reveal('#login', {duration: 1000, oarigin: 'left', scale: 0.5});



	// function myFunction() {
	//     var x = document.getElementById("navbar");
	//     if (x.className === "navbar") {
	//         x.className += " responsive";
	//     } else {
	//         x.className = "navbar";
	//     }
	// }

	// function hidenav(){
	// 	var y = document.getElementById("menubutton");	
	// }

            /* SLIDE SHOW*/
            
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 3000); // Change image every 3 seconds
            }
            
            /* Video Modal*/
            var modal = document.getElementById('video-modal');

            // Get the button that opens the modal
            var btn = document.getElementsByClassName("buyNowBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            
            var showModal = function() {
                modal.style.display = "block";
            };
            
            for (var i = 0; i < btn.length; i++) {
                btn[i].addEventListener('click', showModal, false);
            }
            var video = document.getElementById("myVideoPlayer");
            function stopVideo(){
              video.pause();
              video.currentTime = 0;
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
                stopVideo();
                document.location.reload(true);
            }
            

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    stopVideo();
                    document.location.reload(true);
                }
            }
            
           window.onkeyup = function(e) {
               var key = e.keyCode ? e.keyCode : e.which;

               if (key == 27) {
                   modal.style.display = "none";
                    stopVideo();
                    document.location.reload(true);
               }
        }
            
    
            
        </script>
        
    </body>
</html>