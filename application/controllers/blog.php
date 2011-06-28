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
		
	}
	
	function confirm()
	{
		$data['title'] = "Are you sure";
		$data['heading'] = "Buy HELL Ticket";
		$data['raptick'] = $this->input->post();
		
		$this->load->view('confirm',$data);
	}
}

?>