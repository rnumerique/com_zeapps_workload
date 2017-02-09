<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="breadcrumb"><a href="/ng/com_zeapps_workload/workload/plan">Plan de charge</a></div>

<div id = "content">

    <form>
        <div class="well">
            <div class="row">
                <div class="col-md-6">


                    <div class="form-group">
                        <label>Client</label>
                        <input type="text" ng-model="form.company" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>Dossier</label>
                        <input type="text" ng-model="form.folder" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>Montant</label>
                        <input type="number" min="0" step="0.01" ng-model="form.amount" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Commission</label>
                        <input type="number" min="0" step="0.01" ng-model="form.commission" class="form-control">
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="form-group">
                        <label>Déjà facturé</label>
                        <input type="number" min="0" step="0.01" ng-model="form.invoiced" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Date d'ouverture</label>
                        <input type="date" ng-model="form.opened_at" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Date de livraison</label>
                        <input type="date" ng-model="form.delivered_at" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Statut du Plan</label>
                        <select ng-model="form.status" class="form-control">
                            <option value="{{ status.id }}" ng-repeat="status in statuses">
                                {{ status.name }}
                            </option>
                        </select>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-success" ng-click="save()" value="Enregistrer"/>
                <button type="button" class="btn btn-default btn-sm" ng-click="cancel()">Annuler</button>
            </div>
        </div>

    </form>
</div>


