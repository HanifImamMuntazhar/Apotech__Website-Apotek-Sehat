<?php

namespace App\Controllers;

use App\Models\ObatModel;

class ObatController extends BaseController
{
    $obatModel = new ObatModel(); // Adjust the model name accordingly
    $data['obat'] = $obatModel->findAll(); // Or any method to fetch the data
    
    // Debugging: Check if data is being fetched
    var_dump($data['obat']);
    return view('daftar_obat', $data);
}

