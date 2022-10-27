
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" aria-label="">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href={{Route('blog.index')}}>
                        <div class="sb-nav-link-icon"><em class="fas fa-tachometer-alt"></em></div>
                        Blog
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><em class="fas fa-columns"></em></div>
                        Posts
                        <div class="sb-sidenav-collapse-arrow"><em class="fas fa-angle-down"></em></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav" aria-label="">
                            <a class="nav-link" href={{ Route('blog.create') }}>Create Post</a>
                            <a class="nav-link" href={{ Route('blog.index') }}>View Post</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><em class="fas fa-book-open"></em></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><em class="fas fa-angle-down"></em></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages" aria-label="">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><em class="fas fa-angle-down"></em></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav" aria-label="">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>

                        </nav>
                    </div>

            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as: {{ Auth::user()->name }}</div>
            </div>
        </nav>
    </div>
