<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            "logo_url" => "https://www.freepik.es/foto-gratis/logotipo-empresa-company-co-relieve-dorado_18836049.htm#query=mockup%20logo&position=0&from_view=search&track=ais&uuid=ff1b60be-ddec-4189-970b-b547e64e0921",
            "name"=> "company co",
        ]);

        Client::create([
            "logo_url" => "https://www.freepik.es/fotos-premium/diseno-logotipo-3d_58408978.htm#query=mockup%20logo&position=8&from_view=search&track=ais&uuid=ff1b60be-ddec-4189-970b-b547e64e0921",
            "name"=> "panda",
        ]);

        Client::create([
            "logo_url" => "https://www.freepik.es/foto-gratis/3d-render-vs-company-metal-letter-logo-pluma-herramienta-creada-trazado-recorte-incluido-jpeg-facil-componer_20496558.htm#query=mockup%20logo&position=4&from_view=search&track=ais&uuid=ff1b60be-ddec-4189-970b-b547e64e0921",
            "name"=> "vd",
        ]);
    }
}
