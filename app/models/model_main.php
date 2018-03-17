<?php
    class Model_Main extends Model
    {
        public function get_data()
        {
            $db = Database::getInstance();
            $result = $db->select();
            $a = array();
            while ($row = $result->fetch_assoc()) {
                array_push(
                    $a,
                    array(
                        'id' => $row['id'],
                        'Class' => $row['Class'],
                        'Name' => $row['Name'],
                        'Dtn' => $row['Dtn'],
                        'Date' => $row['Date']
                    )
                );
            }
            $result->free();

            return $a;
        }
    }
?>