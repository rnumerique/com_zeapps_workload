<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="breadcrumb"><a href="/ng/com_zeapps_workload/workload/plan">Plan de charge</a></div>

<div id = "content">
    <a href="/ng/com_zeapps_workload/workload/new" class="btn btn-primary">Nouveau projet</a>

    <div class="row" ng-repeat="workloadsTable in workloadsArray">
        <div class="col-md-12">

            <h3>{{ workloadsTable.name }}</h3>

            <div class="col-md-12" >
                <table class="table table-bordered table-striped table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Dossier</th>
                            <th>Montant</th>
                            <th>Commission</th>
                            <th>Marge</th>
                            <th>Déjà Facturé</th>
                            <th>Reste dû</th>
                            <th>Date ouverture</th>
                            <th>Date livraison</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody ui-sortable="sortable" ng-model="workloadsTable.workloads" class="sortableContainer defaut" data-type="{{ workloadsTable.id }}">
                        <tr ng-repeat="workload in workloadsTable.workloads" data-id="{{workload.id}}" class="ligne_tableau_{{workload.id}}">

                            <td>{{workload.company}}</td>
                            <td>{{workload.folder}}</td>
                            <td>{{workload.amount| currency : "€": 2}}</td>
                            <td>{{workload.commission| currency : "€": 2}}</td>
                            <td>{{workload.amount - workload.commission| currency : "€": 2}}</td>
                            <td>{{workload.invoiced| currency : "€": 2}}</td>
                            <td>{{workload.amount - workload.invoiced| currency : "€": 2}}</td>
                            <td>{{workload.opened_at != "0000-00-00" ? (workload.opened_at | date:"dd/MM/yyyy") : '-'}}</td>
                            <td>{{workload.delivered_at != "0000-00-00" ? (workload.delivered_at | date:"dd/MM/yyyy") : '-'}}</td>
                            <td>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary btn-xs" ng-click="edit_workload(workload.id)">Editer</button>
                                    <button type="button" class="btn btn-danger btn-xs" ng-click="delete_workload(workload.id)">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                        <tr ng-show = "workloadsTable.workloads.length < 1" >
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th>Totaux :</th>
                        <th></th>
                        <th>{{getTotal(workloadsTable.workloads, "amount")| currency: "€" : 2}}</th>
                        <th>{{getTotal(workloadsTable.workloads, "commission") | currency: "€" : 2}}</th>
                        <th>{{getTotal(workloadsTable.workloads, "amount")- getTotal(workloadsTable.workloads, "commission")| currency: "€" : 2}}</th>
                        <th>{{getTotal(workloadsTable.workloads, "invoiced") | currency: "€" : 2}}</th>
                        <th>{{getTotal(workloadsTable.workloads, "amount")- getTotal(workloadsTable.workloads, "invoiced")| currency: "€" : 2}}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>