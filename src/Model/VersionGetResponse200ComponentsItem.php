<?php

namespace Docker\API\Model;

class VersionGetResponse200ComponentsItem
{
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var string|null
     */
    protected $version;
    /**
     *
     *
     * @var mixed|null
     */
    protected $details;
    /**
     *
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     *
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     *
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     *
     *
     * @param mixed $details
     *
     * @return self
     */
    public function setDetails($details) : self
    {
        $this->details = $details;
        return $this;
    }
}
