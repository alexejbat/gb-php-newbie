<?php

function prepareVariables($page, $action) {
    $params['layout'] = 'layout';
    $params['count'] = getBasketCount();

    if (is_auth()) {
        $params['auth'] = true;
        $params['user'] = get_user();
    }

    switch ($page) {
        case 'index':
            $params['name'] = '';
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
            $params['catalog'] = getGoods();
            break;

        case 'catalog_item':
            $params['value'] = getGoodsItem($_GET["id"]);
            break;
            var_dump($params);

        case 'basket':
            $params['basket'] = getBasket();
            break;

        case 'header':
            $params['header'] = '';
            break;

        case 'feedbackapi':
            doApiFeedbackAction($action);
            break;

        case 'feedback2':
            $params['feedback'] = getAllFeedback();
            break;

        case 'feedback':
            doFeedbackAction($params, $action);
            $params['feedback'] = getAllFeedback();
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

        case 'api':
            if ($action == 'addlike') {
                addLikeGood($_GET['id']);
                $likes = getGoodLikes($_GET['id']);

                echo json_encode(['likes' => $likes]);
                die();
            }
            if ($action == 'buy') {
                addToBasket($_GET['id']);
                echo json_encode(['count' => getBasketCount()]);
                die();
            }
            if ($action == 'delete') {
                deleteFromBasket($_GET['id']);
                echo json_encode(['count' => getBasketCount()]);
                die();
            }
            break;

        default:
            echo "404";
            die();
    }
    return $params;
}


