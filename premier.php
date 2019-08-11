<!DOCTYPE HTML>
<HTML>
    <head>
        <title>zzz</title>
        <meta charset="utf-8">
        <style>
            .red{
                background-color:yellow;
                width:200px;
                height:300px;     
            }
        </style>
    </head>
    <body>
    <div id="a">
        <h1>La liste est :</h1>
        <ul>
            <li style="color:red">numéro 1</li>
            <li style="color:pink">number 1</li>
            <li style="color:orange">zz 3</li>
            <li style="color:green">ra9mla 4</li>

            <?php 
            $age=8;
            switch($age)
            {
                case 1: echo" c'est un".'<br>';
                case 10: echo'dix'.'<br>';
                case 20: echo'vingt'.'<br>';
                case 30: echo 'trente'.'<br>';
                default: echo 'aucune '.'<br>';
            }
                
                $a =array(10,30,50);
                print_r($a);
                $z=array('nom'=>'amine','prénom'=>'mohamed','age'=>'28 ans','profession'=>'dev web');
                print_r($z).'<br>';
                echo $z['nom'].'<br>';
                
                foreach ($z as $key => $value) {
                    echo '<br>'.$value.'<br>';
                }
                //recherche dans un tableau
                //1
                if(array_key_exists('nom',$z)) //Vérifier si une clé('nom') existe dans l'array 
                {
                    echo '<br> nom existe dans le tableau <br>';
                }else
                {
                    echo "<br> nom n'existe pas dans le tableau <br>";
                }
                //2
                if(in_array('amine',$z))//Vérifier si une valeur(amine) existe dans l'array
                {echo '<br> kayna <br>';}
                //3
                
                $posi  = array_search('28 ans',$z);//renvoi la correspondonce a la valeur clé ou index dans le tableau
                echo $posi.'<br>';
                $nb = array_search(10,$a);
                echo $nb.'<br>';
                $phrase='cette phrase contien :';
                echo $phrase.strlen($phrase).'<br>';
                //date
                echo date('m'); //'d' 'y'
                function salam(){
                    echo '<br>salam';
                }
                salam();
                ?>
            </div>
        </ul>
    </div>

    </body>

 </html>
