<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use App\Models\TokenContract;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $predefinedTokens = [
        ['name' => 'CrystalDrive', 'symbol' => 'CRD', 'token_address' => '0xf33c13a871b8132827D0370359024726d137D98F', 'decimals' => 18],
        ['name' => 'CyberSpark', 'symbol' => 'CSP', 'token_address' => '0xdc52fd9c0F960059932E1bcD521B3C588134f62E', 'decimals' => 18],
        ['name' => 'EchoChain', 'symbol' => 'ECH', 'token_address' => '0x1Bdd01191B1c4134D2071B39ea846b9E1Ac2De2e', 'decimals' => 18],
        ['name' => 'NeoNova', 'symbol' => 'NOV', 'token_address' => '0xB55506abfF9212E3447Ca7942A8c75b77FAd61A7', 'decimals' => 18],
        ['name' => 'NimbusNet', 'symbol' => 'NMB', 'token_address' => '0x78490E03B50bec0922397DE03966CcbA133dD84D', 'decimals' => 18],
        ['name' => 'PrimeFlow', 'symbol' => 'PRM', 'token_address' => '0x4E484a9329006770f3b0090F31e96FbD054b9e10', 'decimals' => 18],
        ['name' => 'Quantum', 'symbol' => 'QTM', 'token_address' => '0xE659d196348ff53Db02a0989Fe513c60ba6B09D1', 'decimals' => 18],
        ['name' => 'StellarPulse', 'symbol' => 'STP', 'token_address' => '0x48BD931FF170CCF38190D2A617C133Ab28fc1ef5', 'decimals' => 18],
        ['name' => 'VertexCoin', 'symbol' => 'VTX', 'token_address' => '0xEa2616479716cc345a7797C71639A306451A9AC5', 'decimals' => 18],
        ['name' => 'ZenithToken', 'symbol' => 'ZNT', 'token_address' => '0xA9DE06F5692AFFe05A5661708cF59F14c2BA19c4', 'decimals' => 18],
        ['name' => 'SolarFlare', 'symbol' => 'SFL', 'token_address' => '0x9429708fD69C596037bAF376C2b2e0cd105Cd34a', 'decimals' => 18],
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        foreach ($this->predefinedTokens as $token) {
            TokenContract::factory()->create([
                'name' => $token['name'],
                'symbol' => $token['symbol'],
                'decimals' => 18,
                'token_address_id' => Address::factory()->create(['address' => $token['token_address']])
            ]);
        }
    }
}
