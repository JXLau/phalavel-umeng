<?php
namespace Phalavel\Push\Umeng\Android;

use Phalavel\Push\Umeng\AndroidNotification;

class AndroidGroupcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}
