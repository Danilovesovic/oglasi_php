
<?php include 'parts/head.php'; ?>

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <form  action="insertIntoDb.php" method="post">
      <input type="text" name="name" placeholder="name" class="form-control"><br>
      <input type="text" name="kratak_opis" placeholder="kratak opis" class="form-control"><br>
      <textarea name="opis" rows="8" cols="80" class="form-control" placeholder="opis"></textarea><br>
      <input type="text" name="phone" class="form-control" placeholder="phone"><br>
      <input type="email" name="email" placeholder="email" class="form-control"><br>
      <input type="text" name="price" placeholder="price" class="form-control"><br>
      <input type="submit" name="sub" value="Insert" class="btn btn-success form-control">
    </form>
  </div>
</div>
 <?php include 'parts/footer.php'; ?>
