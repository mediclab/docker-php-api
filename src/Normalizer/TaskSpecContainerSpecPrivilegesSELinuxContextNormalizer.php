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

class TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext();
        if (\array_key_exists('Disable', $data) && $data['Disable'] !== null) {
            $object->setDisable($data['Disable']);
        } elseif (\array_key_exists('Disable', $data) && $data['Disable'] === null) {
            $object->setDisable(null);
        }
        if (\array_key_exists('User', $data) && $data['User'] !== null) {
            $object->setUser($data['User']);
        } elseif (\array_key_exists('User', $data) && $data['User'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('Role', $data) && $data['Role'] !== null) {
            $object->setRole($data['Role']);
        } elseif (\array_key_exists('Role', $data) && $data['Role'] === null) {
            $object->setRole(null);
        }
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('Level', $data) && $data['Level'] !== null) {
            $object->setLevel($data['Level']);
        } elseif (\array_key_exists('Level', $data) && $data['Level'] === null) {
            $object->setLevel(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDisable()) {
            $data['Disable'] = $object->getDisable();
        } else {
            $data['Disable'] = null;
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        } else {
            $data['User'] = null;
        }
        if (null !== $object->getRole()) {
            $data['Role'] = $object->getRole();
        } else {
            $data['Role'] = null;
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        } else {
            $data['Type'] = null;
        }
        if (null !== $object->getLevel()) {
            $data['Level'] = $object->getLevel();
        } else {
            $data['Level'] = null;
        }
        return $data;
    }
}
