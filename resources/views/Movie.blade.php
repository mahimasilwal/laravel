<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>movie</title>

  <link rel="stylesheet" href="movie.css"/>
  <link rel="stylesheet" href="login.css"/>
  <link rel="stylesheet" href="NavFoot.css"/>

</head>
<body>
  
    <div class="home">
     <header>
  <div class="logo">
    <a href="home"> <img src="img/chitraflix-logo(1).png" width="200px" alt="Chitraflix logo"></a>
  </div>
  <div class="search">
    <input type="text" placeholder="Search">
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
  <div class="head-section">
      
    <div class="video">
      {{-- <p class="watch-here" name="movie_name">{{$item->movie_name}}</p> --}}
      <div class="movie-trailer">
        {{-- <iframe src="" frameborder="0" allowfullscreen name="video_url">{{$item->video_url}}</iframe> --}}
      </div>
    </div>
  
    <div class="movie-details">
      <div class="detail-top">
        <div class="cover-img">
          {{-- <p name="image_url">{{$item->image_url}}</p> --}}
        </div>
        <div class="display-rating">
          <span class="star">★ &nbsp;</span>
          <span class="rt" style="color: #fff;"> 9.0 </span>
        </div>
      </div>
      <div class="genre">ACTION | CRIME </div>
      {{-- <i class="released" name="release_date">{{$item->release_date}}</i> --}}
      {{-- <p name="description">{{$item->description}}</p> --}}
    </div>
    
  </div>
  
  
  
  <div class="ratings">
    <div class="rating-text">Rate this movie</div>
    <div class="rating-value-head">
      <div class="rating-value">1</div>
      <div class="rating-value">2</div>
      <div class="rating-value">3</div>
      <div class="rating-value">4</div>
      <div class="rating-value">5</div>
      <div class="rating-value">6</div>
      <div class="rating-value">7</div>
      <div class="rating-value">8</div>
      <div class="rating-value">9</div>
      <div class="rating-value">10</div>
    </div>
  </div>
  
  
  
  <div class="textarea-container">
    <div class="input-box">
      <textarea class="text-field" placeholder="Write your review" required></textarea>
      <button class="send-button"><i class='bx bx-send bx-tada-hover bx-sm' style="color: #090909"></i></button>
    </div>
  </div>
  
  
  
  <div class="review-section">
    <p class="review-head"> REVIEWES</p>
    <ul>
      <li>
        <div class="review-1">
          <div class="username">@username</div>
          <div class="review-text">
            <p>Exceptionally good movie. The main characters optimism & acceptance of other pursuing their dreams
              regardless of
              whether or not he agrees with them or indeed they're the dream of his enemies is a thing of beauty. The kids
              attitude
              to his fellow man is admirable toward pursuing his own life should serve as a lesson to us all.
            </p>
          </div>
        </div>
      </li>
      <li>
        <div class="review-1">
          <div class="username">@username</div>
          <div class="review-text">
            <p>Amazing VFx and cinematography. The story is very well written and the acting is superb. The movie is very
              well paced and
              the action scenes are very well choreographed. The movie is very well paced and the action scenes are very
              well choreographed.
            </p>
          </div>
        </div>
      </li>
      <li>
        <div class="review-1">
          <div class="username">@username</div>
          <div class="review-text">
            <p>Nice Movie, I like it.
            </p>
          </div>
        </div>
      </li>
      <li>
        <div class="review-1">
          <div class="username">@username</div>
          <div class="review-text">
            <p>Exactly what I expected. A great movie with a great story. I would recommend this movie to anyone who likes
              action movies.
            </p>
          </div>
        </div>
      </li>
    </ul>
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
      <a href="privacy"> Privacy Policy</a> | <a href="about">About</a> | <a href="contact">Contact</a> | <a
        href="faq">FAQs</a>
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