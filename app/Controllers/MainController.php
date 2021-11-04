<?php

namespace App\Controllers;

use App\Models\TypesModel;

class MainController {

    /**
     * Main page
     * 
     * @author Craig Sparks sparks.craig@gmail.com
     */
    public function index()
    {
        $typesModel = new TypesModel();
        $types = $typesModel->getTypes();

        require APP_ROOT . '/views/master.php';
    }

    public function process()
    {
        $typesModel = new TypesModel();
        $types = $typesModel->getTypes();

        if(isset($_POST['type']) && array_key_exists($_POST['type'], $types)) {
            if(!is_numeric($_POST['qty'])) {
                header("HTTP/1.1 422 Validation Error");
            }
            $type = $types[$_POST['type']];
            $total_caffeine = $type['serving_size'] * $type['per_serving_caffeine'];

            if($total_caffeine >= 500) {
                echo 0;
            } else {
                echo floor((500 / $total_caffeine) - $_POST['qty']);
            }

        } else {
            header("HTTP/1.1 422 Validation Error");
        }
    }
}