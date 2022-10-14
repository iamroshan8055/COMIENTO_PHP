<?php
$mysqli = new mysqli('localhost','root','','admin_master');
$result = mysqli_query($mysqli,"SELECT * FROM city_master");
?>
<?php include("../header.php");  ?>
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?=base_url;?>index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Customer Master</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Customer Master</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
    <tr align="center">
			<th class="thead-dark">City Name</th>
			<th><a href="add.php" class="btn btn-outline-success" role="button"><span class="glyphicon glyphicon-print"></span><i class="fas fa-plus"></i>Add</a></th>
		</tr>
                  </thead>
                  <tfoot>
    <tr align="center">
			<th class="thead-dark">City Name</th>
			<th><a href="add.php" class="btn btn-outline-success" role="button"><span class="glyphicon glyphicon-print"></span><i class="fas fa-plus"></i>Add</a></th>
		</tr>
                  </tfoot>
                  <tbody>
                    
		<?php
			while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['cityname']."</td>";
			echo "<td><a style=\"text-decoration:none;\" class=\"btn btn-outline-primary\" href=\"edit.php?id=$res[id]\"  onClick=\"return confirm('Are you sure you want to Edit?')\"><i class=\"fas fa-pencil-alt\"></i></a> | <a style=\"text-decoration:none;\" class=\"btn btn-outline-danger\" href=\"delete.php?id=$res[id]\"  onClick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fas fa-trash-alt\"></i></a></td>";
			echo "</tr>";	


			}


		?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
          </div>

        </div>
        <!-- /.container-fluid -->
<?php include("../footer.php");  ?>
