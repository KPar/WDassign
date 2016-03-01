<html>
<title> Search Status </title>

<head>
    <!--
<link rel="stylesheet" type="text/css" href="Menu.css">
<link rel="stylesheet" type="text/css" href="Searchform.css">
-->
    <link rel="stylesheet" type="text/css" href="Css/background.css">
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap.css">
</head>

<body>
<!--Menu-->
<div class="container">
    <div class="page-header">
        <h1 style="text-align: center">Web Development Assignment 1 </h1>
    </div>

    <ul class="nav nav-pills">
        <li role="presentation"><a href="index.php">Home</a></li>
        <li role="presentation"><a href="poststatusform.php">Post a New Status</a></li>
        <li role="presentation" data-toggle="modal" data-target="#about"><a href="#">About</a></li>
        <li role="presentation" class="active"><a href="searchstatusform.php">Search Status</a></li>
    </ul>


    <!--Form-->
    <div class="page-header">
        <h2 style="text-align: center"> Search a Status </h2>
    </div>

    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-3">
                <div class="input-group">
                    <form method="get" action="searchstatusprocess.php" id="searchform">
                        <span class="input-group-btn">
                        <input class="form-control" id="search" type="text" name="status" placeholder="Search Status">
                            <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit</button>
                        </span>
                    </form> <!--end of form-->
                </div> <!-- end input group-->
            </div> <!-- end col-lg 3-->
        </div> <!-- end row-->
    </div>
    <!--About Modal-->
    <div id="about" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">About</h4>
                </div>

                <div class="modal-body">
                    <p>
                    <ul>
                        <li>What features have you done or attempted in creating the site we should know about?
                            <br>== I have added a simple javascript, script where if an error occurs a pop up box would
                            appear.
                            <br>== I have also added a search bar in the homepage to enable quick status searching.
                            <br>== The Menu is also fixed so it can be accessed from any page.
                        </li>
                        <br>
                        <li>Which parts did you have trouble with?
                            <br>== I mostly had trouble with validating the form, to ensure user inputs were valid or
                            invalid.
                        </li>
                        <br>
                        <li>What would you like to do better next time?
                            <br>== I would like to understand php and database connection better next time as well as
                            precise form validation.
                        </li>
                        <br>
                        <li>What references/sources you have used to help you learn how to create your website?
                            <br>==<a href="www.w3schools.com">W3 Schools</a>
                            <br>==<a href="php.net/manual/">PHP Manual</a>
                            <br>== Lecture Slides
                        </li>
                        <br>
                        <li>What have you learnt along the way?
                            <br>== I have learnt about php mostly as well as html concepts, accessing a SQL database
                            through php was also something that I learned.
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery-1.11.3.min.js"></script>
    <script src="plugins/bootstrap.min.js"></script>


</body>


</html>
