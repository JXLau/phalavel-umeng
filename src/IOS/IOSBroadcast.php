<?php
namespace Phalavel\Push\Umeng\IOS;

use Phalavel\Push\Umeng\IOSNotification;

class IOSBroadcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
