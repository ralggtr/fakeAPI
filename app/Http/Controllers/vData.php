<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $someJSON = "";
    public $someArray = [];

    public function index()
    {
        $someJSON = 
        '{"objectIdFieldName":"OBJECTID","uniqueIdField":{"name":"OBJECTID","isSystemMaintained":true},"globalIdFieldName":"",'.
        '"geometryType":"esriGeometryPoint","spatialReference":{"wkid":4326,"latestWkid":4326},'.
        '"fields":[{"name":"OBJECTID","type":"esriFieldTypeOID","alias":"OBJECTID","sqlType":"sqlTypeOther","domain":null,"defaultValue":null},'.
        '{"name":"Province_State","type":"esriFieldTypeString","alias":"Province/State","sqlType":"sqlTypeOther",'.
        '"length":8000,"domain":null,"defaultValue":null},{"name":"Country_Region","type":"esriFieldTypeString","alias":"Country/Region",'.
        '"sqlType":"sqlTypeOther","length":8000,"domain":null,"defaultValue":null},{"name":"Last_Update","type":"esriFieldTypeDate",'.
        '"alias":"Last Update","sqlType":"sqlTypeOther","length":8,"domain":null,"defaultValue":null},{"name":"Lat","type":"esriFieldTypeDouble",'.
        '"alias":"Lat","sqlType":"sqlTypeOther","domain":null,"defaultValue":null},{"name":"Long_","type":"esriFieldTypeDouble","alias":"Long",'.
        '"sqlType":"sqlTypeOther","domain":null,"defaultValue":null},{"name":"Confirmed","type":"esriFieldTypeInteger",'.
        '"alias":"Confirmed","sqlType":"sqlTypeOther","domain":null,"defaultValue":null},'.
        '{"name":"Recovered","type":"esriFieldTypeInteger","alias":"Recovered","sqlType":"sqlTypeOther","domain":null,"defaultValue":null},'.
        '{"name":"Deaths","type":"esriFieldTypeInteger","alias":"Deaths","sqlType":"sqlTypeOther","domain":null,"defaultValue":null},'.
        '{"name":"Active","type":"esriFieldTypeInteger","alias":"Active","sqlType":"sqlTypeOther","domain":null,"defaultValue":null},'.
        '{"name":"Admin2","type":"esriFieldTypeString","alias":"County","sqlType":"sqlTypeOther","length":8000,"domain":null,"defaultValue":null},'.
        '{"name":"FIPS","type":"esriFieldTypeString","alias":"FIPS","sqlType":"sqlTypeOther","length":5,"domain":null,"defaultValue":null},'.
        '{"name":"Combined_Key","type":"esriFieldTypeString","alias":"Combined_Key","sqlType":"sqlTypeOther","length":8000,"domain":null,"defaultValue":null}],"features":['.
        '{"attributes":{"OBJECTID":241,"Province_State":null,"Country_Region":"Guatemala","Last_Update":1619461271000,"Lat":15.7835,"Long_":-90.2308,'.
        '"Confirmed":221698,"Recovered":196657,"Deaths":7410,"Active":17631,"Admin2":null,"FIPS":null,"Combined_Key":"Guatemala"},'.
        '"geometry":{"x":-90.230799999999988,"y":15.78350000000006}}'.
        ']}'; 

        $someArray = json_decode($someJSON, true);


        return response()->json( [$someArray] );
    }

    public function indexGT()
    {
        $someJSON = 
        '{'.
            '"total_vacunas_disponibles": 10000,'.
            '"total_vacunas_aplicadas": 1000,'.
            '"total_personas_registradas": 10000,'.
            '"puestos": ['.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "1",'.
                '"puesto": "PARQUE DE LA INDUSTRIA",'.
                '"latitud": "14.609246456896187",'.
                '"longitud": "-90.52378248977259",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "2",'.
                '"puesto": "CENTRO 2",'.
                '"latitud": "14.655183595422447",'.
                '"longitud": "-90.51587198250367",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "3",'.
                '"puesto": "CENTRO 3",'.
                '"latitud": "14.639948280492522",'.
                '"longitud": "-90.5208795321015",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "4",'.
                '"puesto": "CENTRO 4",'.
                '"latitud": "14.619521790734463",'.
                '"longitud": "-90.5144496263077",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "5",'.
                '"puesto": "CENTRO 5",'.
                '"latitud": "14.63263338755374",'.
                '"longitud": "-90.49519865835705",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "6",'.
                '"puesto": "CENTRO 6",'.
                '"latitud": "14.676425318024263",'.
                '"longitud": "-90.488261698585",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "7",'.
                '"puesto": "CENTRO 7",'.
                '"latitud": "14.638984137083149",'.
                '"longitud": "-90.54097351866461",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "8",'.
                '"puesto": "CENTRO 8",'.
                '"latitud": "14.611298630609962",'.
                '"longitud": "-90.53051677077347",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "9",'.
                '"puesto": "CENTRO 9",'.
                '"latitud": "14.606105792605955",'.
                '"longitud": "-90.51715227891476",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "10",'.
                '"puesto": "CENTRO 10",'.
                '"latitud": "14.591270306663615",'.
                '"longitud": "-90.50059209774899",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '}'.
            ']'.
          '}';


          $someArray = json_decode($someJSON, true);


          return response()->json( [$someArray] );

    }


    public function index2GT()
    {
        $someJSON = 
        '{'.
            '"total_vacunas_disponibles": 10000,'.
            '"total_vacunas_aplicadas": 1000,'.
            '"total_personas_registradas": 10000,'.
            '"puestos": ['.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "1",'.
                '"puesto": "PARQUE DE LA INDUSTRIA",'.
                '"latitud": "14.609246456896187",'.
                '"longitud": "-90.52378248977259",'.
                '"vacunas_disponibles": 800,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 800'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "2",'.
                '"puesto": "CENTRO 2",'.
                '"latitud": "14.655183595422447",'.
                '"longitud": "-90.51587198250367",'.
                '"vacunas_disponibles": 800,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 800'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "3",'.
                '"puesto": "CENTRO 3",'.
                '"latitud": "14.639948280492522",'.
                '"longitud": "-90.5208795321015",'.
                '"vacunas_disponibles": 800,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 800'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "4",'.
                '"puesto": "CENTRO 4",'.
                '"latitud": "14.619521790734463",'.
                '"longitud": "-90.5144496263077",'.
                '"vacunas_disponibles": 800,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 800'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "5",'.
                '"puesto": "CENTRO 5",'.
                '"latitud": "14.63263338755374",'.
                '"longitud": "-90.49519865835705",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "6",'.
                '"puesto": "CENTRO 6",'.
                '"latitud": "14.676425318024263",'.
                '"longitud": "-90.488261698585",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "7",'.
                '"puesto": "CENTRO 7",'.
                '"latitud": "14.638984137083149",'.
                '"longitud": "-90.54097351866461",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "8",'.
                '"puesto": "CENTRO 8",'.
                '"latitud": "14.611298630609962",'.
                '"longitud": "-90.53051677077347",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "9",'.
                '"puesto": "CENTRO 9",'.
                '"latitud": "14.606105792605955",'.
                '"longitud": "-90.51715227891476",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '},'.
              '{'.
                '"departamento": "Guatemala",'.
                '"municipio": "Guatemala",'.
                '"zona": "10",'.
                '"puesto": "CENTRO 10",'.
                '"latitud": "14.591270306663615",'.
                '"longitud": "-90.50059209774899",'.
                '"vacunas_disponibles": 10000,'.
                '"vacunas_aplicadas": 100,'.
                '"personas_registradas": 10000'.
              '}'.
            ']'.
          '}';


          $someArray = json_decode($someJSON, true);


          return response()->json( [$someArray] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
