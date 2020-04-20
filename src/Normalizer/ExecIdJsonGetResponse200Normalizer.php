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

class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ExecIdJsonGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ExecIdJsonGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ExecIdJsonGetResponse200();
        if (\array_key_exists('CanRemove', $data) && $data['CanRemove'] !== null) {
            $object->setCanRemove($data['CanRemove']);
        } elseif (\array_key_exists('CanRemove', $data) && $data['CanRemove'] === null) {
            $object->setCanRemove(null);
        }
        if (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] !== null) {
            $object->setDetachKeys($data['DetachKeys']);
        } elseif (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] === null) {
            $object->setDetachKeys(null);
        }
        if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
            $object->setID(null);
        }
        if (\array_key_exists('Running', $data) && $data['Running'] !== null) {
            $object->setRunning($data['Running']);
        } elseif (\array_key_exists('Running', $data) && $data['Running'] === null) {
            $object->setRunning(null);
        }
        if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
            $object->setExitCode($data['ExitCode']);
        } elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
            $object->setExitCode(null);
        }
        if (\array_key_exists('ProcessConfig', $data) && $data['ProcessConfig'] !== null) {
            $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], 'Docker\\API\\Model\\ProcessConfig', 'json', $context));
        } elseif (\array_key_exists('ProcessConfig', $data) && $data['ProcessConfig'] === null) {
            $object->setProcessConfig(null);
        }
        if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
            $object->setOpenStdin($data['OpenStdin']);
        } elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
            $object->setOpenStdin(null);
        }
        if (\array_key_exists('OpenStderr', $data) && $data['OpenStderr'] !== null) {
            $object->setOpenStderr($data['OpenStderr']);
        } elseif (\array_key_exists('OpenStderr', $data) && $data['OpenStderr'] === null) {
            $object->setOpenStderr(null);
        }
        if (\array_key_exists('OpenStdout', $data) && $data['OpenStdout'] !== null) {
            $object->setOpenStdout($data['OpenStdout']);
        } elseif (\array_key_exists('OpenStdout', $data) && $data['OpenStdout'] === null) {
            $object->setOpenStdout(null);
        }
        if (\array_key_exists('ContainerID', $data) && $data['ContainerID'] !== null) {
            $object->setContainerID($data['ContainerID']);
        } elseif (\array_key_exists('ContainerID', $data) && $data['ContainerID'] === null) {
            $object->setContainerID(null);
        }
        if (\array_key_exists('Pid', $data) && $data['Pid'] !== null) {
            $object->setPid($data['Pid']);
        } elseif (\array_key_exists('Pid', $data) && $data['Pid'] === null) {
            $object->setPid(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCanRemove()) {
            $data['CanRemove'] = $object->getCanRemove();
        } else {
            $data['CanRemove'] = null;
        }
        if (null !== $object->getDetachKeys()) {
            $data['DetachKeys'] = $object->getDetachKeys();
        } else {
            $data['DetachKeys'] = null;
        }
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        } else {
            $data['ID'] = null;
        }
        if (null !== $object->getRunning()) {
            $data['Running'] = $object->getRunning();
        } else {
            $data['Running'] = null;
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        } else {
            $data['ExitCode'] = null;
        }
        if (null !== $object->getProcessConfig()) {
            $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
        } else {
            $data['ProcessConfig'] = null;
        }
        if (null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        } else {
            $data['OpenStdin'] = null;
        }
        if (null !== $object->getOpenStderr()) {
            $data['OpenStderr'] = $object->getOpenStderr();
        } else {
            $data['OpenStderr'] = null;
        }
        if (null !== $object->getOpenStdout()) {
            $data['OpenStdout'] = $object->getOpenStdout();
        } else {
            $data['OpenStdout'] = null;
        }
        if (null !== $object->getContainerID()) {
            $data['ContainerID'] = $object->getContainerID();
        } else {
            $data['ContainerID'] = null;
        }
        if (null !== $object->getPid()) {
            $data['Pid'] = $object->getPid();
        } else {
            $data['Pid'] = null;
        }
        return $data;
    }
}
