<?php

include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body id="down">
   <h2 class="text-center">INVOICE</h2>

  
    <table>
        <thead>
            <tr>
                <th>S.no</th>
                <th>Id</th>
                <th>Invoice Code</th>
                <th>Customer Name</th>
                <th>Type</th>
                <th>Sub Total</th>
                <th>Tax rate</th>
                <th>Remarks</th>
                <th>Date Created</th>
                <th>Date Update</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if(isset($_GET['genrateid'])){

            $id = $_GET['genrateid'];

            $sql = "SELECT * from invoice_list";

            $result = mysqli_query($conn,$sql);
            

            $count = 1;
            while($row=mysqli_fetch_assoc($result)){

         ?>
         <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['invoice_code']; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['sub_total']; ?></td>
                <td><?php echo $row['tax_rate']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
                <td><?php echo $row['date_created']; ?></td>
                <td><?php echo $row['date_updated']; ?></td>
                <td>
                 
                </td>
            </tr>
            

            <?php
            $count=$count+1;
            }
        }
        ?>

    </tbody>
    </table>
    <button > <a href="pdf.php?pdfid=id">download</a></button>  </th>


    

    <style>
            table{
      width:100%;

  }
  thead{
  
      background: skyblue;
      color:white;
  }
  tbody{
      width:100%;
  }
  button{
    float:right;
  }
    </style>

</body>
</html>