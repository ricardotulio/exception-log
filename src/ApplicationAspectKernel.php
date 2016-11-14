<?php
//src/ApplicationAspectKernel.php

namespace PagarMe;

use Go\Core\AspectKernel;
use Go\Core\AspectContainer;

class ApplicationAspectKernel extends AspectKernel {

	public function configureAop(AspectContainer $container) {
		$container->registerAspect(new ExceptionLogAspect());
	}

}