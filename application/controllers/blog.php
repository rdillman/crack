<?php

class Blog extends CI_Controller {
	
	function Blog()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		
		}
	
	function index()
	{
		$data['title'] = "Rapture Tickets";
		$data['heading'] = "Save Yourself!";
		// $data['buy'] = 
						
		$this ->load->view('blog_view', $data); 
	}

	function buy()
	{
		$data['title'] = "Buy Rapture Ticket";
		$data['heading'] = "Buy Rapture Ticket";
		
		$this->load->view('buy_ticket', $data);
		$this->load->database('tickets');
		
	}
	
	function confirm()
	{

                //User form data from buy_ticket view
		$data['raptick'] = $this->input->post();


                //Check to see if user has already signed up for a rapture ticket
                $already_bought = $this->db->where("email=",$raptick['email']);
                
                //If they have bought a ticket, load the cheater page
                if ($already_bought != []){
                     $data['title'] = "Blasphemy!";
		     $data['heading'] = "You have already purchased a rapture ticket!";
                     $this->load->view('cheater',$data);

                //If they have not purchased a ticket, insert them into the database and show them a confirmation
                }else{
		     $data['title'] = "Are you sure";
		     $data['heading'] = "Buy HELL Ticket"
                     $this->db->insert('tickets', $data['raptick']);
	             $this->load->view('confirm',$data);
                }
		
	}
}

?>