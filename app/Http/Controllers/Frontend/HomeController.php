<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDO;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }

    public function store(Request $request){

    }

    public function about_us(){
        return view('frontend.home.aboutus');
    }
    public function services()
    {
        return view('frontend.home.services');
    }
    public function features()
    {
        return view('frontend.home.features');
    }
    public function teams()
    {
        return view('frontend.home.teams');
    }
    public function testimonials()
    {
        return view('frontend.home.testimonials');
    }
    public function appointment()
    {
        return view('frontend.home.appointment');
    }
    public function contact()
    {
        return view('frontend.home.contact');
    }
    // Products Methods
    public function iot_customized_gas_detector()
    {
        return view('products.iot.customized_gas_detector');
    }

    public function smart_watch()
    {
        return view('products.smart_solution.smart_watch');
    }

    public function datchik_game()
    {
        return view('products.smart_solution.datchik_game');
    }

    public function orthopaedic_heat_pad()
    {
        return view('products.biomedical.orthopaedic_heat_pad');
    }

    public function electric_body_massager()
    {
        return view('products.biomedical.electric_body_massager');
    }

    public function led_light()
    {
        return view('products.lighting.led_light');
    }

    public function concealed_light()
    {
        return view('products.lighting.concealed_light');
    }

    public function tube_light()
    {
        return view('products.lighting.tube_light');
    }

    public function panel_light()
    {
        return view('products.lighting.panel_light');
    }

    // Services Methods
    public function firmware_development()
    {
        return view('services.embedded_software.firmware_development');
    }

    public function linux_driver_development()
    {
        return view('services.embedded_software.linux_driver_development');
    }

    public function ux_ui_development()
    {
        return view('services.embedded_software.ux_ui_development');
    }

    public function circuit_designing()
    {
        return view('services.embedded_hardware.circuit_designing');
    }

    public function pcb_designing()
    {
        return view('services.embedded_hardware.pcb_designing');
    }

    public function mounting_pcb()
    {
        return view('services.embedded_hardware.mounting_pcb');
    }

    public function biomedical_orthopaedic_heat_pad()
    {
        return view('services.biomedical.orthopaedic_heat_pad');
    }

    public function biomedical_electric_body_massager()
    {
        return view('services.biomedical.electric_body_massager');
    }

    public function lighting_led_light()
    {
        return view('services.lighting.led_light');
    }

    public function lighting_concealed_light()
    {
        return view('services.lighting.concealed_light');
    }

    public function lighting_tube_light()
    {
        return view('services.lighting.tube_light');
    }

    public function lighting_panel_light()
    {
        return view('services.lighting.panel_light');
    }

    public function embeddedSystems()
{
    return view('services.embedded_systems');
}

public function industrialAutomation()
{
    return view('services.industrial_automation');
}

public function softwareDevelopment()
{
    return view('services.software_development');
}

public function hvacSolutions()
{
    return view('services.hvac_solutions');
}


    
}
