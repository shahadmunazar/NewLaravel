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
    .dropdown-submenu > .dropdown-item {
    cursor: pointer;
}


    .dropdown-submenu.show > .dropdown-menu {
        display: block;
    }

    .dropdown-submenu > .dropdown-item::after {
        content: "›";
        float: right;
        margin-right: 5px;
    }

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
                    {{-- <a href="{{ route('services.index') }}" class="nav-item nav-link {{ request()->routeIs('services.index') ? 'active' : '' }}">Services</a> --}}

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">

                            <!-- Embedded Systems Solutions -->
                            <div class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="{{ route('services.embedded_systems') }}">Embedded Systems Solutions</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.firmware_development') }}">Embedded hardware and firmware design</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.linux_driver_development') }}">PCB layout and power electronics engineering</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.ux_ui_development') }}">Secure circuit design and embedded cybersecurity</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.ux_ui_development') }}">IoT device integration and cloud connectivity</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.ux_ui_development') }}">Medical device R&D and compliance consulting</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_software.ux_ui_development') }}">Automated testing frameworks during the development cycle</a></li>
                                </ul>
                            </div>

                            <!-- Industrial Automation & Robotics Solutions -->
                            <div class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="{{ route('services.industrial_automation') }}">Industrial Automation & Robotics Solutions</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.circuit_designing') }}">Welding robots, pick-and-place robots, and stack-making robots</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.pcb_designing') }}">Conveyor systems and robotic arms</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.mounting_pcb') }}">Custom Special Purpose Machines (SPM)</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.mounting_pcb') }}">Factory digitization and intelligent production lines</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.embedded_hardware.mounting_pcb') }}">Real-time monitoring, PLC programming, and SCADA integration</a></li>
                                </ul>
                            </div>

                            <!-- Software Development Solutions -->
                            <div class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="{{ route('services.software_development') }}">Software Development Solutions</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.orthopaedic_heat_pad') }}">School, college, and hospital management systems</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.electric_body_massager') }}">E-commerce and CRM platforms</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.electric_body_massager') }}">Manufacturing traceability and quality control software</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.electric_body_massager') }}">Android apps and full-stack web development</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.biomedical.electric_body_massager') }}">Cloud-based dashboards, APIs, and IoT apps</a></li>
                                </ul>
                            </div>

                            <!-- HVAC System Solutions -->
                            <div class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="{{ route('services.hvac_solutions') }}">HVAC System Solutions</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.led_light') }}">Centralized HVAC design, supply, and installation</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.concealed_light') }}">Split AC systems with Annual Maintenance Contracts (AMC)</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.tube_light') }}">Smart climate control systems</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.panel_light') }}">IAQ enhancement and energy recovery ventilation</a></li>
                                    <li><a class="dropdown-item" href="{{ route('services.lighting.panel_light') }}">System optimization, load calculation, and 24/7 emergency support</a></li>
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
        let clickTimer;

        toggle.addEventListener('click', function (e) {
            e.preventDefault(); // Always prevent single-click default

            const parent = toggle.parentElement;
            const submenu = parent.querySelector('.dropdown-menu');

            // Handle double click (navigate)
            if (clickTimer) {
                clearTimeout(clickTimer);
                clickTimer = null;
                window.location.href = toggle.getAttribute('href'); // Go to actual page
                return;
            }

            // First click: show submenu
            clickTimer = setTimeout(() => {
                clickTimer = null;

                // Hide others
                document.querySelectorAll('.dropdown-submenu').forEach(item => {
                    if (item !== parent) {
                        item.classList.remove('show');
                        const inner = item.querySelector('.dropdown-menu');
                        if (inner) inner.style.display = 'none';
                    }
                });

                // Toggle submenu
                const isVisible = submenu && submenu.style.display === 'block';
                submenu.style.display = isVisible ? 'none' : 'block';
                parent.classList.toggle('show', !isVisible);

            }, 250); // Wait to detect double-click
        });
    });

    // Reset submenus when parent dropdown closes
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

