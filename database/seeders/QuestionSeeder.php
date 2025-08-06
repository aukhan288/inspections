<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $questions = [
            [
                'measure_id'     => 1,
                'content'       => 'Help me with the basics',
                'type'  => 'text',
            ],
            [
                'measure_id'     => 1,
                'content'       => 'Is the electrical panel properly labeled?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 1,
                'content'       => 'Are there any exposed wires?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 1,
                'content'       => 'Do all outlets work properly?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 2,
                'content'       => 'Are there signs of water leakage?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 2,
                'content'       => 'Is water pressure adequate?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 2,
                'content'       => 'Are fixtures securely mounted?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 3,
                'content'       => 'Are there cracks in the foundation?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 3,
                'content'       => 'Is the roof structure sound?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 3,
                'content'       => 'Are walls properly aligned?',
                'type'  => 'Yes/No',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Where pipework has either been replaced, exposed, or been made accessible as part of the work within an unheated space within or outside of the building envelope, has this been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'If holes or openings have been made through the fabric of the premises due to the installation of a new boiler, have they been made good? (including condensate pipe, pressure relief valve, gas flue terminals)',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Does the boiler or heat pump produce hot water for the central heating system?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'If the boiler or heat pump is designed to produce domestic hot water, is the boiler or heat pump producing domestic hot water?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'If original heating controls remain, do they function correctly with the boiler?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Do the heating controls installed encompass a programmer, thermostat and TRVs to all radiators except those in the room with the thermostat?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => "Has the boiler been installed as per manufacturer's instructions and other guidance? Has a Carbon Monoxide Alarm been fitted in accordance with Approved Document J?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 4,
                'content'       => 'Do you believe that there are any other safety related issues with the installation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Is the installation an Electric Storage Heater as opposed to a panel heater or other kind of heater?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Does the Electric Storage Heater activate and produce heat?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Are all storage heaters fitted with an automatic charge control?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Is the fan on fan-assisted storage heater(s) controlled by a thermostat?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Is the property on an Economy 7 or differential off-peak tariff?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Where the property is on a differential off-peak tariff, are the Electric Storage Heaters connected to a separate consumer unit?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 5,
                'content'       => 'Do you believe that there are any other safety related issues with the installation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Is there any evidence of timbers suffering from rot, infestation or damp?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Where a metal structural roof members exists, are they free from visible signs of corrosion?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Are electric cables safeguarded in accordance with PAS2030?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Are there any clear and visible signs of water penetration?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Are there any clear and visible signs of leakage from water system components, e.g. pipework, cisterns, tanks, etc.',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Is the thickness of insulation consistent throughout the loft area and at the required depth to achieve the U-values stated within Building Regulations?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Are mechanical extract ventilators intermittent or continuous?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 6,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Has insulation been installed to all dormer windows, cheek walls and ceilings within the room-inroof?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Has insulation been installed to all party walls within the room-in-roof that are either cavity walls or solid walls bordering an unheated space?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Have any and all working pipes and tanks been properly insulated? (including beneath the tank and overflows)',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Have all hatches existing and newly installed as part of the room-in-roof insulation been insulated as specified in the relevant annex of PAS 2030',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Has insulation been installed to all gable walls within the room-in-roof?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'If wet room(s) have been omitted do they have a safe heating system that can achieve a minimum of 18 degrees C ?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'If wet room(s) have been omitted, has CONTINUOUS extract ventilation been installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Is the external condition of the property suitable for IWI to be installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Are mechanical extract ventilators intermittent or continuous?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 7,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Has the insulation been tightly fixed between joists to avoid any gaps?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Has insulation been installed in the gap between the last joist and external walls?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Has insulation been applied to working pipes below the insulation in line with current standards?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Have all gaps in the floor around service penetrations, e.g. pipework, cabling etc., been sealed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is the moisture content of the timber joists less than 20%?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is there a fully functional DPC in the walls surrounding the area being insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is there a functional DPC beneath timbers that rest on supporting walls?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Does the insulation material bridge the DPC?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Where required (e.g. for foil based systems) has it been installed in an air tight manner with all joints and perimeter edges fully sealed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is there 150mm clearance between the joists, or proposed lowest level of the insulation and the highest point of the substrate?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Does Cross-flow ventilation exist beneath the floors in the form of openings on opposite walls meeting the requirements of Part C of the Building Regulations?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Where the subfloor space meets the definition of a basement does the whole ceiling provide 30 mins minimum fire resistance in line with Part B of the Building Regulations, or for measures installed in Scotland, the Scottish equivalent?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is there any evidence of damp, rot, mould, infestation or other issues with timber exposed to the underfloor space?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Are the floorboards in good condition and firmly fixed, without any significant cracks, splits and missing fixings?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => "Is the fixing method, in line with the System Designer's specification and does it conform to the requirements of the BEIS Guidance for Best Practice Retrofit Insulation",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Are mechanical extract ventilators intermittent or continuous?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 8,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Are all roof areas (loft & flat) and exterior facing cavity walls insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'What type of FTCH measure has been installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Where pipework has either been replaced, exposed, or been made accessible as part of the work within an unheated space within or outside of the building envelope, has this been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'If holes or openings have been made through the fabric of the premises due to the installation of a new boiler, have they been made good? (including condensate pipe, pressure relief valve, gas flue terminals)',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Does the boiler or heat pump produce hot water for the central heating system?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'If the boiler or heat pump is designed to produce domestic hot water, is the boiler or heat pump producing domestic hot water?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'If original heating controls remain, do they function correctly with the boiler?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Do the heating controls installed encompass a programmer, thermostat and TRVs to all radiators except those in the room with the thermostat?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => "Has the boiler been installed as per manufacturer's instructions and other guidance? Has a Carbon Monoxide Alarm been fitted in accordance with Approved Document J?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 9,
                'content'       => 'Do you believe that there are any other safety related issues with the installation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Are the standard heating controls, smart thermostat, compensation device or TRVs (whichever is applicable) linked to a functioning heating system?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Do the standard heating controls or smart thermostat turn on the domestic heating system?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => "Have any outdoor sensors required by the compensation device been installed in line with the manufacturer's instructions?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Does the installed smart thermostat meet the criteria of the boiler plus standard (i.e. does it feature automation and optimisation) and does it feature connectivity?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Do the standard heating controls installed encompass a programmer, thermostat and TRVs to all radiators except those in the room with the thermostat?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Are TRVs installed to all radiators except those in the room with the thermostat, and is a smart thermostat present?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 10,
                'content'       => 'Do you believe that there are any other safety related issues with the installation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => "Is the measure installed as specified in the appropriate product certificate and/or system designer's instructions?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Is the insulation sealed around all adjoining boards, walls, ceilings and floors?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Is the insulation continued 400mm along all party and solid partition walls where required by the system design?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Have all services (e.g. light switches, sockets, radiators) been removed, insulated behind and repositioned inside the heat loss area?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Has the system been sealed fully at edges, corners and junctions to prevent the ingress of moisture?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'If wet room(s) have been omitted do they have a safe heating system that can achieve a minimum of 18 degrees C ?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'If wet room(s) have been omitted, has CONTINUOUS extract ventilation been installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Is the external condition of the property suitable for IWI to be installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'IWI - Are mechanical extract ventilators intermittent or continuous? (intermittent Non Complaint if wet rooms omitted)',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 11,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Is there a MINIMUM of 40mm roof overhang on all walls that have been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Where services (e.g. gas, electric, water, telecommunications) have penetrated the insulation board have these been sealed appropriately?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Are there any visible signs of water penetration?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Has the render/cladding been fully applied?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => "Where appropriate, have window and door reveals been insulated in line with the system designer's specifications?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => "Have all exterior facing wall areas (above DPC) been insulated in line with the system designer's specifications to reduce the effects of thermal bridging?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => "Have all exterior window and door seals been applied and finished off in line with the system designer's specifications?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Where necessary, has the roofline been extended or a SWIGA approved Roofline Closure System (RCS) been installed in accordance with the guidelines to ensure there is no water ingress behind the insulation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Is there evidence of damage to the EWI fabric as a result of water ingress?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Are mechanical extract ventilators intermittent or continuous?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 12,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => "Is the insulation material suitable for use with the property's exposure level to wind driven rain?",
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Does the form of the construction of the property suggest that it was suitable for the material that has been installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Does the current condition of the property suggest that it was suitable for the material that has been installed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Does the drilling pattern conform to the appropriate materials compliance certificate?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Have all injection holes been filled?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Have all vents been safeguarded and have redundant vents been sealed?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Is there any evidence of the escape of insulation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Are there any signs of damp or condensation?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Are mechanical extract ventilators intermittent or continuous?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 13,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Have all avoidable thermal bridges / heat loss areas which could have been insulated, been insulated?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Has 100% of the measure been installed where possible?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Have high voltage cables been safeguarded?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Have fire rated caps been fitted to downlights where required?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Is the thickness of insulation consistent throughout the loft area?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Has insulation been close butted?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Has insulation been cross laid to prevent cold bridging?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Has the loft hatch been insulated as specified in in the relevant PAS 2030 annex?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Has the loft hatch been draught proofed as specified in the relevant PAS 2030 annex?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Where down lighters or services have been fitted through the existing ceiling, have any measures been taken to prevent air leakage around down lights into roof void?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Have any and all working pipes and tanks been properly insulated? (including beneath the tank and overflows)',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Loft insulation with less than 100mm of preexisting insulation, is there a pre-existing insulation level declaration present?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Are mechanical extract ventilators intermittent or continuous?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Are extract ventilation terminals and fans (not including cooker hoods) a. As high as practicable in the room and b. A maximum of 400mm below the ceiling?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Is background ventilation present in each habitable room (e.g. trickle vents / room ventilators)?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Is the ventilation in all habitable rooms controllable?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Are background ventilators at least 1700mm above floor level, to reduce cold draughts, but still easy for the occupant to reach?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Do background ventilators have a minimum equivalent area of 4000mm2 and are not present in wet rooms?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Does the provision of ventilation in the property meet the requirements of the relevant version of PAS?',
                'type'  => 'boolean',
            ],
            [
                'measure_id'     => 14,
                'content'       => 'Do any faults specific to the measure installed present an immediate risk to the occupier or the property?',
                'type'  => 'boolean',
            ],
        ];
        

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
