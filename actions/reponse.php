<?php

include_once '../classes/Conexao.class.php';
include_once '../classes/Funcoes.class.php';
include_once '../classes/Person.class.php';

$objFuncoes = new Funcoes();
$person = new Person();
$title = '';
$result = '';
$span = '';
switch ($_POST['action']) {
    case 'revertSentence':
        $sentence = $_POST['wordInvert'];
        $result = $objFuncoes->revertSentence($sentence);
        $title = 'Invert words from a text';
        break;
    case 'quantPalindSubstr':
        $sentence = $_POST['wordInvert'];

        $result = $objFuncoes->quantityPalindromesSubstrings($sentence);
        $title = 'Return quantity palindromes substrings';

        break;
    case 'insertUser':

        $arrayDataPerson = $_POST;

        unset($arrayDataPerson['action']);
        unset($arrayDataPerson['buttom']);

        $result = $person->queryInsert($arrayDataPerson);
        if ($result) {
            $result = "Registration successfully registered!";
        } else {
            $result = "Error while registering!";
        }
        $title = 'Register Person';
        $span = '<table id="tabelaTarefa" class="table tablesorter table-striped tabelaTarefa">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach ($person->querySelect() as $rst) {
            $span .= '
                                <tr>
                                    <td scope="row" >' . (isset($rst["idPerson"]) ? $objFuncoes->tratarCaracter($rst['idPerson'], 2) : "") . '</td>
                                    <td scope="row" >' . (isset($rst["name"]) ? $objFuncoes->tratarCaracter($rst['name'], 2) : "") . '</td>
                                    <td scope="row" >' . (isset($rst["phone"]) ? $objFuncoes->tratarCaracter($rst['phone'], 2) : "") . '</td>
                                </tr>';
        }
        $span .= ' </tbody>
                    </table>
                ';
        break;

    default:
        break;
}
$html = '<!DOCTYPE HTML>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
            <title>Results</title>

            <link href="../css/style.css" rel="stylesheet" type="text/css" media="all">
            <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

        </head>
    <body>
        <h1>Respose:</h1>
        <h4>' . $title . '</h4>

        <div class="container theme-showcase" role="main">
                    <div class="row" >
                        <div class="form-group">
                            <div class="resultField">
                                <span class="dataResult">' . $result . '</span>
                            </div>
                    
                            <a href="../index.php">Return test page!</a>
                            ' . $span . '
                        </div>';
$html .= '          </div>';
$html .= '      </div>';
$html .= ' </body>
</html>';


echo $html;
