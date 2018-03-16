<table>
    <tr id="header_row">
        <td>
            Номер
        </td>
        <td>
            Класс
        </td>
        <td>
            Ученик
        </td>
        <td>
            Датация
        </td>
        <td>
            Дата рождения
        </td>
    </tr>
    <?php

    $i = 0;
    foreach($data as $row)
    {
        $i++;
        echo '<tr id="row_'.$row['id'].'">
                <td id="number_'.$row['id'].'">'
                    .$i.
               '</td>
                <td id="class_'.$row['id'].'">'
                    .$row['Class'].
               '</td>
                <td id="name_'.$row['id'].'">'
                    .$row['Name'].
               '</td>
                <td id="dtn_'.$row['id'].'">'
                    .$row['Dtn'].
               '</td>
                <td id="date_'.$row['id'].'">'
                    .$row['Date'].
               '</td>
              </tr>';
    }

    ?>
</table>
