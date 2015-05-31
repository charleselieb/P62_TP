<?php
//Array pour la page index.php
$index_gamesArticles =array(
	'The witcher' => array(
		'rpg' => array(
			'20$' => array(
				'index_vg_01' => array(
					'assets/img/witcher_big.jpg' => array(
						'?game=witcher' => 'big'
					),
				),
			),
		),
	),
	'Invisible' => array(
		'fps' => array(
			'10$' => array(
				'index_vg_02' => array(
					'assets/img/invisible_small.jpg' => array(
						'?game=invisible' => 'medium'
					),
				),
			),
		),
	),
	'Metro redux' => array(
		'fps' => array(
			'40$' => array(
				'index_vg_03' => array(
					'assets/img/metro_small.jpg' => array(
						'?game=metro' => 'small'
					),
				),
			),
		),
	),
	'Games of Thrones' => array(
		'aventure' => array(
			'40$' => array(
				'index_vg_04' => array(
					'assets/img/got_small.jpg' => array(
						'?game=got' => 'small'
					),
				),
			),
		),
	),
	'Rebuild3' => array(
		'aventure' => array(
			'30$' => array(
				'index_vg_05' => array(
					'assets/img/rebuild_small.jpg' => array(
						'?game=rebuild' => 'small'
					),
				),
			),
		),
	),
	'Dragon age' => array(
		'rpg' => array(
			'60$' => array(
				'index_vg_06' => array(
					'assets/img/dragon_small.jpg' => array(
						'?game=dragon' => 'small'
					),
				),
			),
		),
	),
	'Borderlands : Pre sequel' => array(
		'fps' => array(
			'40$' => array(
				'index_vg_07' => array(
					'assets/img/bdlands_small.jpg' => array(
						'?game=got' => 'small'
					),
				),
			),
		),
	),
);

