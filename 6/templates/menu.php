<?php

$menu = [
    [
        "title" => "Главная",
        "href" => "/"
    ],
    [
        "title" => "Каталог",
        "href" => "/?page=catalog",
        "subitems" => [
            [
                "title" => "Веганская",
                "href" => "/"
            ],
            [
                "title" => "Европейская",
                "href" => "/",
                "subitems" => [
                    [
                        "title" => "Италия",
                        "href" => "/"
                    ],
                    [
                        "title" => "Франция",
                        "href" => "/"
                    ]
                ]
            ]
        ]
    ],
    [
        "title" => "О нас",
        "href" => "/?page=about"
    ],
];

$result = "<ul>";
$result .= menuRender($menu);
$result .= "</ul>";

echo $result;


function menuRender($menu_array){
    $result = "";

    foreach($menu_array as $item){
        $result .= "<li><a href='{$item['href']}'>{$item['title']}</a>";

        if(isset($item["subitems"])){
            $result .= "<ul>";
            $result .= menuRender($item["subitems"]);
            $result .= "</ul>";
        }

        $result .= "</li>";
    }

    return $result;
}

?>


<!--<a href="/">Главная</a>
<a href="/?page=catalog">Каталог</a>
<a href="/?page=about">О нас</a><br>-->
