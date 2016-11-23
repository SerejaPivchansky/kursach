<?php

Class Controller_Pricing extends Controller_Base{

	public $layouts = "pricing";

	public function index() {
		if (!empty($_POST["radio"]) && $_POST["radio"] != "plastic") {
			$this->stepThree();
			return;
		} else {
			$this->steptwo();
		}
		//$this->template->view("index");
	}

	public function stepOne() {
		$this->template->view("stepone");
	}

	public function stepTwo() {
		$this->template->view("steptwo");
	}
	public function stepThree() {
		$this->template->view("stepthree");
	}
}