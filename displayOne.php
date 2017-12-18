
<?php include 'parts/head.php'; ?>
  <?php
    $oglas = findOne($_GET['id']);
   ?>
   <div class="col-lg-8 col-lg-offset-2">
     <div class="panel panel-default">
       <div class="panel-heading">
           <h3><?php echo $oglas['name']; ?> <span class="price"><button class="btn btn-danger"><?php echo $oglas['phone']; ?></button></span></h3>
       </div>
       <div class="panel-body text-center">
         <h2><?php echo $oglas['kratak_opis']; ?></h2>
         <p><?php echo $oglas['opis']; ?></p>
       </div>
       <div class="panel-footer text-center">
         <button type="button" class="btn btn-warning"> Cena: <?php echo $oglas['price']; ?> rsd</button>
         <a href="updateForm.php?id=<?php echo $oglas['id'] ?>" class="btn btn-info">Update</a>
         <a href="deleteOne.php?id=<?php echo $oglas['id'] ?>" class="btn btn-danger">Delete</a>
       </div>
     </div>
   </div>
<?php include 'parts/footer.php'; ?>
