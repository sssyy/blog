<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ URL::asset('/') }}js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('/') }}js/modernizr.js"></script>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/font-awesome/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/style.css" id="theme-styles">
</head>
<body>
<header>
    <div class="widewrapper masthead">
        <div class="container">
            <a href="index.html" id="logo">
                <img src="{{ URL::asset('/') }}img/logo.png" alt="clean Blog">
            </a>

            <div id="mobile-nav-toggle" class="pull-right">
                <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <nav class="pull-right clean-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills navbar-nav">

                        <li>
                            <a href="index.html">主页</a>
                        </li>
                        <li>
                            <a href="about.html">关于我</a>
                        </li>
                        <li>
                            <a href="contact.html">联系我</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div class="widewrapper subheader">
        <div class="container">
            <div class="clean-breadcrumb">
                <a href="#">博客</a>
            </div>

            <div class="clean-searchbox">
                <form action="#" method="get" accept-charset="utf-8">
                    <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                    <button class="searchbutton" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php foreach ($contents as $k => $value) { ?>
                    <?php if ($k%2 == 0) { echo "<div class='row'>"; }?>

                    <div class="col-md-6 col-sm-6">
                        <article class=" blog-teaser">
                            <header>
                                <img src="<?php echo  env('APP_URL').'/app/' . $value['image'];?>" alt="">
                                <h3><a href="content/1"><?php echo $value['title'];?></a></h3>
                                <span class="meta"><?php echo $value['created_at'];?></span>
                                <hr>
                            </header>
                            <div class="body">
                                <?php echo $value['description'];?>
                            </div>
                            <div class="clearfix">
                                <a href="content/<?php echo $value['id'];?>" class="btn btn-clean-one">阅读全文</a>
                            </div>
                        </article>
                    </div>
					<?php if ($k%2 != 0) { echo "</div>"; }?>
                <?php } ?>



                <div class="paging">
                </div>
            </div>
            <aside class="col-md-4 blog-aside">

                <div class="aside-widget">
                    <header>
                        <h3>Featured Post</h3>
                    </header>
                    <div class="body">
                        <ul class="clean-list">
                            <li><a href="">Clean - Responsive HTML5 Template</a></li>
                            <li><a href="">Responsive Pricing Table</a></li>
                            <li><a href="">Yellow HTML5 Template</a></li>
                            <li><a href="">Blackor Responsive Theme</a></li>
                            <li><a href="">Portfolio Bootstrap Template</a></li>
                            <li><a href="">Clean Slider Template</a></li>
                        </ul>
                    </div>
                </div>

                <div class="aside-widget">
                    <header>
                        <h3>Related Post</h3>
                    </header>
                    <div class="body">
                        <ul class="clean-list">
                            <li><a href="">Blackor Responsive Theme</a></li>
                            <li><a href="">Portfolio Bootstrap Template</a></li>
                            <li><a href="">Clean Slider Template</a></li>
                            <li><a href="">Clean - Responsive HTML5 Template</a></li>
                            <li><a href="">Responsive Pricing Table</a></li>
                            <li><a href="">Yellow HTML5 Template</a></li>
                        </ul>
                    </div>
                </div>

                <div class="aside-widget">
                    <header>
                        <h3>Tags</h3>
                    </header>
                    <div class="body clearfix">
                        <ul class="tags">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">COMPONENTS</a></li>
                            <li><a href="#">TEMPLATE</a></li>
                            <li><a href="#">PLUGIN</a></li>
                            <li><a href="#">BOOTSTRAP</a></li>
                            <li><a href="#">TUTORIAL</a></li>
                            <li><a href="#">UI/UX</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<footer>
    <div class="widewrapper footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-user"></i>About</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-pencil"></i> Recent Post</h3>
                    <ul class="clean-list">
                        <li><a href="">Clean - Responsive HTML5 Template</a></li>
                        <li><a href="">Responsive Pricing Table</a></li>
                        <li><a href="">Yellow HTML5 Template</a></li>
                        <li><a href="">Blackor Responsive Theme</a></li>
                        <li><a href="">Portfolio Bootstrap Template</a></li>
                        <li><a href="">Clean Slider Template</a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

                    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fugiat, cupiditate veritatis excepturi tempore explicabo.</p>
                    <div class="footer-widget-icon">
                        <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="widewrapper copyright">
        Copyright 2015 <a href="# target="_blank" title=""></a> - Collect from <a href="#" title="" target="_blank"></a>
    </div>
</footer>
</body>
</html>