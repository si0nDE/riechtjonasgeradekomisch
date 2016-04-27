<?php
// API - for whatever dumb reason we need to have something like that
function default_out(){
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
if (isset($_GET['format'])){
    if ($_GET['format'] === 'xml'){
        $data = file_get_contents('lib/data/content.json');
        $data = json_decode($data, true);
        $core = $data['core'];
        if ($core['status'] === true){
            $core['status'] = 'true';
        }else{
            $core['status'] = 'false';
        }
        $array = array(
            'code' => '1337',
            'msg' => 'Everything working fine, thank you for asking.',
            'core' => $core,
            'api' => array(
                'version' => '0.1'
            )
        );
        $root = $core['url'];
        $root = preg_replace('#^https?://#', '', $root);
        $xml = new SimpleXMLElement("<".$root."/>");
        array_flip($array);
        array_walk_recursive($array, array($xml, 'addChild'));
        header('Content-Type: application/xml');
        print $xml->asXML();
    }else{
        default_out();
    }
}else{
    default_out();
}