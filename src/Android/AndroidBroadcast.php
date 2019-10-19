<?php
namespace Phalavel\Push\Umeng\Android;

use Phalavel\Push\Umeng\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
