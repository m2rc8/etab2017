<?php

namespace Proxies\__CG__\MINSAL\IndicadoresBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class IndicadorDetalle extends \MINSAL\IndicadoresBundle\Entity\IndicadorDetalle implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'idIndicadorDetalle', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'idEstablecimiento', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'idVariablePeriodo', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'periodo', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm1', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm2', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm3', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm4', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm5', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm6', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm7', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm8', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm9', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm10', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm11', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm12'];
        }

        return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'idIndicadorDetalle', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'idEstablecimiento', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'idVariablePeriodo', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'periodo', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm1', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm2', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm3', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm4', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm5', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm6', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm7', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm8', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm9', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm10', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm11', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorDetalle' . "\0" . 'm12'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (IndicadorDetalle $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdIndicadorDetalle()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdIndicadorDetalle();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdIndicadorDetalle', []);

        return parent::getIdIndicadorDetalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEstablecimiento($idEstablecimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEstablecimiento', [$idEstablecimiento]);

        return parent::setIdEstablecimiento($idEstablecimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEstablecimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEstablecimiento', []);

        return parent::getIdEstablecimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVariablePeriodo($idVariablePeriodo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVariablePeriodo', [$idVariablePeriodo]);

        return parent::setIdVariablePeriodo($idVariablePeriodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVariablePeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVariablePeriodo', []);

        return parent::getIdVariablePeriodo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriodo($periodo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriodo', [$periodo]);

        return parent::setPeriodo($periodo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriodo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriodo', []);

        return parent::getPeriodo();
    }

    /**
     * {@inheritDoc}
     */
    public function setM1($m1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM1', [$m1]);

        return parent::setM1($m1);
    }

    /**
     * {@inheritDoc}
     */
    public function getM1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM1', []);

        return parent::getM1();
    }

    /**
     * {@inheritDoc}
     */
    public function setM2($m2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM2', [$m2]);

        return parent::setM2($m2);
    }

    /**
     * {@inheritDoc}
     */
    public function getM2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM2', []);

        return parent::getM2();
    }

    /**
     * {@inheritDoc}
     */
    public function setM3($m3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM3', [$m3]);

        return parent::setM3($m3);
    }

    /**
     * {@inheritDoc}
     */
    public function getM3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM3', []);

        return parent::getM3();
    }

    /**
     * {@inheritDoc}
     */
    public function setM4($m4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM4', [$m4]);

        return parent::setM4($m4);
    }

    /**
     * {@inheritDoc}
     */
    public function getM4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM4', []);

        return parent::getM4();
    }

    /**
     * {@inheritDoc}
     */
    public function setM5($m5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM5', [$m5]);

        return parent::setM5($m5);
    }

    /**
     * {@inheritDoc}
     */
    public function getM5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM5', []);

        return parent::getM5();
    }

    /**
     * {@inheritDoc}
     */
    public function setM6($m6)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM6', [$m6]);

        return parent::setM6($m6);
    }

    /**
     * {@inheritDoc}
     */
    public function getM6()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM6', []);

        return parent::getM6();
    }

    /**
     * {@inheritDoc}
     */
    public function setM7($m7)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM7', [$m7]);

        return parent::setM7($m7);
    }

    /**
     * {@inheritDoc}
     */
    public function getM7()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM7', []);

        return parent::getM7();
    }

    /**
     * {@inheritDoc}
     */
    public function setM8($m8)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM8', [$m8]);

        return parent::setM8($m8);
    }

    /**
     * {@inheritDoc}
     */
    public function getM8()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM8', []);

        return parent::getM8();
    }

    /**
     * {@inheritDoc}
     */
    public function setM9($m9)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM9', [$m9]);

        return parent::setM9($m9);
    }

    /**
     * {@inheritDoc}
     */
    public function getM9()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM9', []);

        return parent::getM9();
    }

    /**
     * {@inheritDoc}
     */
    public function setM10($m10)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM10', [$m10]);

        return parent::setM10($m10);
    }

    /**
     * {@inheritDoc}
     */
    public function getM10()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM10', []);

        return parent::getM10();
    }

    /**
     * {@inheritDoc}
     */
    public function setM11($m11)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM11', [$m11]);

        return parent::setM11($m11);
    }

    /**
     * {@inheritDoc}
     */
    public function getM11()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM11', []);

        return parent::getM11();
    }

    /**
     * {@inheritDoc}
     */
    public function setM12($m12)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setM12', [$m12]);

        return parent::setM12($m12);
    }

    /**
     * {@inheritDoc}
     */
    public function getM12()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getM12', []);

        return parent::getM12();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
