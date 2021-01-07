<?php
include('regex.php');
$error = array();
$notGood="ce n'est pas bon !";
$notSend="le fomulaire n'a pas pu etre envoyé !"; 


    // verification de name
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        if(!preg_match($stringBasic , $name)){
            $error['name'] = $notGood;
        }
    } 

    // verification de firstname
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
        $firstname = $_POST['firstname'];
        $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        if(!preg_match($stringBasic , $firstname)){
            $error['firstname'] = $notGood;
        }
    }

    // verification de birthday
    if(!empty($_POST['Birthday'])){
        $Birthday = $_POST['Birthday'];
        $Birthday = filter_var($Birthday, FILTER_SANITIZE_STRING);
        if(!preg_match( $birthdayRegex , $Birthday)){
            $error['birthday'] = $notGood;
        }
    }

    //verification de country
    if(!empty($_POST['country'])){
        $country = $_POST['country'];
        $country = filter_var($country, FILTER_SANITIZE_STRING);
        if(!preg_match($stringBasic , $country)){
            $error['country'] = $notGood;
        }
    }

    //verification de nation
    if(!empty($_POST['nation'])){
        $nation = $_POST['nation'];
        $nation = trim(filter_var($nation, FILTER_SANITIZE_STRING));
        if(!preg_match($stringBasic , $nation)){
            $error['nation'] = $notGood;
        }
    }
    
    // verification de mail
    if(!empty($_POST['mail'])){
        $mail = $_POST['mail'];
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $error['mail'] = $notGood;
        }
    }

    // verification de phone
    if(!empty($_POST['phone'])){
        $phone = $_POST['phone'];
        $phone = trim(filter_var($phone, FILTER_SANITIZE_STRING));
        if(!preg_match("/^((\+)33|0)[1-9](\d{2}){4}$/" , $phone)){
            $error['phone'] = $notGood;
            
        }
    }

    // verification de diplome
    if(!empty($_POST['diplome'])){
        $diplome = $_POST['diplome'];
        $diplome = trim(filter_var($diplome, FILTER_SANITIZE_STRING));
        if(!preg_match($stringBasic , $diplome)){
            $error['diplome'] = $notGood;
        }
    }

    //  verification de badgeNumber 
    if(!empty($_POST['badgeNumber'])){
        $badgeNumber = $_POST['badgeNumber'];
        $badgeNumber = trim(filter_var($badgeNumber, FILTER_SANITIZE_STRING));
    }

    // verification de linkpass
    if(!empty($_POST['linkPass'])){
        $linkPass = $_POST['linkPass'];
        $linkPass = filter_var($linkPass, FILTER_VALIDATE_URL);
    }

    // verification de poleEmploiNumber
    if(!empty($_POST['poleEmploiNumber'])){
        $poleEmploiNumber = $_POST['poleEmploiNumber'];
        $poleEmploiNumber = trim(filter_var($poleEmploiNumber, FILTER_SANITIZE_STRING));
        if(!preg_match("/^[0-9]{7,12}[A-Z]{1,2}$/" , $poleEmploiNumber)){
            $error['poleEmploiNumber'] = $notGood;
        }
    }

    // verification de superHero
    if(!empty($_POST['superHero'])){
        $superHero = $_POST['superHero'];
        $superHero = trim(filter_var($superHero, FILTER_SANITIZE_STRING));
    }

    // verification de hack
    if(!empty($_POST['hack'])){
        $hack = $_POST['hack'];
        $hack = trim(filter_var($hack, FILTER_SANITIZE_STRING));
    }

    // verification de exp
    if(!empty($_POST['exp'])){
        $exp = $_POST['exp'];
        $exp = trim(filter_var($exp, FILTER_SANITIZE_STRING));
    }
?>