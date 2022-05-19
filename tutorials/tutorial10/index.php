<?php
    include("include\connection.php");
/*select
    id,
    machine_name,
    description
from
    tbl_machine
where 
    is_delete=0 and machine_name like 'dr%'
order by
    machine_name desc
limit
    1,20 */
$sql="select
id,
machine_name,
description
from
tbl_machine
where 
is_delete=0 and machine_name like 'dr%'
order by
machine_name desc
limit
1,20 ";

//echo $sql;
?>
<link rel="stylesheet" href="style.css">
<div class="wrapper" >
<table border='1' align=center class="table" width="500" >
<thead>
<tr>
    <th scope="col">id</th>
    <th scope="col">machine_name</th>
    <th scope="col">description</th>
    </tr>
</thead>
    
<?php
$result=$db->query($sql);
//echo $result->num_rows;
if($result->num_rows)
{
    while($row=$result->fetch_assoc())
    {
    ?>
    <tbody>
    <tr>
        <th scope="row"><?=$row['id']?></th>
        <td><?=$row['machine_name']?></td>
        <td><?=$row['description']?></td>
    </tr></tbody>
    <?php
    }
}
else{
    ?>
    <tr>
    <td colspan=3 align=center>No records found</td>
</tr>
<?php
}
?>
</table>
</div>