<?php
include("include/connections.php");
include("include/functions.php");

if (isset($_GET['reason']) && $_GET['reason'] == "newPhysician") {

    $fullanmes = mysql_prep($_GET['name']);
    $email = mysql_prep($_GET['email']);
    $number = mysql_prep($_GET['number']);
    $occupation = mysql_prep($_GET['occupation']);
    $textarea = mysql_prep($_GET['textarea']);

    $sql = mysql_query("SELECT id FROM doctor WHERE fullnames = '{$fullanmes}' AND email = '{$email}'");
    if (mysql_num_rows($sql) > 0) {
        //show an error that the user already exisits
    } else {
        $sql1 = mysql_query("INSERT INTO doctor (fullnames, email, number, aboutMe, occupation, date_created) VALUES ('{$fullanmes}','{$email}','{$number}','{$textarea}','{$occupation}',now())");
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Medical Application System</title>
        <meta name="description" content="Modern effects and styles for off-canvas navigation with CSS transitions and SVG animations using Snap.svg" />
        <meta name="keywords" content="sidebar, off-canvas, menu, navigation, effect, inspiration, css transition, SVG, morphing, animation" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/menu_elastic.css" />
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/icheck/flat/green.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/snap.svg-min.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="menu-wrap">
                <nav class="menu">
                    <div class="icon-list">
                        <a href="home.php"><i class="fa fa-fw fa-comment-o"></i><span>Home</span></a>
                        <a href="newPatient.php"><i class="fa fa-fw fa-star-o"></i><span>Add Patient</span></a>
                        <a href="newPhysician.php"><i class="fa fa-fw fa-bell-o"></i><span>Add Physician</span></a>
                        <a href="index.php"><i class="fa fa-fw fa-bell-o"></i><span>Log Out</span></a>
                    </div>
                </nav>
                <button class="close-button" id="close-button">Close Menu</button>
                <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                    <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
                    </svg>
                </div>
            </div>
            <button class="menu-button" id="open-button">Open Menu</button>
            <div class="content-wrap">
                <div class="content">
                    <header class="codrops-header">
                        <h1>Medical Application System <span>Add physician</span></h1>
                    </header>
                    <!-- Related demos -->
                    <section class="related">

                        <div class="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Form validation <small>sub title</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <form class="form-horizontal form-label-left" novalidate>

                                                <p>Insert the physician <code>details</code> in the <a href="form.html">form below</a>
                                                </p>
                                                <span class="section">Personal Info</span>

                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="number" id="number" name="number" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">About me <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-3">
                                                        <input type="hidden" name="reason" value="newPhysician" />
                                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>   

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Physicians <small>These are the physicians in this hospital</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <style>.table.table-hover td{text-align: left}</style>
                                <div class="x_content">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Full Names</th>
                                                <th>Occupation</th>
                                                <th>Number</th>
                                                <th>Email</th>
                                                <th>About me</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql3 = mysql_query("SELECT * FROM doctor");
                                            $i = 1;
                                            while ($row = mysql_fetch_array($sql3)) {
                                                echo "<tr><th scope=\"row\">" . $i . "</th>";
                                                echo "<td>" . $row['fullnames'] . "</td>";
                                                echo "<td>" . $row['occupation'] . "</td>";
                                                echo "<td>" . $row['number'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "<td>" . $row['aboutMe'] . "</td></tr>";
                                                $i++;
                                            }
                                            ?>                                            

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div><!-- /content-wrap -->
        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/main3.js"></script>
        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>
        <!-- form validation -->
        <script src="js/validator/validator.js"></script>
        <script>
            // initialize the validator function
            validator.message['date'] = 'not a real date';

            // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
            $('form')
                    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                    .on('change', 'select.required', validator.checkField)
                    .on('keypress', 'input[required][pattern]', validator.keypress);

            $('.multi.required')
                    .on('keyup blur', 'input', function () {
                        validator.checkField.apply($(this).siblings().last()[0]);
                    });

            // bind the validation to the form submit event
            //$('#send').click('submit');//.prop('disabled', true);

            $('form').submit(function (e) {
                e.preventDefault();
                var submit = true;
                // evaluate the form using generic validaing
                if (!validator.checkAll($(this))) {
                    submit = false;
                }

                if (submit)
                    this.submit();
                return false;
            });

            /* FOR DEMO ONLY */
            $('#vfields').change(function () {
                $('form').toggleClass('mode2');
            }).prop('checked', false);

            $('#alerts').change(function () {
                validator.defaults.alerts = (this.checked) ? false : true;
                if (this.checked)
                    $('form .alert').remove();
            }).prop('checked', false);
        </script>
    </body>
</html>
