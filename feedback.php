<?php 
session_start();
include "connection.php";
?>
<!-- nav start -->
<?php include "admin-menu.php"; ?>
<!-- nav end -->

 
<div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">FEEDBACK</h1>
           
          </div>
        </div>
      </div>
    </div>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
            
            <table class="table">
              <thead>
                  <tr>
                 <td>FID</td>
                    <td>USERID</td>
                    <td>RATING</td>
                    <td>COMMENTS</td>
                    <td>FDATE</td>
                    <td>ACTION</td>
                  </tr>
              </thead>

              <tbody>

              <?php 
               if(isset($_GET['f_id'])){

                $qDelete = "delete from feedbacks where f_id=".$_GET['f_id'];
                mysqli_query($con,$qDelete);

                }
              $q="select * from feedbacks";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['f_id'] ?> </td>
                    <td> <?php echo $row['u_id'] ?></td>
                    <td> <?php echo $row['f_rating'] ?></td>
                    <td> <?php echo $row['f_comments'] ?></td>
                    <td> <?php echo $row['f_date'] ?></td>
                    <td><a href="feedback.php?f_id=<?php echo $row['f_id'];?>"onclick="return confirm('do you want to delete ?')"class="btn btn-danger">Delete</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>
<?php include "footer.php";?>