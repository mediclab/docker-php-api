<?php

namespace Docker\API\Endpoint;

class ImageCommit extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     *
     *
     * @param \Docker\API\Model\ContainerConfig $containerConfig The container configuration
     * @param array $queryParameters {
     *     @var string $container The ID or name of the container to commit
     *     @var string $repo Repository name for the created image
     *     @var string $tag Tag name for the create image
     *     @var string $comment Commit message
     *     @var string $author Author of the image (e.g., `John Hannibal Smith <hannibal@a-team.com>`)
     *     @var bool $pause Whether to pause the container before committing
     *     @var string $changes `Dockerfile` instructions to apply while committing
     * }
     */
    public function __construct(\Docker\API\Model\ContainerConfig $containerConfig, array $queryParameters = array())
    {
        $this->body = $containerConfig;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/commit';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('container', 'repo', 'tag', 'comment', 'author', 'pause', 'changes'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('pause' => true));
        $optionsResolver->setAllowedTypes('container', array('string'));
        $optionsResolver->setAllowedTypes('repo', array('string'));
        $optionsResolver->setAllowedTypes('tag', array('string'));
        $optionsResolver->setAllowedTypes('comment', array('string'));
        $optionsResolver->setAllowedTypes('author', array('string'));
        $optionsResolver->setAllowedTypes('pause', array('bool'));
        $optionsResolver->setAllowedTypes('changes', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ImageCommitNotFoundException
     * @throws \Docker\API\Exception\ImageCommitInternalServerErrorException
     *
     * @return null|\Docker\API\Model\IdResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\IdResponse', 'json');
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\ImageCommitNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\ImageCommitInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
}
