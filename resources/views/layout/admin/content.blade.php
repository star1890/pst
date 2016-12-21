@extends('layout.admin.main')

@section('content')
<!-- BEGIN OF CONTENT -->
<div class="content">
    <div id="wrap-content" class="nosidebar">
        <div id="main-content">
            <div class="indent">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="block">
                            <div class="white-panel">
                                <div id="legend-inventory" class="chart-legend"></div>
                                <div id="canvas-holder">
                                    <canvas id="chart-area"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="block">
                            <div class="white-panel">
                                <div id="legend-inventory" class="chart-legend"></div>
                                <div id="canvas-holder">
                                    <canvas id="vendor" width="400" height="162"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="white-panel">
                                <div class="head-section-panel">
                                    <h2 class="pull-left">Top Vendors</h2>
                                    <a href="07-tambah-user.html" class="btn btn-primary first pull-right">Add Vendor</a>
                                </div>
                                <table class="table table-striped table-bordered DataTable">
                                    <thead>
                                        <tr>
                                            <th>Reg</th>
                                            <th>Name</th>
                                            <th>Services</th>
                                            <th>Saved by User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>VD01</td>
                                            <td>Prada</td>
                                            <td>All Packages</td>
                                            <td>234212</td>
                                        </tr>
                                        <tr>
                                            <td>VD02</td>
                                            <td>Samarista</td>
                                            <td>Bridal</td>
                                            <td>80989</td>
                                        </tr>
                                        <tr>
                                            <td>VD03</td>
                                            <td>Sarahfie</td>
                                            <td>Decoration</td>
                                            <td>76463</td>
                                        </tr>
                                        <tr>
                                            <td>VD04</td>
                                            <td>Lotus Design</td>
                                            <td>Decoration</td>
                                            <td>3450</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="white-panel">
                                <div class="head-section-panel">
                                    <h2 class="pull-left">Daftar Pencapaian Marketing</h2>
                                    <a href="07-tambah-user.html" class="btn btn-primary first pull-right">Tambah Data</a>
                                </div>
                                <table class="table table-striped table-bordered DataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Marketing</th>
                                            <th>Regional</th>
                                            <th>Pencapaian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dadan Saripudin</td>
                                            <td>BDG Timur</td>
                                            <td>Rp. 250.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bambang Hartono</td>
                                            <td>BDG Barat</td>
                                            <td>Rp. 250.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Yanto Saripudin</td>
                                            <td>BDG Selatan</td>
                                            <td>Rp. 250.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Yanto Saripudin</td>
                                            <td>BDG Selatan</td>
                                            <td>Rp. 250.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END OF CONTENT -->
@endsection