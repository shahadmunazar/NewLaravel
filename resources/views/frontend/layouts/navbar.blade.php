<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        margin-top: -1px;
        z-index: 1000;
    }

    .dropdown-submenu.show .dropdown-menu {
        display: block;
    }

    .dropdown-submenu > .dropdown-item::after {
        content: "›";
        float: right;
        margin-right: 5px;
    }

    /* Don't use hover to show submenu anymore */
    /* .nav-item.dropdown:hover > .dropdown-menu {
        display: block;
    } */

    /* Optional: force dropdown to behave only on click */
    .dropdown-menu {
        transition: none !important;
    }
</style>

<div class="container-fluid bg-white sticky-top wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home.index') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">TC SMART</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home.index') }}" class="nav-item nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about_us.index') }}" class="nav-item nav-link {{ request()->routeIs('about_us.index') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services.index') }}" class="nav-item nav-link {{ request()->routeIs('services.index') ? 'active' : '' }}">Services</a>

                    <!-- Products Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">

                            <!-- Category 1: Datchik IOT Product -->
                            <div class="dropdown-submenu">
    <a href="#" class="dropdown-item dropdown-toggle">TC IOT Product</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('products.iot.customized_gas_detector') }}">Customized Gas Detector</a></li>
    </ul>
</div>

                            <!-- Category 2: Datchik Smart Solution -->
                            <div class="dropdown-submenu" id="smart-solution-products">
                                <a class="dropdown-item dropdown-toggle" href="#">TC Smart Solution</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('products.smart_solution.smart_watch') }}">Smart Watch</a></li>
                                    <li><a class="dropdown-item" href="{{ route('products.smart_solution.datchik_game') }}">Datchik Game</a></li>
                                </ul>
                            </div>

                            <!-- Category 3: Datchik Biomedical Product -->
                            <div class="dropdown-submenu" id="biomedical-products">
                                <a class="dropdown-item dropdown-toggle" href="#">TC Biomedical Product</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('products.biomedical.orthopaedic_heat_pad') }}">Orthopaedic Heat Pad Kit</a></li>
                                    <li><a class="dropdown-item" href="{{ route('products.biomedical.electric_body_massager') }}">Electric Body Massager</a></li>
                                </ul>
                            </div>

                            <!-- Category 4: Datchik Lighting Product -->
                            <div class="dropdown-submenu" id="lighting-products">
                                <a class="dropdown-item dropdown-toggle" href="#">TC Lighting Product</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('products.lighting.led_light') }}">LED Light</a></li>
                                    <li><a class="dropdown-item" href="{{ route('products.lighting.concealed_light') }}">Concealed Light</a></li>
                                    <li><a class="dropdown-item" href="{{ route('products.lighting.tube_light') }}">Tube Light</a></li>
                                    <li><a class="dropdown-item" href="{{ route('products.lighting.panel_light') }}">Panel Light</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">

                            <!-- Category 1: Embedded Software Development Services -->
                            <div class="dropdown-submenu" id="software-services">
                                <a class="dropdown-item dropdown-toggle" href="#">Embedded Software Development Services</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.firmware_development') }}">Firmware Development</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.linux_driver_development') }}">Linux Based Driver Development</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.ux_ui_development') }}">UX and UI Development</a></li>
                                </ul>
                            </div>

                            <!-- Category 2: Embedded Hardware Development Services -->
                            <div class="dropdown-submenu" id="hardware-services">
                                <a class="dropdown-item dropdown-toggle" href="#">Embedded Hardware Development Services</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.circuit_designing') }}">Circuit Designing</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.pcb_designing') }}">PCB Designing & Layouting</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.mounting_pcb') }}">Mounting of PCB (SMD and SMT Assembly and disassembly)</a></li>
                                </ul>
                            </div>

                            <!-- Category 3: Datchik Biomedical Services -->
                            <div class="dropdown-submenu" id="biomedical-services">
                                <a class="dropdown-item dropdown-toggle" href="#">TC Biomedical Product</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.orthopaedic_heat_pad') }}">Orthopaedic Heat Pad Kit</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.electric_body_massager') }}">Electric Body Massager</a></li>
                                </ul>
                            </div>

                            <!-- Category 4: Datchik Lighting Product -->
                            <div class="dropdown-submenu" id="lighting-services">
                                <a class="dropdown-item dropdown-toggle" href="#">TC Lighting Product</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.led_light') }}">LED Light</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.concealed_light') }}">Concealed Light</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.tube_light') }}">Tube Light</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.panel_light') }}">Panel Light</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <a href="{{ route('contact.index') }}" class="nav-item nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">Contact</a>
                </div>

                <div class="ms-auto d-none d-lg-block">
                    <a href="{{ route('appointment.index') }}" class="btn btn-primary py-2 px-3">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const submenuToggles = document.querySelectorAll('.dropdown-submenu > .dropdown-item.dropdown-toggle');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = toggle.parentElement;
            const submenu = parent.querySelector('.dropdown-menu');

            // Hide all other submenus first
            document.querySelectorAll('.dropdown-submenu').forEach(submenuItem => {
                if (submenuItem !== parent) {
                    submenuItem.classList.remove('show');
                    const sub = submenuItem.querySelector('.dropdown-menu');
                    if (sub) sub.style.display = 'none';
                }
            });

            // Toggle this submenu
            const isVisible = submenu.style.display === 'block';
            if (isVisible) {
                submenu.style.display = 'none';
                parent.classList.remove('show');
            } else {
                submenu.style.display = 'block';
                parent.classList.add('show');
            }
        });
    });

    // Reset all submenus when the main dropdown is closed
    document.querySelectorAll('.nav-item.dropdown').forEach(dropdown => {
        dropdown.addEventListener('hidden.bs.dropdown', function () {
            dropdown.querySelectorAll('.dropdown-submenu').forEach(submenu => {
                submenu.classList.remove('show');
                const subMenuEl = submenu.querySelector('.dropdown-menu');
                if (subMenuEl) subMenuEl.style.display = 'none';
            });
        });
    });
});
</script>


