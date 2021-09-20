<?php 
    include_once './AdminControllers/manage-donationController.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title> | Manage Donations</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">


        <div id="wrapper">

            <div class="content-page">
              
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Donations Record</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="dashboard">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Donations</a>
                                        </li>
                                     
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
           


<div class="row">
<div class="col-sm-6">  
 



</div>
                                  <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Name</th>
                                                                <th>Email Id</th>
                                                                <th width="300">Amount</th>
                                                            
                                                                <th>Post / News</th>
                                                         
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php 
$query=mysqli_query($con,"Select tbldonation.id,  tbldonation.name,tbldonation.email,tbldonation.postingDate,tbldonations.amount,tblposts.id as postid,tblposts.PostTitle from  tbldonation join tblposts on tblposts.id=tbldonation.postId where tbldonation.status=1");

while($row=mysqli_fetch_array($query))
{
?>

<?php
$cnt++;
 } ?>
</tbody>
      </table>
            </div>
        </div>
</div>
</div>
                                       
<div class="row">
<div class="col-md-12">
<div class="demo-box m-t-20">
<div class="m-b-30">


</div>
    </div>

	</div>
</div>                  
                     </div> 

                </div> 

            </div>

        </div>
       
        <script>
            var resizefunc = [];
        </script>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
