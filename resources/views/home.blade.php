<x-admin-layout title="Responsive - Datatables - SmartAdmin v4.5.1" :pageTitle="'DataTables: <span class=\'fw-300\'><i>Responsive</i></span> <sup class=\'badge badge-primary fw-500\'>ADDON</sup>'" breadcrumb1="SmartAdmin" breadcrumb2="Datatables" breadcrumb3="Responsive">
    <x-slot name="styles">
        <link rel="stylesheet" media="screen, print" href="/assets/smartadmin/css/datagrid/datatables/datatables.bundle.css">
    </x-slot>

    <div class="row">
        <div class="col-xl-12">
            <x-panel id="panel-1" title="Example <span class='fw-300'><i>Table</i></span>">
                <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                    <thead>
                        <tr>
                            <th>OrderID</th>
                            <th>Recipient</th>
                            <th>Shipping.Address</th>
                            <th>Shipping.Country</th>
                            <th>Shipping.City</th>
                            <th>Agent</th>
                            <th>Company</th>
                            <th>OrganizationID</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Shipping.Date</th>
                            <th>Delivery.Date</th>
                            <th>Payment.Date</th>
                            <th>Timezone</th>
                            <th>Payment</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Admin Controls</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <th>OrderID</th>
                            <th>Recipient</th>
                            <th>Shipping.Address</th>
                            <th>Shipping.Country</th>
                            <th>Shipping.City</th>
                            <th>Agent</th>
                            <th>Company</th>
                            <th>OrganizationID</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Shipping.Date</th>
                            <th>Delivery.Date</th>
                            <th>Payment.Date</th>
                            <th>Timezone</th>
                            <th>Payment</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Admin Controls</th>
                        </tr>
                    </tfoot>
                </table>
            </x-panel>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="/assets/smartadmin/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>
            $(document).ready(function() {
                $('#dt-basic-example').DataTable({
                    responsive: true,
                    ajax: '/api/datatable-data',
                    columns: [
                        { data: 'OrderID' },
                        { data: 'Recipient' },
                        { data: 'Shipping.Address' },
                        { data: 'Shipping.Country' },
                        { data: 'Shipping.City' },
                        { data: 'Agent' },
                        { data: 'Company' },
                        { data: 'OrganizationID' },
                        { data: 'Latitude', render: function(data) { return data ? data.toFixed(4) : ''; } },
                        { data: 'Longitude', render: function(data) { return data ? data.toFixed(4) : ''; } },
                        { data: 'Shipping.Date' },
                        { data: 'Delivery.Date' },
                        { data: 'Payment.Date' },
                        { data: 'Timezone' },
                        { data: 'Payment.Amount' },
                        { data: 'Email' },
                        { data: 'Phone' },
                        { data: 'Status' },
                        { data: null, defaultContent: '' }
                    ],
                    columnDefs: [
                        {
                            targets: -1,
                            title: 'Admin Controls',
                            orderable: false,
                            render: function(data, type, full, meta) {
                                return "\n\t\t\t\t\t<div class='d-flex mt-2'>\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-outline-danger mr-2' title='Delete Record'><i class=\"fal fa-times\"></i> Delete Record</a>\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-outline-primary mr-2' title='Edit'><i class=\"fal fa-edit\"></i> Edit</a>\n\t\t\t\t\t\t<div class='dropdown d-inline-block'>\n\t\t\t\t\t\t\t<a href=\"#\" class='btn btn-sm btn-outline-primary mr-2' data-toggle='dropdown' aria-expanded='true' title='More options'><i class=\"fal fa-plus\"></i></a>\n\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>";
                            }
                        },
                        {
                            targets: 17,
                            render: function(data, type, full, meta) {
                                var badge = {
                                    1: { title: 'Pending', class: 'badge-warning' },
                                    2: { title: 'Delivered', class: 'badge-success' },
                                    3: { title: 'Canceled', class: 'badge-secondary' },
                                    4: { title: 'Attempt #1', class: 'bg-danger-100 text-white' },
                                    5: { title: 'Attempt #2', class: 'bg-danger-300 text-white' },
                                    6: { title: 'Failed', class: 'badge-danger' },
                                    7: { title: 'Attention!', class: 'badge-primary' },
                                    8: { title: 'In Progress', class: 'badge-success' }
                                };
                                if (typeof badge[data] === 'undefined') return data;
                                return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
                            }
                        }
                    ]
                });
            });
        </script>
    </x-slot>

</x-admin-layout>