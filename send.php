<?php

/*

//Отправка данных в R7K12CRM
$KEY = '76af7832c565e97443f196adc975a209';//ключ проекта
$phone = !empty($_REQUEST['phone']) ? $_REQUEST['phone'] : '';
$products = [
    [
        "id" => "2", //код товара (из каталога CRM)
        "name" => "Набор 145", //название товара
        "price" => "490000", //цена товара 1
        "quantity" => "1", //количество
    ]
];
if (preg_match("/^0/",$phone)) $phone = '+38'.$phone;
$CRM = [
    "r7k12id" => isset($_COOKIE['r7k12_si']) ? $_COOKIE['r7k12_si'] : null,
    "type" => "Form",//Тип заявки (ОБЯЗАТЕЛЬНО)
    "title" => $_REQUEST['title'],//Заголовок заявки (НЕ ОБЯЗАТЕЛЬНО)
    "href" => $_SERVER['HTTP_REFERER'],//Ссылка на страницу, с которой пришла заявка (НЕ ОБЯЗАТЕЛЬНО)
    "comment" => $_REQUEST['comment'],//Комментарий к сделке (НЕ ОБЯЗАТЕЛЬНО)
    "name" => $_REQUEST['name'],//Название контакта (НЕ ОБЯЗАТЕЛЬНО)
    "email" => $_REQUEST['email'],//E-mail адрес контакта (ОБЯЗАТЕЛЕН ЕСЛИ НЕ УКАЗАН ТЕЛЕФОН КОНТАКТА)
    "phone" => $phone,//Телефон контакта (ОБЯЗАТЕЛЕН ЕСЛИ НЕ УКАЗАН E-MAIL КОНТАКТА)
    "create_new_lead" => "1", //'0' - новая сделка создается только если нет сделки или предыдущая в статусе "успешно реализовано" или "возврат"; '1' - новая сделка создается в любом случае (НЕ ОБЯЗАТЕЛЬНО)
    "fields" => [
        "lead" => [//Поля для сделок
            "products" => $products,
            "revenue" => array_sum(array_map(function($p){return $p['price'] * $p['quantity'];}, $products)),
        ],
        "contact" => [//Поля для контактов
        ],
    ],
];
$context = stream_context_create([
    "http" => [
        "method" => "POST",
        "content" => json_encode($CRM),
    ],
]);

file_get_contents("https://r7k12.ru/" . $KEY . "/crm/", false, $context);
//Завершение отправки данных в R7K12CRM

*/


$email2="zakazi.uz@yandex.ru"; // ----------------------------------------- почта, куда отправляем письмо
$headers  =  'MIME-Version: 1.0' . "\r\n";
    $headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .=  'To: <'.$email2.'>, '."\r\n";
    $headers .=  'From: <site.ru>' . "\r\n"; // ---------------------- адрес отправителя, это заголовок письма, менять не обязательно
$subject2    = "Осанка взрослый 249,000 [заказ обратной связи с сайта]"; // ----------------------------------------- заголовок
$message2    = "
<br>Имя: ".$_POST['name']."
<br>Телефон: ".$_POST['phone']."

<br>IP-адрес посетителя: ".@$_SERVER['REMOTE_ADDR']."
<br>Время заказа: ".date('Y-m-d H:i:s').";
";
$mail=mail($email2, $subject2, $message2, $headers);

?>







<!DOCTYPE html>
<html>
<head>
<!-- Facebook Pixel Code -->

<!-- End Facebook Pixel Code -->


<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
   <meta name="viewport" content="width=device-width">
            <link rel="shortcut icon" href="favicon.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
        <link media="all" href="/css/index1.css?v=1" type="text/css" rel="stylesheet">

        <link href="/css/demo.css" rel="stylesheet">
        


 <div class="block_success">                    
            <h2 style="text-transform: uppercase;">Поздравляем! Ваш заказ принят!</h2>
            
            <h3 class="success">
                Пожалуйста, проверьте правильность введенной Вами информации.
                
            </h3>
            <div class="success">
                <ul class="list_info">
                
                   
                    <li><span>Ф.И.О: </span><span id="tel"><?print($_REQUEST['name']);?></span></li>  
                    <li><span>Телефон: </span><span id="tel"><?print($_REQUEST['phone']);?></span></li>  
                        
                 </ul>
                <br/><span id="submit"></span>
            </div>
            <p class="fail success">Если вы ошиблись при заполнении формы, пожалуйста, <a href="javascript: history.back(-1);">заполните заявку еще раз</a></p>
        </div>

       

