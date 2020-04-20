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

class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainerState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainerState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ContainerState();
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        } elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('Running', $data) && $data['Running'] !== null) {
            $object->setRunning($data['Running']);
        } elseif (\array_key_exists('Running', $data) && $data['Running'] === null) {
            $object->setRunning(null);
        }
        if (\array_key_exists('Paused', $data) && $data['Paused'] !== null) {
            $object->setPaused($data['Paused']);
        } elseif (\array_key_exists('Paused', $data) && $data['Paused'] === null) {
            $object->setPaused(null);
        }
        if (\array_key_exists('Restarting', $data) && $data['Restarting'] !== null) {
            $object->setRestarting($data['Restarting']);
        } elseif (\array_key_exists('Restarting', $data) && $data['Restarting'] === null) {
            $object->setRestarting(null);
        }
        if (\array_key_exists('OOMKilled', $data) && $data['OOMKilled'] !== null) {
            $object->setOOMKilled($data['OOMKilled']);
        } elseif (\array_key_exists('OOMKilled', $data) && $data['OOMKilled'] === null) {
            $object->setOOMKilled(null);
        }
        if (\array_key_exists('Dead', $data) && $data['Dead'] !== null) {
            $object->setDead($data['Dead']);
        } elseif (\array_key_exists('Dead', $data) && $data['Dead'] === null) {
            $object->setDead(null);
        }
        if (\array_key_exists('Pid', $data) && $data['Pid'] !== null) {
            $object->setPid($data['Pid']);
        } elseif (\array_key_exists('Pid', $data) && $data['Pid'] === null) {
            $object->setPid(null);
        }
        if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
            $object->setExitCode($data['ExitCode']);
        } elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
            $object->setExitCode(null);
        }
        if (\array_key_exists('Error', $data) && $data['Error'] !== null) {
            $object->setError($data['Error']);
        } elseif (\array_key_exists('Error', $data) && $data['Error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('StartedAt', $data) && $data['StartedAt'] !== null) {
            $object->setStartedAt($data['StartedAt']);
        } elseif (\array_key_exists('StartedAt', $data) && $data['StartedAt'] === null) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('FinishedAt', $data) && $data['FinishedAt'] !== null) {
            $object->setFinishedAt($data['FinishedAt']);
        } elseif (\array_key_exists('FinishedAt', $data) && $data['FinishedAt'] === null) {
            $object->setFinishedAt(null);
        }
        if (\array_key_exists('Health', $data) && $data['Health'] !== null) {
            $object->setHealth($this->denormalizer->denormalize($data['Health'], 'Docker\\API\\Model\\Health', 'json', $context));
        } elseif (\array_key_exists('Health', $data) && $data['Health'] === null) {
            $object->setHealth(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        } else {
            $data['Status'] = null;
        }
        if (null !== $object->getRunning()) {
            $data['Running'] = $object->getRunning();
        } else {
            $data['Running'] = null;
        }
        if (null !== $object->getPaused()) {
            $data['Paused'] = $object->getPaused();
        } else {
            $data['Paused'] = null;
        }
        if (null !== $object->getRestarting()) {
            $data['Restarting'] = $object->getRestarting();
        } else {
            $data['Restarting'] = null;
        }
        if (null !== $object->getOOMKilled()) {
            $data['OOMKilled'] = $object->getOOMKilled();
        } else {
            $data['OOMKilled'] = null;
        }
        if (null !== $object->getDead()) {
            $data['Dead'] = $object->getDead();
        } else {
            $data['Dead'] = null;
        }
        if (null !== $object->getPid()) {
            $data['Pid'] = $object->getPid();
        } else {
            $data['Pid'] = null;
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        } else {
            $data['ExitCode'] = null;
        }
        if (null !== $object->getError()) {
            $data['Error'] = $object->getError();
        } else {
            $data['Error'] = null;
        }
        if (null !== $object->getStartedAt()) {
            $data['StartedAt'] = $object->getStartedAt();
        } else {
            $data['StartedAt'] = null;
        }
        if (null !== $object->getFinishedAt()) {
            $data['FinishedAt'] = $object->getFinishedAt();
        } else {
            $data['FinishedAt'] = null;
        }
        if (null !== $object->getHealth()) {
            $data['Health'] = $this->normalizer->normalize($object->getHealth(), 'json', $context);
        } else {
            $data['Health'] = null;
        }
        return $data;
    }
}
