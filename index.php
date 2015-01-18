<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Newtab + 3 Goals!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
    <!-- smooth scrolling-->
    <script>
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    
</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div id="jumbo" class="jumbotron">
                    <h1>
					Hello, Zain!
				</h1>
                    <p>
                        Your goals for the day are listed below. Good luck!
                    </p>
                    <p>
                        <a class="btn btn-primary btn-large" href="#update">UPDATE GOALS</a>
                    </p>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="row clearfix">
            <div class="col-md-4 column">
                
                <h3>Goal #1 </h3>
                <h2>
                <p>
                    <?php
                        
                        echo $goal1;
                     ?>
                </p>
                    </h2>
                
                <p>
                    <?php
                        
                        echo $goal1info;
                     ?>
                </p>
                
            </div>
            
            
            <div class="col-md-4 column">
                
                <h3>Goal #2 </h3>
                <h2>
                <p>
                    <?php
                        
                        echo $goal2;
                     ?>
                </p>
                    </h2>
                
                <p>
                    <?php
                        
                        echo $goal2info;
                     ?>
                </p>
            </div>
            
            
            <div class="col-md-4 column">
                
                <h3>Goal #3 </h3>
                <h2>
                <p>
                    <?php
                        
                        echo $goal3;
                     ?>
                </p>
                    </h2>
                
                <p>
                    <?php
                        
                        echo $goal3info;
                     ?>
                </p>
            </div>
            
        </div>
        
        <div id="space"></div>
<section id="update">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="jumbotron">
                    <p>
                        Enter updated goals below!
                    </p>
                </div>
            </div>
        </div>
        
        
        <div class="row clearfix">
            
            <div class="col-md-4 column">
                <form role="form" action="setgoals.php" method="POST">
                    <p class="help-block">
                            Enter Goal #1's details below
                        </p>
                    <div class="form-group">
                        <label>Goal 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="goal1form">
                    </div>
                    <div class="form-group">
                        <label>Extra information</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="goal1infoform">
                    </div>
                    <button type="submit" class="btn btn-default" name="goal1submit">Submit</button>
                </form>
            </div>
            
            
            <div class="col-md-4 column">
                <form role="form" action="setgoals.php" method="POST">
                    <p class="help-block">
                            Enter Goal #2's details below
                        </p>
                    <div class="form-group">
                        <label>Goal 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="goal2form">
                    </div>
                    <div class="form-group">
                        <label>Extra information</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="goal2infoform">
                    </div>
                    <button type="submit" class="btn btn-default" name="goal2submit">Submit</button>
                </form>
            </div>
            
            
            
            <div class="col-md-4 column">
                <form role="form" action="setgoals.php" method="POST">
                    <p class="help-block">
                            Enter Goal #3's details below
                        </p>
                    <div class="form-group">
                        <label>Goal 3</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="goal3form">
                    </div>
                    <div class="form-group">
                        <label>Extra information</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="goal3infoform">
                    </div>
                    <button type="submit" class="btn btn-default" name="goal3submit">Submit</button>
                </form>
            </div>

        </div>
    <br>
    <div class="row">
        <div class="col-md-12 column">
        <p id="center">
            <button type="submit" class="btn btn-default">Submit ALL</button>
            </p>
        </div>
    </div>
    
<?php include 'setgoals.php'; ?>    
    
    </section>
        
        <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="http://www.clevrly.me">©2015 Zain Munad</a></li>

            </ul>
        </div>
    </div>
        
    </div>
</body>

</html>
