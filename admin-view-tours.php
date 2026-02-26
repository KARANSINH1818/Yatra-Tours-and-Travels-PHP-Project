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
            <h1 class="heading" data-aos="fade-up">TOURS</h1>
           
          </div>
        </div>
      </div>
    </div>

    <ul class="menu mt-2">
    <li class="active"><a href="tours_body.php" style="color: white; background-color: blue; padding: 5px 10px; text-decoration: none; border-radius: 5px; width: 150px; display: inline-block; text-align: center;">ADD TOURS</a></li>
</ul>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
            
            <table class="table">
              <thead>
                  <tr>
                    <td>TOURS ID</td>
                    <td>TOURS TITLE</td>
                    <td>TOURS DSCRIPITION</td>
                    <td>TOURS PRICE</td>

                    <td>TOURS IMG</td>
                    <td>ACTION</td>
                  </tr>
              </thead>

              <tbody>

              <?php 
             if(isset($_GET['tours_id'])){

                $qDelete = "delete from tours where tours_id=".$_GET['tours_id'];
                mysqli_query($con,$qDelete);
                }
              $q="select * from tours";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['tours_id'] ?> </td>
                    <td> <?php echo $row['tours_title'] ?></td>
                    <td> <?php echo $row['tours_description'] ?></td>
                    <td> <?php echo $row['tours_price'] ?></td> 
                    <td> <img src="<?php echo $row['tours_image'] ?>" height='150px'/> </td>
                    <td><a href="admin-view-tours.php?tours_id=<?php echo $row['tours_id'];?>"onclick="return confirm('do you want to delete ?')"class="btn btn-danger">Delete</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>
<?php include "footer.php";?>