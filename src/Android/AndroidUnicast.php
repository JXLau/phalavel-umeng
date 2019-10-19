<?php
namespace Phalavel\Push\Umeng\Android;

use Phalavel\Push\Umeng\AndroidNotification;

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}
