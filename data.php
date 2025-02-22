<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wysiwyg Editor</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Data Karyawan</h3>
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#list" data-toggle="tab">LIST</a></li>

                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="list">
                        <table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Penempatan</th>
                                    <th>Tanggal Bergabung</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>2011/04/25</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>2011/07/25</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>2009/01/12</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>2012/03/29</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
    <script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/jszip.min.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/pdfmake.min.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/vfs_fonts.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="bootstrap/plugins/datatable/extensions/export/buttons.print.min.js"></script>
</body>

</html>