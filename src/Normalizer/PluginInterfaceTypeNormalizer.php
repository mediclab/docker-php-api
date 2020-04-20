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

class PluginInterfaceTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\PluginInterfaceType';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\PluginInterfaceType';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\PluginInterfaceType();
        if (\array_key_exists('Prefix', $data) && $data['Prefix'] !== null) {
            $object->setPrefix($data['Prefix']);
        } elseif (\array_key_exists('Prefix', $data) && $data['Prefix'] === null) {
            $object->setPrefix(null);
        }
        if (\array_key_exists('Capability', $data) && $data['Capability'] !== null) {
            $object->setCapability($data['Capability']);
        } elseif (\array_key_exists('Capability', $data) && $data['Capability'] === null) {
            $object->setCapability(null);
        }
        if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
            $object->setVersion($data['Version']);
        } elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
            $object->setVersion(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPrefix()) {
            $data['Prefix'] = $object->getPrefix();
        } else {
            $data['Prefix'] = null;
        }
        if (null !== $object->getCapability()) {
            $data['Capability'] = $object->getCapability();
        } else {
            $data['Capability'] = null;
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $object->getVersion();
        } else {
            $data['Version'] = null;
        }
        return $data;
    }
}
