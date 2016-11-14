<?php

namespace PagarMe;

class A {

	public function metodoQueLancaExcecao() {
		throw new \Exception("Erro ao invocar método crítico");
	}

	public function outroMetodo() {
		$this->metodoQueLancaExcecao();
	}

}