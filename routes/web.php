<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

// Static Pages
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us.index');
Route::get('/services', [HomeController::class, 'services'])->name('services.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.index');

// Products
Route::prefix('products')->group(function () {
    // TC IOT Product
    Route::get('iot/customized-gas-detector', [HomeController::class, 'iot_customized_gas_detector'])->name('products.iot.customized_gas_detector');
    
    // TC Smart Solution
    Route::get('smart-solution/smart-watch', [HomeController::class, 'smart_watch'])->name('products.smart_solution.smart_watch');
    Route::get('smart-solution/datchik-game', [HomeController::class, 'datchik_game'])->name('products.smart_solution.datchik_game');
    
    // TC Biomedical Product
    Route::get('biomedical/orthopaedic-heat-pad', [HomeController::class, 'orthopaedic_heat_pad'])->name('products.biomedical.orthopaedic_heat_pad');
    Route::get('biomedical/electric-body-massager', [HomeController::class, 'electric_body_massager'])->name('products.biomedical.electric_body_massager');
    
    // TC Lighting Product
    Route::get('lighting/led-light', [HomeController::class, 'led_light'])->name('products.lighting.led_light');
    Route::get('lighting/concealed-light', [HomeController::class, 'concealed_light'])->name('products.lighting.concealed_light');
    Route::get('lighting/tube-light', [HomeController::class, 'tube_light'])->name('products.lighting.tube_light');
    Route::get('lighting/panel-light', [HomeController::class, 'panel_light'])->name('products.lighting.panel_light');
});

// Services
Route::prefix('services')->group(function () {
    // Embedded Software Development Services

    // Top-level service category routes
Route::get('/embedded-systems', [HomeController::class, 'embeddedSystems'])->name('services.embedded_systems');
Route::get('/industrial-automation', [HomeController::class, 'industrialAutomation'])->name('services.industrial_automation');
Route::get('/software-development', [HomeController::class, 'softwareDevelopment'])->name('services.software_development');
Route::get('/hvac-solutions', [HomeController::class, 'hvacSolutions'])->name('services.hvac_solutions');


    Route::get('embedded-software/firmware-development', [HomeController::class, 'firmware_development'])->name('services.embedded_software.firmware_development');
    Route::get('embedded-software/linux-driver-development', [HomeController::class, 'linux_driver_development'])->name('services.embedded_software.linux_driver_development');
    Route::get('embedded-software/ux-ui-development', [HomeController::class, 'ux_ui_development'])->name('services.embedded_software.ux_ui_development');
    
    // Embedded Hardware Development Services
    Route::get('embedded-hardware/circuit-designing', [HomeController::class, 'circuit_designing'])->name('services.embedded_hardware.circuit_designing');
    Route::get('embedded-hardware/pcb-designing', [HomeController::class, 'pcb_designing'])->name('services.embedded_hardware.pcb_designing');
    Route::get('embedded-hardware/mounting-pcb', [HomeController::class, 'mounting_pcb'])->name('services.embedded_hardware.mounting_pcb');
    
    // Datchik Biomedical Services
    Route::get('biomedical/orthopaedic-heat-pad', [HomeController::class, 'biomedical_orthopaedic_heat_pad'])->name('services.biomedical.orthopaedic_heat_pad');
    Route::get('biomedical/electric-body-massager', [HomeController::class, 'biomedical_electric_body_massager'])->name('services.biomedical.electric_body_massager');
    
    // Datchik Lighting Services
    Route::get('lighting/led-light', [HomeController::class, 'lighting_led_light'])->name('services.lighting.led_light');
    Route::get('lighting/concealed-light', [HomeController::class, 'lighting_concealed_light'])->name('services.lighting.concealed_light');
    Route::get('lighting/tube-light', [HomeController::class, 'lighting_tube_light'])->name('services.lighting.tube_light');
    Route::get('lighting/panel-light', [HomeController::class, 'lighting_panel_light'])->name('services.lighting.panel_light');
});

Route::get('/404', function () {
    return view('errors.404');
})->name('404');

Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment.index');

Route::post('/appointment', [HomeController::class, 'store'])->name('appointment.store');
