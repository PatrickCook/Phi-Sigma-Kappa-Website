<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/psk-styles.css" rel="stylesheet">
    <link href="css/nav-bar-css.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body class="dark-theme">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PSK SLO</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="rush.html">Rush</a>
                    </li>
                    <li>
                        <a href="rush.html">Pictures</a>
                    </li>
                    <li>
                        <a href="exec-board.html">Exec</a>
                    </li>
                    <li>
                        <a href="donate.html">Donate</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
      <div id="photos">
        <?php
        $type=Array(1 => 'jpg', 2 => 'jpeg', 3 => 'png', 4 => 'gif'); //store all the image extension types in array
        $directory = './res/allphotos';

        if (! is_dir($directory)) {
            exit('Invalid diretory path');
        }


        foreach (scandir($directory) as $file) {
            if ('.' === $file) continue;
            if ('..' === $file) continue;
            $ext = explode(".",$file); //explode and find value after dot
            if((in_array($ext[1],$type))) {
              echo "<img src='$directory/$file' width=400px height=500px>\n";
            }

        }

        var_dump($files);
        ?>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Phi Sigma Kappa 2016</p>
                </div>
            </div>
        </footer>

    </div>

</body>

</html>
