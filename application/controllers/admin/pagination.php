<?php

class pagination extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/overview");

        $response = file_get_contents('http://localhost/api-beasiswa/api-beasiswa/api/mahasiswa');
        $result = json_decode($response, true);

        $displayArray = $result["result"];

        // The pagination controller code
        $quantity = 15;
        $start = $this->uri->segment(3);
        $data['displayArray'] = array_slice($displayArray, $start, $quantity);
        $config['base_url'] = 'http://localhost/api-beasiswa/api-beasiswa/api/mahasiswa/';
        $config['total_rows'] = count($displayArray);
        $config['per_page'] = $quantity;
        $this->pagination->initialize($config);
        $this->load->view('result', $data);
    }
}
