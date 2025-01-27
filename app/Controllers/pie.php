<?php
namespace App\Controllers;

use App\Models\PieModel;

class Pie extends BaseController
{
    public function getChartData()
    {
        $model = new PieModel();
        $data = $model->getGolonganData(); // Ambil data golongan dari model
        return $this->response->setJSON($data); // Kirim data sebagai JSON
    }
}