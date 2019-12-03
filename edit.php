<html> 
   <head>
     <title>edit data</title>
   </head>
   <body>
     <?php
      include 'connection.php';
      $ID =$_GET['id'];
      $sql ="SELECT *FROM santri WHERE id =$ID";
      $result  =  mysqli_query($connect,$sql);
      $row =mysqli_fetch_assoc($result);
    ?>
   <from>
     <input type= "hidden" name= "id" value="</?php echo $ID; ?
>">
     <table>
      <tr>
        <td>name</td>
		<td>:</td>
        <td><input type= "text" name="name" value=" <?php echo $row ['name']; ?>"</td> 
        </tr>
        <tr>
        <td>email</td>
		<td>:</td>
        <td><input type= "email" name="email " value=" <?php echo $row ['email']; ?>"</td> 

         </tr>
        <tr>
        <td>password</td>
		<td>:</td>
        <td><input type= "password" name="password" value=" <?php echo $row ['password']; ?>"</td> 
 
       
         </tr>
        <tr>
        <td>born date</td>
		<td>:</td>
        <td><input type= "date" name="born" value=" <?php echo $row ['born']; ?>"</td> 
      </tr>
      <tr><td colspan="3">
       <input type="submit" value="EDIT!">
      </tr></td>
    </table>
   </from>
  </bodt>
 </html>

         
