<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<!--  -->

<div class="col-md-12">
    <select class="col-md-3" id="drdOrder1" class="form-control" onchange="location.href = 'index.php?controller=orders&order='+document.getElementById('drdOrder1').value;">
        <option  value="0" >---</option>
        <option  value="delivery" >đã giao</option>
        <option value="notdelivery">chưa giao</option>
        <option value="all">tất cả</option>
        <div class="col-md-9" style="display: inline-tables">
        
                        
                          <input class="col-md-3" type="text" min="0" id="fromDate" class="form-control" placeholder="from:dd-mm-yyyy" />
                        
                       
                          <input class="col-md-3" type="text" min="0"  id="toDate" class="form-control" placeholder="to:dd-mm-yyyy"/>
                       
                          <input class="col-md-2" type="button" class="btn btn-warning" value="Tìm " onclick="location.href = 'index.php?controller=search&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
        </div>
    </select>    
    <div class="panel panel-primary">
        <div class="panel-heading">List Orders</div>
        
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th >Price</th>                    
                    <th style="width:150px; text-align: center;">Status</th>
                    <th style="width:200px;text-align: center; font-size: 14px;">Delivery</th>
                </tr>
                <?php foreach($listRecord as $rows): ?>
                <?php   
                    //lay ban ghi customer
                    $customer = $this->modelGetCustomers($rows->customer_id);
                 ?>
                 <tr>
                     <td><?php echo $customer->name; ?></td>
                     <td><?php echo $customer->phone; ?></td>
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><?php echo number_format($rows->price); ?></td>
                     <td style="text-align: center;">
                         <?php if($rows->status == 1): ?>
                            <span style="background: #0651b6; color: white;" class="label label-primary">Đã giao hàng</span>
                         <?php else: ?>
                            <span style="background: #d7274c; color: white;" class="label label-danger">Chưa giao hàng</span>
                         <?php endif; ?>
                     </td>
                     <td style="text-align: center; font-size: 14px;">
                        <a style="background: #06b623; color: white;" href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a>
                        <?php if($rows->status == 0): ?>
                            <a style="background: #06b0b6; color: white; " href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="label label-info">Giao hàng</a>
                         <?php endif; ?>
                     </td>
                 </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination"> 
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item" style="margin-left: 10px;">
                   
                    <a href="index.php?controller=orders&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    
                </li>
            <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>