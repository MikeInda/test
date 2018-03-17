<script src="/js/validate.js" type="text/javascript"></script>
<script src="/js/update.js" type="text/javascript"></script>

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
                <td>
                    <input class="table_input" id="class_'.$row['id'].'" value="'.$row['Class'].'" type="text" />
                </td>
                <td>
                    <input class="table_input" id="name_'.$row['id'].'" value="'.$row['Name'].'" type="text" />
                </td>
                <td>
                    <input class="table_checkbox" id="dtn_'.$row['id'].'" '.((!!$row['Dtn'])?'checked':'').' type="checkbox" />
                </td>
                <td>
                    <input class="table_date" id="date_'.$row['id'].'" value="'.$row['Date'].'" type="date" />
                </td>
              </tr>';
    }

    ?>
</table>

<form id="form" action="javascript:void(0);" onsubmit="ajax()" method="post">
    <p class="form_desc">Класс</p>
    <input required id="class" name="class" type="text" />
    <p class="form_desc">Ученик</p>
    <input required id="name" name="name" type="text" />
    <p class="form_desc">Дата рождения</p>
    <input required id="date" name="date" type="date" />
    <p class="form_desc">
        <input id="dtn" name="dtn" type="checkbox" />
        <label for="dtn">Датация</label>
    </p>
    <p><input id="send" value="Добавить" type="submit" /></p>

</form>