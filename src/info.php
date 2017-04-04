<?php
ini_set('display_errors', 1);
try {

$data = json_decode(file_get_contents('php://input'), true);
echo json_encode($data);

$pdo = new PDO('mysql:host=localhost;', 'root', 'sa baa nopasu haking', array(PDO::ATTR_EMULATE_PREPARES => false));

if ($data['txt1']!=""){
    $result = $pdo->exec('insert into textdataDB.itu values (0, \'' . $data['txt1'] . '\');');
    if($result == false) {
         echo json_encode(array('result' => 'INSERT NG'));
    }
    else {
         echo json_encode(array('result' => 'INSERT OK'));
    }
}else{
         echo json_encode(array('result' => 'EMPTY'));
}

} catch (PDOException $e) {
    exit('データベース接続失敗。'.$e->getMessage());
}

?>

