<?php include "config/config.php";?>
<?php include 'lib/Database.php' ; ?>
<?php include "inc/header.php" ?>

<?php
   $db = new Database();
 ?>

<?php 
if(!isset($_GET['search'])||$_GET['search']==NULL){
	header("Location:404.php");
} else{
	$search=$_GET['search'];
}
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

<?php
$query="SELECT * FROM tbl_post WHERE title LIKE'%$search%' OR body LIKE'%$search%'" ;
$post = $db->select ($query);
if ($post){
	while ($result=$post->fetch_assoc()){

?>



			<div class="about">
				<<h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title']; ?></a></h2>
				<h4><?php echo $result['date'];?>, By <a href="#"><?php echo $result['author'];?></a></h4>
				 <a href="#"><img src="admin/upload/<?php echo $result['image']; ?>" alt="post image"/></a>
				
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				</div>
	</div>

	<?php } ?>		
<?php } ?>

		