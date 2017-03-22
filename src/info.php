<?php
ini_set('display_errors', 1);
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=textdataDB;charset=utf8',
        'root',
        'sa baa nopasu haking'
    );

    $array;

    $numofRecord1='SELECT COUNT(*) FROM itu';
    $stmt1 = $pdo->query($numofRecord1);
    foreach ($stmt1 as $row) {
        $_text1 = rand(0,$row['COUNT(*)']-1); 
    }
    $sth1 = $pdo->prepare("SELECT * FROM itu LIMIT $_text1,1");
    $sth1->execute();
    foreach ($sth1 as $row) {
        $array[1] = $row['word'];
    }


    $numofRecord2='SELECT COUNT(*) FROM dokode';
    $stmt2 = $pdo->query($numofRecord2);
    foreach ($stmt2 as $row) {
        $_text2 = rand(0,$row['COUNT(*)']-1); 
    }
    $sth2 = $pdo->prepare("SELECT * FROM dokode LIMIT $_text2,1");
    $sth2->execute();
    foreach ($sth2 as $row) {
        $array[2] = $row['word'];
    }


    $numofRecord3='SELECT COUNT(*) FROM darega';
    $stmt3 = $pdo->query($numofRecord3);
    foreach ($stmt3 as $row) {
        $_text3 = rand(0,$row['COUNT(*)']-1); 
    }
    $sth3 = $pdo->prepare("SELECT * FROM darega LIMIT $_text3,1");
    $sth3->execute();
    foreach ($sth3 as $row) {
        $array[3] = $row['word'];
    }


    $numofRecord4='SELECT COUNT(*) FROM naniwo';
    $stmt4 = $pdo->query($numofRecord4);
    foreach ($stmt4 as $row) {
        $_text4 = rand(0,$row['COUNT(*)']-1); 
    }
    $sth4 = $pdo->prepare("SELECT * FROM naniwo LIMIT $_text4,1");
    $sth4->execute();
    foreach ($sth4 as $row) {
        $array[4] = $row['word'];
    }        


    $numofRecord5='SELECT COUNT(*) FROM donoyouni';
    $stmt5 = $pdo->query($numofRecord5);
    foreach ($stmt5 as $row) {
        $_text5 = rand(0,$row['COUNT(*)']-1); 
    }
    $sth5 = $pdo->prepare("SELECT * FROM donoyouni LIMIT $_text5,1");
    $sth5->execute();
    foreach ($sth5 as $row) {
        $array[5] = $row['word'];
    }


    $numofRecord6='SELECT COUNT(*) FROM dousita';
    $stmt6 = $pdo->query($numofRecord6);
    foreach ($stmt6 as $row) {
        $_text6 = rand(0,$row['COUNT(*)']-1); 
    }
    $sth6 = $pdo->prepare("SELECT * FROM dousita LIMIT $_text6,1");
    $sth6->execute();
    foreach ($sth6 as $row) {
        $array[6] = $row['word'];
    }
 
    $myword=(string)filter_input(INPUT_POST, 'dataWhen');
        if ($myword === '') {
            header('Location: http://localhost:8080/page/select.html');
        exit;
        }else{
            $stmt = $pdo->prepare("INSERT INTO itu (id, word) VALUES ('', :word)");
            $stmt->bindParam(':word', $myword, PDO::PARAM_STR);
            $stmt->execute(); 
            
            $sth = $pdo->prepare("SELECT * FROM itu ORDER BY id DESC LIMIT 0,1");
            $sth->execute();
                foreach ($sth as $row) {
                    $array[1] = $row['word'];
                    }
        }
        
        
    
    if ($myword=(string)filter_input(INPUT_POST, 'dataWhere')) {
        $stmt = $pdo->prepare("INSERT INTO dokode (id, word) VALUES ('', :word)");
        $stmt->bindParam(':word', $myword, PDO::PARAM_STR);
        $stmt->execute(); 

        $sth = $pdo->prepare("SELECT * FROM dokode ORDER BY id DESC LIMIT 0,1");
        $sth->execute();
        foreach ($sth as $row) {
            $array[2] = $row['word'];
        }
    }
    if ($myword=(string)filter_input(INPUT_POST, 'dataWho')) {
        $stmt = $pdo->prepare("INSERT INTO darega (id, word) VALUES ('', :word)");
        $stmt->bindParam(':word', $myword, PDO::PARAM_STR);
        $stmt->execute(); 

        $sth = $pdo->prepare("SELECT * FROM darega ORDER BY id DESC LIMIT 0,1");
        $sth->execute();
        foreach ($sth as $row) {
            $array[3] = $row['word'];
        }
    }
    if ($myword=(string)filter_input(INPUT_POST, 'dataWhat')) {
        $stmt = $pdo->prepare("INSERT INTO naniwo (id, word) VALUES ('', :word)");
        $stmt->bindParam(':word', $myword, PDO::PARAM_STR);
        $stmt->execute(); 

        $sth = $pdo->prepare("SELECT * FROM naniwo ORDER BY id DESC LIMIT 0,1");
        $sth->execute();
        foreach ($sth as $row) {
            $array[4] = $row['word'];
        }
    }
    if ($myword=(string)filter_input(INPUT_POST, 'dataHow')) {
        $stmt = $pdo->prepare("INSERT INTO donoyouni (id, word) VALUES ('', :word)");
        $stmt->bindParam(':word', $myword, PDO::PARAM_STR);
        $stmt->execute(); 

        $sth = $pdo->prepare("SELECT * FROM donoyouni ORDER BY id DESC LIMIT 0,1");
        $sth->execute();
        foreach ($sth as $row) {
            $array[5] = $row['word'];
        }
    }
    if ($myword=(string)filter_input(INPUT_POST, 'dataHappen')) {
        $stmt = $pdo->prepare("INSERT INTO dousita (id, word) VALUES ('', :word)");
        $stmt->bindParam(':word', $myword, PDO::PARAM_STR);
        $stmt->execute(); 

        $sth = $pdo->prepare("SELECT * FROM dousita ORDER BY id DESC LIMIT 0,1");
        $sth->execute();
        foreach ($sth as $row) {
            $array[6] = $row['word'];
        }
    }  
    print $array[1].'<br>'.$array[2].'<br>'.$array[3].'<br>'.$array[4].'<br>'.$array[5].'<br>'.$array[6];
} catch (PDOException $e) {
    exit('データベース接続失敗。'.$e->getMessage());
}

?>

