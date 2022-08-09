<?php
$data_nav = [
    'logo' =>
    [
        'images'=>'images/images/cofe_chay.png',
        'link'=>'/'//ссылка
    ],
    'links'=>
    [
        [
            'title'=>'Home',
            'href'=>'/',
            'anchor'=> false
        ],

        [
            'title'=>'About',
            'href'=>'#about',
            'anchor'=> true
        ],

        [
            'title'=>'Coffe',
            'href'=>'#coffe',
            'anchor'=> true
        ],

        [
            'title'=>'Gallery',
            'href'=>'#gallery',
            'anchor'=> true
        ],

        [
            'title'=>'Blog',
            'href'=>'#blog',
            'anchor'=> true
        ], 
        
        [
            'title'=>'Contacts',
            'href'=>'#contacts',
            'anchor'=> true
        ]
        ],
        'logo' =>
        [
            'images'=>'images/images/cofe_chay.png',
            'link'=>'/'//ссылка
        ],

];

echo '<pre>' . print_r(json_encode($data_nav), return :true) . '</pre>';

echo '<pre>' . print_r($data_nav, return :true), '</pre>';
?>

<?php
$data_banner=[
'slides'=>
[
    [
        'title'=>'Do you like a coffe?',
        'description'=>'Start your day with  a black Coffe',
        'button'=>[
            'text' =>'Buy now',
            'href'=>'#',
            'is_popup'=>true
        ]

    ],

    [
        'title'=>'Do you like a tea?',
        'description'=> 'Tea it’s your the best  friend',
        'button'=>
        [
            'text' => 'Buy now',
            'href'=> '#',
            'is_popup'=>false
        ]
        ],
        [
            'title'=>'Coffe vs tea',
            'description'=> 'Coffe or tea?  How you think?',
            'button'=>
            [
                'text' => 'Buy now',
                'href'=> '#',
                'is_popup'=>false
            ]
        ],



]
];
echo json_encode($data_banner);
echo '<pre>' . print_r($data_banner, return :true), '</pre>';
?>

<?php
$data_about=[
    'sides'=>
[
 'left'=>
 [
     'href'=>'#',
     'image'=>'images/images/play-icon.png'
 ],
 'right'=>
 [
     'caprion'=>'Live coffe making process',
     'title'=>'We Telecast our Coffe Making Live',
     'txt'=>'We are here to listen from you deliver exellence',
     'image_signature'=>'images/images/signature.png'
 ],
]
];
echo json_encode($data_about);
//die($data_about);
echo '<pre>' . print_r($data_about, return :true), '</pre>';
?>
