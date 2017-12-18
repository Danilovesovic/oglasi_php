
<?php include 'parts/head.php'; ?>
<?php
  $oglas = findOne($_GET['id']);

 ?>
<div class="col-lg-8 col-lg-offset-2">
  <form  action="updateOne.php" method="post">
    <input type="hidden" name="id" value="<?php echo $oglas['id'] ?>">
    <input type="text" name="name"  class="form-control" value="<?php echo $oglas['name'] ?>"><br>
    <input type="text" name="kratak_opis" value="<?php echo $oglas['kratak_opis'] ?>" class="form-control"><br>
    <textarea name="opis" rows="8" cols="80" class="form-control">
      <?php echo $oglas['opis'] ?>
    </textarea><br>
    <input type="text" name="phone" class="form-control" value="<?php echo $oglas['phone'] ?>"><br>
    <input type="email" name="email"  class="form-control" value="<?php echo $oglas['email'] ?>"><br>
    <input type="text" name="price"  class="form-control" value="<?php echo $oglas['price'] ?>"><br>
    <input type="submit" name="sub" value="Update" class="btn btn-success form-control">
  </form>
</div>

<?php include 'parts/footer.php'; ?>
