<nav
                    class="navbar navbar-expand-sm navbar-light bg-primary"
                >
                    <a class="navbar-brand" href="#">Horarios</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    ></button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Inicio <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('alumnos.index')}}">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('puestos.index')}}">Puestos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('plazas.index')}}">Plazas</a>
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <input
                                class="form-control me-sm-2"
                                type="text"
                                placeholder="Search"
                            />
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </nav>