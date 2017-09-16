<h1>Affected Residents Lists</h1>
<table>
      <tr>
        <th>Date</th>
        <th>Fullname</th>
        <th>Contact Number</th>
        <th>Area</th>
      </tr>
      <?php
      include 'conn.php';
      $qry = mysql_query("SELECT * FROM affected_residence_report");
      while ($row = mysql_fetch_array($qry)) {
        $id = $row['id'];
        $name = $row['name'];
        $date = $row['date'];
        $contact = $row['contact'];
        $area = $row['area'];

        echo"<tr>";
        echo "<td>".$date."</td>";
        echo "<td>".$name."</td>";
        echo "<td>".$contact."</td>";
        echo "<td>".$area."</td>";
              }
      ?>
    </table>