<!--SQL QUERY START HERE-->
<?php
 $sql ="SELECT *FROM bookings
  ORDER BY id";
   $query =$con->query($sql);
   WHILE($row=$query->fetch_assoc())
   {
       ?>
<tr>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['fromm'];?></td>
    <td><?php echo $row['too'];?></td>
    <td><?php echo $row['regno'];?></td>
    <td><?php echo $row['driver'];?></td>

    <form action="partials/updatedata.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="edit" class="btn btn-success" data-target="#addnew" value="Edit"></th>
    </form>
     <form action="bookings.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="edit" class="btn btn-info" data-target="#addnew" value="Book"></th>
    </form>
    <form action="partials/delete.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="delete" class="btn btn-danger" value="Delete"></th>
    </form>
</tr>
<?php
                }
                ?>