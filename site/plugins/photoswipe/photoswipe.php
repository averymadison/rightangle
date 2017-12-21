<?php
namespace ka\kirby;

use Tpl;

class PhotoSwipe
{
	static function init()
	{
		return Tpl::load(__DIR__ . DS . 'templates/pswp.php');
	}
}