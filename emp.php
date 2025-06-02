<?php
include 'header.php';
?>

<div id="page-wrapper">

<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">Users Details</h1>
        </div>
</div>


<table class="table table-bordered">
<thead>
<th>First Name</th>
<th>Last Name</th>
<th>Mobile No</th>
<th>Email</th>
<th>Role</th>
<th>Action</th>
</thead>
<tbody>
<?php
include 'connection.php';
$qry="select * from tble_user where role_id!=1";

$data=mysqli_query($con,$qry);

while($row=$data->fetch_array())
{
echo "<tr>";

echo "<td>";
echo $row['first_name'];
echo "</td>";

echo "<td>";
echo $row['last_name'];
echo "</td>";


echo "<td>";
echo $row['phone'];
echo "</td>";

echo "<td>";
echo $row['email'];
echo "</td>";

echo "<td>";
echo $row['role_id']=="2"?"Station Owner":"Customer";
echo "</td>";

echo "<td>";
echo "<a href=add_emp.php?userid=".$row['user_id']."><i class='fa fa-pencil'></i></a> <a href=delete.php?userid=".$row['user_id']."><i class='fa fa-trash'></i></a>";
echo "</td>";

echo "</tr>";
}
?>
</tbody>
</table>

</div>



<?php
include 'footer.php';
?>
