<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nails by Shed: Components</title>
    <?php

    $this->asset->output('css');
    $this->asset->output('css-inline');

    ?>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?=NAILS_ASSETS_URL . 'bower_components/html5shiv/dist/html5shiv.js'?>"></script>
      <script src="<?=NAILS_ASSETS_URL . 'bower_components/respond/dest/respond.min.js'?>"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://nailsapp.co.uk">
                    <img src="/assets/img/logo/logo-inverted.png">
                </a>
            </div>
            <form method="get" action="<?=site_url('docs/search')?>" class="navbar-form navbar-right" role="search">
                <div class="input-group">
                    <input type="text" name="s" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </form>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <?=anchor('http://docs.nailsapp.co.uk', 'Getting Started')?>
                    </li>
                    <li>
                        <?=anchor('http://docs.nailsapp.co.uk/docs', 'Documentation')?>
                    </li>
                    <li class="active">
                        <?=anchor('', 'Components')?>
                    </li>
                    <li>
                        <?=anchor('http://docs.nailsapp.co.uk/api', 'API')?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Alerts -->
    <?php

    if (!empty($error)) {

        echo '<div class="container">';
            echo '<div class="alert alert-danger alert-system">';
                echo $error;
            echo '</div>';
        echo '</div>';
    }

    if (!empty($success)) {

        echo '<div class="container">';
            echo '<div class="alert alert-success alert-system">';
                echo $success;
            echo '</div>';
        echo '</div>';
    }

    if (!empty($notice)) {

        echo '<div class="container">';
            echo '<div class="alert alert-info alert-system">';
                echo $notice;
            echo '</div>';
        echo '</div>';
    }

    if (!empty($message)) {

        echo '<div class="container">';
            echo '<div class="alert alert-warning alert-system">';
                echo $message;
            echo '</div>';
        echo '</div>';
    }
