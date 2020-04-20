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

class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Plugin';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\Plugin';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\Plugin();
        if (property_exists($data, 'Id') && $data->{'Id'} !== null) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Name') && $data->{'Name'} !== null) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Enabled') && $data->{'Enabled'} !== null) {
            $object->setEnabled($data->{'Enabled'});
        }
        if (property_exists($data, 'Settings') && $data->{'Settings'} !== null) {
            $object->setSettings($this->denormalizer->denormalize($data->{'Settings'}, 'Docker\\API\\Model\\PluginSettings', 'json', $context));
        }
        if (property_exists($data, 'PluginReference') && $data->{'PluginReference'} !== null) {
            $object->setPluginReference($data->{'PluginReference'});
        }
        if (property_exists($data, 'Config') && $data->{'Config'} !== null) {
            $object->setConfig($this->denormalizer->denormalize($data->{'Config'}, 'Docker\\API\\Model\\PluginConfig', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getEnabled()) {
            $data->{'Enabled'} = $object->getEnabled();
        }
        if (null !== $object->getSettings()) {
            $data->{'Settings'} = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getPluginReference()) {
            $data->{'PluginReference'} = $object->getPluginReference();
        }
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }

        return $data;
    }
}
