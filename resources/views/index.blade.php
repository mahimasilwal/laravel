 <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="home.css"/>
    <link rel="stylesheet" href="login.css"/>
    <link rel="stylesheet" href="NavFoot.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Anton|Archivo|Archivo+Black|Archivo+Narrow|Arimo|Arvo|Asap|Asap+Condensed|Bitter|Bowlby+One+SC|Bree+Serif|Cabin|Cairo|Catamaran|Crete+Round|Crimson+Text|Cuprum|Dancing+Script|Dosis|Droid+Sans|Droid+Serif|EB+Garamond|Exo|Exo+2|Faustina|Fira+Sans|Fjalla+One|Francois+One|Gloria+Hallelujah|Hind|Inconsolata|Indie+Flower|Josefin+Sans|Julee|Karla|Lato|Libre+Baskerville|Libre+Franklin|Lobster|Lora|Mada|Manuale|Maven+Pro|Merriweather|Merriweather+Sans|Montserrat|Montserrat+Subrayada|Mukta+Vaani|Muli|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Open+Sans+Condensed:300|Oswald|Oxygen|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|Pacifico|Passion+One|Pathway+Gothic+One|Play|Playfair+Display|Poppins|Questrial|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Ropa+Sans|Rubik|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Signika|Slabo+27px|Source+Code+Pro|Source+Sans+Pro|Spectral|Titillium+Web|Ubuntu|Ubuntu+Condensed|Varela+Round|Vollkorn|Work+Sans|Yanone+Kaffeesatz|Zilla+Slab|Zilla+Slab+Highlight"
     rel="stylesheet"> --}}
 <title>ChitraFlix</title>
</head>


