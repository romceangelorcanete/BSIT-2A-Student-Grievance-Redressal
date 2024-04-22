<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <title>Track All Grievance</title>
</head>
<body>

<?php include('include/handler.php');
unset($_SESSION['updates']);
?>

<div class="wrapper">
    
    <div class="trackcomplain">
<!----------------------------- Form box ----------------------------------->    
<div class="form-box-trackcomplain">
    <!------------------- Complain form -------------------------->
       <div class="complain-container" id="complain">
        <form action="include/track.php" method="post">
            <div class="top">
                <header>Track All Grievance</header>
            </div>
            <div class="input-box">
                <input class="input-field" type="text" id="myInput" onkeyup="myFunction2()" placeholder="Search for Tracking ID.." title="Enter Tracking ID">
                <i class="bx bx-search"></i>
           </div>

            <div class="input-box">
            <table id="myTable">
                <tr class="header">
                    <th style="width:15%;">Tracking ID</th>
                    <th style="width:10%;">Status</th>
                    <th style="width:20%;">Email</th>
                    <th style="width:10%;">Type</th>
                    <th style="max-width:40%;">Details</th>
                    <th style="width:20%;">Last Update</th>
                </tr>
                <tbody>
                    <?php
                        // Establish database connection
                        //session_start();
                        include_once('connection.php');
                        $email= $_SESSION['email'];
                        // Prepare SQL query to fetch all users
                        $sql = "SELECT * FROM complains order by last_update desc";
                        $result = mysqli_query($conn, $sql);

                        // Check if any results found
                        if (mysqli_num_rows($result) > 0) {
                            // Output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td class=\"trackID\"><a href='modifyhandler_complain.php' onclick=\"modify()\">" . $row['trackingID'] . "</a></td>";
                                echo "<td>" . $row['status'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['complaintype'] . "</td>";
                                echo "<td>" . $row['details'] . "</td>";
                                echo "<td>" . $row['last_update'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No entries found</td><td></td><td></td></tr>";
                            
                        }

                        // Close connection
                        mysqli_close($conn);
                    ?>

                </tbody>
               
                </table>
                
            </div>

            <!-- <div class="input-box">
                <input type="submit" class="submit" name="add_complain"  value="Submit">
            </div> -->

        </form>
    </div>
    
</div>
    </div>   
</div>

<script>
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<!-- <script>
    var x = document.getElementById("complain");
    var y = document.getElementById("modify");

    function complain() {
        x.style.left = "4px";
        y.style.right = "-520px";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function modify() {
        x.style.left = "-1000px";
        y.style.right = "5px";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
 
</script>  -->

<script>
        $(document).ready(function() {
            $('td').click(function() {
                var trackID = $(this).closest('tr').find('.trackID').text();
                     // Send data to PHP script using AJAX
                    $.ajax({
                    url: 'modify_complain.php',
                    type: 'POST',
                    data: {trackID: trackID},
                    success: function(response) {
                        console.log('Data sent successfully');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });

            });
        });      
</script>


</body>
</html>