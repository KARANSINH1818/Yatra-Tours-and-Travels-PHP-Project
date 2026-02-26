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
            <h1 class="heading" data-aos="fade-up">BOOKING</h1>
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
                    <td>BOOKING ID</td>
                    <td>USER ID</td>
                    <td>START DATE</td>
                    <td>END DATE</td>
                    <td>PRICE</td>
                    <td>STATUS</td>
                    <td>ACTION</td>
                  </tr>
              </thead>

              <tbody>

              <?php 
               if(isset($_GET['b_id'])){

                $qDelete = "delete from booking where b_id=".$_GET['b_id'];
                mysqli_query($con,$qDelete);
                }

              $q="select * from booking";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['b_id'] ?> </td>
                    <td> <?php echo $row['u_id'] ?></td>
                    <td> <?php echo $row['start_date'] ?></td>
                    <td> <?php echo $row['end_date'] ?></td>
                    <td> <?php echo $row['t_amount'] ?></td>
                    <td> <?php echo $row['status'] ?></td>
                    <td><a href="booking.php?b_id=<?php echo $row['b_id'];?>"onclick="return confirm('do you want to delete ?')"class="btn btn-danger">Delete</a></td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>
<?php include "footer.php";?>