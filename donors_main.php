<?php
session_start();
$session = $_SESSION['name'];
if ($_SESSION['name'] != '') {

?>
<style>
	.mart{
    position: fixed;
    top: 0;
    background-color: rgb(0,102,204);
    color: #fff;
    height: 100vh;
    margin-left: -10px;
  }
  .mart button{
    width: 100px;
    height: 50px;
    background-color: rgb(0,102,204);
    font-size: 20px;
    /*margin: 5px;*/
    /*border-color: #f1f1f1;*/
    color: #fff;
    cursor: pointer;
    border-bottom-color: black 1px solid;
  }
  .mart button:hover{
    background-color: rgba(0,0,0,0.2);
  }
  div.mart button.Activate {
    background-color:  rgba(0,0,0,0.2);
    color: white;
}
  .mart .unod {
    width: 100%;
    display: block;
    padding: 8px 16px;
    text-align: left;
    border: none;
    outline: none;
    white-space: normal;
    float: none;
}
.content{
  position: absolute;
  width: 1000px;
  padding-left: 100px;
width: auto;

}
.content table{
  width: 1000px;
} 
.content th{
  background-color: rgb(0,102,204);
  color: white;
  height: 30px;
}
.content td{
  background-color: #F5F5F5;
  color: #191970;
}
.scroll{
  position: absolute;
  height: 180px;
  overflow: auto;
}

</style>
<div class="mart" style="width:290px">
  <button class="unod TabLink" onclick="openCITY(event, 'Home')" id="DEFAULT">Home</button>
  <button class="unod TabLink" onclick="openCITY(event, 'Messages')">Messages</button>
  <button class="unod TabLink" onclick="openCITY(event, 'Donations')">Donations</button>
    <a href="logout.php" style="text-decoration: none;"><button class="unod TabLink">Logout</button></a>

</div>

<div style="margin-left:220px">

  <div id="Home" class="City" style="display:none">
      <div class="content">
    <h2>HOME</h2>
    </div>
    </div>

  <div id="Messages" class="City" style="display:none">
  <div class="content">
   <h1>Inbox</h1>
   
<div class="scroll">
   <table id="myTable">
    <tr>
      <th><b>SENDER</b></th>
      <th><b>DATE</b></th>
      <th><b>Action</b></th>
    </tr>
    <?php
    include 'conn.php';
    $i = mysql_query("SELECT * FROM inbox WHERE msg_to = '$session' ORDER BY date DESC");
    while($result = mysql_fetch_array($i)){
    $id = $result['id'];
    $from = $result['msg_from'];
    $to = $result['msg_to'];
    $content = $result['content'];
    $sub = $result['content'];
    $date = $result['date'];
    
    echo "<tr>";
    echo "<td><center>".$from."</center></td>";
    echo "<td><center>".$date."</center></td>";
    echo "<td><center><a href='view.php?view&&msg_from=$from&&date=$date&&msg_to=$to&&id=$i&&content=$content'>View</a>|<a href='delete.php?delete&&id=$id'>Delete</a></center></td>";
    }
    echo "</tr>";
    ?>

   </table>

</div>
   </div>
  </div>

  <div id="Donations" class="City" style="display:none">
  <div class="content">
    <h1>Your Donations</h1>
      <?php
    include 'modal.php';
    ?>
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
      $qry = mysql_query("SELECT * FROM donor_report WHERE name = '$session'");
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
    </table>
    </div>
  </div>



</div>

<script>
function openCITY(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("City");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("TabLink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" Activate", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " Activate";
}
document.getElementById("DEFAULT").click();
</script>
<?php

}
else{
  header("Location:index.php");
}
?>