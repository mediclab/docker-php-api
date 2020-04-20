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

class ServiceServiceStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServiceServiceStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ServiceServiceStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ServiceServiceStatus();
        if (\array_key_exists('RunningTasks', $data) && $data['RunningTasks'] !== null) {
            $object->setRunningTasks($data['RunningTasks']);
        } elseif (\array_key_exists('RunningTasks', $data) && $data['RunningTasks'] === null) {
            $object->setRunningTasks(null);
        }
        if (\array_key_exists('DesiredTasks', $data) && $data['DesiredTasks'] !== null) {
            $object->setDesiredTasks($data['DesiredTasks']);
        } elseif (\array_key_exists('DesiredTasks', $data) && $data['DesiredTasks'] === null) {
            $object->setDesiredTasks(null);
        }
        if (\array_key_exists('CompletedTasks', $data) && $data['CompletedTasks'] !== null) {
            $object->setCompletedTasks($data['CompletedTasks']);
        } elseif (\array_key_exists('CompletedTasks', $data) && $data['CompletedTasks'] === null) {
            $object->setCompletedTasks(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRunningTasks()) {
            $data['RunningTasks'] = $object->getRunningTasks();
        } else {
            $data['RunningTasks'] = null;
        }
        if (null !== $object->getDesiredTasks()) {
            $data['DesiredTasks'] = $object->getDesiredTasks();
        } else {
            $data['DesiredTasks'] = null;
        }
        if (null !== $object->getCompletedTasks()) {
            $data['CompletedTasks'] = $object->getCompletedTasks();
        } else {
            $data['CompletedTasks'] = null;
        }
        return $data;
    }
}
