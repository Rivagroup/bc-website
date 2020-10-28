<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Buchung extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" | Buchung";
		return($data);
		}
			
    public function index() 
	{
		$data=$this->meta4all($this->meta);
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603790699082&grp=a5ace12e-e7c4-4245-8b8c-09a5a44c6b4d&category=1";
		$data['pageHeadline'] = "<small><i class=\"fas fa-bowling-ball\"></i> Bowling buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
	}
	
    public function brunchBowling() 
	{
		$data=$this->meta4all($this->meta);
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603790995653&grp=a5ace12e-e7c4-4245-8b8c-09a5a44c6b4d&category=3";
		$data['pageHeadline'] = "<small><i class=\"fas fa-cookie-bite\"></i> Bowling Brunch buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
	}
	
    public function kindergeburtstagBasic() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603791037011&grp=a5ace12e-e7c4-4245-8b8c-09a5a44c6b4d&category=5&subcategory=18";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> BASIC <small>buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagMaxi() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603791064445&grp=a5ace12e-e7c4-4245-8b8c-09a5a44c6b4d&category=5&subcategory=19";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> MAXI <small>buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagXXL() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603791071334&grp=a5ace12e-e7c4-4245-8b8c-09a5a44c6b4d&category=5&subcategory=20";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> XXL <small>buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }
	
    public function midnightSpecial() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603791240265&grp=a5ace12e-e7c4-4245-8b8c-09a5a44c6b4d&category=21";
		$data['pageHeadline'] = "<small><i class=\"fas fa-moon\"></i> Midnight Special buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }

    public function offline() { 
		$data=$this->meta4all($this->meta);      
        $data['title'] .= ' - Buchungssystem offline';
        $data['main_content'] = 'buchung/buchung_offline';
        $this->load->view('template', $data);
    }
}