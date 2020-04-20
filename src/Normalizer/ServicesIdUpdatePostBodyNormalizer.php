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

class ServicesIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServicesIdUpdatePostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ServicesIdUpdatePostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ServicesIdUpdatePostBody();
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        } elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('TaskTemplate', $data) && $data['TaskTemplate'] !== null) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], 'Docker\\API\\Model\\TaskSpec', 'json', $context));
        } elseif (\array_key_exists('TaskTemplate', $data) && $data['TaskTemplate'] === null) {
            $object->setTaskTemplate(null);
        }
        if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
            $object->setMode($this->denormalizer->denormalize($data['Mode'], 'Docker\\API\\Model\\ServiceSpecMode', 'json', $context));
        } elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
            $object->setMode(null);
        }
        if (\array_key_exists('UpdateConfig', $data) && $data['UpdateConfig'] !== null) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], 'Docker\\API\\Model\\ServiceSpecUpdateConfig', 'json', $context));
        } elseif (\array_key_exists('UpdateConfig', $data) && $data['UpdateConfig'] === null) {
            $object->setUpdateConfig(null);
        }
        if (\array_key_exists('RollbackConfig', $data) && $data['RollbackConfig'] !== null) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], 'Docker\\API\\Model\\ServiceSpecRollbackConfig', 'json', $context));
        } elseif (\array_key_exists('RollbackConfig', $data) && $data['RollbackConfig'] === null) {
            $object->setRollbackConfig(null);
        }
        if (\array_key_exists('Networks', $data) && $data['Networks'] !== null) {
            $values_1 = array();
            foreach ($data['Networks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\NetworkAttachmentConfig', 'json', $context);
            }
            $object->setNetworks($values_1);
        } elseif (\array_key_exists('Networks', $data) && $data['Networks'] === null) {
            $object->setNetworks(null);
        }
        if (\array_key_exists('EndpointSpec', $data) && $data['EndpointSpec'] !== null) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], 'Docker\\API\\Model\\EndpointSpec', 'json', $context));
        } elseif (\array_key_exists('EndpointSpec', $data) && $data['EndpointSpec'] === null) {
            $object->setEndpointSpec(null);
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
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Labels'] = $values;
        } else {
            $data['Labels'] = null;
        }
        if (null !== $object->getTaskTemplate()) {
            $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
        } else {
            $data['TaskTemplate'] = null;
        }
        if (null !== $object->getMode()) {
            $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
        } else {
            $data['Mode'] = null;
        }
        if (null !== $object->getUpdateConfig()) {
            $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
        } else {
            $data['UpdateConfig'] = null;
        }
        if (null !== $object->getRollbackConfig()) {
            $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
        } else {
            $data['RollbackConfig'] = null;
        }
        if (null !== $object->getNetworks()) {
            $values_1 = array();
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Networks'] = $values_1;
        } else {
            $data['Networks'] = null;
        }
        if (null !== $object->getEndpointSpec()) {
            $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
        } else {
            $data['EndpointSpec'] = null;
        }
        return $data;
    }
}
