<?php

namespace Proxies\__CG__\PrestaShop\Module\ProductComment\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductCommentCriterionLang extends \PrestaShop\Module\ProductComment\Entity\ProductCommentCriterionLang implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang' . "\0" . 'productcommentcriterion', '' . "\0" . 'PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang' . "\0" . 'lang', '' . "\0" . 'PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang' . "\0" . 'name'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang' . "\0" . 'productcommentcriterion', '' . "\0" . 'PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang' . "\0" . 'lang', '' . "\0" . 'PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang' . "\0" . 'name'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductCommentCriterionLang $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getProductCommentCriterion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductCommentCriterion', []);

        return parent::getProductCommentCriterion();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductCommentCriterion(\PrestaShop\Module\ProductComment\Entity\ProductCommentCriterion $productcommentcriterion): \PrestaShop\Module\ProductComment\Entity\ProductCommentCriterionLang
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductCommentCriterion', [$productcommentcriterion]);

        return parent::setProductCommentCriterion($productcommentcriterion);
    }

    /**
     * {@inheritDoc}
     */
    public function getLang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLang', []);

        return parent::getLang();
    }

    /**
     * {@inheritDoc}
     */
    public function setLang(\PrestaShopBundle\Entity\Lang $lang): \PrestaShop\Module\ProductComment\Entity\ProductCommentCriterionLang
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLang', [$lang]);

        return parent::setLang($lang);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \PrestaShop\Module\ProductComment\Entity\ProductCommentCriterionLang
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

}
