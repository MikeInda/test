<script src="/js/validate.js" type="text/javascript"></script>
<script src="/js/update.js" type="text/javascript"></script>
<script src="/js/header.js" type="text/javascript"></script>
<script src="/js/responsive.js" type="text/javascript"></script>

<div id="wrap">
    <div id="header">
        <table>
            <col class="num_col">
            <col class="class_col">
            <col class="name_col">
            <col class="dtn_col">
            <col class="date_col">
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
            <col class="num_col">
            <col class="class_col">
            <col class="name_col">
            <col class="dtn_col">
            <col class="date_col">
            <?php

            $i = 0;
            foreach($data as $row)
            {
                $i++;
                echo '<tr id="row_'.$row['id'].'">
                        <td class="num_td" id="tdnum_'.$row['id'].'"><b>'
                            .$i.
                       '</b></td>
                        <td class="class_td" id="tdclass_'.$row['id'].'">
                            <div id="divclass_'.$row['id'].'">
                                <label for="class_'.$row['id'].'">Класс:</label>
                                <input class="table_input" name="class_'.$row['id'].'" id="class_'.$row['id'].'" value="'.$row['Class'].'" type="text" />
                            </div>
                        </td>
                        <td class="name_td" id="tdname_'.$row['id'].'">
                            <div id="divname_'.$row['id'].'">
                                <label for="name_'.$row['id'].'">Ученик:</label>
                                <input class="table_input" name="name_'.$row['id'].'" id="name_'.$row['id'].'" value="'.$row['Name'].'" type="text" />
                            </div>
                        </td>
                        <td class="dtn_td" id="tddtn_'.$row['id'].'">
                            <div id="divdtn_'.$row['id'].'">
                                <input class="table_checkbox" name="dtn_'.$row['id'].'" id="dtn_'.$row['id'].'" '.((!!$row['Dtn'])?'checked':'').' type="checkbox" />
                                <label for="dtn_'.$row['id'].'">Датация</label>
                            </div>
                        </td>
                        <td class="date_td" id="tddate_'.$row['id'].'">
                            <div id="divdate_'.$row['id'].'">
                                <label for="date_'.$row['id'].'">Дата рождения:</label>
                                <input class="table_input" name="date_'.$row['id'].'" id="date_'.$row['id'].'" value="'.$row['Date'].'" type="date" />
                            </div>
                        </td>
                      </tr>';
            }

            ?>
        </table>
    </div>
</div>

<form id="form" action="javascript:void(0);" onsubmit="ajax()" method="post">
    <div>
        <label for="class">Класс</label>
        <input required id="class" name="class" type="text" />
    </div>
    <div>
        <label for="name">Ученик</label>
        <input required id="name" name="name" type="text" />
    </div>
    <div>
        <label for="date">Дата&nbsp;рождения</label>
        <input required id="date" name="date" type="date" />
    </div>
    <div>
        <input id="dtn" name="dtn" type="checkbox" />
        <label for="dtn">Датация</label>
    </div>
    <input id="send" value="Добавить" type="submit" />
</form>