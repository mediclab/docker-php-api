<?php

namespace Docker\API\Endpoint;

class ContainerUpdate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
     * Change various configuration options of a container without having to recreate it.
     *
     * @param string $id ID or name of the container
     * @param \Docker\API\Model\ContainersIdUpdatePostBody $update
     */
    public function __construct(string $id, \Docker\API\Model\ContainersIdUpdatePostBody $update)
    {
        $this->id = $id;
        $this->body = $update;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/update');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerUpdateNotFoundException
     * @throws \Docker\API\Exception\ContainerUpdateInternalServerErrorException
     *
     * @return null|\Docker\API\Model\ContainersIdUpdatePostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ContainersIdUpdatePostResponse200', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ContainerUpdateNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerUpdateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
}
