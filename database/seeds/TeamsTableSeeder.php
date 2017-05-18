<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TeamsTableSeeder extends Seeder
{

    private const TEAMS = [
        [
            'name' => 'Atlético Clube Goianiense',
            'nickname' => 'Dragão',
            'acronym' => 'ACG',
            'coach' => 'Marcelo Cabo',
            'location' => 'Goiás, Brasil',
        ],
        [
            'name' => 'Clube Atlético Mineiro',
            'nickname' => 'Galo',
            'acronym' => 'CAM',
            'coach' => 'Roger Machado',
            'location' => 'Minas Gerais, Brasil',
        ],
        [
            'name' => 'Clube Atlético Paranaense',
            'nickname' => 'Furacão',
            'acronym' => 'CAP',
            'coach' => 'Paulo Autuori',
            'location' => 'Paraná, Brasil',
        ],
        [
            'name' => 'Avaí Futebol Clube',
            'nickname' => 'Leão da Ilha ',
            'acronym' => 'AFC',
            'coach' => 'Claudinei Oliveira',
            'location' => 'Santa Catarina, Brasil',
        ],
        [
            'name' => 'Esporte Clube Bahia',
            'nickname' => 'Tricolor Bahiano',
            'acronym' => 'ECB',
            'coach' => 'Guto Ferreira',
            'location' => 'Bahia, Brasil',
        ],
        [
            'name' => 'Botafogo de Futebol e Regatas',
            'nickname' => 'Fogão',
            'acronym' => 'BFR',
            'coach' => 'Jair Ventura',
            'location' => 'Rio de Janeiro, Brasil',
        ],
        [
            'name' => 'Associação Chapecoense de Futebol',
            'nickname' => 'Chape',
            'acronym' => 'ACF',
            'coach' => 'Vágner Mancini',
            'location' => 'Santa Catarina, Brasil',
        ],
        [
            'name' => 'Sport Club Corinthians Paulista',
            'nickname' => 'Timão ',
            'acronym' => 'SCCP',
            'coach' => 'Fábio Carille',
            'location' => 'São Paulo, Brasil',
        ],
        [
            'name' => 'Coritiba Foot Ball Club',
            'nickname' => 'Coxa',
            'acronym' => 'CFC',
            'coach' => 'Pachequinho',
            'location' => 'Paraná, Brasil',
        ],
        [
            'name' => 'Cruzeiro Esporte Clube',
            'nickname' => 'Raposa',
            'acronym' => 'CEC',
            'coach' => 'Mano Menezes',
            'location' => 'Minas Gerais, Brasil',
        ],[
            'name' => 'Clube de Regatas do Flamengo',
            'nickname' => 'Mengão',
            'acronym' => 'CRF',
            'coach' => 'Zé Ricardo',
            'location' => 'Rio de Janeiro, Brasil',
        ],
        [
            'name' => 'Fluminense FC',
            'nickname' => 'Flu',
            'acronym' => 'FFC',
            'coach' => 'Abel Braga',
            'location' => 'Rio de Janeiro, Brasil',
        ],
        [
            'name' => 'Grêmio Foot-Ball Porto Alegrense',
            'nickname' => 'Imortal Tricolor',
            'acronym' => 'GRE',
            'coach' => 'Renato Portaluppi',
            'location' => 'Rio Grande do Sul, Brasil',
        ],
        [
            'name' => 'Sociedade Esportiva Palmeiras',
            'nickname' => 'Porco',
            'acronym' => 'SEP',
            'coach' => 'Cuca',
            'location' => 'São Paulo, Brasil',
        ],
        [
            'name' => 'Associação Atlética Ponte Preta',
            'nickname' => 'Macaca',
            'acronym' => 'AAPP',
            'coach' => 'Gilson Kleina',
            'location' => 'São Paulo, Brasil',
        ],
        [
            'name' => 'São Paulo FC',
            'nickname' => 'Soberano',
            'acronym' => 'SPFC',
            'coach' => 'Rogério Ceni',
            'location' => 'São Paulo, Brasil',
        ],
        [
            'name' => 'Santos FC',
            'nickname' => 'Peixe',
            'acronym' => 'SFC',
            'coach' => 'Dorival Junior',
            'location' => 'São Paulo, Brasil',
        ],
        [
            'name' => 'Sport Club do Recife',
            'nickname' => 'Leão',
            'acronym' => 'SCR',
            'coach' => 'Daniel Paulista',
            'location' => 'Pernambuco, São Paulo',
        ],
        [
            'name' => 'CR Vasco da Gama',
            'nickname' => 'Cruzmaltino',
            'acronym' => 'CRVG',
            'coach' => 'Milton Mendes',
            'location' => 'Rio de Janeiro, Brasil',
        ],
        [
            'name' => 'Esporte Clube Vitória',
            'nickname' => 'Lẽao da Barra',
            'acronym' => 'ECV',
            'coach' => 'Dejan Petkovic',
            'location' => 'Bahia, São Paulo',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::TEAMS as $team) {
            \Illuminate\Support\Facades\DB::table('teams')->insert([
                'name' => $team['name'],
                'nickname' => $team['nickname'],
                'acronym' => $team['acronym'],
                'coach' => $team['coach'],
                'location' => $team['location'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
