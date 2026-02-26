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
            <h1 class="heading" data-aos="fade-up">USERS</h1>
           
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
                 <td>UID</td>
                    <td>UNAME</td>
                    <td>UEMAIL</td>
                    <td>PHONE NUMBER</td>
                    <td>ACTION</td>


                  </tr>
              </thead>

              <tbody>

              <?php 
               if(isset($_GET['u_id'])){

                $qDelete = "delete from users where u_id=".$_GET['u_id'];
                mysqli_query($con,$qDelete);
                
                }
              $q="select * from users";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['u_id'] ?> </td>
                    <td> <?php echo $row['u_name'] ?></td>
                    <td> <?php echo $row['u_email'] ?></td>
                    <td> <?php echo $row['u_no'] ?></td>
                    <td><a href="admin-view.php?u_id=<?php echo $row['u_id'];?>"onclick="return confirm('do you want to delete ?')"class="btn btn-danger">Delete</a></td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>
<?php include "footer.php";?>
    