<?php

function prepareVariables($page) {
    $params['layout'] = 'layout';

    switch ($page) {
        case 'index':
            $params['name'] = 'User';
            break;

        case 'image':
            $params['layout'] = 'gallery';
            addLikes($_GET['id']);
            $params['image'] = getOneImage($_GET['id']);
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'onenews':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;

        case 'about':
            $params['title'] = 'about';
            $params['phone'] = 444333;
            break;

        case 'gallery':

            if (isset($_POST['load'])) {
                loadImage();
            }

            $params['layout'] = 'gallery';
            $params['gallery'] = getGallery(IMG_BIG);
            // $params['message'] = $messages[$_GET['status']];
            break;

        case 'catalog':
            $params['catalog'] = [
                [
                    'name' => 'Пицца',
                    'price' => 24
                ],
                [
                    'name' => 'Чай',
                    'price' => 1
                ],
                [
                    'name' => 'Яблоко',
                    'price' => 12
                ],
            ];
            break;

        case 'apicatalog':
            $params['catalog'] = [
                [
                    'name' => 'Пицца',
                    'price' => 24
                ],
                [
                    'name' => 'Чай',
                    'price' => 1
                ],
                [
                    'name' => 'Яблоко',
                    'price' => 12
                ],
            ];
            echo json_encode($params, JSON_UNESCAPED_UNICODE);
            exit;

        default:
            echo "404";
            die();
    }
    return $params;
}

function render($page, $params) {
    return renderTemplate(LAYOUTS_DIR . $params['layout'], [
        'content' => renderTemplate($page, $params),
        'menu' => renderTemplate('menu')
    ]);
}

function renderTemplate($page, $params = [])
{
    ob_start();

    if (!is_null($params))
        extract($params);

    $fileName = TEMPLATES_DIR . $page . ".php";

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        Die("Страницы {$page} не существует.");
    }

    return ob_get_clean();
}
