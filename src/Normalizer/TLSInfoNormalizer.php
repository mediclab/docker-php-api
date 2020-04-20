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

class TLSInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TLSInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TLSInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\TLSInfo();
        if (\array_key_exists('TrustRoot', $data) && $data['TrustRoot'] !== null) {
            $object->setTrustRoot($data['TrustRoot']);
        } elseif (\array_key_exists('TrustRoot', $data) && $data['TrustRoot'] === null) {
            $object->setTrustRoot(null);
        }
        if (\array_key_exists('CertIssuerSubject', $data) && $data['CertIssuerSubject'] !== null) {
            $object->setCertIssuerSubject($data['CertIssuerSubject']);
        } elseif (\array_key_exists('CertIssuerSubject', $data) && $data['CertIssuerSubject'] === null) {
            $object->setCertIssuerSubject(null);
        }
        if (\array_key_exists('CertIssuerPublicKey', $data) && $data['CertIssuerPublicKey'] !== null) {
            $object->setCertIssuerPublicKey($data['CertIssuerPublicKey']);
        } elseif (\array_key_exists('CertIssuerPublicKey', $data) && $data['CertIssuerPublicKey'] === null) {
            $object->setCertIssuerPublicKey(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTrustRoot()) {
            $data['TrustRoot'] = $object->getTrustRoot();
        } else {
            $data['TrustRoot'] = null;
        }
        if (null !== $object->getCertIssuerSubject()) {
            $data['CertIssuerSubject'] = $object->getCertIssuerSubject();
        } else {
            $data['CertIssuerSubject'] = null;
        }
        if (null !== $object->getCertIssuerPublicKey()) {
            $data['CertIssuerPublicKey'] = $object->getCertIssuerPublicKey();
        } else {
            $data['CertIssuerPublicKey'] = null;
        }
        return $data;
    }
}
