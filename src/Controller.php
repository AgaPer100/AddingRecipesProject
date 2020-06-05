<?php

declare(strict_types=1);

namespace App;

require_once("src/View.php");

class Controller
{
    public function run(string $action): void
    {
        $view = new View();
        $viewParams = [];

        switch($action){
            case 'create':
                    $page = 'create';
                    $created = false;
                
                    if(!empty($_POST)){
                        $created = true;
                        $viewParams = [
                            'title' => $_POST['title'],
                            'description' => $_POST['description']
                        ];
                    }
                    $viewParams['created'] = $created;
            break;
            case 'show':
                $viewParams = [
                    'title' => 'Mój przepis',
                    'description' => 'Opis'
                ];
            break;
            default:
                $page = 'list';
                $viewParams['resultList'] = "wyświetlamy przepisy";
            break;
        }
    

        $view->render($page, $viewParams);
    }
}