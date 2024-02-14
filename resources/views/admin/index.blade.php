@include('admin.component.head')

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
                        <a href="/admin">Admin</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <section class="mb-0 pb-0 d-flex justify-content-center flex-nowarp">
                @include('admin.component.partisial.card')
            </section>
            <section class="pt-0">
                @include('admin.component.partisial.grafik')
            </section>

        </div>
    </div>
</div>
</div>
@include('admin.component.foot')

<script>
    function getRandomColor() { //generates random colours and puts them in string
        var colors = [];
        for (var i = 0; i < 1000; i++) {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var x = 0; x < 6; x++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            colors.push(color);
        }
        return colors;
    }
    var doughnutData = {
        labels: [
            @foreach ($data['grafik'] as $grafik)
                "{{ $grafik->name }}",
            @endforeach
        ],
        datasets: [{
            data: [
                @foreach ($data['grafik'] as $grafik)
                    {{ $grafik->jumlah }},
                @endforeach
            ],
            backgroundColor: getRandomColor()
        }]
    };


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnutChart").getContext("2d");
    new Chart(ctx4, {
        type: 'doughnut',
        data: doughnutData,
        options: doughnutOptions
    });
</script>
