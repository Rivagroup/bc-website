<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Datenschutz extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" | Datenschutz";
		return($data);
		}
		
				
    public function index() 
	{
		$data=$this->meta4all($this->meta);
        $data['main_content'] = 'datenschutz/datenschutz_content';
        $this->load->view('template', $data);
    }

}