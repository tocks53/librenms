<?php
/**
 * LibreNMS
 *
 *   This file is part of LibreNMS.
 *
 * @package    LibreNMS
 * @subpackage discovery
 * @copyright  (C) 2006 - 2012 Adam Armstrong
 */

$oids = snmp_walk($device, 'temperatureProbeStatus', '-Osqn', 'IDRAC-MIB-SMIv2');
d_echo($oids."\n");

$oids = trim($oids);
if ($oids) {
    echo 'Dell iDRAC';
}
