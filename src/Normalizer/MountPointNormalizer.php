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

class MountPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\MountPoint';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\MountPoint';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\MountPoint();
        if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
            $object->setType($data['Type']);
        } elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
            $object->setSource($data['Source']);
        } elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
            $object->setSource(null);
        }
        if (\array_key_exists('Destination', $data) && $data['Destination'] !== null) {
            $object->setDestination($data['Destination']);
        } elseif (\array_key_exists('Destination', $data) && $data['Destination'] === null) {
            $object->setDestination(null);
        }
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
            $object->setMode($data['Mode']);
        } elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
            $object->setMode(null);
        }
        if (\array_key_exists('RW', $data) && $data['RW'] !== null) {
            $object->setRW($data['RW']);
        } elseif (\array_key_exists('RW', $data) && $data['RW'] === null) {
            $object->setRW(null);
        }
        if (\array_key_exists('Propagation', $data) && $data['Propagation'] !== null) {
            $object->setPropagation($data['Propagation']);
        } elseif (\array_key_exists('Propagation', $data) && $data['Propagation'] === null) {
            $object->setPropagation(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        } else {
            $data['Type'] = null;
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        } else {
            $data['Name'] = null;
        }
        if (null !== $object->getSource()) {
            $data['Source'] = $object->getSource();
        } else {
            $data['Source'] = null;
        }
        if (null !== $object->getDestination()) {
            $data['Destination'] = $object->getDestination();
        } else {
            $data['Destination'] = null;
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        } else {
            $data['Driver'] = null;
        }
        if (null !== $object->getMode()) {
            $data['Mode'] = $object->getMode();
        } else {
            $data['Mode'] = null;
        }
        if (null !== $object->getRW()) {
            $data['RW'] = $object->getRW();
        } else {
            $data['RW'] = null;
        }
        if (null !== $object->getPropagation()) {
            $data['Propagation'] = $object->getPropagation();
        } else {
            $data['Propagation'] = null;
        }
        return $data;
    }
}
