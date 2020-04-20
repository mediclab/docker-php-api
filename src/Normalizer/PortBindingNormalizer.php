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

class PortBindingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\PortBinding';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\PortBinding';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\PortBinding();
        if (\array_key_exists('HostIp', $data) && $data['HostIp'] !== null) {
            $object->setHostIp($data['HostIp']);
        } elseif (\array_key_exists('HostIp', $data) && $data['HostIp'] === null) {
            $object->setHostIp(null);
        }
        if (\array_key_exists('HostPort', $data) && $data['HostPort'] !== null) {
            $object->setHostPort($data['HostPort']);
        } elseif (\array_key_exists('HostPort', $data) && $data['HostPort'] === null) {
            $object->setHostPort(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHostIp()) {
            $data['HostIp'] = $object->getHostIp();
        } else {
            $data['HostIp'] = null;
        }
        if (null !== $object->getHostPort()) {
            $data['HostPort'] = $object->getHostPort();
        } else {
            $data['HostPort'] = null;
        }
        return $data;
    }
}
