    
    <?php include 'login.html';?>
        
<table>

        <tr>
            <th>Дата</th>
            <th>Регион</th>
            <th>Име</th>
            <th>Продукт</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>Обща Сума</th>
        </tr>
        

            <?php
                foreach ($put as $k) {
        echo  '<tr>
            <td>'.$k['data'].'</td>
            <td>'.$k['region'].'</td>
            <td>'.$k['name'].'</td>
            <td>'.$k['product'].'</td>
            <td>'.$k['price1'].'</td>
            <td>'.$k['price2'].'</td>
            <td>'.$k['total'].'</td>


        </tr>';       
        }
        ?>

</table>
        
    
