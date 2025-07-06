<div class="container-fluid" style="margin-top:98px">
    <div class="col-lg-12">
        <div class="row">
            <!-- FORM Panel -->
            <div class="col-md-4">
                <form action="partials/_pickupTimeModal.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header" style="background-color: rgb(111 202 203);">
                            Create Pickup Time
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Pickup Time : </label>
                                <input type="text" class="form-control" name="Time" required>
                            </div>
                        </div>  
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="createTime" class="btn btn-sm btn-primary col-sm-3 offset-md-4"> Create </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FORM Panel -->
    
            <!-- Table Panel -->
            <div class="col-md-8 mb-3">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-bordered table-hover mb-0">
                        <thead style="background-color: rgb(111 202 203);">
                        <tr>
                            <th class="text-center" style="width:7%;">Time Id</th>
                            <th class="text-center" style="width:58%;">Time </th>
                            <th class="text-center" style="width:18%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql = "SELECT * FROM `pickupTime`"; 
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $TimeId = $row['TimeId'];
                                $Time = $row['Time'];

                                echo '<tr>
                                        <td class="text-center"><b>' .$TimeId. '</b></td>
                                        <td> ' .$Time. '   </td>
                                        <td class="text-center">
                                            <div class="row mx-auto" style="width:112px">
                                            <button class="btn btn-sm btn-primary edit_cat" type="button" data-toggle="modal" data-target="#updateTime' .$TimeId. '">Edit</button>
                                            <form action="partials/_pickupTimeModal.php" method="POST">
                                                <button name="removeTime" class="btn btn-sm btn-danger" style="margin-left:9px;">Delete</button>
                                                <input type="hidden" name="TimeId" value="'.$TimeId. '">
                                            </form></div>
                                        </td>
                                    </tr>';
                            }
                        ?> 
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- Table Panel -->
        </div>
    </div>	    
</div>


<?php 
    $catsql = "SELECT * FROM `pickuptime`";
    $catResult = mysqli_query($conn, $catsql);
    while($catRow = mysqli_fetch_assoc($catResult)){
        $TimeId = $catRow['TimeId'];
        $Time = $catRow['Time'];
?>

<!-- Modal -->
<div class="modal fade" id="updateTime<?php echo $TimeId; ?>" tabindex="-1" role="dialog" aria-labelledby="updateTime<?php echo $TimeId; ?>" aria-hidden="true" style="width: -webkit-fill-available;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(111 202 203);">
        <h5 class="modal-title" id="updateTime<?php echo $TimeId; ?>">Time Id: <b><?php echo $TimeId; ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="partials/_pickupTimeModal.php" method="post">
            <div class="text-left my-2">
                <b><label for="Time">Time</label></b>
                <input class="form-control" id="Time" name="Time" value="<?php echo $Time; ?>" type="text" required>
            </div>
            <input type="hidden" id="TimeId" name="TimeId" value="<?php echo $TimeId; ?>">
            <button type="submit" class="btn btn-success" name="updateTime">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    }
?>