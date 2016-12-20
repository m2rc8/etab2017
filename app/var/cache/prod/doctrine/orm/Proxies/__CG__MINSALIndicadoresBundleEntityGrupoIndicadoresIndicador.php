<?php

namespace Proxies\__CG__\MINSAL\IndicadoresBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GrupoIndicadoresIndicador extends \MINSAL\IndicadoresBundle\Entity\GrupoIndicadoresIndicador implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'indicador', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'grupo', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'dimension', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtro', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtroPosicionDesde', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtroPosicionHasta', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtroElementos', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'posicion', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'tipoGrafico', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'orden'];
        }

        return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'indicador', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'grupo', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'dimension', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtro', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtroPosicionDesde', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtroPosicionHasta', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'filtroElementos', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'posicion', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'tipoGrafico', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadoresIndicador' . "\0" . 'orden'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GrupoIndicadoresIndicador $proxy) {
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
    public function setDimension($dimension)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDimension', [$dimension]);

        return parent::setDimension($dimension);
    }

    /**
     * {@inheritDoc}
     */
    public function getDimension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDimension', []);

        return parent::getDimension();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiltro($filtro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiltro', [$filtro]);

        return parent::setFiltro($filtro);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiltro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiltro', []);

        return parent::getFiltro();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosicion($posicion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosicion', [$posicion]);

        return parent::setPosicion($posicion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosicion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosicion', []);

        return parent::getPosicion();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoGrafico($tipoGrafico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoGrafico', [$tipoGrafico]);

        return parent::setTipoGrafico($tipoGrafico);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoGrafico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoGrafico', []);

        return parent::getTipoGrafico();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndicador(\MINSAL\IndicadoresBundle\Entity\FichaTecnica $indicador)
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
    public function setGrupo(\MINSAL\IndicadoresBundle\Entity\GrupoIndicadores $grupo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrupo', [$grupo]);

        return parent::setGrupo($grupo);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupo', []);

        return parent::getGrupo();
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
    public function setOrden($orden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrden', [$orden]);

        return parent::setOrden($orden);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrden', []);

        return parent::getOrden();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiltroPosicionDesde($filtroPosicionDesde)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiltroPosicionDesde', [$filtroPosicionDesde]);

        return parent::setFiltroPosicionDesde($filtroPosicionDesde);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiltroPosicionDesde()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiltroPosicionDesde', []);

        return parent::getFiltroPosicionDesde();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiltroPosicionHasta($filtroPosicionHasta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiltroPosicionHasta', [$filtroPosicionHasta]);

        return parent::setFiltroPosicionHasta($filtroPosicionHasta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiltroPosicionHasta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiltroPosicionHasta', []);

        return parent::getFiltroPosicionHasta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiltroElementos($filtroElementos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiltroElementos', [$filtroElementos]);

        return parent::setFiltroElementos($filtroElementos);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiltroElementos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiltroElementos', []);

        return parent::getFiltroElementos();
    }

}
