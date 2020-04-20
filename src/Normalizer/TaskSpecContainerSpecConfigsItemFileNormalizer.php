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

class TaskSpecContainerSpecConfigsItemFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemFile';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemFile';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile();
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('UID', $data) && $data['UID'] !== null) {
            $object->setUID($data['UID']);
        } elseif (\array_key_exists('UID', $data) && $data['UID'] === null) {
            $object->setUID(null);
        }
        if (\array_key_exists('GID', $data) && $data['GID'] !== null) {
            $object->setGID($data['GID']);
        } elseif (\array_key_exists('GID', $data) && $data['GID'] === null) {
            $object->setGID(null);
        }
        if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
            $object->setMode($data['Mode']);
        } elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
            $object->setMode(null);
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
        if (null !== $object->getUID()) {
            $data['UID'] = $object->getUID();
        } else {
            $data['UID'] = null;
        }
        if (null !== $object->getGID()) {
            $data['GID'] = $object->getGID();
        } else {
            $data['GID'] = null;
        }
        if (null !== $object->getMode()) {
            $data['Mode'] = $object->getMode();
        } else {
            $data['Mode'] = null;
        }
        return $data;
    }
}
