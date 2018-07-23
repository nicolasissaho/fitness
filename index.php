<html>
<head>
    <?php
    $email_contato = 'niw.design@outlook.com';

    if(isset($_POST) && !empty($_POST)) {
        $msg = "Olá,

    Recebemos um contato pelo formulário!
    Veja as informações a seguir:

    Nome: ".$_POST['name']."
    Email: ".$_POST['email']."";
    }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="vendor/bootstrap.min.css">
    <link rel="stylesheet" type='text/css' href="css/style.css">
    <title>Fitness</title>
</head>
<body>
<section class="top">
    <header class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#"><img src="imagens/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">About</a></li>
                        <li><a href="#">How it Works</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="about">
        <h1>Fitness in a can<span>/</span></h1>
        <p>Yes you can<span>/</span></p>
    </div>
    <div class="triangle"></div>
</section>
<section class="info-green">
    <div class="container">
        <div class="row sub-info">
            <div class="col-lg-3 col-md-3 col-xs-12">
                <i class="fas fa-briefcase"></i>
                <h2>Resources</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                    Suspendisse potenti.</p>
                <p class="explore-more"><a href="#">Explore more <i class="fas fa-long-arrow-alt-right"></i></a></p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <i class="fas fa-tachometer-alt"></i>
                <h2>Training & Funding</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                    Suspendisse potenti.</p>
                <p class="explore-more"><a href="#">Explore more <i class="fas fa-long-arrow-alt-right"></i></a></p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <i class="fas fa-cloud"></i>
                <h2>Connect</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                    Suspendisse potenti.</p>
                <p class="explore-more"><a href="#">Explore more <i class="fas fa-long-arrow-alt-right"></i></a></p>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
                <i class="fas fa-comments"></i>
                <h2>Communicate</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                    Suspendisse potenti.</p>
                <p class="explore-more"><a href="#">Explore more <i class="fas fa-long-arrow-alt-right"></i></a></p>
            </div>
        </div>
        <div class="feed">
            <div class="feed-1 row">
                <div class="feed-info col-lg-4 col-md-4 col-xs-12">
                    <p><span>It's all about</span></p>
                    <h2>Fitness First</h2>
                    <i class="fas fa-tint"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                        Suspendisse potenti.</p>
                    <p><a href="">Read More</a></p>
                </div>
                <div class="feed-img col-lg-8 col-md-8 col-xs-12">
                    <div><p>Active Users <span>(34)</span> <i class="fas fa-tint"></i></p></div>
                </div>
            </div>
            <div class="feed-2 row">
                <div class="feed-img col-lg-8 col-md-8 col-xs-12">
                    <div><p>Products Used <span>(658)</span> <i class="fas fa-tint"></i></p></div>
                </div>
                <div class="feed-info col-lg-4 col-md-4 col-xs-12">
                    <p><span>Love</span></p>
                    <h2>Your Body</h2>
                    <i class="fas fa-tint"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                        Suspendisse potenti.</p>
                    <p><a href="">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-pink">
    <div class="container">
        <div class="feed">
            <div class="feed-1 row">
                <div class="feed-info col-lg-4 col-md-4 col-xs-12">
                </div>
                <div class="feed-img col-lg-8 col-md-8 col-xs-12">
                    <div>
                        <p>24th August</p>
                        <p>Health & Fitness<i class="fas fa-tag"></i></p>
                    </div>
                </div>
            </div>
            <div class="feed-2 row">
                <div class="feed-info col-lg-4 col-md-4 col-xs-12">
                    <div class="col-md-10">
                        <p><span>Track Your</span></p>
                        <h2>Lifestyle</h2>
                    </div>
                    <i class="col-md-2 fas fa-user-alt"></i>
                    <p class="col-md-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus
                        malesuada interdum.
                        Suspendisse potenti.</p>
                </div>
                <div class="feed-img col-lg-8 col-md-8 col-xs-12">
                    <h2>Summer of Fun</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis, orci nec sodales facilisis, est purus molestie augue, ac semper metus nisi pretium.</p>
                </div>
            </div>
            <div class="feed-3 row">
                <div class="feed-img col-lg-8 col-md-8 col-xs-6">
                </div>
                <div class="feed-img col-lg-4 col-md-4 col-xs-6">
                </div>
            </div>
            <div class="feed-4 row">
                <div class="feed-info col-lg-8 col-md-8 col-xs-12">
                    <div class="col-md-10">
                        <p><span>Helping You</span></p>
                        <h2>Get Involved in Yourself</h2>
                    </div>
                    <i class="col-md-2 fas fa-lemon"></i>
                    <p class="col-md-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis, orci nec sodales facilisis, est purus molestie augue, ac semper metus nisi pretium.</p>
                </div>
                <div class="feed-img col-lg-4 col-md-4 col-xs-12">
                    <div class="col-md-10">
                        <p><span>Improve your</span></p>
                        <h2>Eating Habits</h2>
                    </div>
                    <i class="col-md-2 far fa-lemon"></i>
                    <p class="col-md-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus
                        malesuada interdum. Suspendisse potenti.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <section class="footer-background">
        <div>
            <h2>We launch leaders with big ideas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                Suspendisse
                potenti.</p>
        </div>
        <div class="triangle-right"></div>
        <div class="triangle-left"></div>
    </section>
    <section class="info-footer">
        <div class="red-triangle"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <h3>Resouces</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                        Suspendisse
                        potenti.</p>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="col-md-7">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus malesuada interdum.
                            Suspendisse
                            potenti.</p>
                    </div>
                    <div class="col-md-5 media">
                        <h3>Stay in touch</h3>
                        <div class="col-lg-3 col-md-3 col-xs-12"><i class="fab fa-facebook-f"></i></div>
                        <div class="col-lg-3 col-md-3 col-xs-12"><i class="fab fa-twitter"></i></div>
                        <div class="col-lg-3 col-md-3 col-xs-12"><i class="fab fa-youtube"></i></div>
                        <div class="col-lg-3 col-md-3 col-xs-12"><i class="fab fa-linkedin-in"></i></div>
                    </div>
                    <div class="col-md-12">
                        <form class="navbar-form navbar-left" action="" method="post">
                            <div class="form-group">
                                <input required="required" type="text" name="name" class="form-control" placeholder="Your Name" id="name">
                                <input required="required" type="email" name="email" class="form-control" placeholder="Your E-mail" id="email">
                            </div>
                            <button type="submit" class="btn btn-default">Join Newsletter<i class="fas fa-arrow-circle-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="vendor/bootstrap.min.js"></script>
</html>