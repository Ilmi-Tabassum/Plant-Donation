
<?php include('../controllers/commentPosting.php');?>

<?php include('../controllers/donatePosting.php');?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <title>News Portal | Home Page</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/modern-business.css" rel="stylesheet">

  </head>
  <body>

   <?php include('includes/feedheader.php');?>
<br>
<br>

    <div class="container">
      <div class="row" style="margin-top: 4%">


        <div class="col-md-8">


<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |
               <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                <hr />

 <img class="img-fluid rounded" src="../admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
  
              <p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
    
        </div>


      <?php include('includes/sidebar.php');?>
      </div>
<br>
<br>

 <div class="row" style="margin-top: -6%">
   <div class="col-md-8">
<div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form name="Comment" method="post">
                <input type="hidden" name="csrftoken" value= "<?php echo htmlentities($_SESSION['token1']); ?>"/>

                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
</div>

<br>


   <div class="col-md-8">
<div class="card my-4">
            <h5 class="card-header">Amount to Donate :</h5>
            <div class="card-body">

              <form name="donations" method="post">
              <input type="hidden" name="csrftoken" value= "<?php echo htmlentities($_SESSION['token2']); ?>"/>

                <div class="form-group">
                  <div class="form-control" name="amount" required>
               
                                <label for="">Your small donation can save a Plant</label>
                                <br>
                           
                                <select name="amount" >
                                    <option value="">Donation Amount</option>
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="150">150</option>
                                    <option value="200">200</option>
                                    <option value="200">250</option>
                                    <option value="200">300</option>
                                    <option value="200">350</option>
                                    <option value="200">400</option>
                                    <option value="200">450</option>
                                    <option value="200">500</option>
                                </select>
                                <br>
                                <br>
                                <br>

                <button id="hello" style = "text-align: left" type="submit" class="btn btn-primary" name="submit">Submit</button>
          
              </form>

         
              </div>
</div>
<div class="wrapper">

           <a href = "creditCard" type="submit"  class="btn btn-info" name="submit">Donation</a>
          </div>
 <?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                  <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
            </h5>
           
             <?php echo htmlentities($row['comment']);?>            </div>
          </div>
<?php } ?>

        </div>
      </div>
    </div>
</div>
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
