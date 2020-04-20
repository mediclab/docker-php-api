<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class NetworksIdConnectPostBody
{
    /**
     * The ID or name of the container to connect to the network.
     *
     * @var string
     */
    protected $container;
    /**
     * Configuration for a network endpoint.
     *
     * @var EndpointSettings
     */
    protected $endpointConfig;

    /**
     * The ID or name of the container to connect to the network.
     */
    public function getContainer(): ?string
    {
        return $this->container;
    }

    /**
     * The ID or name of the container to connect to the network.
     */
    public function setContainer(?string $container): self
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Configuration for a network endpoint.
     */
    public function getEndpointConfig(): ?EndpointSettings
    {
        return $this->endpointConfig;
    }

    /**
     * Configuration for a network endpoint.
     */
    public function setEndpointConfig(?EndpointSettings $endpointConfig): self
    {
        $this->endpointConfig = $endpointConfig;

        return $this;
    }
}
