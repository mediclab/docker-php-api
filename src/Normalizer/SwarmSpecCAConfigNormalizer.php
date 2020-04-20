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

class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmSpecCAConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmSpecCAConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\SwarmSpecCAConfig();
        if (\array_key_exists('NodeCertExpiry', $data) && $data['NodeCertExpiry'] !== null) {
            $object->setNodeCertExpiry($data['NodeCertExpiry']);
        } elseif (\array_key_exists('NodeCertExpiry', $data) && $data['NodeCertExpiry'] === null) {
            $object->setNodeCertExpiry(null);
        }
        if (\array_key_exists('ExternalCAs', $data) && $data['ExternalCAs'] !== null) {
            $values = array();
            foreach ($data['ExternalCAs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem', 'json', $context);
            }
            $object->setExternalCAs($values);
        } elseif (\array_key_exists('ExternalCAs', $data) && $data['ExternalCAs'] === null) {
            $object->setExternalCAs(null);
        }
        if (\array_key_exists('SigningCACert', $data) && $data['SigningCACert'] !== null) {
            $object->setSigningCACert($data['SigningCACert']);
        } elseif (\array_key_exists('SigningCACert', $data) && $data['SigningCACert'] === null) {
            $object->setSigningCACert(null);
        }
        if (\array_key_exists('SigningCAKey', $data) && $data['SigningCAKey'] !== null) {
            $object->setSigningCAKey($data['SigningCAKey']);
        } elseif (\array_key_exists('SigningCAKey', $data) && $data['SigningCAKey'] === null) {
            $object->setSigningCAKey(null);
        }
        if (\array_key_exists('ForceRotate', $data) && $data['ForceRotate'] !== null) {
            $object->setForceRotate($data['ForceRotate']);
        } elseif (\array_key_exists('ForceRotate', $data) && $data['ForceRotate'] === null) {
            $object->setForceRotate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNodeCertExpiry()) {
            $data['NodeCertExpiry'] = $object->getNodeCertExpiry();
        } else {
            $data['NodeCertExpiry'] = null;
        }
        if (null !== $object->getExternalCAs()) {
            $values = array();
            foreach ($object->getExternalCAs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['ExternalCAs'] = $values;
        } else {
            $data['ExternalCAs'] = null;
        }
        if (null !== $object->getSigningCACert()) {
            $data['SigningCACert'] = $object->getSigningCACert();
        } else {
            $data['SigningCACert'] = null;
        }
        if (null !== $object->getSigningCAKey()) {
            $data['SigningCAKey'] = $object->getSigningCAKey();
        } else {
            $data['SigningCAKey'] = null;
        }
        if (null !== $object->getForceRotate()) {
            $data['ForceRotate'] = $object->getForceRotate();
        } else {
            $data['ForceRotate'] = null;
        }
        return $data;
    }
}
