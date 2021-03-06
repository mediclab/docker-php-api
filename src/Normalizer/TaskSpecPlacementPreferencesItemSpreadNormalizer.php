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

class TaskSpecPlacementPreferencesItemSpreadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecPlacementPreferencesItemSpread';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecPlacementPreferencesItemSpread';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread();
        if (\array_key_exists('SpreadDescriptor', $data) && $data['SpreadDescriptor'] !== null) {
            $object->setSpreadDescriptor($data['SpreadDescriptor']);
        } elseif (\array_key_exists('SpreadDescriptor', $data) && $data['SpreadDescriptor'] === null) {
            $object->setSpreadDescriptor(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSpreadDescriptor()) {
            $data['SpreadDescriptor'] = $object->getSpreadDescriptor();
        } else {
            $data['SpreadDescriptor'] = null;
        }
        return $data;
    }
}
