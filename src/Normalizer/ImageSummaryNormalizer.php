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

class ImageSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ImageSummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ImageSummary';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ImageSummary();
        if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
            $object->setId($data['Id']);
        } elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('ParentId', $data) && $data['ParentId'] !== null) {
            $object->setParentId($data['ParentId']);
        } elseif (\array_key_exists('ParentId', $data) && $data['ParentId'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('RepoTags', $data) && $data['RepoTags'] !== null) {
            $values = array();
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        } elseif (\array_key_exists('RepoTags', $data) && $data['RepoTags'] === null) {
            $object->setRepoTags(null);
        }
        if (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] !== null) {
            $values_1 = array();
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        } elseif (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] === null) {
            $object->setRepoDigests(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        } elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
            $object->setSize($data['Size']);
        } elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('SharedSize', $data) && $data['SharedSize'] !== null) {
            $object->setSharedSize($data['SharedSize']);
        } elseif (\array_key_exists('SharedSize', $data) && $data['SharedSize'] === null) {
            $object->setSharedSize(null);
        }
        if (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] !== null) {
            $object->setVirtualSize($data['VirtualSize']);
        } elseif (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] === null) {
            $object->setVirtualSize(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
        } elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('Containers', $data) && $data['Containers'] !== null) {
            $object->setContainers($data['Containers']);
        } elseif (\array_key_exists('Containers', $data) && $data['Containers'] === null) {
            $object->setContainers(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        } else {
            $data['Id'] = null;
        }
        if (null !== $object->getParentId()) {
            $data['ParentId'] = $object->getParentId();
        } else {
            $data['ParentId'] = null;
        }
        if (null !== $object->getRepoTags()) {
            $values = array();
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
        } else {
            $data['RepoTags'] = null;
        }
        if (null !== $object->getRepoDigests()) {
            $values_1 = array();
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
        } else {
            $data['RepoDigests'] = null;
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        } else {
            $data['Created'] = null;
        }
        if (null !== $object->getSize()) {
            $data['Size'] = $object->getSize();
        } else {
            $data['Size'] = null;
        }
        if (null !== $object->getSharedSize()) {
            $data['SharedSize'] = $object->getSharedSize();
        } else {
            $data['SharedSize'] = null;
        }
        if (null !== $object->getVirtualSize()) {
            $data['VirtualSize'] = $object->getVirtualSize();
        } else {
            $data['VirtualSize'] = null;
        }
        if (null !== $object->getLabels()) {
            $values_2 = array();
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels'] = $values_2;
        } else {
            $data['Labels'] = null;
        }
        if (null !== $object->getContainers()) {
            $data['Containers'] = $object->getContainers();
        } else {
            $data['Containers'] = null;
        }
        return $data;
    }
}
