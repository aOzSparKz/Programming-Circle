<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Donor's Lists</h1>
<table>
      <tr>
        <th>Donor's Name</th>
        <th>Donor Type</th>
        <th>Amount (if cash)</th>
        <th>Quantity (if Goods)</th>
        <th>Please Specify (if others)</th>
      </tr>
      <?php
      include 'conn.php';
      $qry = mysql_query("SELECT * FROM donor_report");
      while ($row = mysql_fetch_array($qry)) {
        $id = $row['id'];
        $name = $row['name'];
        $type = $row['donor_type'];
        $amount = $row['amount'];
        $qty = $row['qty'];
        $others = $row['others'];

        echo"<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$type."</td>";
        echo "<td>".$amount."</td>";
        echo "<td>".$qty."</td>";
        echo "<td>".$others."</td>"; 
      }
      ?>
    </table></body>
</html>