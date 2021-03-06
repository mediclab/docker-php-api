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

class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SystemInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SystemInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\SystemInfo();
        if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
            $object->setID($data['ID']);
        } elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
            $object->setID(null);
        }
        if (\array_key_exists('Containers', $data) && $data['Containers'] !== null) {
            $object->setContainers($data['Containers']);
        } elseif (\array_key_exists('Containers', $data) && $data['Containers'] === null) {
            $object->setContainers(null);
        }
        if (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] !== null) {
            $object->setContainersRunning($data['ContainersRunning']);
        } elseif (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] === null) {
            $object->setContainersRunning(null);
        }
        if (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] !== null) {
            $object->setContainersPaused($data['ContainersPaused']);
        } elseif (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] === null) {
            $object->setContainersPaused(null);
        }
        if (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] !== null) {
            $object->setContainersStopped($data['ContainersStopped']);
        } elseif (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] === null) {
            $object->setContainersStopped(null);
        }
        if (\array_key_exists('Images', $data) && $data['Images'] !== null) {
            $object->setImages($data['Images']);
        } elseif (\array_key_exists('Images', $data) && $data['Images'] === null) {
            $object->setImages(null);
        }
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        } elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] !== null) {
            $values = array();
            foreach ($data['DriverStatus'] as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDriverStatus($values);
        } elseif (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] === null) {
            $object->setDriverStatus(null);
        }
        if (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] !== null) {
            $object->setDockerRootDir($data['DockerRootDir']);
        } elseif (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] === null) {
            $object->setDockerRootDir(null);
        }
        if (\array_key_exists('Plugins', $data) && $data['Plugins'] !== null) {
            $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], 'Docker\\API\\Model\\PluginsInfo', 'json', $context));
        } elseif (\array_key_exists('Plugins', $data) && $data['Plugins'] === null) {
            $object->setPlugins(null);
        }
        if (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] !== null) {
            $object->setMemoryLimit($data['MemoryLimit']);
        } elseif (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] === null) {
            $object->setMemoryLimit(null);
        }
        if (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] !== null) {
            $object->setSwapLimit($data['SwapLimit']);
        } elseif (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] === null) {
            $object->setSwapLimit(null);
        }
        if (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] !== null) {
            $object->setKernelMemory($data['KernelMemory']);
        } elseif (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] === null) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] !== null) {
            $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
        } elseif (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] === null) {
            $object->setCpuCfsPeriod(null);
        }
        if (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] !== null) {
            $object->setCpuCfsQuota($data['CpuCfsQuota']);
        } elseif (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] === null) {
            $object->setCpuCfsQuota(null);
        }
        if (\array_key_exists('CPUShares', $data) && $data['CPUShares'] !== null) {
            $object->setCPUShares($data['CPUShares']);
        } elseif (\array_key_exists('CPUShares', $data) && $data['CPUShares'] === null) {
            $object->setCPUShares(null);
        }
        if (\array_key_exists('CPUSet', $data) && $data['CPUSet'] !== null) {
            $object->setCPUSet($data['CPUSet']);
        } elseif (\array_key_exists('CPUSet', $data) && $data['CPUSet'] === null) {
            $object->setCPUSet(null);
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->setPidsLimit($data['PidsLimit']);
        } elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
            $object->setOomKillDisable($data['OomKillDisable']);
        } elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] !== null) {
            $object->setIPv4Forwarding($data['IPv4Forwarding']);
        } elseif (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] === null) {
            $object->setIPv4Forwarding(null);
        }
        if (\array_key_exists('BridgeNfIptables', $data) && $data['BridgeNfIptables'] !== null) {
            $object->setBridgeNfIptables($data['BridgeNfIptables']);
        } elseif (\array_key_exists('BridgeNfIptables', $data) && $data['BridgeNfIptables'] === null) {
            $object->setBridgeNfIptables(null);
        }
        if (\array_key_exists('BridgeNfIp6tables', $data) && $data['BridgeNfIp6tables'] !== null) {
            $object->setBridgeNfIp6tables($data['BridgeNfIp6tables']);
        } elseif (\array_key_exists('BridgeNfIp6tables', $data) && $data['BridgeNfIp6tables'] === null) {
            $object->setBridgeNfIp6tables(null);
        }
        if (\array_key_exists('Debug', $data) && $data['Debug'] !== null) {
            $object->setDebug($data['Debug']);
        } elseif (\array_key_exists('Debug', $data) && $data['Debug'] === null) {
            $object->setDebug(null);
        }
        if (\array_key_exists('NFd', $data) && $data['NFd'] !== null) {
            $object->setNFd($data['NFd']);
        } elseif (\array_key_exists('NFd', $data) && $data['NFd'] === null) {
            $object->setNFd(null);
        }
        if (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] !== null) {
            $object->setNGoroutines($data['NGoroutines']);
        } elseif (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] === null) {
            $object->setNGoroutines(null);
        }
        if (\array_key_exists('SystemTime', $data) && $data['SystemTime'] !== null) {
            $object->setSystemTime($data['SystemTime']);
        } elseif (\array_key_exists('SystemTime', $data) && $data['SystemTime'] === null) {
            $object->setSystemTime(null);
        }
        if (\array_key_exists('LoggingDriver', $data) && $data['LoggingDriver'] !== null) {
            $object->setLoggingDriver($data['LoggingDriver']);
        } elseif (\array_key_exists('LoggingDriver', $data) && $data['LoggingDriver'] === null) {
            $object->setLoggingDriver(null);
        }
        if (\array_key_exists('CgroupDriver', $data) && $data['CgroupDriver'] !== null) {
            $object->setCgroupDriver($data['CgroupDriver']);
        } elseif (\array_key_exists('CgroupDriver', $data) && $data['CgroupDriver'] === null) {
            $object->setCgroupDriver(null);
        }
        if (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] !== null) {
            $object->setNEventsListener($data['NEventsListener']);
        } elseif (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] === null) {
            $object->setNEventsListener(null);
        }
        if (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] !== null) {
            $object->setKernelVersion($data['KernelVersion']);
        } elseif (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] === null) {
            $object->setKernelVersion(null);
        }
        if (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] !== null) {
            $object->setOperatingSystem($data['OperatingSystem']);
        } elseif (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] === null) {
            $object->setOperatingSystem(null);
        }
        if (\array_key_exists('OSVersion', $data) && $data['OSVersion'] !== null) {
            $object->setOSVersion($data['OSVersion']);
        } elseif (\array_key_exists('OSVersion', $data) && $data['OSVersion'] === null) {
            $object->setOSVersion(null);
        }
        if (\array_key_exists('OSType', $data) && $data['OSType'] !== null) {
            $object->setOSType($data['OSType']);
        } elseif (\array_key_exists('OSType', $data) && $data['OSType'] === null) {
            $object->setOSType(null);
        }
        if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
            $object->setArchitecture($data['Architecture']);
        } elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('NCPU', $data) && $data['NCPU'] !== null) {
            $object->setNCPU($data['NCPU']);
        } elseif (\array_key_exists('NCPU', $data) && $data['NCPU'] === null) {
            $object->setNCPU(null);
        }
        if (\array_key_exists('MemTotal', $data) && $data['MemTotal'] !== null) {
            $object->setMemTotal($data['MemTotal']);
        } elseif (\array_key_exists('MemTotal', $data) && $data['MemTotal'] === null) {
            $object->setMemTotal(null);
        }
        if (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] !== null) {
            $object->setIndexServerAddress($data['IndexServerAddress']);
        } elseif (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] === null) {
            $object->setIndexServerAddress(null);
        }
        if (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] !== null) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], 'Docker\\API\\Model\\RegistryServiceConfig', 'json', $context));
        } elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
            $object->setRegistryConfig(null);
        }
        if (\array_key_exists('GenericResources', $data) && $data['GenericResources'] !== null) {
            $values_2 = array();
            foreach ($data['GenericResources'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values_2);
        } elseif (\array_key_exists('GenericResources', $data) && $data['GenericResources'] === null) {
            $object->setGenericResources(null);
        }
        if (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] !== null) {
            $object->setHttpProxy($data['HttpProxy']);
        } elseif (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] === null) {
            $object->setHttpProxy(null);
        }
        if (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] !== null) {
            $object->setHttpsProxy($data['HttpsProxy']);
        } elseif (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] === null) {
            $object->setHttpsProxy(null);
        }
        if (\array_key_exists('NoProxy', $data) && $data['NoProxy'] !== null) {
            $object->setNoProxy($data['NoProxy']);
        } elseif (\array_key_exists('NoProxy', $data) && $data['NoProxy'] === null) {
            $object->setNoProxy(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        } elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values_3 = array();
            foreach ($data['Labels'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLabels($values_3);
        } elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] !== null) {
            $object->setExperimentalBuild($data['ExperimentalBuild']);
        } elseif (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] === null) {
            $object->setExperimentalBuild(null);
        }
        if (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] !== null) {
            $object->setServerVersion($data['ServerVersion']);
        } elseif (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] === null) {
            $object->setServerVersion(null);
        }
        if (\array_key_exists('ClusterStore', $data) && $data['ClusterStore'] !== null) {
            $object->setClusterStore($data['ClusterStore']);
        } elseif (\array_key_exists('ClusterStore', $data) && $data['ClusterStore'] === null) {
            $object->setClusterStore(null);
        }
        if (\array_key_exists('ClusterAdvertise', $data) && $data['ClusterAdvertise'] !== null) {
            $object->setClusterAdvertise($data['ClusterAdvertise']);
        } elseif (\array_key_exists('ClusterAdvertise', $data) && $data['ClusterAdvertise'] === null) {
            $object->setClusterAdvertise(null);
        }
        if (\array_key_exists('Runtimes', $data) && $data['Runtimes'] !== null) {
            $values_4 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Runtimes'] as $key => $value_4) {
                $values_4[$key] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\Runtime', 'json', $context);
            }
            $object->setRuntimes($values_4);
        } elseif (\array_key_exists('Runtimes', $data) && $data['Runtimes'] === null) {
            $object->setRuntimes(null);
        }
        if (\array_key_exists('DefaultRuntime', $data) && $data['DefaultRuntime'] !== null) {
            $object->setDefaultRuntime($data['DefaultRuntime']);
        } elseif (\array_key_exists('DefaultRuntime', $data) && $data['DefaultRuntime'] === null) {
            $object->setDefaultRuntime(null);
        }
        if (\array_key_exists('Swarm', $data) && $data['Swarm'] !== null) {
            $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], 'Docker\\API\\Model\\SwarmInfo', 'json', $context));
        } elseif (\array_key_exists('Swarm', $data) && $data['Swarm'] === null) {
            $object->setSwarm(null);
        }
        if (\array_key_exists('LiveRestoreEnabled', $data) && $data['LiveRestoreEnabled'] !== null) {
            $object->setLiveRestoreEnabled($data['LiveRestoreEnabled']);
        } elseif (\array_key_exists('LiveRestoreEnabled', $data) && $data['LiveRestoreEnabled'] === null) {
            $object->setLiveRestoreEnabled(null);
        }
        if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
            $object->setIsolation($data['Isolation']);
        } elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('InitBinary', $data) && $data['InitBinary'] !== null) {
            $object->setInitBinary($data['InitBinary']);
        } elseif (\array_key_exists('InitBinary', $data) && $data['InitBinary'] === null) {
            $object->setInitBinary(null);
        }
        if (\array_key_exists('ContainerdCommit', $data) && $data['ContainerdCommit'] !== null) {
            $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        } elseif (\array_key_exists('ContainerdCommit', $data) && $data['ContainerdCommit'] === null) {
            $object->setContainerdCommit(null);
        }
        if (\array_key_exists('RuncCommit', $data) && $data['RuncCommit'] !== null) {
            $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        } elseif (\array_key_exists('RuncCommit', $data) && $data['RuncCommit'] === null) {
            $object->setRuncCommit(null);
        }
        if (\array_key_exists('InitCommit', $data) && $data['InitCommit'] !== null) {
            $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        } elseif (\array_key_exists('InitCommit', $data) && $data['InitCommit'] === null) {
            $object->setInitCommit(null);
        }
        if (\array_key_exists('SecurityOptions', $data) && $data['SecurityOptions'] !== null) {
            $values_5 = array();
            foreach ($data['SecurityOptions'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSecurityOptions($values_5);
        } elseif (\array_key_exists('SecurityOptions', $data) && $data['SecurityOptions'] === null) {
            $object->setSecurityOptions(null);
        }
        if (\array_key_exists('ProductLicense', $data) && $data['ProductLicense'] !== null) {
            $object->setProductLicense($data['ProductLicense']);
        } elseif (\array_key_exists('ProductLicense', $data) && $data['ProductLicense'] === null) {
            $object->setProductLicense(null);
        }
        if (\array_key_exists('Warnings', $data) && $data['Warnings'] !== null) {
            $values_6 = array();
            foreach ($data['Warnings'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setWarnings($values_6);
        } elseif (\array_key_exists('Warnings', $data) && $data['Warnings'] === null) {
            $object->setWarnings(null);
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
        if (null !== $object->getContainers()) {
            $data['Containers'] = $object->getContainers();
        } else {
            $data['Containers'] = null;
        }
        if (null !== $object->getContainersRunning()) {
            $data['ContainersRunning'] = $object->getContainersRunning();
        } else {
            $data['ContainersRunning'] = null;
        }
        if (null !== $object->getContainersPaused()) {
            $data['ContainersPaused'] = $object->getContainersPaused();
        } else {
            $data['ContainersPaused'] = null;
        }
        if (null !== $object->getContainersStopped()) {
            $data['ContainersStopped'] = $object->getContainersStopped();
        } else {
            $data['ContainersStopped'] = null;
        }
        if (null !== $object->getImages()) {
            $data['Images'] = $object->getImages();
        } else {
            $data['Images'] = null;
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        } else {
            $data['Driver'] = null;
        }
        if (null !== $object->getDriverStatus()) {
            $values = array();
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['DriverStatus'] = $values;
        } else {
            $data['DriverStatus'] = null;
        }
        if (null !== $object->getDockerRootDir()) {
            $data['DockerRootDir'] = $object->getDockerRootDir();
        } else {
            $data['DockerRootDir'] = null;
        }
        if (null !== $object->getPlugins()) {
            $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        } else {
            $data['Plugins'] = null;
        }
        if (null !== $object->getMemoryLimit()) {
            $data['MemoryLimit'] = $object->getMemoryLimit();
        } else {
            $data['MemoryLimit'] = null;
        }
        if (null !== $object->getSwapLimit()) {
            $data['SwapLimit'] = $object->getSwapLimit();
        } else {
            $data['SwapLimit'] = null;
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        } else {
            $data['KernelMemory'] = null;
        }
        if (null !== $object->getCpuCfsPeriod()) {
            $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
        } else {
            $data['CpuCfsPeriod'] = null;
        }
        if (null !== $object->getCpuCfsQuota()) {
            $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
        } else {
            $data['CpuCfsQuota'] = null;
        }
        if (null !== $object->getCPUShares()) {
            $data['CPUShares'] = $object->getCPUShares();
        } else {
            $data['CPUShares'] = null;
        }
        if (null !== $object->getCPUSet()) {
            $data['CPUSet'] = $object->getCPUSet();
        } else {
            $data['CPUSet'] = null;
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        } else {
            $data['PidsLimit'] = null;
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        } else {
            $data['OomKillDisable'] = null;
        }
        if (null !== $object->getIPv4Forwarding()) {
            $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
        } else {
            $data['IPv4Forwarding'] = null;
        }
        if (null !== $object->getBridgeNfIptables()) {
            $data['BridgeNfIptables'] = $object->getBridgeNfIptables();
        } else {
            $data['BridgeNfIptables'] = null;
        }
        if (null !== $object->getBridgeNfIp6tables()) {
            $data['BridgeNfIp6tables'] = $object->getBridgeNfIp6tables();
        } else {
            $data['BridgeNfIp6tables'] = null;
        }
        if (null !== $object->getDebug()) {
            $data['Debug'] = $object->getDebug();
        } else {
            $data['Debug'] = null;
        }
        if (null !== $object->getNFd()) {
            $data['NFd'] = $object->getNFd();
        } else {
            $data['NFd'] = null;
        }
        if (null !== $object->getNGoroutines()) {
            $data['NGoroutines'] = $object->getNGoroutines();
        } else {
            $data['NGoroutines'] = null;
        }
        if (null !== $object->getSystemTime()) {
            $data['SystemTime'] = $object->getSystemTime();
        } else {
            $data['SystemTime'] = null;
        }
        if (null !== $object->getLoggingDriver()) {
            $data['LoggingDriver'] = $object->getLoggingDriver();
        } else {
            $data['LoggingDriver'] = null;
        }
        if (null !== $object->getCgroupDriver()) {
            $data['CgroupDriver'] = $object->getCgroupDriver();
        } else {
            $data['CgroupDriver'] = null;
        }
        if (null !== $object->getNEventsListener()) {
            $data['NEventsListener'] = $object->getNEventsListener();
        } else {
            $data['NEventsListener'] = null;
        }
        if (null !== $object->getKernelVersion()) {
            $data['KernelVersion'] = $object->getKernelVersion();
        } else {
            $data['KernelVersion'] = null;
        }
        if (null !== $object->getOperatingSystem()) {
            $data['OperatingSystem'] = $object->getOperatingSystem();
        } else {
            $data['OperatingSystem'] = null;
        }
        if (null !== $object->getOSVersion()) {
            $data['OSVersion'] = $object->getOSVersion();
        } else {
            $data['OSVersion'] = null;
        }
        if (null !== $object->getOSType()) {
            $data['OSType'] = $object->getOSType();
        } else {
            $data['OSType'] = null;
        }
        if (null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        } else {
            $data['Architecture'] = null;
        }
        if (null !== $object->getNCPU()) {
            $data['NCPU'] = $object->getNCPU();
        } else {
            $data['NCPU'] = null;
        }
        if (null !== $object->getMemTotal()) {
            $data['MemTotal'] = $object->getMemTotal();
        } else {
            $data['MemTotal'] = null;
        }
        if (null !== $object->getIndexServerAddress()) {
            $data['IndexServerAddress'] = $object->getIndexServerAddress();
        } else {
            $data['IndexServerAddress'] = null;
        }
        if (null !== $object->getRegistryConfig()) {
            $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        } else {
            $data['RegistryConfig'] = null;
        }
        if (null !== $object->getGenericResources()) {
            $values_2 = array();
            foreach ($object->getGenericResources() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['GenericResources'] = $values_2;
        } else {
            $data['GenericResources'] = null;
        }
        if (null !== $object->getHttpProxy()) {
            $data['HttpProxy'] = $object->getHttpProxy();
        } else {
            $data['HttpProxy'] = null;
        }
        if (null !== $object->getHttpsProxy()) {
            $data['HttpsProxy'] = $object->getHttpsProxy();
        } else {
            $data['HttpsProxy'] = null;
        }
        if (null !== $object->getNoProxy()) {
            $data['NoProxy'] = $object->getNoProxy();
        } else {
            $data['NoProxy'] = null;
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        } else {
            $data['Name'] = null;
        }
        if (null !== $object->getLabels()) {
            $values_3 = array();
            foreach ($object->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['Labels'] = $values_3;
        } else {
            $data['Labels'] = null;
        }
        if (null !== $object->getExperimentalBuild()) {
            $data['ExperimentalBuild'] = $object->getExperimentalBuild();
        } else {
            $data['ExperimentalBuild'] = null;
        }
        if (null !== $object->getServerVersion()) {
            $data['ServerVersion'] = $object->getServerVersion();
        } else {
            $data['ServerVersion'] = null;
        }
        if (null !== $object->getClusterStore()) {
            $data['ClusterStore'] = $object->getClusterStore();
        } else {
            $data['ClusterStore'] = null;
        }
        if (null !== $object->getClusterAdvertise()) {
            $data['ClusterAdvertise'] = $object->getClusterAdvertise();
        } else {
            $data['ClusterAdvertise'] = null;
        }
        if (null !== $object->getRuntimes()) {
            $values_4 = array();
            foreach ($object->getRuntimes() as $key => $value_4) {
                $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['Runtimes'] = $values_4;
        } else {
            $data['Runtimes'] = null;
        }
        if (null !== $object->getDefaultRuntime()) {
            $data['DefaultRuntime'] = $object->getDefaultRuntime();
        } else {
            $data['DefaultRuntime'] = null;
        }
        if (null !== $object->getSwarm()) {
            $data['Swarm'] = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
        } else {
            $data['Swarm'] = null;
        }
        if (null !== $object->getLiveRestoreEnabled()) {
            $data['LiveRestoreEnabled'] = $object->getLiveRestoreEnabled();
        } else {
            $data['LiveRestoreEnabled'] = null;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        } else {
            $data['Isolation'] = null;
        }
        if (null !== $object->getInitBinary()) {
            $data['InitBinary'] = $object->getInitBinary();
        } else {
            $data['InitBinary'] = null;
        }
        if (null !== $object->getContainerdCommit()) {
            $data['ContainerdCommit'] = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
        } else {
            $data['ContainerdCommit'] = null;
        }
        if (null !== $object->getRuncCommit()) {
            $data['RuncCommit'] = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
        } else {
            $data['RuncCommit'] = null;
        }
        if (null !== $object->getInitCommit()) {
            $data['InitCommit'] = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
        } else {
            $data['InitCommit'] = null;
        }
        if (null !== $object->getSecurityOptions()) {
            $values_5 = array();
            foreach ($object->getSecurityOptions() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['SecurityOptions'] = $values_5;
        } else {
            $data['SecurityOptions'] = null;
        }
        if (null !== $object->getProductLicense()) {
            $data['ProductLicense'] = $object->getProductLicense();
        } else {
            $data['ProductLicense'] = null;
        }
        if (null !== $object->getWarnings()) {
            $values_6 = array();
            foreach ($object->getWarnings() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['Warnings'] = $values_6;
        } else {
            $data['Warnings'] = null;
        }
        return $data;
    }
}
