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

class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServiceSpecMode';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ServiceSpecMode';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ServiceSpecMode();
        if (\array_key_exists('Replicated', $data) && $data['Replicated'] !== null) {
            $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], 'Docker\\API\\Model\\ServiceSpecModeReplicated', 'json', $context));
        } elseif (\array_key_exists('Replicated', $data) && $data['Replicated'] === null) {
            $object->setReplicated(null);
        }
        if (\array_key_exists('Global', $data) && $data['Global'] !== null) {
            $object->setGlobal($data['Global']);
        } elseif (\array_key_exists('Global', $data) && $data['Global'] === null) {
            $object->setGlobal(null);
        }
        if (\array_key_exists('ReplicatedJob', $data) && $data['ReplicatedJob'] !== null) {
            $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob', 'json', $context));
        } elseif (\array_key_exists('ReplicatedJob', $data) && $data['ReplicatedJob'] === null) {
            $object->setReplicatedJob(null);
        }
        if (\array_key_exists('GlobalJob', $data) && $data['GlobalJob'] !== null) {
            $object->setGlobalJob($data['GlobalJob']);
        } elseif (\array_key_exists('GlobalJob', $data) && $data['GlobalJob'] === null) {
            $object->setGlobalJob(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getReplicated()) {
            $data['Replicated'] = $this->normalizer->normalize($object->getReplicated(), 'json', $context);
        } else {
            $data['Replicated'] = null;
        }
        if (null !== $object->getGlobal()) {
            $data['Global'] = $object->getGlobal();
        } else {
            $data['Global'] = null;
        }
        if (null !== $object->getReplicatedJob()) {
            $data['ReplicatedJob'] = $this->normalizer->normalize($object->getReplicatedJob(), 'json', $context);
        } else {
            $data['ReplicatedJob'] = null;
        }
        if (null !== $object->getGlobalJob()) {
            $data['GlobalJob'] = $object->getGlobalJob();
        } else {
            $data['GlobalJob'] = null;
        }
        return $data;
    }
}
