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

class ImageDeleteResponseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ImageDeleteResponseItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ImageDeleteResponseItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ImageDeleteResponseItem();
        if (\array_key_exists('Untagged', $data) && $data['Untagged'] !== null) {
            $object->setUntagged($data['Untagged']);
        } elseif (\array_key_exists('Untagged', $data) && $data['Untagged'] === null) {
            $object->setUntagged(null);
        }
        if (\array_key_exists('Deleted', $data) && $data['Deleted'] !== null) {
            $object->setDeleted($data['Deleted']);
        } elseif (\array_key_exists('Deleted', $data) && $data['Deleted'] === null) {
            $object->setDeleted(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUntagged()) {
            $data['Untagged'] = $object->getUntagged();
        } else {
            $data['Untagged'] = null;
        }
        if (null !== $object->getDeleted()) {
            $data['Deleted'] = $object->getDeleted();
        } else {
            $data['Deleted'] = null;
        }
        return $data;
    }
}
