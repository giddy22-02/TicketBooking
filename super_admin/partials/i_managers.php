<!--SQL QUERY START HERE-->
<?php
 $sql ="SELECT *FROM managers
  ORDER BY id";
   $query =$con->query($sql);
   WHILE($row=$query->fetch_assoc())
   {
       ?>
<tr>
    <td><?php echo $row['branch'];?></td>
    <td>
         <img src="<?php echo"uploads/". $row['photo'];?>" width="100px" class="img-circle" alt="image">
    </td>
    <td><?php echo $row['idno'];?></td>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone'];?></td>

    <form action="partials/updatedata.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="edit" class="btn btn-success" data-target="#addnew" value="Edit"></th>
    </form>
    <form action="partials/delete.php" Method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <th><input type="submit" name="delete" class="btn btn-danger" value="Delete"></th>
    </form>
</tr>
<?php
                }
                ?>