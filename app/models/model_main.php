<?php
    class Model_Main extends Model
    {
        public function get_data()
        {
            return array(
                array(
                    'id' => '1',
                    'Class' => '5',
                    'Name' => 'Василий Алибабаевич Пупкин',
                    'Dtn' => 'true',
                    'Date' => '19.05.2006'
                ),
                array(
                    'id' => '2',
                    'Class' => '5',
                    'Name' => 'Стивен Уильям Хокинг',
                    'Dtn' => 'false',
                    'Date' => '08.01.1942'
                )
            );
        }
    }
?>