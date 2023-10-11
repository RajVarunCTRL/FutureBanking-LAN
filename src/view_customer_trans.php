<html>
    <head><title>Future | Passbook</title>
    <link rel="stylesheet" type="text/css" href="css/view_customer_trans.css" />
    <?php include 'header.php' ; ?></head>
<body>
    <?php include 'staff_profile_header.php' ?>	
    <div class="view_cust_byac_container_outer">
        <form method="POST">
            <input name="account_no" placeholder="Enter Customer ID" required><br>
            <input type="submit" name="submit_view" value="Submit">

        </form>
    </div>
         <div class="cust_statement_container">
         <label class="heading">Customer ID</label>
         <div class="cust_statement">
                
                <table>
                <th>Sl.no</th>
                <th>Date</th>
                <th>Transaction Id</th>
                <th>Description</th>
                <th>Cr</th>
                <th>Dr</th>
                <th>Balance</th>

		
    <?php
    if(isset($_POST['submit_view'])){
        $cust_id=$_POST['account_no'];
        // include 'db_connect.php';
        $sql="SELECT * from passbook_$cust_id ORDER BY Id DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {	   
            // $row = $result->fetch_all();
            $Sl_no = 1; 
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo '
                    <tr>
                    <td>'.$Sl_no++.'</td>
                    <td>'.$row['Transaction_date'].'</td>
                    <td>'.$row['Transaction_id'].'</td>
                    <td>'.$row['Description'].'</td>
                    <td>'.$row['Cr_amount'].'</td>
                    <td>'.$row['Dr_amount'].'</td>
                    <td>₹'.$row['Net_Balance'].'</td>
                    </tr>';
            }
        }
        else {

            echo '<script>alert("Customer not found")</script>';
        }
    }

    ?>
                </table>
    </div>

            </div>
    </div>
 <br>
    </body>
    <?php include 'footer.php' ; ?>
</html>