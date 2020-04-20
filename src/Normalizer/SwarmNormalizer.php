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

class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Swarm';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Swarm';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\Swarm();
        if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
            $object->setID(null);
        }
        if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], 'Docker\\API\\Model\\ObjectVersion', 'json', $context));
        } elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
            $object->setCreatedAt($data['CreatedAt']);
        } elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] !== null) {
            $object->setUpdatedAt($data['UpdatedAt']);
        } elseif (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
        } elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
            $object->setSpec(null);
        }
        if (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] !== null) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], 'Docker\\API\\Model\\TLSInfo', 'json', $context));
        } elseif (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] === null) {
            $object->setTLSInfo(null);
        }
        if (\array_key_exists('RootRotationInProgress', $data) && $data['RootRotationInProgress'] !== null) {
            $object->setRootRotationInProgress($data['RootRotationInProgress']);
        } elseif (\array_key_exists('RootRotationInProgress', $data) && $data['RootRotationInProgress'] === null) {
            $object->setRootRotationInProgress(null);
        }
        if (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] !== null) {
            $object->setDataPathPort($data['DataPathPort']);
        } elseif (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] === null) {
            $object->setDataPathPort(null);
        }
        if (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] !== null) {
            $values = array();
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        } elseif (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] === null) {
            $object->setDefaultAddrPool(null);
        }
        if (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] !== null) {
            $object->setSubnetSize($data['SubnetSize']);
        } elseif (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] === null) {
            $object->setSubnetSize(null);
        }
        if (\array_key_exists('JoinTokens', $data) && $data['JoinTokens'] !== null) {
            $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], 'Docker\\API\\Model\\JoinTokens', 'json', $context));
        } elseif (\array_key_exists('JoinTokens', $data) && $data['JoinTokens'] === null) {
            $object->setJoinTokens(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        } else {
            $data['ID'] = null;
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
        } else {
            $data['Version'] = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        } else {
            $data['CreatedAt'] = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data['UpdatedAt'] = $object->getUpdatedAt();
        } else {
            $data['UpdatedAt'] = null;
        }
        if (null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        } else {
            $data['Spec'] = null;
        }
        if (null !== $object->getTLSInfo()) {
            $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        } else {
            $data['TLSInfo'] = null;
        }
        if (null !== $object->getRootRotationInProgress()) {
            $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
        } else {
            $data['RootRotationInProgress'] = null;
        }
        if (null !== $object->getDataPathPort()) {
            $data['DataPathPort'] = $object->getDataPathPort();
        } else {
            $data['DataPathPort'] = null;
        }
        if (null !== $object->getDefaultAddrPool()) {
            $values = array();
            foreach ($object->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $data['DefaultAddrPool'] = $values;
        } else {
            $data['DefaultAddrPool'] = null;
        }
        if (null !== $object->getSubnetSize()) {
            $data['SubnetSize'] = $object->getSubnetSize();
        } else {
            $data['SubnetSize'] = null;
        }
        if (null !== $object->getJoinTokens()) {
            $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
        } else {
            $data['JoinTokens'] = null;
        }
        return $data;
    }
}
