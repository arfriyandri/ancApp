@include('admin.component.head')

<body>
    <div id="wrapper">
        @include('admin.component.partisial.navbar')

        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight">

            <header>
                @include('admin.component.partisial.header')
            </header>

            <section class="py-3 d-flex justify-content-center flex-nowarp">
                @include('admin.component.partisial.card')
            </section>

            <section>
                @include('admin.component.partisial.grafik')
            </section>

                </div>
            </div>
        </div>
    </div>
    @include('admin.component.foot')
</body>
