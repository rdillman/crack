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
	
	function raffle()
	{
		$data['title'] = "Enter Raffle";
		$data['heading'] = "Rapture Raffle";
		
		$this->load->view('raffle', $data);
		$this->load->database('raffle');
	}
	
	function confirm()
	{
		$data['title'] = "Are you sure";
		$data['heading'] = "Buy HELL Ticket";
		$data['raptick'] = $this->input->post();
		$this->db->insert('tickets', $data['raptick']);
		
		$this->load->view('confirm',$data);
		
	}
	
	function rafconfirm()
	{
		$data['title'] = "Are you sure";
		$data['heading'] = "Buy HELL Ticket";
		$data['rapraffle'] = $this->input->post();
		$this->db->insert('raffle', $data['rapraffle']);
		
		$this->load->view('rafconfirm',$data);
		
	}
}

?>