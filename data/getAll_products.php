<?php 
require_once('../class/Product.php');
$results = $product -> getAll_products();
echo json_encode($results);	


$product->Disconnect(); ?>


<div class="table-responsive">
        <table id="myTable-laundry" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Product Name</th>
                    <th><center>Price #</center></th>
                    <th><center>Last Update</center></th>
                    <th><center>Action</center></th>
                </tr>
            </thead>
            <tbody>
            	<?php
                    foreach($results as $l): 
     
                ?>
                <tr align="center">
                    <td><?= $l['product_name']; ?></td>
                    <td><?= $l['price']; ?></td>
                    <td><?= $l['last_update']; ?></td>
                    
                    <td>
                        <button  type="button" class="btn btn-warning btn-xs">
                           Edit
                           <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
	            <?php endforeach; ?>
            </tbody>
        </table>
</div>
