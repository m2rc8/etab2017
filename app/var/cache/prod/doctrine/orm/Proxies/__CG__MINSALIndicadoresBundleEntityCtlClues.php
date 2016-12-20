<?php

namespace Proxies\__CG__\MINSAL\IndicadoresBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CtlClues extends \MINSAL\IndicadoresBundle\Entity\CtlClues implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'descripcion', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'jurisdiccion', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'municipio', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'localidad', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'tipo_unidad', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'tipologia'];
        }

        return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'descripcion', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'jurisdiccion', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'municipio', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'localidad', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'tipo_unidad', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\CtlClues' . "\0" . 'tipologia'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CtlClues $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setJurisdiccion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJurisdiccion', [$descripcion]);

        return parent::setJurisdiccion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getJurisdiccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJurisdiccion', []);

        return parent::getJurisdiccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setMunicipio($municipio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMunicipio', [$municipio]);

        return parent::setMunicipio($municipio);
    }

    /**
     * {@inheritDoc}
     */
    public function getMunicipio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMunicipio', []);

        return parent::getMunicipio();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidad($localidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidad', [$localidad]);

        return parent::setLocalidad($localidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidad', []);

        return parent::getLocalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoUnidad($tipo_unidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoUnidad', [$tipo_unidad]);

        return parent::setTipoUnidad($tipo_unidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoUnidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoUnidad', []);

        return parent::getTipoUnidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipologia($tipologia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipologia', [$tipologia]);

        return parent::setTipologia($tipologia);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipologia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipologia', []);

        return parent::getTipologia();
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