<body>
    <div class="home">
        <header>
            <div class="logo">
                <a href="home"> <img src="img/chitraflix-logo(1).png" width="200px" alt="Chitraflix logo"></a>
            </div>
            <div class="search">
                <input type="text" placeholder="Search" >
                <i class='bx bx-search bx-tada-hover bx-sm' style="color: #090909"></i>
            </div>
            <nav class="navbar">             
                    <a href="home">HOME</a>
                    <a href="movies">MOVIES</a>
                    <a href="genre">GENRE</a>
                    <a href="profile">PROFILE</a>           
            </nav>


            
            <div class="login">
                <button onclick="openLogin()">Log In</button>
            </div>
              <div id="loginPopup" class="popup-container">
                <div class="login-form">
                   
                  <button class="close-button" onclick="closeLogin()"><i class='bx bxs-x-circle'></i></button>
                   
                  <img src="img/chitraflix-logo(1).png" width="200px" alt="Chitraflix logo">
                  <div class="login-bg">
                  <div class="user-login-txt">
                  <h2>USER LOGIN</h2>
                  </div>
                  <form method="post" action="login_process.php">
                  <div class="input-group">
                    <label>Username</label><br> 
                    <input type="text" name="username" required><br><br>
                  </div>
                  <div class="input-group">
                    <label>Password</label><br>
                    <input type="password" name="password" required><br><br>
                  </div>
                  <div class="login-btn">
                  <input type="submit" value="LOG IN">
                  </div>
                  </form>
                  <div class="forgot-password">
                    <a href="forgot-password"> <i> Forgot Password?</i></a>
                  </div>
                  <div class="signup-link">
                    <p>Don't have an account? <a href="signup">Sign Up</a></p>
                  </div>
                  </div>
                </div>
              </div>
              

            <a href="signup"> 
            <div class="signup">
                <button>Sign Up</button>
            </div>
            </a>

        </header>
        <div class="index">
            <div class="slider">
                <div class="slide">
                    <img src="img/slider-img.png" alt="Image 1">
                </div> 
                  <div class="box"> 
                    <div class="box-line">
                    
                    </div>
                     <b class="rate-and-share-container">
                      <p class="rate-and-share">Rate and Share Reviews on Movies.</p>
                      <p class="rate-and-share">
                      Keep track of what you’ve watched and
                      </p>
                      <p class="rate-and-share">what’s on your WatchList.</p>
                      </b>
                        <div class="get-started" id="getStartedContainer">
                            <button onclick="openLogin()" class="getstarted-txt">Get Started </button> 
                        </div>
                    <div class="a-social-network">
                      A social Network for movie Geeks.
                    </div> 
                  </div>
            </div>
        </div>


              <div class="title">
                <p>FEATURED THIS WEEK</p>
                <a href="movies"> More
                </a>
              </div>
              <div class="long-line"></div>
              <div class="featured-this-week">

                <a href="movie">
                <div class="movie-card">
                    <img src="img/the boys.jpg" alt="Movie 1">
                    <div class="movie-info">
                     <span class="span" style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">THE BOYS</div>
                    </div>
                </div> 
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/the boys.jpg" alt="Movie 1">
                    <div class="movie-info">
                     <span class="span" style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">THE BOYS</div>
                    </div>
                </div> 
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/ant man.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">ANT-MAN</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/thor love of thunder.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">THOR</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/avengers.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">AVENGERS</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/spiderman.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">SPIDERMAN</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                  <img src="img/interstellar-p963317.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">INTERSTELLER</div>
                  </div>
                </div> 
                </a>

              </div>

              <div class="section-next">

                <div class="video">
                 <p class="watch-here">WATCH NEW TRAILER HERE</p> 
                  <div class="movie-trailer">       
                    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7gElkWkpBRk?si=fXhA_T-JNBHS67aJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
                </div>

                <div class="video-reviewers">
                  <p class="pop-reviewers">POPULAR REVIEWERS</p>
                  <ul>
                    <li>
                      <div class="reviewer1">
                        <div class="username">@username</div>
                        <div class="reviews">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="username">@username</div>
                        <div class="reviews">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="username">@username</div>
                        <div class="reviews">53 reviews</div>
                      </div>
                    </li>                    
                    <li>
                      <div class="reviewer1">
                        <div class="username">@username</div>
                        <div class="reviews">53 reviews</div>
                      </div>
                    </li>
                    <li>
                      <div class="reviewer1">
                        <div class="username">@username</div>
                        <div class="reviews">53 reviews</div>
                      </div>
                    </li>
                  </ul>      
                </div>
              </div>


              <div class="title">
                <p>TOP RATED ON CHITRAFLIX</p>
                <a href="movies"> More
                </a>
              </div>
              <div class="long-line"></div>
              <div class="top-rated-on">

                <a href="movie">
                <div class="movie-card">
                    <img src="img/the boys.jpg" alt="Movie 1">
                    <div class="movie-info">
                     <span class="span" style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">THE BOYS</div>
                    </div>
                </div> 
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/the boys.jpg" alt="Movie 1">
                    <div class="movie-info">
                     <span class="span" style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">THE BOYS</div>
                    </div>
                </div> 
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/ant man.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                     <span class="span"> 9.0</span>
                     <div class="name-of-the">ANT-MAN</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/thor love of thunder.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">THOR</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/avengers.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">AVENGERS</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                    <img src="img/spiderman.jpg" alt="Movie 2">
                    <div class="movie-info">
                    <span style="color: #FBBD12;">★</span>
                    <span class="span"> 9.0</span>
                    <div class="name-of-the">SPIDERMAN</div>
                    </div>
                </div>
                </a>

                <a href="movie">
                <div class="movie-card">
                  <img src="img/interstellar-p963317.jpg" alt="Movie 2">
                  <div class="movie-info">
                  <span style="color: #FBBD12;">★</span>
                  <span class="span"> 9.0</span>
                  <div class="name-of-the">INTERSTELLER</div>
                  </div>
                </div> 
                </a>

              </div>
  
        </div>


        <div class="footer">
          <div class="icon">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a> &nbsp; &nbsp;
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a> &nbsp; &nbsp;
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> &nbsp; &nbsp;
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
          </div>
        <div class="copyright">
          © Copyright <a href="home">CHITRAFLIX</a> | All rights reserved.
        </div>
        <div class="privacy-policy">
          <a href="privacy"> Privacy Policy</a> | <a href="about">About</a> | <a href="contact">Contact</a> | <a href="faq">FAQs</a>
        </div>
       </div>
    </div>


    <script>
    function openLogin() {
      document.getElementById('loginPopup').style.display = 'block';
    }

    function closeLogin() {
      document.getElementById('loginPopup').style.display = 'none';
    }
    </script>
</body>
</html>