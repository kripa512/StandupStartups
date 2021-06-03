<?php include 'header.php'; ?>
 	<!-- side navbar -->
	<div class="container-fluid">
	    <div class="row flex-nowrap">
	        <?php include 'left-header.php'; ?>
	        <div class="col p-0">
				<!-- carsoule start	-->
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="images/b3.jpg" class="d-block w-100 img-fluid" alt="">
				    </div>
				    <div class="carousel-item">
				      <img src="images/b4.jpg" class="d-block w-100 img-fluid" alt="">
				    </div>
				    <div class="carousel-item">
				      <img src="images/b6.jpg" class="d-block w-100 img-fluid" alt="">
				    </div>
				  </div>
				</div>
				<!-- carsoule end -->
	        </div>
	    </div>
	</div>
	<!-- side navbar -->
	<!-- Million Doller discount start -->
	<div class="container">
	    <div class="row">
	    	<h4 class="mb-4">Million Doller Discount</h4>
    		<div class="col-2">
    			<img src="images/product/shampoo.jpg" class="img-fluid">
    		</div>
    		<div class="col-2">
    			<img src="images/product/daal.jpg" class="img-fluid">
    		</div>
    		<div class="col-2">
    			<img src="images/product/oil.jpg" class="img-fluid">
    		</div>
    		<div class="col-2">
    			<img src="images/product/rice.jpg" class="img-fluid">
    		</div>
    		<div class="col-2">
    			<img src="images/product/red.jpg" class="img-fluid">
    		</div>
    		<div class="col-2">
    			<img src="images/product/wheat.jpg" class="img-fluid">
    		</div>
	    </div>
	</div>
	<!-- Million Doller discount end -->

	<!-- -------Grocery mall---- -->
    <div class="container shadow">
      <div class="row">
        <div class="col-6">
          <h5 class="pt-3" style="color: #673400;">Grocery Store</h5>
        </div>
        <div class="col-6">
          <a href="sgmsMall_AllView.php"><h6 class="text-center pt-3 d-flex justify-content-end" style="color: #673400;">View All</h6></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
          <?PHP
          include 'dbcon.php';
          $query = "SELECT * FROM home_slider where cat = 'mall'  LIMIT 8";

          $queryfire = mysqli_query($con, $query);

          $num = mysqli_num_rows($queryfire);

          if($num > 0){
            while($product = mysqli_fetch_array($queryfire)){
          ?>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner border">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo  $product['slider_img1'];  ?>" style="height: 25rem;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo  $product['slider_img2'];  ?>" style="height: 25rem;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo  $product['slider_img3'];  ?>" style="height: 25rem;">
              </div>
            </div>
          </div>
          <?php }  }  ?>
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-4">
          <div class="row">
              <?PHP
                include 'dbcon.php';
                $query = "SELECT * FROM product_categorys where cat_id ='4'  ORDER BY p_cat_id DESC";

                $queryfire = mysqli_query($con, $query);

                $num = mysqli_num_rows($queryfire);

                if($num > 0){
                  while($product = mysqli_fetch_array($queryfire)){
              ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3  mt-1 ho p-0 px-1 shadow" style="height: 12.3rem;">
              <a class="text-decoration-none" href="sgmsMall.php?action=add&p_cat_id=<?php echo  $product['p_cat_id'];?>">
                <img src="<?php echo  $product['Thumbnail'];  ?>" class="img-fluid d-flex justify-content-center w-100" style="height: 10.3rem;">
                <p class="text-center mb-0 w-100 p-0 " style="height: 2rem; background-color: #93e65b; color:#673400; border-radius: 30% 30% 0 0;">Rice</p>
              </a>
            </div>
            <?php }  }  ?>  
          </div>
        </div>
      </div>
    </div>
    <!-- ---/Grocery------- -->

	<!-- flash Deal start -->
	<div class="container">
	    <div class="row">
	    	<h4 class="mb-4">Flash Deal Doller Discount</h4>
          	<div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-3 mb-2 p-1">
            	<form>
		            <a class="text-decoration-none" href="FreshDealDaily.php?action=add&product_sub_cat_id=<?php echo  $product['id'];?>">
		                <div class="bg-light border shadow" style=" position: relative;">
		                  <div class="off m-0">
		                    <p class="text-center m-0" style="font-size: 12px;"><span>15%</span><br><span>off</span></p>
		                  </div>
		                  <img src="images/product/shampoo.jpg" class="img-fluid w-100 p-1">
		                  <p class="text-center mb-0 " style="color: #673400;">
		                    <i class="fa fa-star-o text-decoration-none"></i>
		                    <i class="fa fa-star-o text-decoration-none"></i>
		                    <i class="fa fa-star-o text-decoration-none"></i>
		                    <i class="fa fa-star-o text-decoration-none"></i>
		                    <i class="fa fa-star-o text-decoration-none"></i>
		                  </p>
		                  <h5 class="text-center my-1 text-decoration-none">&#8377; 500.00</h5>
		                </div>
		            </a>
            	</form>  
          	</div>

          	<div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-3 mb-2 p-1 ho">
            	<form>
		            <a class="text-decoration-none" href="FreshDealDaily.php?action=add&product_sub_cat_id=<?php echo  $product['id'];?>">
		                <div class="bg-light border shadow" style=" position: relative;">
		                  <div class="off m-0">
		                    <p class="text-center m-0" style="font-size: 12px;"><span>15%</span><br><span>off</span></p>
		                  </div>
		                  <img src="images/product/daal.jpg" class="img-fluid w-100 p-1">
		                  <p class="text-center mb-0" style="color: #673400;">
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                  </p>
		                  <h5 class="text-center my-1">&#8377; 500.00</h5>
		                </div>
		            </a>
            	</form>  
          	</div>

          	<div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-3 mb-2 p-1 ho">
            	<form>
		            <a class="text-decoration-none" href="FreshDealDaily.php?action=add&product_sub_cat_id=<?php echo  $product['id'];?>">
		                <div class="bg-light border shadow" style=" position: relative;">
		                  <div class="off m-0">
		                    <p class="text-center m-0" style="font-size: 12px;"><span>15%</span><br><span>off</span></p>
		                  </div>
		                  <img src="images/product/oil.jpg" class="img-fluid w-100 p-1">
		                  <p class="text-center mb-0" style="color: #673400;">
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                  </p>
		                  <h5 class="text-center my-1">&#8377; 500.00</h5>
		                </div>
		            </a>
            	</form>  
          	</div>

          	<div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-3 mb-2 p-1 ho">
            	<form>
		            <a class="text-decoration-none" href="FreshDealDaily.php?action=add&product_sub_cat_id=<?php echo  $product['id'];?>">
		                <div class="bg-light border shadow" style=" position: relative;">
		                  <div class="off m-0">
		                    <p class="text-center m-0" style="font-size: 12px;"><span>15%</span><br><span>off</span></p>
		                  </div>
		                  <img src="images/product/rice.jpg" class="img-fluid w-100 p-1">
		                  <p class="text-center mb-0" style="color: #673400;">
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                  </p>
		                  <h5 class="text-center my-1">&#8377; 500.00</h5>
		                </div>
		            </a>
            	</form>  
          	</div>

          	<div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-3 mb-2 p-1 ho">
            	<form>
		            <a class="text-decoration-none" href="FreshDealDaily.php?action=add&product_sub_cat_id=<?php echo  $product['id'];?>">
		                <div class="bg-light border shadow" style=" position: relative;">
		                  <div class="off m-0">
		                    <p class="text-center m-0" style="font-size: 12px;"><span>15%</span><br><span>off</span></p>
		                  </div>
		                  <img src="images/product/red.jpg" class="img-fluid w-100 p-1">
		                  <p class="text-center mb-0" style="color: #673400;">
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                  </p>
		                  <h5 class="text-center my-1">&#8377; 500.00</h5>
		                </div>
		            </a>
            	</form>  
          	</div>

          	<div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2 mt-3 mb-2 p-1 ho">
            	<form>
		            <a class="text-decoration-none" href="FreshDealDaily.php?action=add&product_sub_cat_id=<?php echo  $product['id'];?>">
		                <div class="bg-light border shadow" style=" position: relative;">
		                  <div class="off m-0">
		                    <p class="text-center m-0" style="font-size: 12px;"><span>15%</span><br><span>off</span></p>
		                  </div>
		                  <img src="images/product/wheat.jpg" class="img-fluid w-100 p-1">
		                  <p class="text-center mb-0" style="color: #673400;">
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                    <i class="fa fa-star-o"></i>
		                  </p>
		                  <h5 class="text-center my-1">&#8377; 500.00</h5>
		                </div>
		            </a>
            	</form>  
          	</div>
	    </div>
	</div>
	<!-- flash Deal end -->

	<div class="container">
		       <div class="row">
          <?PHP
            include 'dbcon.php';
            $query = "SELECT * FROM product_categorys where cat_id ='7' ORDER BY p_cat_id DESC";

            $queryfire = mysqli_query($con, $query);

            $num = mysqli_num_rows($queryfire);

            if($num > 0){
              while($product = mysqli_fetch_array($queryfire)){
          ?>
           <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 col-xxl-2 my-4 ho" style="position: relative;">  <div style="height: 3rem; width: 3rem; background-color: yellow; position: absolute; opacity: .8; border-radius: 50%;  right: .9rem; top: .9rem;"><p style="font-size: 15px; display: flex;justify-content: center;align-items: center;">15% <br>off</p></div>
            <a href="daily-million.php?action=add&p_cat_id=<?php echo  $product['p_cat_id'];?>">         
              <img src="<?php echo  $product['Thumbnail'];  ?>" class="img-fluid">
              <p class="text-center text-info mb-0" style="font-size: 12px;"><?php echo  $product['p_cat_title'];  ?></p>
              <p class="text-danger text-center m-0">$<?php echo  $product['product_price'];?></p>
            </a>  
            <p class="text-center m-0">
              <span><i class="fa fa-heart" style="color:red; font-size:10px;"></i></span>
              <span><i class="fa fa-heart" style="color:red; font-size:10px;"></i></span>
              <span><i class="fa fa-heart" style="color:red; font-size:10px;"></i></span>
              <span><i class="fa fa-heart" style="color:red; font-size:10px;"></i></span>
              <span><i class="fa fa-heart" style="color:red; font-size:10px;"></i></span>
            </p>

            <button type="button" class="btn btn-danger btn-sm float-left w-100 mt-1">Add to Cart</button>  
            <a href="daily-million.php?action=add&p_cat_id=<?php echo  $product['p_cat_id'];?>">
              <button type="button" class="btn btn-success btn-sm float-right w-100 mt-1">Buy Now</button>
            </a>
         </div>   
          <?php }  }  ?> 
       </div>
	</div>
<?php include 'footer.php'; ?>