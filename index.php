
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<!-- end  includes -->
 <!--start row1-->
<div class="row"> <!--start row1-->

<!-- start card cities -->
<div class="card mt-4  mx-4" style="width: 14rem;">
  <div class="card-header">Cities</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Oujda <span class="city  p-2 float-end">1</span></li>
    <li class="list-group-item">Tanger <span class="city  p-2 float-end">2</span></li>
    <li class="list-group-item">Rabat <span class="city  p-2 float-end">3</span></li>
    <li class="list-group-item">taza <span class="city  p-2 float-end">1</span></li>
    <li class="list-group-item">berkan <span class="city  p-2 float-end">2</span></li>
    <li class="list-group-item">jrrada <span class="city  p-2 float-end">3</span></li>
  </ul>
</div> 
<!--end card cities-->


<!-- start slider -->
<div class="w3-content w3-section" style=" max-width:800px ; max-height:400px">
  <img class="mySlides" src="images/l1.jpg" style="width:100% ;height:100%">
  <img class="mySlides" src="images/t2.jpg" style="width:100% ;height:100%">
  <img class="mySlides" src="images/f4.jpg" style="width:100%; height:100%">
</div>
<!--end slider-->

</div>
 <!--end row1-->
 <!--start row2-->
<div class="row">

<?php
 $query = "SELECT * from products";
 $result = query($query);
while ($row = fetch_array($result))
{
 ?>
<!--start cart product-->
<div class="card mt-4 mx-4" style="width: 14rem;height:25rem;">
<h5 class="card-title"><?php echo $row['product_title'] ?></h5>
  <img src="images/<?php echo $row['product_image']; ?>" 
  class="card-img-top" alt="image not found" style="height:50%">
  
    <h3 class="card-text"><?php echo $row['product_title'] ?></h3>
  
 <p><span class="badge badge-success bg-success"><?php echo $row['product_price'].'dh' ?></span>
 <span class="prix_ancienne"> <strike><?php echo $row['old_price'].'dh' ?></strike> </span></p>
  <p class="description"> <?php echo $row['product_description'] ?></p>
    <a href="product_description.php?id=<?php echo $row['product_id'] ?>" class="card-link">see more</a>
</div>
<!-- end card product-->
<?php 
}
 ?>
</div>
<!--end row 2-->
<script src="includes/javascript/script.js"></script> <!--for slidder-->
<?php include ('includes/footer.php')  ?>
