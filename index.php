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
        
<?php
    
    //code to connect to sql database and get goal data
    $servername = "localhost";
    $username = "root";
    $password = "tDulVhXDuH";
    $dbname = "3goals";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

/*    $sql = "SELECT id, firstname, lastname FROM goals";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }*/

    //get goal 1
    $sql = "SELECT goal1 FROM goals ORDER BY goal1 DESC LIMIT 1";
    $result = $conn->query($sql);
    $goal1row = $result->fetch_assoc();
    $goal1 = $goal1row["goal1"];
    //get goal 2
    $sql = "SELECT goal2 FROM goals ORDER BY goal2 DESC LIMIT 1";
    $result = $conn->query($sql);
    $goal2row = $result->fetch_assoc();
    $goal2 = $goal2row["goal2"];
    //get goal 3
    $sql = "SELECT goal3 FROM goals ORDER BY goal3 DESC LIMIT 1";
    $result = $conn->query($sql);
    $goal3row = $result->fetch_assoc();
    $goal3 = $goal3row["goal3"];

    //get goalinfo 1
    $sql = "SELECT goal1info FROM goals ORDER BY goal1info DESC LIMIT 1";
    $result = $conn->query($sql);
    $goal1inforow = $result->fetch_assoc();
    $goal1info = $goal1inforow["goal1info"];
    //get goalinfo 2
    $sql = "SELECT goal2info FROM goals ORDER BY goal2info DESC LIMIT 1";
    $result = $conn->query($sql);
    $goal2inforow = $result->fetch_assoc();
    $goal2info = $goal2inforow["goal2info"];
    //get goalinfo 3
    $sql = "SELECT goal3info FROM goals ORDER BY goal3info DESC LIMIT 1";
    $result = $conn->query($sql);
    $goal3inforow = $result->fetch_assoc();
    $goal3info = $goal3inforow["goal3info"];

    

    $conn->close();
?>
        
        
        <div class="row clearfix">
            <div class="col-md-4 column">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Goal #1 </h3>
                    </div>
                    <div class="panel-body">
                        <h2>
                        <p>
                              <?php echo $goal1; ?>
                            </p>
                            </h2>

                        <p>
                            <?php echo $goal1info; ?>
                        </p>

                    </div>
                </div>

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
