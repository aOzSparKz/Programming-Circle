<h1>Donation Received Reports</h1>
<table>
      <tr>
        <th>Date</th>
        <th>Donator's Name</th>
        <th>Beneficiary</th>
        <th>Area</th>
        <th>Mode of Donation</th>
      </tr>
      <?php
      include 'conn.php';
      $qry = mysql_query("SELECT * FROM received_reports");
      while ($row = mysql_fetch_array($qry)) {
        $id = $row['id'];
        $ben = $row['beneficiary'];
        $area = $row['area'];
        $mode = $row['mode_of_donation'];
        $name = $row['name'];
        $date = $row['date'];

        echo"<tr>";
        echo "<td>".$date."</td>";
        echo "<td>".$name."</td>";
        echo "<td>".$ben."</td>";
        echo "<td>".$area."</td>";
        echo "<td>".$mdoe."</td>";
              }
      ?>
    </table>