<?php include "config/config/config.php";?>
<?php include 'lib/Database.php' ; ?>
<?php include "inc/header.php";?> 
<?php include "inc/slider.php";?> 












<?php
   $db = new Database();
 ?>

 

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">


		<?php
         $query="select * from tbl_post";
         $post =  $db->select($query);
        if ($post) {
        	while($result=$post->fetch_assoc()){
        

		?>
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title']; ?></a></h2>
				<h4><?php echo $result['date'];?>, By <a href="#"><?php echo $result['author'];?></a></h4>
				 <a href="#"><img src="admin/img/<?php echo $result['image']; ?>" alt="post image"/></a>
			<?php echo $result['body'];?>
				
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $result['id'];?>">Read More</a>
				</div>
			</div>
			
	<?php } ?>		
<?php } ?>


		</div>
		
		<?php include "inc/sidebar.php" ; ?>
		<?php include "inc/footer.php" ; ?>		
		
	

