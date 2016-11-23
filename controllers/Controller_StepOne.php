<?php

Class Controller_StepOne extends Controller_Base {

	public $layouts = "pricing";

	public function index() {
		$this->template->view("stepone");
	}
}