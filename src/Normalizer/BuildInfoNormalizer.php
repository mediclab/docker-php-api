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

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\BuildInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\BuildInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\BuildInfo();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
            $object->setStream($data['stream']);
        } elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
            $object->setStream(null);
        }
        if (\array_key_exists('error', $data) && $data['error'] !== null) {
            $object->setError($data['error']);
        } elseif (\array_key_exists('error', $data) && $data['error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('errorDetail', $data) && $data['errorDetail'] !== null) {
            $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], 'Docker\\API\\Model\\ErrorDetail', 'json', $context));
        } elseif (\array_key_exists('errorDetail', $data) && $data['errorDetail'] === null) {
            $object->setErrorDetail(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('progress', $data) && $data['progress'] !== null) {
            $object->setProgress($data['progress']);
        } elseif (\array_key_exists('progress', $data) && $data['progress'] === null) {
            $object->setProgress(null);
        }
        if (\array_key_exists('progressDetail', $data) && $data['progressDetail'] !== null) {
            $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], 'Docker\\API\\Model\\ProgressDetail', 'json', $context));
        } elseif (\array_key_exists('progressDetail', $data) && $data['progressDetail'] === null) {
            $object->setProgressDetail(null);
        }
        if (\array_key_exists('aux', $data) && $data['aux'] !== null) {
            $object->setAux($this->denormalizer->denormalize($data['aux'], 'Docker\\API\\Model\\ImageID', 'json', $context));
        } elseif (\array_key_exists('aux', $data) && $data['aux'] === null) {
            $object->setAux(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        } else {
            $data['id'] = null;
        }
        if (null !== $object->getStream()) {
            $data['stream'] = $object->getStream();
        } else {
            $data['stream'] = null;
        }
        if (null !== $object->getError()) {
            $data['error'] = $object->getError();
        } else {
            $data['error'] = null;
        }
        if (null !== $object->getErrorDetail()) {
            $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
        } else {
            $data['errorDetail'] = null;
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        } else {
            $data['status'] = null;
        }
        if (null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        } else {
            $data['progress'] = null;
        }
        if (null !== $object->getProgressDetail()) {
            $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
        } else {
            $data['progressDetail'] = null;
        }
        if (null !== $object->getAux()) {
            $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
        } else {
            $data['aux'] = null;
        }
        return $data;
    }
}
