<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Hausliga extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		return($data);
		}
		
				
    public function index() 
	{
		$data=$this->meta4all($this->meta);
		$data['title'].=" | Hausliga";
        $data['main_content'] = 'hausliga/info';
        $this->load->view('template', $data);
    }

    public function teams() {
		
		$data=$this->meta4all($this->meta);
		$data['title'].=" | Hausligateams";
        $data['main_content'] = 'hausliga/teams';
        $this->load->view('template', $data);
    }

    public function ergebnisse() {
		$data=$this->meta4all($this->meta);
		$data['title'].=" | Hausligaergebnisse";
        $data['main_content'] = 'hausliga/ergebnisse';
        $this->load->view('template', $data);
    }

}