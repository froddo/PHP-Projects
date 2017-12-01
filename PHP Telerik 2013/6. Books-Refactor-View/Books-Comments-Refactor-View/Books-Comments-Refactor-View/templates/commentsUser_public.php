<br><br>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Selected Books</th>
        <th>Comments</th>
        <th>Data</th>
    </tr>
    <?php foreach ($add['comment'] as $item) { ?>
        <tr>
            <?php foreach ($item as $value) { ?>
                <td><?= $value ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>