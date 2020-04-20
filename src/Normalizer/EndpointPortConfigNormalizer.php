<?php

namespace Docker\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EndpointPortConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\EndpointPortConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\EndpointPortConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\EndpointPortConfig();
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Protocol', $data) && $data['Protocol'] !== null) {
            $object->setProtocol($data['Protocol']);
        } elseif (\array_key_exists('Protocol', $data) && $data['Protocol'] === null) {
            $object->setProtocol(null);
        }
        if (\array_key_exists('TargetPort', $data) && $data['TargetPort'] !== null) {
            $object->setTargetPort($data['TargetPort']);
        } elseif (\array_key_exists('TargetPort', $data) && $data['TargetPort'] === null) {
            $object->setTargetPort(null);
        }
        if (\array_key_exists('PublishedPort', $data) && $data['PublishedPort'] !== null) {
            $object->setPublishedPort($data['PublishedPort']);
        } elseif (\array_key_exists('PublishedPort', $data) && $data['PublishedPort'] === null) {
            $object->setPublishedPort(null);
        }
        if (\array_key_exists('PublishMode', $data) && $data['PublishMode'] !== null) {
            $object->setPublishMode($data['PublishMode']);
        } elseif (\array_key_exists('PublishMode', $data) && $data['PublishMode'] === null) {
            $object->setPublishMode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        } else {
            $data['Name'] = null;
        }
        if (null !== $object->getProtocol()) {
            $data['Protocol'] = $object->getProtocol();
        } else {
            $data['Protocol'] = null;
        }
        if (null !== $object->getTargetPort()) {
            $data['TargetPort'] = $object->getTargetPort();
        } else {
            $data['TargetPort'] = null;
        }
        if (null !== $object->getPublishedPort()) {
            $data['PublishedPort'] = $object->getPublishedPort();
        } else {
            $data['PublishedPort'] = null;
        }
        if (null !== $object->getPublishMode()) {
            $data['PublishMode'] = $object->getPublishMode();
        } else {
            $data['PublishMode'] = null;
        }
        return $data;
    }
}
