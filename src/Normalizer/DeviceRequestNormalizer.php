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

class DeviceRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\DeviceRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\DeviceRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\DeviceRequest();
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Count', $data) && $data['Count'] !== null) {
            $object->setCount($data['Count']);
        } elseif (\array_key_exists('Count', $data) && $data['Count'] === null) {
            $object->setCount(null);
        }
        if (\array_key_exists('DeviceIDs', $data) && $data['DeviceIDs'] !== null) {
            $values = array();
            foreach ($data['DeviceIDs'] as $value) {
                $values[] = $value;
            }
            $object->setDeviceIDs($values);
        } elseif (\array_key_exists('DeviceIDs', $data) && $data['DeviceIDs'] === null) {
            $object->setDeviceIDs(null);
        }
        if (\array_key_exists('Capabilities', $data) && $data['Capabilities'] !== null) {
            $values_1 = array();
            foreach ($data['Capabilities'] as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setCapabilities($values_1);
        } elseif (\array_key_exists('Capabilities', $data) && $data['Capabilities'] === null) {
            $object->setCapabilities(null);
        }
        if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setOptions($values_3);
        } elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
            $object->setOptions(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        } else {
            $data['Driver'] = null;
        }
        if (null !== $object->getCount()) {
            $data['Count'] = $object->getCount();
        } else {
            $data['Count'] = null;
        }
        if (null !== $object->getDeviceIDs()) {
            $values = array();
            foreach ($object->getDeviceIDs() as $value) {
                $values[] = $value;
            }
            $data['DeviceIDs'] = $values;
        } else {
            $data['DeviceIDs'] = null;
        }
        if (null !== $object->getCapabilities()) {
            $values_1 = array();
            foreach ($object->getCapabilities() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data['Capabilities'] = $values_1;
        } else {
            $data['Capabilities'] = null;
        }
        if (null !== $object->getOptions()) {
            $values_3 = array();
            foreach ($object->getOptions() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['Options'] = $values_3;
        } else {
            $data['Options'] = null;
        }
        return $data;
    }
}
