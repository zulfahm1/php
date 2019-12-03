<!DOCTYPE html>
<html>
<head>
 <title>form santri ustman </title>
 <style>
 </style>

</head>
<body>
  <p><a href="adding.php">Add</a></p>
  <table>
    <tr>
     <th>NO</th>
     <th>nama</th>
     <th>email</th>
     <th>pssword</th>
     <th>tanggal lahir</th>
     <th>edit / delete</th>
   </tr>
   <?php
     include 'connection.php';
     $no = 1 ;
     $sql = "SELECT * FROM santri";
     $result = mysqli_query($connect,$sql);
     if (mysql_num_rows($result)) {
       while ( $row = mysqli_fetch_assoc($result)) {
        echo "
       <tr>
         <td>". $no++."</td> 
         <td>".$row['name']."</td>
         <td>".$row['email']."</td>
         <td>".$row['password']."</td>
         <td>".$row['born']."</td>
         <td>
          <a href='edit.php?id=".row['id']."'<edit</a>
          <a href = 'delete.php?id=".$row['id']."'
onclick=javascript:return confirm(\"apa anda yakin untuk menghapus ini\")'>delete</a>
        </td>
       </tr>
    ";
   }
  }
?>
</table>
</body>
</html>
