<?php

namespace Proxies\__CG__\MINSAL\IndicadoresBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GrupoIndicadores extends \MINSAL\IndicadoresBundle\Entity\GrupoIndicadores implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'nombre', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'usuarios', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'indicadores', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'grupos'];
        }

        return ['__isInitialized__', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'id', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'nombre', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'usuarios', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'indicadores', '' . "\0" . 'MINSAL\\IndicadoresBundle\\Entity\\GrupoIndicadores' . "\0" . 'grupos'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GrupoIndicadores $proxy) {
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuario(\MINSAL\IndicadoresBundle\Entity\UsuarioGrupoIndicadores $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuario', [$usuarios]);

        return parent::addUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuario(\MINSAL\IndicadoresBundle\Entity\UsuarioGrupoIndicadores $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuario', [$usuarios]);

        return parent::removeUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarios', []);

        return parent::getUsuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addIndicadore(\MINSAL\IndicadoresBundle\Entity\GrupoIndicadoresIndicador $indicadores)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIndicadore', [$indicadores]);

        return parent::addIndicadore($indicadores);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIndicadore(\MINSAL\IndicadoresBundle\Entity\GrupoIndicadoresIndicador $indicadores)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIndicadore', [$indicadores]);

        return parent::removeIndicadore($indicadores);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndicadores()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndicadores', []);

        return parent::getIndicadores();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addGruposUsuario(\Application\Sonata\UserBundle\Entity\Group $gruposUsuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGruposUsuario', [$gruposUsuarios]);

        return parent::addGruposUsuario($gruposUsuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGruposUsuario(\Application\Sonata\UserBundle\Entity\Group $gruposUsuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGruposUsuario', [$gruposUsuarios]);

        return parent::removeGruposUsuario($gruposUsuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getGruposUsuarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGruposUsuarios', []);

        return parent::getGruposUsuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addGrupo(\Application\Sonata\UserBundle\Entity\Group $grupos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGrupo', [$grupos]);

        return parent::addGrupo($grupos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGrupo(\Application\Sonata\UserBundle\Entity\Group $grupos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGrupo', [$grupos]);

        return parent::removeGrupo($grupos);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupos', []);

        return parent::getGrupos();
    }

}
