<table class="table table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Category Name</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
           <?php
                $count=1;
                foreach ($all_cat as $singledata) {
                
               ?>
                    <tr>
                        <td>
                            <?php echo $count++; ?>
                        </td>
                        <td>
                            <?php echo $singledata->cat_name;?>
                        </td>
                        <td>
                            <?php
                                if($singledata->cat_status==1)
                                    echo "Published";
                                else
                                    echo "Unpublished";
                             ?>
                        </td>
                        <td>
                            <?php
                                if($singledata->cat_status==1)
                                    $status="Unpblished";
                                else
                                    $status="Published";
                            ?>
                            <a class="btn btn-primary" href="<?php echo base_url();?>super_admin_controller/cat_status_update/<?php echo $singledata->cat_id;?>"><?php echo $status;?></a>
                        </td>
                   </tr>

               <?php
                }
           ?>
  </tbody>
</table>