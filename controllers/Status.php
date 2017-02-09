<?php

class Status extends ZeCtrl
{
    public function getAll() {

        $this->load->model("Zeapps_workload_statuses", "statuses");
        $statuses = $this->statuses->order_by("id")->all();

        if ($statuses== false) {
            echo json_encode(array());
        } else {
            echo json_encode($statuses);
        }

    }
}