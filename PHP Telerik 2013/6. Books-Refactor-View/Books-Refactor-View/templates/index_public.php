<br>
   <table border="1">
       <tr>
           <th>Книга</th>
           <th>Автори</th>
       </tr>

 <?php foreach ($result['books'] as $row) { ?>
    <tr>
        <td><?= $row['book_title']?></td><td>


            <?php foreach ($row['authors']  as $k=> $v) { ?>

                <?php echo "<a href='index.php?author_id=".$k."'>".$v."</a>" ?>

            <?php } ?>
        </td></tr>
<?php } ?>

</table>