<?php if($add['$authorCheck'] == false){ ?>
    <table border="1">
        <tr><th class="color" colspan="2">Select Authors</th></tr>
        <tr>
            <th>Books</th>
            <th>Authors</th>
        </tr>

        <?php foreach ($add['book'] as $item) { ?>

            <tr><td><?= $item['book_title']?></td><td>

                    <?php foreach ($item['authors'] as $key=> $it) { ?>
                        <?php echo "<a href='allBooks.php?author_id=".$key."'>".$it."</a>" ?>
                    <?php } ?>
                </td></tr>
        <?php } ?>

    </table>
<?php } ?>
    <br>
<?php if($add['$bookCheck'] == false){ ?>
    <table border="1">
        <tr><th class="color" rowspan="100">Add a comment to a book</th></tr>

        <?php foreach ($add['book'] as $k=> $value) { ?>

            <?php echo "<tr><td><a href='comments.php?book_id=".$k."&book_title=".$value['book_title']."'>".$value['book_title']."</a></td></tr>" ?>
        <?php } ?>

    </table>

<?php } ?>
    <br>
<?php if($add['$bookCheck'] == false){ ?>
    <table border="1">
        <tr><th class="color" colspan="2">Select Books</th></tr>
        <tr>
            <th>Books</th>
            <th>Authors</th>
        </tr>

        <?php foreach ($add['book'] as $kk=> $val) { ?>

            <tr><td><?php echo "<a href='allBooks.php?book_id=".$kk."'>".$val['book_title']."</a>" ?></td><td>
                    <?php foreach ($val['authors'] as $author) { ?>
                        <?= $author ?>

                    <?php } ?>
                </td></tr>
        <?php } ?>

    </table>

<?php } ?>
    <br>
<?php if($add['$bookCheck'] == false){ ?>
    <table border="1">
        <tr><th class="color" colspan="4">See Comments</th></tr>
        <tr>
            <th>Name</th>
            <th>Selected Books</th>
            <th>Comments</th>
            <th>Data</th>
        </tr>

        <?php foreach ($add['comment'] as $get) {
            $counter=1;
            ?>

            <tr>
                <?php foreach ($get as $vv) { ?>
                    <?php
                    if ($counter==1){
                        echo  "<td><a href='commentsUser.php?user=".$vv."'>$vv</a></td>";
                        $counter=0;
                        continue;
                    }
                    foreach ($add['book'] as $kkk=> $i) {

                        foreach ($i as $ite) {
                            if ($ite==$vv) {
                                echo "<td><a href='allBooks.php?book_id=".$kkk."'>$vv</a></td>";
                                $counter=2;
                                continue;
                            }

                        }

                    }
                    if ($counter==2){
                        $counter=0;
                    }
                    else{
                        echo   "<td>".$vv."</td>";
                    }

                    ?>

                <?php } ?>
            </tr>
        <?php } if (count($add['comment'])==0){ ?>
            <?php
            echo '<p>Has no comment on this book</p>';

            ?>
        <?php } ?>
    </table>
<?php } ?>