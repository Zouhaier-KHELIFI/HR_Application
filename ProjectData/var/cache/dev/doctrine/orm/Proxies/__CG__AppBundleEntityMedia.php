<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Media extends \AppBundle\Entity\Media implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'source', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'candidat_proprietaire', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'media_offre', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'absence', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'media_event'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'source', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'candidat_proprietaire', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'media_offre', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'absence', '' . "\0" . 'AppBundle\\Entity\\Media' . "\0" . 'media_event'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Media $proxy) {
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
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function getCandidatProprietaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCandidatProprietaire', []);

        return parent::getCandidatProprietaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setCandidatProprietaire($candidat_proprietaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCandidatProprietaire', [$candidat_proprietaire]);

        return parent::setCandidatProprietaire($candidat_proprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediaOffre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediaOffre', []);

        return parent::getMediaOffre();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediaOffre($media_offre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediaOffre', [$media_offre]);

        return parent::setMediaOffre($media_offre);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsence', []);

        return parent::getAbsence();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbsence($absence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbsence', [$absence]);

        return parent::setAbsence($absence);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediaEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediaEvent', []);

        return parent::getMediaEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediaEvent($media_event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediaEvent', [$media_event]);

        return parent::setMediaEvent($media_event);
    }

}
