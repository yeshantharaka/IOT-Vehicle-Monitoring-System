<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>dream house constructions main page</title>
	<link rel="stylesheet" href="style1.css" />


    <!-- Bootstrap Core CSS -->
    <link href="SB%20Admin%202%20-%20Bootstrap%20Admin%20Theme_files/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="SB%20Admin%202%20-%20Bootstrap%20Admin%20Theme_files/metisMenu.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="SB%20Admin%202%20-%20Bootstrap%20Admin%20Theme_files/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="SB%20Admin%202%20-%20Bootstrap%20Admin%20Theme_files/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="SB%20Admin%202%20-%20Bootstrap%20Admin%20Theme_files/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	div {
		background-color: lightblue;
	}

</head>

<body>

    <div class="in" id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
				
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    
					<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="file:///C:\wamp\www\pages/index.php">
				<p style="color: blue; background-color: #ffffff">WATCHDOG</p>
				</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Recent Logs</a>
                        </li>
                       
						
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> New Entry</a>
                        </li>
						
						<li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Contacts</a>
                        </li>
						
						<li>
                            <a href="login.html"><i class="fa fa-table fa-fw"></i> Logout</a>
                        </li>
						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

		
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <h1 class="page-header">CONTACT DETAILS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			

			<div>
			<br>
			<br>
			</div>
                       <!-- /.row -->

        
		
  <!--div id="page-wrapper"-->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Full Contact Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="100%">
                                <thead>
                                    <tr>
                                        <th>Vehicle number</th>
										<th>Company name / Owner</th>
                                        <th>E-mail</th>
										<th>Telephone number</th>
                                        
                                    </tr>
                                </thead>
                                <body>
                                    <?php


									$con = mysqli_connect("localhost","root","") or die("not connected");

									$db = mysqli_select_db($con,"watchdog") or die("no database found");


									$query = mysqli_query($con , "SELECT * FROM contact");
									

									

									while (($details = mysqli_fetch_array($query))) {
										$Vehicle_number = $details['Vehicle_number'];
										$Owner = $details['Owner'];
										$E_mail = $details['E_mail'];
										$Telephone_number = $details['Telephone_number'];
										

										echo "<tr>";
										echo "<td>" . $Vehicle_number . "</td>";
										echo "<td>" . $Owner . "</td>";
										echo "<td>" . $E_mail . "</td>";
										echo "<td>" . $Telephone_number . "</td>";
										echo "</tr>";
										
										
										
									}
									echo "</table>";

									//mysqli_close($query);
									mysqli_close($con);

									?>
								
                                </body>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
           
            <!-- /.row -->
        </div>
                <!-- /.col-lg-6 -->
            
            <!-- /.row -->
       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
