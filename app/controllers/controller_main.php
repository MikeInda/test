<?php
    class Controller_Main extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Main();
            $this->view = new View();
        }

        function action_index()
        {
            $data = $this->model->get_data();
            $this->view->generate('main_view.php', 'tmp_view.php', $data);
        }

        function action_send()
        {
            $db = Database::getInstance();
            if ($_POST['dtn'] == 'on') {
                $dtn = '1';
            } else {
                $dtn = '0';
            }
            $result = $db->add($_POST['class'],
                               $_POST['name'],
                               $dtn,
                               $_POST['date']);
            return $result;
        }

        function action_update()
        {
            $db = Database::getInstance();
            if ($_POST['dtn'] == 'true') {
                $dtn = '1';
            } else {
                $dtn = '0';
            }
            $result = $db->update($_POST['id'],
                $_POST['class'],
                $_POST['name'],
                $dtn,
                $_POST['date']);
            return $result;
        }
    }
?>