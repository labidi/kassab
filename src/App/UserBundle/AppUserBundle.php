<?php

namespace App\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppUserBundle extends Bundle
{

	function getParent(){
		
		return 'FOSUserBundle' ;
	}
}
