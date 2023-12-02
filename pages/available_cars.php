<section class="card_container">

<?php
$connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);

$cars = db_select($connection, 'cars');

foreach($cars as $car){?>
<?php //echo $car['image'] ?>




<div class="car-card">
		<div class="car-tumb">
			<img src="<?php echo ROOT_PATH; ?>uploads/images/<?php echo $car['image'] ?>" alt="" >
		</div>
		<div class="car-details">
			<span class="car-catagory"><?= $car['category']?></span>
			<h4><a href=""><?= $car['name']?></a></h4>
			<p class="description"><?= $car['description']?></p>
			<div class="car-bottom-details">
				<div class="car-price"><small>per-hour</small><?php echo $car['price']?></div>
				<div class="product-links">
                <!-- <a class="btn-see-more" role="button">see more</a> -->
                <a href="<?php echo ROOT_PATH;?>rent?id=<?php echo $car['id']; ?>"  class="btn-rent-now" role="button">rent now</a>
				</div>
			</div>
		</div>
	</div>
	
<?php
}
?>
    
</section>



