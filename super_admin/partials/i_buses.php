<!--SQL QUERY START HERE-->
<?php
 $sql ="SELECT *FROM buses
  ORDER BY id";
   $query =$con->query($sql);
   WHILE($row=$query->fetch_assoc())
   {
       ?>
<tr>
    <td><?php echo $row['branch'];?></td>
    <td><?php echo $row['regno'];?></td>
    <td><?php echo $row['yop'];?></td>
    <td><?php echo $row['color'];?></td>

    <form action="partials/updatedata.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="edit" class="btn btn-success" data-target="#addnew" value="Edit"></th>
    </form>
    <form action="partials/delete_bus.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="delete" class="btn btn-danger" value="Delete"></th>
    </form>
</tr>
<?php
                }
                ?>