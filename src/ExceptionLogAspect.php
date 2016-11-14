<?php
//src/ExceptionLogAspect.php

namespace PagarMe;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\AfterThrowing;

class ExceptionLogAspect implements Aspect {

	/**
	 * @AfterThrowing("execution(public *\*->outroMetodo(*))")
	 */
	public function logAfterThrowException(MethodInvocation $invocation) {
        $obj = $invocation->getThis();

        $mensagem = 'Falha ao executar o método ' .
            get_class($obj) . '->' . $invocation->getMethod()->getName() . "()";

		Logger::error($mensagem);
	}

}