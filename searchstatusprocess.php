<html>

<!--
<link rel="stylesheet" type="text/css" href="Menu.css">
<link rel="stylesheet" type="text/css" href="Searchform.css">
-->

<title>Status Search</title>

<head>
    <!--
<link rel="stylesheet" type="text/css" href="Menu.css">
<link rel="stylesheet" type="text/css" href="Searchform.css">
-->
    <link rel="stylesheet" type="text/css" href="Css/background.css">
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap.css">
</head>

<body>


<div class="container">

    <div class="page-header" style="text-align: center">
        <h1>Web Development Assignment 1</h1>
    </div>

    <!--Menu-->
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="index.php">Home</a></li>
        <li role="presentation" data-toggle="modal" data-target="#post"><a href="#">Post A Status</a></li>
        <li role="presentation" data-toggle="modal" data-target="#about"><a href="#">About</a></li>
        <li role="presentation" data-toggle="modal" data-target="#searchstatus"><a href="#">Search</a></li>
    </ul>

    <br><br>

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


    <div class="jumbotron">

        <?php
        $staterr = false;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (!isset($_GET["status"]) || empty($_GET["status"])) {
                $staterr = true;
            } else {
                $staterr = false;

            }

        }

        if ($staterr == false) {
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "test";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die ('Unable to connect to Database' . mysql_error());
            }

            $stat = $_GET['status'];
            $SQL = "SELECT * FROM wdassign WHERE Status LIKE '%$stat%' ";

            if ($stat == '*') {
                $SQL = "SELECT * FROM wdassign ";
            }
            $result = mysqli_query($conn, $SQL);


            if (mysqli_num_rows($result) > 0) {

                ?>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Status</th>
                        <th>Share Type</th>
                        <th>Date</th>
                        <th>Permission Type</th>
                    </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row["StatusCode"] ?></td>
                            <td><?php echo $row["Status"] ?></td>
                            <td><?php echo $row["Share"] ?></td>
                            <td><?php echo $row["Date"] ?></td>
                            <td><?php echo $row["Type"] ?></td>
                        </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <?php

            } else {
                echo '<script language = "javascript">';
                echo 'alert("0 Results")';
                echo '</script>';
            }


            mysqli_close($conn);
        } else {


            if ($staterr == true) {
                echo '<script language = "javascript">';
                echo 'alert("Submit FAILED: Please enter Status")';
                echo '</script>';
            }
        }


        ?>
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
                </div> <!--end modal-footer-->
            </div> <!--end Modal content-->
        </div> <!-- end Modal Dialog-->
    </div> <!--end about modal-->

    <!--Search Modal-->
    <div id="searchstatus" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search a Status</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
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
                </div> <!-- End Modal Body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> <!--End Modal Footer-->
            </div> <!-- End Modal Content-->
        </div> <!-- End Modal Dialog-->
    </div> <!--End Search Modal-->

    <!--Status Post Modal-->
    <div id="post" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Post Status</h4>
                </div> <!--End Modal Header-->

                <div class="modal-body">
                    <div class="jumbotron">
                        <form class="form-horizontal" method="post" action="poststatusprocess.php">
                            <div class="form-group">
                                <label for="statusCode" class="col-sm-2 control-label">Status Code</label>

                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="statuscode"
                                           placeholder="Enter Status Code"
                                           maxlength="5">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Status" class="col-sm-2 control-label">Status</label>

                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="status"
                                           placeholder="What's on your mind?"
                                           maxlength="200">
                                </div>
                            </div>

                            <div class="form-group">

                                <label for="type" class="col-sm-2 control-label">Share Type</label>

                                <div class="col-sm-10">
                                    <label class="radio-inline"> <input type="radio" name="share" value="Public">Public</label>
                                    <label class="radio-inline"> <input type="radio" name="share" value="Friends">Friends</label>
                                    <label class="radio-inline"> <input type="radio" name="share" value="Only Me">Only
                                        Me</label>
                                </div>
                            </div>


                            <?php
                            $thisdate = date("Y-m-d");
                            echo '<div class="form-group">';
                            echo '<label for ="date" class="col-sm-2 control-label">Date</label>';
                            echo '<div class="col-sm-5">';
                            echo '<input class="form-control" type="date" value= "', $thisdate, '" name="date">';
                            echo '</div>';
                            echo '</div>';
                            ?>

                            <div class="form-group">
                                <label for="permission" class="col-sm-2 control-label">Permission Type</label>

                                <div class="col-sm-10">
                                    <label class="checkbox-inline"> <input type="checkbox" name="perm[]" value=Like>Allow
                                        Like</label>
                                    <label class="checkbox-inline"> <input type="checkbox" name="perm[]" value=Comment>Allow
                                        Comment</label>
                                    <label class="checkbox-inline"> <input type="checkbox" name="perm[]" value=Share>Allow
                                        Share</label>
                                </div>

                            </div>


                            <div class="form-group">
                                <div class="col-sm-5 control-label">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                    <button class="btn btn-primary" type="reset" name="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>


    </div>


</div>
<script src="plugins/jquery-1.11.3.min.js"></script>
<script src="plugins/bootstrap.min.js"></script>

</body>

</html>