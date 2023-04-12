<?php

include "config.php";

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<h2 class="text-center">Invoices Items</h2>
<table>

    <thead class="text-center">
        <tr>
            <th>S.no</th>
            <th>Id</th>
            <th>Invoice Id</th>
            <th>Unit</th>
            <th>From Id</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php

        
            $sql = "SELECT * from invoices_items";

            $result = mysqli_query($conn,$sql);
            

            $count = 1;
            while($row=mysqli_fetch_assoc($result)){

         ?>
            <tr>
                <td class="text-center"><?php echo $count ?></td>
                <td class="text-center"><?php echo $row['id']; ?></td>
                <td class="text-center"><?php echo $row['invoice_id']; ?></td>
                <td class="text-center"><?php echo $row['form_id']; ?></td>
                <td class="text-center"><?php echo $row['unit']; ?></td>
                <td class="text-center"><?php echo $row['quantity']; ?></td>
                <td class="text-center"><?php echo $row['price']; ?></td>
                <td class="text-center"><?php echo $row['total']; ?></td>
                <td>
                  <button> <a href="genrate.php?genrateid=id">Genrate</a></button>
                </td>
            </tr>

        <?php
            $count=$count+1;
            }
        ?>
        <tr>
            <th></th>
        </tr>
    </tbody>

</table>

<style>

    table{
      width: 100%;
    
    }
    thead{
    
        background: skyblue;
        color:white;
    }
    tbody{
        width:100%;
    }

</style>