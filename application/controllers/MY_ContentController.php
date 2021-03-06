<?php

class MY_ContentController extends CI_Controller {
	public $meta;

    public function __construct() {
        parent::__construct();
		$this->meta = array();
		$this->meta['title'] = 'Bowling Chemnitz';
		$this->meta['main_content'] = 'start/start_content';
		$this->meta['description'] = 'Das Bowling Center für Chemnitz/Sachsen ✓ Günstig bowlen auf der größten Bowlingbahn in Chemnitz ☆, Bereits über 20000 zufriedene Bowling - Gäste!';
		
		$this->meta['keywords_private']= 'bowling,bowlingbahn,bowlingcenter,bowlingtreff';
		
		$this->meta['keywords_alldomains']='chemnitz,freizeit,firmenfeier,kinder,geburtstag,aktivität,junggesellenabschied,veranstaltung, firmen,event,indoor,brunch,billard,dart';
		
		$this->meta['author']="Oliver Oehme";
		$this->meta['co_author']="Mario Franke";
		$this->meta['cache']="no-cache";
		$this->meta['Cache-control']="no-cache";
		$this->meta['robots']="index,follow,noarchive";
		
		$this->meta['icon_url']=base_url('assets/favicon.png');
		$this->meta['fb_url']='https://www.facebook.com/bowlingchemnitz';
		$this->meta['web_url']='https://bowling-chemnitz.de';
		
		$this->meta['kontakt_email']='kontakt@spielcenter-chemnitz.de';
		$this->meta['kontakt_strasse_nr']='Wladimir - Sagorski - Str. 20';
		$this->meta['kontakt_plz']='09122';
		$this->meta['kontakt_ort']='Chemnitz';
		$this->meta['kontakt_region']='Sachsen';
		$this->meta['kontakt_land']='Germany';
		$this->meta['kontakt_telefon']='+49 37133423340';
		$this->meta['kontakt_fax']='+49 37133423349';
		$this->meta['geo_lat']='50.795971244394984';
		$this->meta['geo_long']='12.891801595687866';
		
		
		$this->meta['meta_postal']='<meta name="medium" content="mult" />
							<meta name="language" content="de">
							<meta name="zipcode" content="'.$this->meta['kontakt_plz'].'">
							<meta name="city" content="'.$this->meta['kontakt_ort'].'">
							<meta name="state" content="'.$this->meta['kontakt_region'].'">
							<meta name="country" content="DE">';
		
		$this->meta['meta_og']='<meta property="og:title" content="Bowling Center Chemnitz"/>
							<meta property="og:type" content="website"/>
							<meta property="og:site_name" content="Bowling Center Chemnitz"/>
							<meta property="og:url" content="'.$this->meta['fb_url'].'"/>
							<meta property="og:image" content="'.$this->meta['icon_url'].'"/>
							<meta property="og:description" content="'.$this->meta['description'].'" />
							<meta property="og:email" content="'.$this->meta['kontakt_email'].'"/> 
							<meta property="og:phone_number" content="'.$this->meta['kontakt_telefon'].'"/> 
							<meta property="og:fax_number" content="'.$this->meta['kontakt_fax'].'"/>
							<meta property="og:latidude" content="'.$this->meta['geo_lat'].'"/>
							<meta property="og:longitude" content="'.$this->meta['geo_long'].'"/>
							<meta property="og:street-adress" content="'.$this->meta['kontakt_strasse_nr'].'"/>
							<meta property="og:locality" content="'.$this->meta['kontakt_ort'].'"/>
							<meta property="og:locale" content="de_DE"/>
							<meta property="og:region" content="'.$this->meta['kontakt_region'].'"/>
							<meta property="og:postal-code" content="'.$this->meta['kontakt_plz'].'"/>
							<meta property="og:country-name" content="'.$this->meta['kontakt_land'].'"/>';

		$this->meta['meta_itemprop']='<span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
							<meta itemprop="streetAddress" content="'.$this->meta['kontakt_strasse_nr'].'">
							<meta itemprop="addressLocality" content="'.$this->meta['kontakt_ort'].'">
							<meta itemprop="addressRegion" content="'.$this->meta['kontakt_region'].'">
							<meta itemprop="postalCode" content="'.$this->meta['kontakt_plz'].'"></span>
							<meta itemprop="url" content="'.$this->meta['web_url'].'">
							<meta itemprop="telephone" content="'.$this->meta['kontakt_telefon'].'">
							<meta itemprop="email" content="'.$this->meta['kontakt_email'].'">
							<meta itemprop="name" content="Bowling Chemnitz | einfach umwerfend - Bowlingbahn und Freizeitanlage in Chemnitz / Sachsen"/>
							<meta itemprop="addressCountry" content="de"/>';
									
			$this->meta['meta_links']='<link rel="image_src" href="'.$this->meta['icon_url'].'" />
									<link rel="alternate" type="application/rss+xml" title="Facebook" href="'.$this->meta['fb_url'].'" />
									<link rel="stylesheet" href="'.base_url('assets/css/x_promo.css').'">';
									
			$this->meta['x_promotion']='<div>Schaut auch nach unseren anderen Angeboten im <a class="navbar-brand" href="https://spielcenter-chemnitz.de" target="_blank">Spielcenter Chemnitz</a>
							<a href="https://lasergame-chemnitz.de" target="_blank">
							<img src="'.base_url('assets/x_promo/lasergame_logo.png').'" width="42" height="42" class="d-inline-block align-bottom" alt="Lasergame / Lasertag Chemnitz"></a>
							<a href="https://escaperoom-chemnitz.de" target="_blank">
							<img src="'.base_url('assets/x_promo/escaperoom_logo.webp').'" width="42" height="42" class="d-inline-block align-bottom" alt="Escaperoom / Exitgame Chemnitz"></a>
							<a href="https://minigolf-chemnitz.de" target="_blank">
							<img src="'.base_url('assets/x_promo/adventure_minigolf_logo.webp').'" width="42" height="42" class="d-inline-block align-bottom" alt="Schwarzlicht Adventure Minigolf Chemnitz"></a>
							</div>';												
    }

}