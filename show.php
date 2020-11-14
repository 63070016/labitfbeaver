<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'tonklazz.mysql.database.azure.com', 'tonklazuzu2@tonklazz', 'Kla007as', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">NAME</div></th>
    <th width="350"> <div align="center">COMMENT </div></th>
    <th width="150"> <div align="center">LINK </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['NAME'];?></div></td>
    <td><?php echo $Result['COMMENT'];?></td>
    <td><?php echo $Result['LINK'];?></td>
  </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['Name'];?></center></td>
      <td><center><?php echo $Result['Comment'];?></center></td>
      <td><center><a href="form edit.html"><input type="submit" value="EDIT" class="btn btn-warning"></a>&nbsp;&nbsp;<a href="form delete.html"><input type="submit" value="DELETE"  class="btn btn-danger"></a></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <center><a href="form insert.html"><input type="submit" value="INSERT" class="btn btn-info"></a></center>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
