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

class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\BuildCache';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\BuildCache';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\BuildCache();
        if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
            $object->setID(null);
        }
        if (\array_key_exists('Parent', $data) && $data['Parent'] !== null) {
            $object->setParent($data['Parent']);
        } elseif (\array_key_exists('Parent', $data) && $data['Parent'] === null) {
            $object->setParent(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('Description', $data) && $data['Description'] !== null) {
            $object->setDescription($data['Description']);
        } elseif (\array_key_exists('Description', $data) && $data['Description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('InUse', $data) && $data['InUse'] !== null) {
            $object->setInUse($data['InUse']);
        } elseif (\array_key_exists('InUse', $data) && $data['InUse'] === null) {
            $object->setInUse(null);
        }
        if (\array_key_exists('Shared', $data) && $data['Shared'] !== null) {
            $object->setShared($data['Shared']);
        } elseif (\array_key_exists('Shared', $data) && $data['Shared'] === null) {
            $object->setShared(null);
        }
        if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
            $object->setSize($data['Size']);
        } elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
            $object->setCreatedAt($data['CreatedAt']);
        } elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] !== null) {
            $object->setLastUsedAt($data['LastUsedAt']);
        } elseif (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] === null) {
            $object->setLastUsedAt(null);
        }
        if (\array_key_exists('UsageCount', $data) && $data['UsageCount'] !== null) {
            $object->setUsageCount($data['UsageCount']);
        } elseif (\array_key_exists('UsageCount', $data) && $data['UsageCount'] === null) {
            $object->setUsageCount(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        } else {
            $data['ID'] = null;
        }
        if (null !== $object->getParent()) {
            $data['Parent'] = $object->getParent();
        } else {
            $data['Parent'] = null;
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        } else {
            $data['Type'] = null;
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        } else {
            $data['Description'] = null;
        }
        if (null !== $object->getInUse()) {
            $data['InUse'] = $object->getInUse();
        } else {
            $data['InUse'] = null;
        }
        if (null !== $object->getShared()) {
            $data['Shared'] = $object->getShared();
        } else {
            $data['Shared'] = null;
        }
        if (null !== $object->getSize()) {
            $data['Size'] = $object->getSize();
        } else {
            $data['Size'] = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        } else {
            $data['CreatedAt'] = null;
        }
        if (null !== $object->getLastUsedAt()) {
            $data['LastUsedAt'] = $object->getLastUsedAt();
        } else {
            $data['LastUsedAt'] = null;
        }
        if (null !== $object->getUsageCount()) {
            $data['UsageCount'] = $object->getUsageCount();
        } else {
            $data['UsageCount'] = null;
        }
        return $data;
    }
}
