<?php  
if (!isset($_SESSION['admin_email'])){

  echo "<script>window.open('login.php','_self')</script>";
  }else{

?>


<div class="row">
<div class="col-lg-12">
	<h1 class="page-header">Admin Panel</h1>
	<ol class="breadcrumb">
		<li class="active"><i class="fa fa-bar-chart"></i> Admin Panel </li>
	</ol>
  </div>
 

 <div class="row1">
 	<div class="col-lg-3 col-md-6">
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 				<div class="row2">
 					<div class="col-xs-3">
 						<i class="fa fa-tasks fa-5x"></i>
 					</div>
 					<div class="col-xs-9 text-right">
 						<div class="huge"> <?php echo $count_pro ?> </div>
 						<div>Products</div>
 					</div>
 				</div>
 			</div>
 			<a href="index.php?view_product">
 				<div class="panel-footer">
 					<span class="pull-left"> View Details </span>
 					<span class="pull-right"> <i class="fa fa-arrow-circle-right"> </i></span>
 					<div class="clearfix"></div>
 				</div>
 			</a>
 		</div>
 	</div>
 	<div class="col-lg-3 col-md-6">
 		<div class="panel panel-green">
 			<div class="panel-heading">
 				<div class="row2">
 					<div class="col-xs-3">
 						<i class="fa fa-comments fa-5x"></i>
 					</div>
 					<div class="col-xs-9 text-right">
 						<div class="huge"> <?php echo $count_cust ?> </div>
 						<div>Customers </div>
 					</div>
 				</div>
 			</div>
 			<a href="index.php?view_customer">
 				<div class="panel-footer">
 					<span class="pull-left"> View Details </span>
 					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
 					<div class="clearfix"></div>
 				</div>
 			</a>
 		</div>
 	</div>
 	<div class="col-lg-3 col-md-6">
 		<div class="panel panel-yellow">
 			<div class="panel-heading">
 				<div class="row2">
 					<div class="col-xs-3"> <i class="fa fa-shopping-cart fa-5x"></i>  
 					</div>
 					<div class="col-xs-9 text-right">
 						<div class="huge"> <?php echo $count_p_cat ?> </div>
 						<div>Product Categories</div>
 					</div>
 				</div>
 			</div>
 			<a href="index.php?view_product_cat">
 				
 				<div class="panel-footer">
 					<span class="pull-left"> View Detials </span>
 					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
 					<div class="clearfix"></div>
 				</div>
 			</a>
 		</div>
 	</div>

 	<div class="col-lg-3 col-md-6">
 		<div class="panel panel-red">
 			<div class="panel-heading">
 				
 			
 	</div>
 	
 </div>
</div>
</div>




</div>

<?php } ?>