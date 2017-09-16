<!DOCTYPE html>
<html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: rgb(0,102,204);
    color: white;
}

.modal-body {padding: 5px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: rgb(0,102,204);
    color: white;
}
.modal-body input[type=text]{
    padding: 15px;
    width: 255px;
    border: 0;
    border-bottom: 1px solid black;
    margin: 10px;
}

select {
    padding: 15px;
    width: 255px;
    border: 0;
    border-bottom: 1px solid black;
    margin: 10px;
}
input[type=submit] {
    width: 110px;
    height: 35px;
    margin: 10px;
    margin-top: 20px;
    border: 0;
    border-radius: 5px;
    background-color: rgb(0,102,204);
    color: #fff;
    border-color: inherit;

}
#myBtn {
    width: 110px;
    height: 35px;
    margin: 10px;
    margin-top: 20px;
    border: 0;
    border-radius: 5px;
    background-color: rgb(0,102,204);
    color: #fff;
    border-color: inherit;

}
</style>
</head>
<body>


<!-- Trigger/Open The Modal -->
<button id="myBtn">Donate</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>DONATE</h2>
    </div>
    <div class="modal-body">
          <form action="donors_main_process.php" method="POST">
    <h3><?php echo $_SESSION['name'];?></h3>
    <br>

      <?php
      include 'conn.php';
    $name= mysql_query("SELECT * FROM category");
    
    echo '<select name="cat">';
     while($res= mysql_fetch_array($name))
    {
    echo '<option value="'.$res['category'].'">';
    echo $res['category'];
    echo'</option>';
    }
    echo'</select>';
    ?>
    <br>
      <input type="text" name="amt" placeholder="Enter Amount (if cash)"><br>
      <input type="text" name="qty" placeholder="Quantity (if goods)"><br>
      <input type="text" name="spec" placeholder="If Others(Please Specify)"><br>
      <input type="submit" name="donBtn" value="Donate">
    </form>

    </div>
    <div class="modal-footer">
    <footer>
        <h3>
    &copy; &lt;U&gt;HACK & PL@Y 2017 &nbsp; | &nbsp; Landslide Detection and Monitoring System
</h3>
</footer>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
