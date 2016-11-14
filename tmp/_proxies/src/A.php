<?php
namespace PagarMe;


class A extends A__AopProxied implements \Go\Aop\Proxy
{

    /**
     * Property was created automatically, do not change it manually
     */
    private static $__joinPoints = [];
    
    
    public function outroMetodo()
    {
        return self::$__joinPoints['method:outroMetodo']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('PagarMe\A',array (
  'method' => 
  array (
    'outroMetodo' => 
    array (
      0 => 'advisor.PagarMe\\ExceptionLogAspect->logAfterThrowException',
    ),
  ),
));