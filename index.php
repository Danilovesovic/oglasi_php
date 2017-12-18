
<?php include 'parts/head.php'; ?>

<?php
$result = getAll();
  for ($i=0; $i < count($result); $i++) {
    $row = $result[$i];
    ?>
    <a href="displayOne.php?id=<?php echo $row['id']; ?>">
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3><?php echo $row['name']; ?></h3>
          </div>
          <div class="panel-body text-center">
            <h4><?php echo $row['kratak_opis']; ?></h4>
          </div>
          <div class="panel-footer text-center">
            <button type="button" class="btn btn-warning"> Cena: <?php echo $row['price']; ?> rsd</button>
          </div>
        </div>
      </div>
    </a>


    <?php
  }
 ?>

<?php include 'parts/footer.php'; ?>
