<!-- <style>
    input[type=submit] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    cursor: pointer;
  }
  </style> -->
  <?php
include 'faculty_nav.php';
include 'database.php';
?>

      <table>
      <!-- <form class="modal-content animate" action="allocate2.php" method="post"> -->
      <thead>
        <tr>
          <th>USN</th>
          <th>student name </th>
          <th>Year </th>
          <th>View </th>
        </tr>
</thead>
      <tbody>
          <?php
          $faculty_id = $_SESSION['fcid'];
          $sel_student = "SELECT sid, usn, studentname, syear FROM student WHERE fid='$faculty_id'";
          $res_list = mysqli_query($mysqli,$sel_student);
          if(mysqli_num_rows($res_list)>0){
              while($row=$res_list->fetch_assoc()){
                echo "<tr><td>". $row['usn']."</td>";
                echo "<td>". $row['studentname']."</td>";
                echo "<td>". $row['syear']."</td>";
                $stid = $row['sid'];
                echo "<td><button type='submit' name='$stid'>Proctor dairy</button></td></tr>";
            
                ?>
            
           <?php   }
          }?>

          <div id='flist' class='modal'>
          <div class="imgcontainer">
                     <span onclick="document.getElementById('flist').style.display='none'" class="close" title="Close Modal">&times;</span>
                     
                   </div>
               
                   <div class="container">
                    <h2>kasco</h2>
                   </div>
          </div>
          </tbody>
      </table>