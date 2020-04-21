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

class ContainerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainerConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainerConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ContainerConfig();
        if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
            $object->setHostname($data['Hostname']);
        } elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
            $object->setHostname(null);
        }
        if (\array_key_exists('Domainname', $data) && $data['Domainname'] !== null) {
            $object->setDomainname($data['Domainname']);
        } elseif (\array_key_exists('Domainname', $data) && $data['Domainname'] === null) {
            $object->setDomainname(null);
        }
        if (\array_key_exists('User', $data) && $data['User'] !== null) {
            $object->setUser($data['User']);
        } elseif (\array_key_exists('User', $data) && $data['User'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] !== null) {
            $object->setAttachStdin($data['AttachStdin']);
        } elseif (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] === null) {
            $object->setAttachStdin(null);
        }
        if (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] !== null) {
            $object->setAttachStdout($data['AttachStdout']);
        } elseif (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] === null) {
            $object->setAttachStdout(null);
        }
        if (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] !== null) {
            $object->setAttachStderr($data['AttachStderr']);
        } elseif (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] === null) {
            $object->setAttachStderr(null);
        }
        if (\array_key_exists('ExposedPorts', $data) && $data['ExposedPorts'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['ExposedPorts'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setExposedPorts($values);
        } elseif (\array_key_exists('ExposedPorts', $data) && $data['ExposedPorts'] === null) {
            $object->setExposedPorts(null);
        }
        if (\array_key_exists('Tty', $data) && $data['Tty'] !== null) {
            $object->setTty($data['Tty']);
        } elseif (\array_key_exists('Tty', $data) && $data['Tty'] === null) {
            $object->setTty(null);
        }
        if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
            $object->setOpenStdin($data['OpenStdin']);
        } elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
            $object->setOpenStdin(null);
        }
        if (\array_key_exists('StdinOnce', $data) && $data['StdinOnce'] !== null) {
            $object->setStdinOnce($data['StdinOnce']);
        } elseif (\array_key_exists('StdinOnce', $data) && $data['StdinOnce'] === null) {
            $object->setStdinOnce(null);
        }
        if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
            $values_1 = array();
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        } elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
            $object->setEnv(null);
        }
        if (\array_key_exists('Cmd', $data) && $data['Cmd'] !== null) {
            $values_2 = array();
            foreach ($data['Cmd'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCmd($values_2);
        } elseif (\array_key_exists('Cmd', $data) && $data['Cmd'] === null) {
            $object->setCmd(null);
        }
        if (\array_key_exists('Healthcheck', $data) && $data['Healthcheck'] !== null) {
            $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], 'Docker\\API\\Model\\HealthConfig', 'json', $context));
        } elseif (\array_key_exists('Healthcheck', $data) && $data['Healthcheck'] === null) {
            $object->setHealthcheck(null);
        }
        if (\array_key_exists('ArgsEscaped', $data) && $data['ArgsEscaped'] !== null) {
            $object->setArgsEscaped($data['ArgsEscaped']);
        } elseif (\array_key_exists('ArgsEscaped', $data) && $data['ArgsEscaped'] === null) {
            $object->setArgsEscaped(null);
        }
        if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
            $object->setImage($data['Image']);
        } elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('Volumes', $data) && $data['Volumes'] !== null) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Volumes'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setVolumes($values_3);
        } elseif (\array_key_exists('Volumes', $data) && $data['Volumes'] === null) {
            $object->setVolumes(null);
        }
        if (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] !== null) {
            $object->setWorkingDir($data['WorkingDir']);
        } elseif (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] === null) {
            $object->setWorkingDir(null);
        }
        if (\array_key_exists('Entrypoint', $data) && $data['Entrypoint'] !== null) {
            $values_4 = array();
            foreach ($data['Entrypoint'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setEntrypoint($values_4);
        } elseif (\array_key_exists('Entrypoint', $data) && $data['Entrypoint'] === null) {
            $object->setEntrypoint(null);
        }
        if (\array_key_exists('NetworkDisabled', $data) && $data['NetworkDisabled'] !== null) {
            $object->setNetworkDisabled($data['NetworkDisabled']);
        } elseif (\array_key_exists('NetworkDisabled', $data) && $data['NetworkDisabled'] === null) {
            $object->setNetworkDisabled(null);
        }
        if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
            $object->setMacAddress($data['MacAddress']);
        } elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
            $object->setMacAddress(null);
        }
        if (\array_key_exists('OnBuild', $data) && $data['OnBuild'] !== null) {
            $values_5 = array();
            foreach ($data['OnBuild'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setOnBuild($values_5);
        } elseif (\array_key_exists('OnBuild', $data) && $data['OnBuild'] === null) {
            $object->setOnBuild(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values_6 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $object->setLabels($values_6);
        } elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('StopSignal', $data) && $data['StopSignal'] !== null) {
            $object->setStopSignal($data['StopSignal']);
        } elseif (\array_key_exists('StopSignal', $data) && $data['StopSignal'] === null) {
            $object->setStopSignal(null);
        }
        if (\array_key_exists('StopTimeout', $data) && $data['StopTimeout'] !== null) {
            $object->setStopTimeout($data['StopTimeout']);
        } elseif (\array_key_exists('StopTimeout', $data) && $data['StopTimeout'] === null) {
            $object->setStopTimeout(null);
        }
        if (\array_key_exists('Shell', $data) && $data['Shell'] !== null) {
            $values_7 = array();
            foreach ($data['Shell'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setShell($values_7);
        } elseif (\array_key_exists('Shell', $data) && $data['Shell'] === null) {
            $object->setShell(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHostname()) {
            $data['Hostname'] = $object->getHostname();
        } else {
            $data['Hostname'] = null;
        }
        if (null !== $object->getDomainname()) {
            $data['Domainname'] = $object->getDomainname();
        } else {
            $data['Domainname'] = null;
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        } else {
            $data['User'] = null;
        }
        if (null !== $object->getAttachStdin()) {
            $data['AttachStdin'] = $object->getAttachStdin();
        } else {
            $data['AttachStdin'] = null;
        }
        if (null !== $object->getAttachStdout()) {
            $data['AttachStdout'] = $object->getAttachStdout();
        } else {
            $data['AttachStdout'] = null;
        }
        if (null !== $object->getAttachStderr()) {
            $data['AttachStderr'] = $object->getAttachStderr();
        } else {
            $data['AttachStderr'] = null;
        }
        if (null !== $object->getExposedPorts()) {
            $values = array();
            foreach ($object->getExposedPorts() as $key => $value) {
                $values[$key] = $value;
            }
            $data['ExposedPorts'] = $values;
        } else {
            $data['ExposedPorts'] = null;
        }
        if (null !== $object->getTty()) {
            $data['Tty'] = $object->getTty();
        } else {
            $data['Tty'] = null;
        }
        if (null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        } else {
            $data['OpenStdin'] = null;
        }
        if (null !== $object->getStdinOnce()) {
            $data['StdinOnce'] = $object->getStdinOnce();
        } else {
            $data['StdinOnce'] = null;
        }
        if (null !== $object->getEnv()) {
            $values_1 = array();
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Env'] = $values_1;
        } else {
            $data['Env'] = null;
        }
        if (null !== $object->getCmd()) {
            $values_2 = array();
            foreach ($object->getCmd() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Cmd'] = $values_2;
        } else {
            $data['Cmd'] = null;
        }
        if (null !== $object->getHealthcheck()) {
            $data['Healthcheck'] = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
        } else {
            $data['Healthcheck'] = null;
        }
        if (null !== $object->getArgsEscaped()) {
            $data['ArgsEscaped'] = $object->getArgsEscaped();
        } else {
            $data['ArgsEscaped'] = null;
        }
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        } else {
            $data['Image'] = null;
        }
        if (null !== $object->getVolumes()) {
            $values_3 = array();
            foreach ($object->getVolumes() as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $data['Volumes'] = $values_3;
        } else {
            $data['Volumes'] = null;
        }
        if (null !== $object->getWorkingDir()) {
            $data['WorkingDir'] = $object->getWorkingDir();
        } else {
            $data['WorkingDir'] = null;
        }
        if (null !== $object->getEntrypoint()) {
            $values_4 = array();
            foreach ($object->getEntrypoint() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['Entrypoint'] = $values_4;
        } else {
            $data['Entrypoint'] = null;
        }
        if (null !== $object->getNetworkDisabled()) {
            $data['NetworkDisabled'] = $object->getNetworkDisabled();
        } else {
            $data['NetworkDisabled'] = null;
        }
        if (null !== $object->getMacAddress()) {
            $data['MacAddress'] = $object->getMacAddress();
        } else {
            $data['MacAddress'] = null;
        }
        if (null !== $object->getOnBuild()) {
            $values_5 = array();
            foreach ($object->getOnBuild() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['OnBuild'] = $values_5;
        } else {
            $data['OnBuild'] = null;
        }
        if (null !== $object->getLabels()) {
            $values_6 = array();
            foreach ($object->getLabels() as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $data['Labels'] = $values_6;
        } else {
            $data['Labels'] = null;
        }
        if (null !== $object->getStopSignal()) {
            $data['StopSignal'] = $object->getStopSignal();
        } else {
            $data['StopSignal'] = null;
        }
        if (null !== $object->getStopTimeout()) {
            $data['StopTimeout'] = $object->getStopTimeout();
        } else {
            $data['StopTimeout'] = null;
        }
        if (null !== $object->getShell()) {
            $values_7 = array();
            foreach ($object->getShell() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['Shell'] = $values_7;
        } else {
            $data['Shell'] = null;
        }
        return $data;
    }
}
