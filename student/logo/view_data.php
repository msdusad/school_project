 
<style>
thead {color:green;}
tbody {color:blue;}
tfoot {color:red;}

table, th, td {
    border: 1px solid black;
}
</style><br>
<h2 align="center">MedGulf Data</h2>
<table style="margin-left:400px;">
<thead>

<th>Id</th>
<th>Name</th>
<th>Phone</th>
<th>Address</th>

</thead>

<?php
mysql_connect("localhost","root","");
mysql_select_db("MedGulf");
 $result=mysql_query("SELECT * FROM tbl_info ;");
   
if($result){
 if ($result && mysql_num_rows($result)>0) {
    while($row = mysql_fetch_array($result)){
$name=$row['name'];
$id=$row['id'];
$phone=$row['phone'];
$address=$row['address'];

?>      
<tr>
<td><?php echo $id;?></td>
<td><?php echo$name;?></td>
<td><?php echo$phone;?></td>
<td><?php echo$address;?></td><br>
</tr>

<?php
}
?></table><?php

  }
}


?>
