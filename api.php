<?php
require 'vendor/autoload.php';

use GDText\Box;
use GDText\Color;

// API - for whatever dumb reason we need to have something like that
function default_out()
{
    $data = file_get_contents('lib/data/content.json');
    $data = json_decode($data);
    $data->core->lang = $data->admin->lang;
    $array = array(
        'code' => '1337',
        'msg' => 'Everything working fine, thank you for asking. :^)',
        'core' => $data->core,
        'api' => array(
            'version' => '0.6'
        )
    );
    header('Content-Type: application/json');
    echo json_encode($array);
}

if (isset($_GET['format'])) {
    switch ($_GET['format']) {
        case 'xml':
            $data = file_get_contents('lib/data/content.json');
            $data = json_decode($data, true);
            $data['core']['lang'] = $data['admin']['lang'];
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
            break;
        case 'beer':
        case '🍺':
        case '🍻':
            $data = file_get_contents('lib/data/content.json');
            $data = json_decode($data);
            $data->core->lang = $data->admin->lang;
            $beer = new rauhkrusche\BeerPHP\Beer;
            $array = array(
                'code' => '1337',
                'msg' => 'Everything working fine, thank you for asking. :^)',
                'core' => $data->core,
                'api' => array(
                    'version' => '0.6'
                )
            );
            header('Content-Type: text/plain Charset=UTF-8');
            echo $beer->serialize(json_encode($array));
            break;
        case 'img':
        case 'image':
            $data = json_decode(file_get_contents('lib/data/content.json'));
            $text = "";
            if ($data->core->status) {
                $text = $data->core->true->text;
            } else {
                $text = $data->core->false->text;
            }

            $im = imagecreate('1400', '1400');
            $backgroundcolor = imagecolorallocate($im, 0, 0, 0);
            imagefill($im, 0, 0, $backgroundcolor);

            $box = new Box($im);
            $box->setFontFace(__DIR__ . '/admin/fonts/arial.ttf');
            $box->setFontColor(new Color(255, 255, 255));
            $box->setFontSize(500);
            $box->setBox(20, 20, 1300, 1300);
            $box->setTextAlign('center', 'center');
            $box->draw($text);

            header('Content-Type: image/png');
            imagepng($im);
            break;
        default:
            default_out();
            break;
    }
} else {
    default_out();
}