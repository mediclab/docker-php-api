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

class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\HealthConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\HealthConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\HealthConfig();
        if (\array_key_exists('Test', $data) && $data['Test'] !== null) {
            $values = array();
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        } elseif (\array_key_exists('Test', $data) && $data['Test'] === null) {
            $object->setTest(null);
        }
        if (\array_key_exists('Interval', $data) && $data['Interval'] !== null) {
            $object->setInterval($data['Interval']);
        } elseif (\array_key_exists('Interval', $data) && $data['Interval'] === null) {
            $object->setInterval(null);
        }
        if (\array_key_exists('Timeout', $data) && $data['Timeout'] !== null) {
            $object->setTimeout($data['Timeout']);
        } elseif (\array_key_exists('Timeout', $data) && $data['Timeout'] === null) {
            $object->setTimeout(null);
        }
        if (\array_key_exists('Retries', $data) && $data['Retries'] !== null) {
            $object->setRetries($data['Retries']);
        } elseif (\array_key_exists('Retries', $data) && $data['Retries'] === null) {
            $object->setRetries(null);
        }
        if (\array_key_exists('StartPeriod', $data) && $data['StartPeriod'] !== null) {
            $object->setStartPeriod($data['StartPeriod']);
        } elseif (\array_key_exists('StartPeriod', $data) && $data['StartPeriod'] === null) {
            $object->setStartPeriod(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTest()) {
            $values = array();
            foreach ($object->getTest() as $value) {
                $values[] = $value;
            }
            $data['Test'] = $values;
        } else {
            $data['Test'] = null;
        }
        if (null !== $object->getInterval()) {
            $data['Interval'] = $object->getInterval();
        } else {
            $data['Interval'] = null;
        }
        if (null !== $object->getTimeout()) {
            $data['Timeout'] = $object->getTimeout();
        } else {
            $data['Timeout'] = null;
        }
        if (null !== $object->getRetries()) {
            $data['Retries'] = $object->getRetries();
        } else {
            $data['Retries'] = null;
        }
        if (null !== $object->getStartPeriod()) {
            $data['StartPeriod'] = $object->getStartPeriod();
        } else {
            $data['StartPeriod'] = null;
        }
        return $data;
    }
}