//Array pour la page games
$games_gamesArticles = array(
		'vg_01' => array(
				'title' => 'The Witcher',
				'genre' => 'rpg',
				'price' => '20$',
				'img' => 'assets/img/witcher_big.jpg',
				'url' => '?game=witcher',
			),
		'vg_02' => array(
				'title' => 'Baldurs Gate',
				'genre' => 'rpg',
				'price' => '30$',
				'img' => 'assets/img/baldur_small.jpg',
				'url' => '?game=baldursgate',
			),
		'vg_03' => array(
				'title' => 'Neverwinter Nights',
				'genre' => 'rpg',
				'price' => '40$',
				'img' => 'assets/img/neverwinter_small.jpg',
				'url' => '?game=neverwinter',
			),
		'vg_04' => array(
				'title' => 'Dungeon Keeper 2',
				'genre' => 'strategy',
				'price' => '45$',
				'img' => 'assets/img/dungeonkeeper_small.jpg',
				'url' => '?game=dungeonkeeper2',
			),
		'vg_05' => array(
				'title' => 'Alpha Centauri',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/alphacentauri_small.jpg',
				'url' => '?game=alphacentauri',
			),
		'vg_06' => array(
				'title' => 'Duke Nukem 3D',
				'genre' => 'fps',
				'price' => '35$',
				'img' => 'assets/img/dukenukem_small.jpg',
				'url' => '?game=dukenukem',
			),
		'vg_07' => array(
				'title' => 'Dragon Shard',
				'genre' => 'rpg',
				'price' => '00$',
				'img' => 'assets/img/dragonshard_small.jpg',
				'url' => '?game=dragonshard',
			),
		'vg_08' => array(
				'title' => 'FarCry',
				'genre' => 'fps',
				'price' => '20$',
				'img' => 'assets/img/farcry_small.jpg',
				'url' => '?game=farcry3',
			),
		'vg_09' => array(
				'title' => 'Postal 2',
				'genre' => 'fps',
				'price' => '20$',
				'img' => 'assets/img/postal_small.jpg',
				'url' => '?game=postal2',
			),
		'vg_10' => array(
				'title' => 'Unreal Tournament GOTY',
				'genre' => 'fps',
				'price' => '15$',
				'img' => 'assets/img/unreal_small.jpg',
				'url' => '?game=unreal',
			),
		'vg_11' => array(
				'title' => 'IceWind Dale',
				'genre' => 'rpg',
				'price' => '40$',
				'img' => 'assets/img/icewind_small.jpg',
				'url' => '?game=icewind',
			),
		'vg_12' => array(
				'title' => 'Arcanum',
				'genre' => 'rpg',
				'price' => '25$',
				'img' => 'assets/img/arcanum_small.jpg',
				'url' => '?game=arcanum',
			),
		'vg_13' => array(
				'title' => 'Commandos',
				'genre' => 'strategy',
				'price' => '5$',
				'img' => 'assets/img/commandos_small.jpg',
				'url' => '?game=commandos',
			),
		'vg_14' => array(
				'title' => 'S.T.A.L.K.E.R.',
				'genre' => 'fps',
				'price' => '25$',
				'img' => 'assets/img/stalker_small.jpg',
				'url' => '?game=stalker',
			),
		'vg_15' => array(
				'title' => 'Bloodrayne',
				'genre' => 'fps',
				'price' => '20$',
				'img' => 'assets/img/bloodrayne_small.jpg',
				'url' => '?game=bloodrayne',
			),
		'vg_16' => array(
				'title' => 'Deus Ex',
				'genre' => 'fps/rpg',
				'price' => '60$',
				'img' => 'assets/img/deusex_small.jpg',
				'url' => '?game=deusex',
			),
		'vg_17' => array(
				'title' => 'Sin Gold',
				'genre' => 'fps',
				'price' => '2$',
				'img' => 'assets/img/singold_small.jpg',
				'url' => '?game=singold',
			),
		'vg_18' => array(
				'title' => 'Colonization',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/colonization_small.jpg',
				'url' => '?game=colonization',
			),
		'vg_19' => array(
				'title' => 'Might and Magic 8',
				'genre' => 'rpg',
				'price' => '10$',
				'img' => 'assets/img/mightandmagic_small.jpg',
				'url' => '?game=mightandmagic',
			),
		'vg_20' => array(
				'title' => 'Banished',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/banished_small.jpg',
				'url' => '?game=banished',
			),
		'vg_21' => array(
				'title' => 'Star wars : Jedi Knight',
				'genre' => 'fps',
				'price' => '50$',
				'img' => 'assets/img/jediknight_small.jpg',
				'url' => '?game=jediknight',
			),
		'vg_22' => array(
				'title' => 'Gothic 2',
				'genre' => 'rpg',
				'price' => '10$',
				'img' => 'assets/img/gothic_small.jpg',
				'url' => '?game=gothic2',
			),
		'vg_23' => array(
				'title' => 'Silver',
				'genre' => 'rpg',
				'price' => '35$',
				'img' => 'assets/img/silver_small.jpg',
				'url' => '?game=Silver',
			),
		'vg_24' => array(
				'title' => 'Silent Storm',
				'genre' => 'strategy',
				'price' => '20$',
				'img' => 'assets/img/silentstorm_small.jpg',
				'url' => '?game=silentstorm',
			),
		'vg_25' => array(
				'title' => 'Castles 1 + 2',
				'genre' => 'strategy',
				'price' => '25$',
				'img' => 'assets/img/castle_small.jpg',
				'url' => '?game=castles',
			),
		'vg_26' => array(
				'title' => 'Rainbow Six',
				'genre' => 'fps',
				'price' => '40$',
				'img' => 'assets/img/rainbowsix_small.jpg',
				'url' => '?game=rainbowsix',
			),
		'vg_27' => array(
				'title' => 'Wizardry 8',
				'genre' => 'rpg',
				'price' => '30$',
				'img' => 'assets/img/wizardy_small.jpg',
				'url' => '?game=wizardy',
			),
		'vg_28' => array(
				'title' => 'Star wars : KOTOR',
				'genre' => 'rpg',
				'price' => '20$',
				'img' => 'assets/img/kotr_small.jpg',
				'url' => '?game=kotr',
			),
		'vg_29' => array(
				'title' => 'Defcon',
				'genre' => 'strategy',
				'price' => '35$',
				'img' => 'assets/img/defcon_small.jpg',
				'url' => '?game=defcon',
			),
		'vg_30' => array(
				'title' => 'Borderlands : Pre Sequel',
				'genre' => 'fps',
				'price' => '25$',
				'img' => 'assets/img/bdlands_small.jpg',
				'url' => '?game=borderlands',
			),
		'vg_31' => array(
				'title' => 'Shadowrun',
				'genre' => 'rpg',
				'price' => '10$',
				'img' => 'assets/img/shadowrun_small.jpg',
				'url' => '?game=shadowrun',
			),
		'vg_32' => array(
				'title' => 'Gangsters',
				'genre' => 'rpg',
				'price' => '25$',
				'img' => 'assets/img/gangsters_small.jpg',
				'url' => '?game=gangsters',
			),
		);