<br>
    <title>Поздравляем! Ваш заказ принят!</title>



        <style type="text/css">
            body {
                line-height: 1;
                height: 100%;
                font-family: Arial;
                font-size: 15px;
                color: #313e47;
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                
            }
            h2 {
                margin: 0;
                padding: 0;
                font-size: 36px;
                line-height: 44px;
                color: #313e47;
                text-align: center;
                font-weight: bold;
            }
            a {
                color: #69B9FF;
            }
            .list_info li span {
                width: 150px;
                display: inline-block;
                font-weight: bold;
                font-style: normal;
            }
            .list_info {
               text-align: left;
               display: inline-block;
               list-style: none;
               margin-top: -10px;
               margin-bottom: -11px;
            }
            .list_info li {
                margin: 11px 0px;
            }
            .fail {
                margin: 10px 0 20px 0px;
                text-align: center;
            }
            .email {
                position: relative;
                text-align: center;
                margin-top: 40px;
            }
            .email input {
                height: 30px;
                width: 200px;
                font-size: 14px;
                padding-right: 10px;
                padding-left: 10px;
                outline: none;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #B6B6B6;
                margin-bottom: 10px;
            }
            .block_success {
                max-width: 960px;
                padding: 70px 30px 70px 30px;
                margin: -50px auto;
                
            }
    .success {
                text-align: center;
            }
            .man .block-1 .top-title>div {
        background: url(success/phone-icon-2-lighter.png) center bottom no-repeat;
    }
    .dashed_frame {
        border: 1px dashed grey;
        border-radius: 10px;
        opacity: 1;
        background: none;
        top: 0;
        height: auto;
        padding: 15px 20px;
        width: 90%;
        margin-bottom: 20px;
    }
    .dashed_frame h2 {
        font-weight: 900;
        text-align: center;
        text-transform: uppercase;
    }
    .present {
        background-color: #eff2fa;
        border-radius: 10px;
        padding: 20px !important;
        height: 510px !important;
        border: 1px solid #e2dfe9;
    }
    .offer-head {
        left: -40px;
        position: relative;
    }
    .mail-box .head {
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
        text-align: center;
        margin: 20px 0;
    }
    .mail-box .email_ss_holder {
        float: none;
        width: 100%;
        padding: 45px 10px 15px;
        text-align: center;
    }
    .mail-box .email_cc_input {
        border: 1px solid #dcdada;
        background-color: rgba(204, 204, 204, 0.16);
        width: 258px;
        color: #000;
    }
    .mail-box .btn_ss_holder {
        float: none;
        margin: 0;
        width: 100%;
        text-align: center;
    }
    .mail-box .desc_cc_desc {
        margin: 45px 0px 0;
        color: #7b7b7b;
        font-size: 14px;
    }
    .present-descr {
        width: 58%;
        float: left;
    }
    .present1 {
        float: left;
        text-align: center;
        width: 30%;
        margin: 0 5px;
    }
    .present1.last:after {
        clear: both;
    }
    .mail-box {
        background: url("//static.best-gooods.ru/upsells/img/mail-box.png") center top no-repeat;
        width: 42%;
        float: left;
        padding: 1px 45px;
        height: 375px;
    }
    .tov-gal-big {
        margin-top: 45px !important;
        border: 1px solid lightgrey;
    }
    .tov-gal-list {
        margin-top: 45px !important;
    }
    .tov-left-cont {
        width: 420px !important;
    }
    .thanks {
        margin: 43% auto;
        font-size:28px;
        text-align:center;
        line-height:36px
    }
    .thanks span {
        font-size:20px;
    }
    @media (max-width: 960px){
        .mail-box, .present-descr {
            float: none;
            width: 100%;
        }
        .present {
            height: 100% !important;
        }
        .present-descr {
            height: 375px;
        }
        .offer-head {
            left: -40px;
        }
        .thanks {
            width: 55%;
            margin: 25% auto;
        }
    }
    @media (max-width: 640px){
        .present1 {
            margin: 0 3px;
        }
        .present, .mail-box .head, .mail-box .desc_cc_desc {
            font-size: 80%;
        }
        .present-descr {
            height: 300px;
        }
        .mail-box .email_ss_holder {
            padding: 45px 0 15px;
        }
        .mail-box .email_cc_input {
            width: 100%;
        }
        .mail-box {
            height: 330px;
            background-size: contain;
        }
        .mail-box .head {
            margin: 15px 0;
        }
        .top-title-c {
            top: 0 !important;
        }
        .thanks {
            font-size: 18px;
            line-height: 30px;
            width: 100%;
            margin: 55% auto;
        }
        .thanks span {
            font-size: 14px;
        }
    }
        </style>  
    
        
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
        
    <script>(function(w,d,k){w['r7k12']=w['r7k12']||[];var s=d.createElement('script');s.async=1;s.src='https://counter.r7k12.com/scripts/'+k+'/counter.js';s.type='application/javascript';d.head.appendChild(s);})(window,document,'76af7832c565e97443f196adc975a209');r7k12.push({hit:'pageview'});</script>


</head>
</body></html>


