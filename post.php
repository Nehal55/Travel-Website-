<?php include "config/config.php";?>
<?php include 'lib/Database.php' ; ?>
<?php include "inc/header.php";?>

<?php
   $db = new Database();
 ?>

<?php
if(!isset($_GET['id'])||$_GET['id']==NULL){
	header("Location:404.php");
} else{
	$id=$_GET['id'];
}
?>


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">

			<?php
			$query ="select * from tbl_post where id=$id";
			 $post =  $db ->select($query);
        if ($post) {
        	while($result=$post->fetch_assoc()){


			?>
				<h2><?php echo $result['title']; ?></h2>
				<h4><?php echo $result['date'];?>, By <a href="#"><?php echo $result['author'];?></a></h4>
				<img src=img src="admin/upload/<?php echo $result['image']; ?>"/>
				<img src="admin/upload/<?php echo $result['image']; ?>" alt="post image"/><?php echo $result['body'];?>
				
<?php }?>
<?php }?>

				
				<div class="relatedpost clear">
					
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				</div>
	</div>

	
		<?php include "inc/footer.php" ; ?>		