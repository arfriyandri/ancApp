@include('admin.component.head')

<body>
    <div id="wrapper">
        @include('admin.component.partisial.navbar')

        <div id="page-wrapper" class="gray-bg">

            <header>
                @include('admin.component.partisial.header')
            </header>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Grafik</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Pie </h5>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <canvas id="doughnutChart" height="140"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('admin.component.foot')
</body>
