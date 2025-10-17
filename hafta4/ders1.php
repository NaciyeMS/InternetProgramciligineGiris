<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * DÖNGÜLER
     * Başlangıç 
     * Bitiş
     * Sabit artış miktarı 
     * Sürekli tekrar eden bir iş 
     * 
     * 1000 kez yerelere çöp atama yaz tahaya 
     * Başlangıç  1  yerelere çöp atam
     *            2  yerelere çöp atam
     *            3    yerelere çöp atam
     * 
     * 
     *bitiş       1000   yerelere çöp atam
     */
    $i=1; //başlangıç
    while($i<1000) //döngüye devam edebilmesi için true gelmeli BİTİŞ
    {
        echo $i."yerlere çöp atmayacağım<br>"; //tekrar eden iş 
        $i++;  //sabit bir artış 
    }
    ?>
</body>
</html>