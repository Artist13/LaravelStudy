<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MyController extends Controller{

    public function show($id) {
        echo $id;
    }
}

?>