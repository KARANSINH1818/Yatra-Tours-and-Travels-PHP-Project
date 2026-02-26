
<!-- header end -->

   <!-- nav start -->
   <?php include "admin-menu.php"; ?>
    <!-- nav end -->

    
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card my-5">
                    <div class="card-body">
                        <h3 class="text-center">INSERT DATA</h3>
                        <form action="add_tours.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="tours_id">TOURS ID</label>
                                <input type="text" class="form-control" id="tours_id" name="tours_id" required>
                            </div>
                            <div class="form-group">
                                <label for="tours_title">TOURS TITLE</label>
                                <input type="text" class="form-control" id="tours_title" name="tours_title" required>
                            </div>
                            <div class="form-group">
                                <label for="tours_description">TOURS DESCRIPTION</label>
                                <input type="text" class="form-control" id="tours_description" name="tours_description" required>
                            </div>

                            <div class="form-group">
                                <label for=">tours_price">TOURS PRICE</label>
                                <input type="text" class="form-control" id="tours_price" name="tours_price" required>
                            </div>
                            <div class="form-group">
                                <label for="tours_image">TOURS IMG</label>
                                <input type="file" class="form-control" id="tours_image" name="tours_image" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Insert</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- footer start -->
<?php include "footer.php"; ?>
   <!-- footer end -->