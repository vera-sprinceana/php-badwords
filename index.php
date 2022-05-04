<?php
$paragrafo='— Natale non sembrerà più Natale senza regali — brontolò Jo sdraiata sul
tappeto dinanzi al caminetto. — L’essere poveri è una disgrazia — disse
Meg, guardando con un sospiro il suo vecchio vestitino. — Non è giusto
che alcune ragazze debbano aver tanto ed altre nulla! — soggiunse la
piccola Amy con voce piagnucolosa. — Abbiamo però la nostra buona
mamma ed il nostro papà e tante altre belle cose — disse Beth dal suo
cantuccio. Le quattro faccine, illuminate dai bagliori del fuoco che
scoppiettava nel caminetto, si rischiararono un momento a queste parole,
ma si oscurarono di nuovo allorché Jo disse con tristezza: — Papà non è
con noi e chi sa quando tornerà! — Non disse — forse mai — ma tutte lo
aggiunsero silenziosamente, pensando al padre loro tanto lontano, là, sul
campo di battaglia. Tutte tacquero per qualche istante, poi Meg ricominciò:
— Sapete bene la ragione per cui la mamma ha proposto di non comprare
regali per Natale. Essa crede che non abbiamo diritto di spendere i nostri
denari in divertimenti quando i nostri cari nell’esercito soffrono tanto. Non
siamo buone a molto noi, ma possiamo pur fare i nostri piccoli sacrifizi e
dovremmo compierli con piacere, per quanto io confessi che mi costano
qualche fatica — e Meg scosse la testa ripensando alle belle cosine che da
tanto tempo desiderava. — Ma non credo che quel poco che daremmo possa
alleggerire le sofferenze dell’esercito; un misero dollaro non potrà far gran
cosa. Sono d’accordo anch’io di non aspettarmi nulla né dalla mamma né da
voialtre, ma vorrei, con i miei pochi risparmi, comperarmi Undina e
Sintram! È tanto tempo che lo desidero! — disse Jo, che aveva una vera
passione per la lettura. — Io aveva pensato di comprarmi un po’ di musica!
— disse Beth, con un sospiro così leggiero che nessuno potè udirlo. — Io
voglio comprarmi una bella scatola di lapis Faber; ne ho proprio bisogno —
disse Amy risolutamente. — Mamma non ha detto nulla riguardo ai nostri
risparmi e suppongo che non sarebbe contenta se ci privassimo di tutto
quello che ci può far piacere. Comperiamoci quello che desideriamo e
divertiamoci un po’; mi pare che lavoriamo abbastanza per meritarcelo! —';
$_GET['name'];
$censure='***';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>Il giuoco dei pellegrini</h1>
    <img src="https://www.rizzolilibri.it/content/uploads/2014/03/20/199171/326747-CopPiccoleDonne300dpi-285x424.jpg"
        alt="">
    <p><?php echo $paragrafo ?></p>
    <h4>La lunghezza del paragrafo è :<?php echo strlen($paragrafo) ?></h4>
    <div><?php $paragrafo=str_replace($_GET, $censure, $paragrafo) ?></div>
    <p><?php echo $paragrafo ?></p>
    <h4>La nuova lunghezza del paragrafo è: <?php echo strlen($paragrafo) ?></h4>
</body>

</html>