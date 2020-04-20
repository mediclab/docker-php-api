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

class ContainersIdUpdatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainersIdUpdatePostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainersIdUpdatePostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ContainersIdUpdatePostBody();
        if (\array_key_exists('CpuShares', $data) && $data['CpuShares'] !== null) {
            $object->setCpuShares($data['CpuShares']);
        } elseif (\array_key_exists('CpuShares', $data) && $data['CpuShares'] === null) {
            $object->setCpuShares(null);
        }
        if (\array_key_exists('Memory', $data) && $data['Memory'] !== null) {
            $object->setMemory($data['Memory']);
        } elseif (\array_key_exists('Memory', $data) && $data['Memory'] === null) {
            $object->setMemory(null);
        }
        if (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] !== null) {
            $object->setCgroupParent($data['CgroupParent']);
        } elseif (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] === null) {
            $object->setCgroupParent(null);
        }
        if (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] !== null) {
            $object->setBlkioWeight($data['BlkioWeight']);
        } elseif (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] === null) {
            $object->setBlkioWeight(null);
        }
        if (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] !== null) {
            $values = array();
            foreach ($data['BlkioWeightDevice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        } elseif (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] === null) {
            $object->setBlkioWeightDevice(null);
        }
        if (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] !== null) {
            $values_1 = array();
            foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        } elseif (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] === null) {
            $object->setBlkioDeviceReadBps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] !== null) {
            $values_2 = array();
            foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        } elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] === null) {
            $object->setBlkioDeviceWriteBps(null);
        }
        if (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] !== null) {
            $values_3 = array();
            foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        } elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] === null) {
            $object->setBlkioDeviceReadIOps(null);
        }
        if (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] !== null) {
            $values_4 = array();
            foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        } elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] === null) {
            $object->setBlkioDeviceWriteIOps(null);
        }
        if (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] !== null) {
            $object->setCpuPeriod($data['CpuPeriod']);
        } elseif (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] === null) {
            $object->setCpuPeriod(null);
        }
        if (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] !== null) {
            $object->setCpuQuota($data['CpuQuota']);
        } elseif (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] === null) {
            $object->setCpuQuota(null);
        }
        if (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] !== null) {
            $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
        } elseif (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] === null) {
            $object->setCpuRealtimePeriod(null);
        }
        if (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] !== null) {
            $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
        } elseif (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] === null) {
            $object->setCpuRealtimeRuntime(null);
        }
        if (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] !== null) {
            $object->setCpusetCpus($data['CpusetCpus']);
        } elseif (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] === null) {
            $object->setCpusetCpus(null);
        }
        if (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] !== null) {
            $object->setCpusetMems($data['CpusetMems']);
        } elseif (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] === null) {
            $object->setCpusetMems(null);
        }
        if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
            $values_5 = array();
            foreach ($data['Devices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        } elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
            $object->setDevices(null);
        }
        if (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] !== null) {
            $values_6 = array();
            foreach ($data['DeviceCgroupRules'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        } elseif (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] === null) {
            $object->setDeviceCgroupRules(null);
        }
        if (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] !== null) {
            $values_7 = array();
            foreach ($data['DeviceRequests'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\DeviceRequest', 'json', $context);
            }
            $object->setDeviceRequests($values_7);
        } elseif (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] === null) {
            $object->setDeviceRequests(null);
        }
        if (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] !== null) {
            $object->setKernelMemory($data['KernelMemory']);
        } elseif (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] === null) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] !== null) {
            $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
        } elseif (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] === null) {
            $object->setKernelMemoryTCP(null);
        }
        if (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] !== null) {
            $object->setMemoryReservation($data['MemoryReservation']);
        } elseif (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] === null) {
            $object->setMemoryReservation(null);
        }
        if (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] !== null) {
            $object->setMemorySwap($data['MemorySwap']);
        } elseif (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] === null) {
            $object->setMemorySwap(null);
        }
        if (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] !== null) {
            $object->setMemorySwappiness($data['MemorySwappiness']);
        } elseif (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] === null) {
            $object->setMemorySwappiness(null);
        }
        if (\array_key_exists('NanoCPUs', $data) && $data['NanoCPUs'] !== null) {
            $object->setNanoCPUs($data['NanoCPUs']);
        } elseif (\array_key_exists('NanoCPUs', $data) && $data['NanoCPUs'] === null) {
            $object->setNanoCPUs(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
            $object->setOomKillDisable($data['OomKillDisable']);
        } elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->setInit($data['Init']);
        } elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->setInit(null);
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->setPidsLimit($data['PidsLimit']);
        } elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('Ulimits', $data) && $data['Ulimits'] !== null) {
            $values_8 = array();
            foreach ($data['Ulimits'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_8);
        } elseif (\array_key_exists('Ulimits', $data) && $data['Ulimits'] === null) {
            $object->setUlimits(null);
        }
        if (\array_key_exists('CpuCount', $data) && $data['CpuCount'] !== null) {
            $object->setCpuCount($data['CpuCount']);
        } elseif (\array_key_exists('CpuCount', $data) && $data['CpuCount'] === null) {
            $object->setCpuCount(null);
        }
        if (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] !== null) {
            $object->setCpuPercent($data['CpuPercent']);
        } elseif (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] === null) {
            $object->setCpuPercent(null);
        }
        if (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] !== null) {
            $object->setIOMaximumIOps($data['IOMaximumIOps']);
        } elseif (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] === null) {
            $object->setIOMaximumIOps(null);
        }
        if (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] !== null) {
            $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
        } elseif (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] === null) {
            $object->setIOMaximumBandwidth(null);
        }
        if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\API\\Model\\RestartPolicy', 'json', $context));
        } elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
            $object->setRestartPolicy(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCpuShares()) {
            $data['CpuShares'] = $object->getCpuShares();
        } else {
            $data['CpuShares'] = null;
        }
        if (null !== $object->getMemory()) {
            $data['Memory'] = $object->getMemory();
        } else {
            $data['Memory'] = null;
        }
        if (null !== $object->getCgroupParent()) {
            $data['CgroupParent'] = $object->getCgroupParent();
        } else {
            $data['CgroupParent'] = null;
        }
        if (null !== $object->getBlkioWeight()) {
            $data['BlkioWeight'] = $object->getBlkioWeight();
        } else {
            $data['BlkioWeight'] = null;
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = array();
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['BlkioWeightDevice'] = $values;
        } else {
            $data['BlkioWeightDevice'] = null;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = array();
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['BlkioDeviceReadBps'] = $values_1;
        } else {
            $data['BlkioDeviceReadBps'] = null;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = array();
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['BlkioDeviceWriteBps'] = $values_2;
        } else {
            $data['BlkioDeviceWriteBps'] = null;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = array();
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['BlkioDeviceReadIOps'] = $values_3;
        } else {
            $data['BlkioDeviceReadIOps'] = null;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = array();
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BlkioDeviceWriteIOps'] = $values_4;
        } else {
            $data['BlkioDeviceWriteIOps'] = null;
        }
        if (null !== $object->getCpuPeriod()) {
            $data['CpuPeriod'] = $object->getCpuPeriod();
        } else {
            $data['CpuPeriod'] = null;
        }
        if (null !== $object->getCpuQuota()) {
            $data['CpuQuota'] = $object->getCpuQuota();
        } else {
            $data['CpuQuota'] = null;
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
        } else {
            $data['CpuRealtimePeriod'] = null;
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
        } else {
            $data['CpuRealtimeRuntime'] = null;
        }
        if (null !== $object->getCpusetCpus()) {
            $data['CpusetCpus'] = $object->getCpusetCpus();
        } else {
            $data['CpusetCpus'] = null;
        }
        if (null !== $object->getCpusetMems()) {
            $data['CpusetMems'] = $object->getCpusetMems();
        } else {
            $data['CpusetMems'] = null;
        }
        if (null !== $object->getDevices()) {
            $values_5 = array();
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Devices'] = $values_5;
        } else {
            $data['Devices'] = null;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = array();
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['DeviceCgroupRules'] = $values_6;
        } else {
            $data['DeviceCgroupRules'] = null;
        }
        if (null !== $object->getDeviceRequests()) {
            $values_7 = array();
            foreach ($object->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['DeviceRequests'] = $values_7;
        } else {
            $data['DeviceRequests'] = null;
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        } else {
            $data['KernelMemory'] = null;
        }
        if (null !== $object->getKernelMemoryTCP()) {
            $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
        } else {
            $data['KernelMemoryTCP'] = null;
        }
        if (null !== $object->getMemoryReservation()) {
            $data['MemoryReservation'] = $object->getMemoryReservation();
        } else {
            $data['MemoryReservation'] = null;
        }
        if (null !== $object->getMemorySwap()) {
            $data['MemorySwap'] = $object->getMemorySwap();
        } else {
            $data['MemorySwap'] = null;
        }
        if (null !== $object->getMemorySwappiness()) {
            $data['MemorySwappiness'] = $object->getMemorySwappiness();
        } else {
            $data['MemorySwappiness'] = null;
        }
        if (null !== $object->getNanoCPUs()) {
            $data['NanoCPUs'] = $object->getNanoCPUs();
        } else {
            $data['NanoCPUs'] = null;
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        } else {
            $data['OomKillDisable'] = null;
        }
        if (null !== $object->getInit()) {
            $data['Init'] = $object->getInit();
        } else {
            $data['Init'] = null;
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        } else {
            $data['PidsLimit'] = null;
        }
        if (null !== $object->getUlimits()) {
            $values_8 = array();
            foreach ($object->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['Ulimits'] = $values_8;
        } else {
            $data['Ulimits'] = null;
        }
        if (null !== $object->getCpuCount()) {
            $data['CpuCount'] = $object->getCpuCount();
        } else {
            $data['CpuCount'] = null;
        }
        if (null !== $object->getCpuPercent()) {
            $data['CpuPercent'] = $object->getCpuPercent();
        } else {
            $data['CpuPercent'] = null;
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
        } else {
            $data['IOMaximumIOps'] = null;
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
        } else {
            $data['IOMaximumBandwidth'] = null;
        }
        if (null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        } else {
            $data['RestartPolicy'] = null;
        }
        return $data;
    }
}
