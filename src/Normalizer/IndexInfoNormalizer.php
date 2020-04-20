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

class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\IndexInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\IndexInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\IndexInfo();
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Mirrors', $data) && $data['Mirrors'] !== null) {
            $values = array();
            foreach ($data['Mirrors'] as $value) {
                $values[] = $value;
            }
            $object->setMirrors($values);
        } elseif (\array_key_exists('Mirrors', $data) && $data['Mirrors'] === null) {
            $object->setMirrors(null);
        }
        if (\array_key_exists('Secure', $data) && $data['Secure'] !== null) {
            $object->setSecure($data['Secure']);
        } elseif (\array_key_exists('Secure', $data) && $data['Secure'] === null) {
            $object->setSecure(null);
        }
        if (\array_key_exists('Official', $data) && $data['Official'] !== null) {
            $object->setOfficial($data['Official']);
        } elseif (\array_key_exists('Official', $data) && $data['Official'] === null) {
            $object->setOfficial(null);
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
        if (null !== $object->getMirrors()) {
            $values = array();
            foreach ($object->getMirrors() as $value) {
                $values[] = $value;
            }
            $data['Mirrors'] = $values;
        } else {
            $data['Mirrors'] = null;
        }
        if (null !== $object->getSecure()) {
            $data['Secure'] = $object->getSecure();
        } else {
            $data['Secure'] = null;
        }
        if (null !== $object->getOfficial()) {
            $data['Official'] = $object->getOfficial();
        } else {
            $data['Official'] = null;
        }
        return $data;
    }
}
