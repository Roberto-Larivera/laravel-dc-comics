<header>
    <div class="header_bar">
        <div class="container">
            <div class="row p-1">
                <div class="col text-end">
                    <span>
                        dc power<span>sm</span> visa &#174;
                    </span>
                </div>
                <div class="col-auto">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#nogo" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            additional dc sites
                        </a>

                        <ul class="dropdown-menu p-4">
                            <li>
                                <a href="{{ route('home') }}">home</a>
                            </li>
                            <li>
                                <a href="{{ route('comics.index') }}">comics</a>
                            </li>
                            <li>
                                <a href="{{ route('comics.create') }}">create</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="row header_container">

                <div class="col">
                    <div class="header_logo">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
                    </div>
                </div>
                <div class="col align-items-center d-none d-xl-block">
                    <div class="header_links ">
                        <ul class="d-flex">
                            {{-- qui i link  --}}

                            <li>
                                <a href="{{ route('home') }}">home</a>
                            </li>
                            <li>
                                <a href="{{ route('comics.index') }}">comics</a>
                            </li>
                            <li>
                                <a href="{{ route('comics.create') }}">create</a>
                            </li>

                        </ul>


                    </div>
                </div>
                <div class="col d-flex align-items-center">
                    <div class="input-group">
                        <div class="form-floating">
                            <input type="search" class="form-control" id="###" placeholder="#">
                            <label for="###">Search</label>
                        </div>
                        <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>

                </div>
                <div class="col-auto d-xl-none d-flex align-items-center">
                    <button class="btn btn-primary " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>



            </div>


        </div>

        <div class="offcanvas offcanvas-top w-100 h-100 header_container" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">

            <div class="offcanvas-body">
                <div class="row row-cols-1 ">
                    <div class="col d-flex justify-content-center">
                        <div class="header_logo">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="header_links  ">
                            <ul class="d-flex flex-column align-items-center">
                                {{-- qui i link  --}}
                                <li>
                                    <a href="{{ route('home') }}">home</a>
                                </li>
                                <li>
                                    <a href="{{ route('comics.index') }}">comics</a>
                                </li>
                                <li>
                                    <a href="{{ route('comics.create') }}">create</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="btn text-danger">
                            <i class="fa-solid fa-xmark fa-2x"></i>
                        </button>
                        {{-- <button type="button" class="btn-danger text-danger btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button> --}}

                    </div>
                </div>
            </div>
        </div>

    </nav>
</header>
