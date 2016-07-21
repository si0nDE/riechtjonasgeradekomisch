<?php
// API - for whatever dumb reason we need to have something like that
function default_out()
{
    $data = file_get_contents('lib/data/content.json');
    $data = json_decode($data);
    $array = array(
        'code' => '1337',
        'msg' => 'Everything working fine, thank you for asking. :^)',
        'core' => $data->core,
        'api' => array(
            'version' => '0.1'
        )
    );
    header('Content-Type: application/json');
    echo json_encode($array);
}
$_GET['format'] = "beer";

if (isset($_GET['format'])) {
    if ($_GET['format'] === 'xml') {
        $data = file_get_contents('lib/data/content.json');
        $data = json_decode($data, true);
        $data_export = $data['core'];
        if ($data_export['status']) {
            $data_export['status'] = 'true';
        } else {
            $data_export['status'] = 'false';
        }
        $root = preg_replace('#^https?://#', '', $data_export['url']);
        function array_to_xml($array, &$xml_vars)
        {
            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    if (!is_numeric($key)) {
                        $subnode = $xml_vars->addChild("$key");
                        array_to_xml($value, $subnode);
                    } else {
                        $subnode = $xml_vars->addChild("item$key");
                        array_to_xml($value, $subnode);
                    }
                } else {
                    $xml_vars->addChild("$key", htmlspecialchars("$value"));
                }
            }
        }

        $xml_vars = new SimpleXMLElement("<?xml version=\"1.0\"?><" . $root . "></" . $root . ">");
        array_to_xml($data_export, $xml_vars);
        header('Content-Type: application/xml');
        echo $xml_vars->asXML();
    } elseif ($_GET['format'] === 'beer') {
        $data = file_get_contents('lib/data/content.json');
        $data = json_decode($data);
        $data = $data->core;
        $data = json_encode($data);
        require 'lib/Beer/Beer.php';
        $beer = new rauhkrusche\BeerPHP\Beer;
        header('Content-Type: text/plain Charset=UTF-8');
        echo $beer->serialize($data);
    } else {
        default_out();
    }
} else {
    default_out();
}