<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <link rel="stylesheet"
              href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-theme.css">

        <link rel="stylesheet" 
              href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css">

        <link rel="stylesheet" 
              href="<?php echo Yii::app()->theme->baseUrl; ?>/css/sticky-footer-navbar.css">

        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/npm.js"></script>
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <?php
                        $src = Yii::app()->theme->baseUrl;
                        $src .= '/images/logo.jpg';
                        $htmlOptions = array(
                            'class' => 'img-circle',
                            'style' => 'width: 40px; height: 40px; margin-top: -10px;',
                        );
                        echo CHtml::image($src, "Klyrics", $htmlOptions);
                        ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Ballad</a></li>
                                <li><a href="#">Dance</a></li>
                                <li><a href="#">Indie</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Sign in</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sign up</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <?php echo $content; ?>
        </div>

        <footer class="footer-inverse">
            <div class="container">
                <h4 class="text-muted small">
                    Copyrigths. 2015 <i class="glyphicon glyphicon-copyright-mark"></i>
                    Kael Windstrelka &lt;shaunfeel.shauntriva@gmail.com&gt;
                </h4>
            </div>
        </footer>
    </body>
</html>