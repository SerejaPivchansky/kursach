<?php

Class Controller_Pricing extends Controller_Base{

	public $layouts = "pricing";

	public function index() {


		if ($step = "two") {
			return $this->stepOne();
		}

		
		//$this->template->view("index");
	}

	public function stepOne() {
		$this->template->view("stepone");
	}

	public function stepTwo() {
		if (!empty($_POST["radio"]) && $_POST["radio"] != "plastic") {
			$this->stepThree();
			return;
		} else {
			$this->template->view("steptwo");
			return;
		}
		
	}
	public function stepThree() {
		//$this->template->view("stepthree");
		
	}
}