<?php

class Zeapps_workload_workloads extends ZeModel
{
    public function updateOldTable($status, $position) {
        $this->db->query('UPDATE zeapps_workload_workloads SET position = (position-1) WHERE status = ' . $status . ' AND position > ' . $position);
    }

    public function updateNewTable($status, $position) {
        $this->db->query('UPDATE zeapps_workload_workloads SET position = (position+1) WHERE status = ' . $status . ' AND position >= ' . $position);
    }
}