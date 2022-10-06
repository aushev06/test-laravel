<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="/">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Доска</span>
            </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Марки">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBrands"
               data-parent="#Brands">
                <i class="fa fa-book"></i>
                <span class="nav-link-text">Марки</span>
            </a>

            <ul class="sidenav-second-level collapse" id="collapseBrands">
                <li>
                    <a href="{{route('brands.index')}}">Все</a>
                </li>
                <li>
                    <a href="{{route('brands.create')}}">Создать</a>
                </li>
            </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Модели">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseModels"
               data-parent="#Models">
                <i class="fa fa-book"></i>
                <span class="nav-link-text">Модели</span>
            </a>

            <ul class="sidenav-second-level collapse" id="collapseModels">
                <li>
                    <a href="{{route('car-models.index')}}">Все</a>
                </li>
                <li>
                    <a href="{{route('car-models.create')}}">Создать</a>
                </li>
            </ul>
        </li>

    </ul>



    <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-fw fa-sign-out"></i>ВЫХОД</a>
        </li>
    </ul>
</div>
