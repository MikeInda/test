<script src="/js/validate.js" type="text/javascript"></script>
<script src="/js/update.js" type="text/javascript"></script>
<script src="/js/header.js" type="text/javascript"></script>

<div id="wrap">
    <div id="header">
        <table>
            <col id="num_col">
            <col id="class_col">
            <col id="name_col">
            <col id="dtn_col">
            <col id="date_col">
            <thead>
                <tr id="header_row">
                    <th>
                        Номер
                    </th>
                    <th>
                        Класс
                    </th>
                    <th>
                        Ученик
                    </th>
                    <th>
                        Датация
                    </th>
                    <th>
                        Дата рождения
                    </th>
                </tr>
            </thead>
        </table>

    </div>
    <div>
        <table id="table">
            <col id="num_col">
            <col id="class_col">
            <col id="name_col">
            <col id="dtn_col">
            <col id="date_col">
            <?php

            $i = 0;
            foreach($data as $row)
            {
                $i++;
                echo '<tr id="row_'.$row['id'].'">
                        <td class="num_td">'
                            .$i.
                       '</td>
                        <td>
                            <input class="table_input" id="class_'.$row['id'].'" value="'.$row['Class'].'" type="text" />
                        </td>
                        <td>
                            <input class="table_input" id="name_'.$row['id'].'" value="'.$row['Name'].'" type="text" />
                        </td>
                        <td class="dtn_td">
                            <input class="table_input" id="dtn_'.$row['id'].'" '.((!!$row['Dtn'])?'checked':'').' type="checkbox" />
                        </td>
                        <td>
                            <input class="table_input" id="date_'.$row['id'].'" value="'.$row['Date'].'" type="date" />
                        </td>
                      </tr>';
            }

            ?>
        </table>
    </div>
</div>

<form id="form" action="javascript:void(0);" onsubmit="ajax()" method="post">
    <label for="class">Класс</label>
    <input required id="class" name="class" type="text" />
    <label for="name">Ученик</label>
    <input required id="name" name="name" type="text" />
    <label for="date">Дата&nbsp;рождения</label>
    <input required id="date" name="date" type="date" />
    <input id="dtn" name="dtn" type="checkbox" />
    <label for="dtn">Датация</label>
    <input id="send" value="Добавить" type="submit" />
</form>