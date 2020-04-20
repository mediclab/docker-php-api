<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec();
        if (property_exists($data, 'Config') && $data->{'Config'} !== null) {
            $object->setConfig($data->{'Config'});
        }
        if (property_exists($data, 'File') && $data->{'File'} !== null) {
            $object->setFile($data->{'File'});
        }
        if (property_exists($data, 'Registry') && $data->{'Registry'} !== null) {
            $object->setRegistry($data->{'Registry'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $object->getConfig();
        }
        if (null !== $object->getFile()) {
            $data->{'File'} = $object->getFile();
        }
        if (null !== $object->getRegistry()) {
            $data->{'Registry'} = $object->getRegistry();
        }

        return $data;
    }
}
