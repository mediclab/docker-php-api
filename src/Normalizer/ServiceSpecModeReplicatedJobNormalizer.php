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

class ServiceSpecModeReplicatedJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ServiceSpecModeReplicatedJob();
        if (\array_key_exists('MaxConcurrent', $data) && $data['MaxConcurrent'] !== null) {
            $object->setMaxConcurrent($data['MaxConcurrent']);
        } elseif (\array_key_exists('MaxConcurrent', $data) && $data['MaxConcurrent'] === null) {
            $object->setMaxConcurrent(null);
        }
        if (\array_key_exists('TotalCompletions', $data) && $data['TotalCompletions'] !== null) {
            $object->setTotalCompletions($data['TotalCompletions']);
        } elseif (\array_key_exists('TotalCompletions', $data) && $data['TotalCompletions'] === null) {
            $object->setTotalCompletions(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMaxConcurrent()) {
            $data['MaxConcurrent'] = $object->getMaxConcurrent();
        } else {
            $data['MaxConcurrent'] = null;
        }
        if (null !== $object->getTotalCompletions()) {
            $data['TotalCompletions'] = $object->getTotalCompletions();
        } else {
            $data['TotalCompletions'] = null;
        }
        return $data;
    }
}
