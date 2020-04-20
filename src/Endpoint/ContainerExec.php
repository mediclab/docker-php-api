<?php

namespace Docker\API\Endpoint;

class ContainerExec extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
     * Run a command inside a running container.
     *
     * @param string $id ID or name of container
     * @param \Docker\API\Model\ContainersIdExecPostBody $execConfig Exec configuration
     */
    public function __construct(string $id, \Docker\API\Model\ContainersIdExecPostBody $execConfig)
    {
        $this->id = $id;
        $this->body = $execConfig;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/exec');
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
     * @throws \Docker\API\Exception\ContainerExecNotFoundException
     * @throws \Docker\API\Exception\ContainerExecConflictException
     * @throws \Docker\API\Exception\ContainerExecInternalServerErrorException
     *
     * @return null|\Docker\API\Model\IdResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\IdResponse', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ContainerExecNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (409 === $status) {
            throw new \Docker\API\Exception\ContainerExecConflictException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ContainerExecInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
}
