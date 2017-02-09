<?php

class Zeapps_workload_statuses extends ZeModel
{
    public function __construct()
    {
        parent::__construct();

        $this->soft_deletes = TRUE;
    }
}