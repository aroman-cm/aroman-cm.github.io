<?php

namespace ChartMogul;

use ChartMogul\Resource\AbstractResource;
use ChartMogul\Http\ClientInterface;
use ChartMogul\Resource\EntryTrait;
use ChartMogul\Service\AllTrait;
use ChartMogul\Service\GetTrait;
use ChartMogul\Service\CreateTrait;
use ChartMogul\Service\DestroyTrait;

/**
 * @deprecated Use Customer.
 */
class Customers extends AbstractResource
{
    use CreateTrait;
    use EntryTrait;
    use AllTrait;
    use GetTrait;
    use DestroyTrait;

    /**
     * @ignore
     */
    const RESOURCE_NAME = 'Customers';
    /**
     * @ignore
     */
    const RESOURCE_PATH = '/v1/customers';
    /**
     * @ignore
     */
    const ENTRY_CLASS = Customer::class;

    protected static function getEntryClass()
    {
        return static::ENTRY_CLASS;
    }

    /**
     * Constructor
     * @param array                $attr
     * @param ClientInterface|null $client
     */
    public function __construct(array $attr = [], ClientInterface $client = null)
    {

        parent::__construct($attr, $client);

        $this->setEntries($this->entries);
    }

    /**
     * Search for Customers
     * @param  string                $email
     * @param  ClientInterface|null $client
     * @return Customers
     * @deprecated Use Customer.
     */
    public static function search($email, ClientInterface $client = null)
    {
        return Customer::search($email, $client);
    }
}
