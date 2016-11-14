<?php

namespace PagarMe;

class A__AopProxied {

	public function metodoQueLancaExcecao() {
		throw new \Exception("Erro ao invocar método crítico");
	}

	public function outroMetodo() {
		$this->metodoQueLancaExcecao();
	}

}

include_once AOP_CACHE_DIR . '/_proxies/src/A.php';

