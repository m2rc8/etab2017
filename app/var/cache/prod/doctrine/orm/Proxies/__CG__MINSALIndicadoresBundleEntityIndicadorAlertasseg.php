<?php

namespace Proxies\__CG__\MINSAL\IndicadoresBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class IndicadorAlertasseg extends \MINSAL\IndicadoresBundle\Entity\IndicadorAlertasseg implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'limiteInferior', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'limiteSuperior', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'color', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'indicador', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'comentario'];
        }

        return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'limiteInferior', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'limiteSuperior', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'color', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'indicador', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\IndicadorAlertasseg' . "\0" . 'comentario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (IndicadorAlertasseg $proxy) {
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
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLimiteInferior($limiteInferior)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLimiteInferior', [$limiteInferior]);

        return parent::setLimiteInferior($limiteInferior);
    }

    /**
     * {@inheritDoc}
     */
    public function getLimiteInferior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLimiteInferior', []);

        return parent::getLimiteInferior();
    }

    /**
     * {@inheritDoc}
     */
    public function setLimiteSuperior($limiteSuperior)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLimiteSuperior', [$limiteSuperior]);

        return parent::setLimiteSuperior($limiteSuperior);
    }

    /**
     * {@inheritDoc}
     */
    public function getLimiteSuperior()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLimiteSuperior', []);

        return parent::getLimiteSuperior();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(\MINSAL\IndicadoresBundle\Entity\Alerta $color = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndicador(\MINSAL\IndicadoresBundle\Entity\ClasificacionTecnicai $indicador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndicador', [$indicador]);

        return parent::setIndicador($indicador);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndicador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndicador', []);

        return parent::getIndicador();
    }

    /**
     * {@inheritDoc}
     */
    public function setComentario($comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', [$comentario]);

        return parent::setComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', []);

        return parent::getComentario();
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
