<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php 
  $DataOggi = date("d-m-y");
  echo "<h2>Data di oggi: $DataOggi</h2>";
 ?>

 <?php 
  
 ?>
    
 <?php 
    $serieA = [         
        'Squadre' => ['Roma', 'Milan', 'Juventus'],         
        'Formazione' => ['4-3-3', '4-3-3', '3-4-3']     
    ];      
    
    for ($i=0; $i < count($serieA['Squadre']); $i++) {
        print 'questa è la squadra ' .$serieA['Squadre'][$i].'<br>';     
    }
    
    for ($i=0; $i < count($serieA['Formazione']); $i++) {
        print '<br>Questa è la formazione della squadra '. $serieA['Squadre'][$i]. ' - '.'Questa è la formazione '.$serieA['Formazione'][$i].'';     
    }
 ?>

 <?php 
    $serieB = [
        'Squadre' => ['Inter', 'Napoli', 'Roma'],
        'Formazione' => ['4-3-3', '4-3-3', '4-3-3'],
        'Partite' => ['Napoli - Inter', 'Roma - Inter', 'Napoli - Roma']
    ];

    for ($i=0; $i < count($serieB['Squadre']); $i++) {
        print '<br><br> Questa è la squadra '.$serieB['Squadre'][$i].' - '.'Questa è la formazione '.$serieB['Formazione'][$i].' - '.'Questa è la partita '.$serieB['Partite'][$i];
    }
 ?>

</body>
</html>