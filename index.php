<?php

$admin =2017025737;
$bot= "zakaz2bot";
$kanalimz = "@uzbek_black_hackers";

date_default_timezone_set('Asia/Tashkent');

$token='5103485139:AAEFAy0d5wPjrNonzcykpr-p5sJOg9ZTwnw';

define('API_KEY',$token);

    function bot($method, $datas=[]){
        $url = "https://api.telegram.org/bot".API_KEY."/".$method;
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
        $res = curl_exec($ch);
        if(curl_error($ch)){
            var_dump(curl_error($ch));
        }else{
            return json_decode($res);
        }
    }

function delm($chid,$mid)
{
   bot('deleteMessage',[
'chat_id'=>$chid,
'message_id'=>$mid,
]);
}
function sm($chid,$text,$pm,$button)
{
  bot('sendMessage',[
'chat_id'=>$chid,
'text'=>$text,
'parse_mode'=>$pm,
'reply_markup'=>$button
]);
}

$button_son=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"10"],['text'=>"30"],['text'=>"50"],['text'=>"70"]
]
]]);

$bu1 = json_encode([
'remove_keyboard'=>true,
]);

function put($fayl, $nima)
{
file_put_contents("$fayl", "$nima");
}

function get($fayl)
{
$get = file_get_contents("$fayl");
return $get;
}
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
/* Assalomu Alaykum Ushbu kod @Ramshodbek_Dev Tomonidan Zakazga tuzib chiqildi!
Zakaz bergan odam hurmatini yoqotgani uchun atayn tarqatyabman 
Iltimos Manbasiz hech qayerda korme xafalashamz agarda korib qolsam
Nafsga Jilov bermang!!!!*/
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$text = $message->text;
$tx = $message->tx;
$type = $message->chat->type;
$name = $message->from->first_name;
$uid = $message->from->id;
$mid = $message->message_id;
$user = $message->from->username;
$soat = date("H",strtotime("4 hour"));
$sana = date("d.m.Y",strtotime("4 hour"));
$kun = date("d",strtotime("4 hour"));
$audio = $message->audio;
$reply = $message->reply_to_message->text;
$step=file_get_contents("bot/$cid.step");
$stepp=file_get_contents("step/$cid.step");
mkdir("bot");
mkdir("step");
mkdir("vid");
$nazad="🔙Orqaga";
$regi="[$name](tg://user?id=$uid)";
$yil = date("Y",strtotime("4 hour"));
$mid = $message->message_id;
$sreply = $message->reply_to_message->text;  
$sreplyd = $message->reply_to_message->document;
$forwardu = $message->forward_from;
$forwardg = $message->forward_from_chat;
$cid2 = $update->callback_query->message->chat->id;
$type=$message->chat->type;
$fname = $message->from->first_name;
$fid2 = $update->callback_query->from->id;
$data = $update->callback_query->data;
$mid = $message->message_id;
$mid2 = $update->callback_query->message->message_id;
$callback = $update->callback_query;
$cqid = $update->callback_query->id;
$name = $message->from->first_name;
$photo = $message->photo;
$photoid = $message->photo[0]->file_id;
$call = $update->callback_query;
$mes = $call->message;
/* Assalomu Alaykum Ushbu kod @Ramshodbek_Dev Tomonidan Zakazga tuzib chiqildi!
Zakaz bergan odam hurmatini yoqotgani uchun atayn tarqatyabman 
Iltimos Manbasiz hech qayerda korme xafalashamz agarda korib qolsam
Nafsga Jilov bermang!!!!*/
$qid = $call->id;
$callcid = $mes->chat->id;
$callmid = $mes->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;
$id = $update->callback_query->id;
$message = $update->message;
$callbackdata = $update->callback_query->data;
$chatid = $message->chat->id;
$chat_id = $update->callback_query->message->chat->id;
$messageid = $message->message_id;
$id = $update->callback_query->id;
$fromid = $message->from->id;
$from_id = $update->callback_query->from->id;
$firstname = $message->from->first_name;
$first_name = $update->callback_query->from->first_name;
$lastname = $message->from->last_name;
$message_id = $update->callback_query->message->message_id;
$text = $message->text;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactuser = $contact->username;
$contactname = $contact->first_name;
$phonenumber = $contact->phone_number;
$messagereply = $message->reply_to_message->message_id;
$user = $message->from->username;
$userid = $update->callback_query->from->username;
$query = $update->inline_query->query;
$messagereply = $message->reply_to_message->message_id;

mkdir("pul");
mkdir("odam");
mkdir("qiwi");
$key = json_encode;
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
$step = file_get_contents("step/$cid.step");
if(file_get_contents("pul/$cid.txt")){
}else{    file_put_contents("pul/$cid.txt","0");
}
if(file_get_contents("odam/$cid.dat")){
}else{    file_put_contents("odam/$cid.dat","0");
}


////////@Ramshodbek_Coder kanalimizga obuna buling//////

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$nazad"],],
]
]);

/////////Bu menulari @Ramshodbek_Dev tomonida yozildi////////
$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎞Instagram"],['text'=>"💬Telegram"]],
[['text'=>"🎶Tiktok"],['text'=>"▶️You Tube"]],
[['text'=>"☎️  ᴀᴅᴍɪɴɪsᴛʀᴀᴛᴏʀ"],['text'=>"👤Referal"]],
]
]);
$key10 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Obunachi"],['text'=>"Like"]],
[['text'=>"Prosmotr👁️"],['text'=>"Kometariya"]],
[['text'=>"◀️ Ortga"]],
]
]);

$key12 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Obunachi (Kanal)"],['text'=>"Obunachi(guruh)"]],
[['text'=>"Prosmotr"],['text'=>"◀️ Ortga"]],
]
]);

$key13 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Obunachilar"],['text'=>"Likelar"]],
[['text'=>"Prosmotrlar"],['text'=>"Kometariyalar"]],
[['text'=>"◀️ Ortga"]],
]
]);
$key14 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"olmos yigish"],['text'=>"💰Mening Hisobim"]],
[['text'=>"Bu bolim haqida"],['text'=>"Almashtirish"]],
[['text'=>"◀️ Ortga"]],
]
]);


$key15 = json_encode([
'remove_keyboard'=>true,
]);

////////-----------Zayafka berish ---------////////

$adminga_pul_text="Manashu raqamga to'lov qilib to'lov qildim tugmasini bosing";

if (!is_dir($cid))
{
  mkdir($cid);

}

$holat=file_get_contents($cid.'/holat.txt');

if ($holat=='odamson' and $message->text){

put($cid.'/odamson.txt',$text);
sm($cid, "1 soniya..",'html',$bu1);
sm($cid,"Kanalinggizni ssilkasini tashlang",'html',null);
put($cid.'/holat.txt',"ssilka");

}elseif ($holat=='ssilka' and $message->text){

put($cid.'/ssilka.txt',$text);
sm($cid,"To'lov qilmoqchi bo'lgan karta raqamni tashlang",'html',null);
put($cid.'/holat.txt',"tolov");

}elseif ($holat=='tolov' and $message->text and strlen($text)==16){
put($cid.'/kartaraqam.txt',$text);


$tugma_tasdiq=json_encode([
'inline_keyboard'=>[
[
['text'=>"To'lov qildim",'callback_data'=>'usertasdiq']
]
]]);

sm($cid,"$adminga_pul_text",'html',$tugma_tasdiq);

}

if ($callbackdata=='usertasdiq')
{
put($callcid.'/holat.txt',"start");

$elonturi=get($callcid."/type.txt");
$odamsoni=get($callcid."/odamson.txt");
$ssilkasi=get($callcid."/ssilka.txt");
$kartaraqam=get($callcid."/kartaraqam.txt");

$admingatext="
$callfname dan

Buyurtma turi : $elonturi

Odam soni : $odamsoni

Kanali : $ssilkasi

Kartaraqami : $kartaraqam
";

$tugma_tasdiq_admin=json_encode([
'inline_keyboard'=>[
[
['text'=>"Tasdilayman",'callback_data'=>'admintasdiqla_'.$callcid],
['text'=>"Rad etish",'callback_data'=>'adminrad_'.$callcid],
]
]]);

sm($admin,"$admingatext",'html',$tugma_tasdiq_admin);
delm($callcid,$callmid);

sm($callcid,"So'rov adminga yetkazildi",'html',$key);
delm($callcid,$callmid);
}

/////----Admin to'lovni qabul qilish yoki rad etish////

if (isset(explode('admintasdiqla_',$callbackdata)[1]))
{
$qchid=explode('admintasdiqla_',$callbackdata)[1]; 
sm($qchid,"Admin sizning to'lovinggizni qabul qildi",'html',$key);

unlink($qchid."/odamson.txt");
unlink($qchid."/ssilka.txt");
unlink($qchid."/kartaraqam.txt");
unlink($qchid."/type.txt");

sm($callcid,"Tasdiqlandi",'html',null);
delm($callcid,$callmid);

}
if (isset(explode('adminrad_',$callbackdata)[1]))
{
$qchid=explode('adminrad_',$callbackdata)[1]; 

sm($qchid,"Admin sizning to'lovinggizni rad etdi",'html',$key);
sm($callcid,"Rad etildi",'html',null);
delm($callcid,$callmid);

unlink($qchid."/odamson.txt");
unlink($qchid."/ssilka.txt");
unlink($qchid."/kartaraqam.txt");
unlink($qchid."/type.txt");
}

//////////////Ushbu kod @Ramshodbek_Dev tomonida 0 dan yozildi zAkaz uchun//////////////////////////////


if($text=="🎶Tiktok"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Siz tik tok bulimidasiz",
'parse_mode'=>'html',
'reply_markup'=>$key13,
'remove_keyboard'=>true,
]);
}

////////Bu Kod @GolDev_Uz Tomonidan Tuzildi///////

if($text=="◀️ Ortga"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🏫 Bosh Sahifaga Qaytingiz!",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
} 

if($text=="☎️  ᴀᴅᴍɪɴɪsᴛʀᴀᴛᴏʀ"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🔰 Agar sizda bot bilan bog'liq savollaringiz yoki muammolaringiz bo'lsa, iltimos, qo'llab-quvvatlashga murojaat qiling.
qo'llab-quvvatlash xizmati: @Ramshodbek_Dasturchi",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
} 

if($text=="🎞Instagram"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"siz instagram bulimidasz",
'parse_mode'=>'html',
'reply_markup'=>$key10,
]);
}

if($text=="💬Telegram"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"siz telegram bulimdasiz",
'parse_mode'=>'html',
'reply_markup'=>$key12,
]);
} 

/* Assalomu Alaykum Ushbu kod @Ramshodbek_Dev Tomonidan Zakazga tuzib chiqildi!
Zakaz bergan odam hurmatini yoqotgani uchun atayn tarqatyabman 
Iltimos Manbasiz hech qayerda korme xafalashamz agarda korib qolsam
Nafsga Jilov bermang!!!!*/
 if($text=="▶️You Tube"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Siz youtube bulimdasiz✍
Bu bolim hali ishga tushmadi",
'parse_mode'=>'html',
'reply_markup'=>$key11
]);
}

if($text=="/start"){

put($cid.'/holat.txt',"start");

bot('sendMessage',[
'chat_id'=>$cid,
 'text'=>"
 Botimiz Siz Uchun Ishga Tushmoqda!!",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'◽◽◽◽◽◽◽◽◽◽ 0%'
 ]);
  sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'▪️◽◽◽◽◽◽◽◽◽ 10%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️◽◽◽◽◽◽◽◽ 20%'
 ]);
  sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️◽◽◽◽◽ 50%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️◽◽◽ 70%'
 ]);
 sleep(0.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️◽ 90%'
 ]);
 sleep(0.7);
bot('editMessageText',[
'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️ 100%'
 ]);
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"👋 Assalomu alaykum, Xarfga_VideoBot-ga xush kelibsiz!
🚀 Biz Bilan Birgalikda Siz Ko'p Narsaga Qodirsiz 🙃

🔽 Davom etish uchun quyidagi tugmalardan birini tanlang:",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
} 

/////@Ramshodbek_Dev  Tomonidan 0 dan  yozilindi manbasiz korsam Itaraman!!!!!!

if($text=="👤Referal"){
bot('sendPhoto',[
'chat_id'=>$cid,
"photo"=>"https://t.me/Spamdano/48",
'caption'=>"Marhamat kerakli menuni bos",
'reply_markup'=>$key14
]);
}

///////Bu Referal bulimi olmos berish referal vahokazo////////
if($text == "olmos yigish"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"👥 Takliflar bo'limi 👥

🔗 Sizning taklif havolangiz:
https://t.me/$bot?start=$cid

🎁 Takliflar uchun sizga beriladi:

100 so'm - botga kirsa
50 so'm - vazifalarni bajarsa

💰 Qancha ko'p do'stlaringizni taklif qilsangiz, shuncha ko'p pul ishlaysiz! Omad!.",
	'parse_mode'=>'html',
	'reply_markup'=>$menu,
	]);
	}

if($text=="/start"){
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul+0;
file_put_contents("pul/$cid.txt","$mm");
$odam = file_get_contents("odam/$cid.dat");
$kkd=$odam+0;
file_put_contents("odam/$cid.dat","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"",
    'parse_mode'=>'html',
    'reply_markup'=>$menu
    ]);
}
if(mb_stripos($text,"/start $cid")!==false){
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Siz ilgari bot azosi bolgansiz",
      'parse_mode'=>'html',
      'reply_markup'=>$key,
      ]);
}else{
      $idref = "pul/$ex.db";
      $idref2 = file_get_contents($idref);
      $id = "$cid\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
if(mb_stripos($idref2,$cid) !== false ){
}else{
$pub=explode(" ",$text);
$ex=$pub[1];
$pul = file_get_contents("pul/$ex.txt");
$a=$pul+1;
file_put_contents("pul/$ex.txt","$a");
$odam = file_get_contents("odam/$ex.dat");
$b=$odam+1;
file_put_contents("odam/$ex.dat","$b");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Salom sizni $ex taklif qildi*",
'parse_mode'=>'markdown',
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$ex,
'text'=>"*Yangi referal 1 tanga berildi.*",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}
}
if($text=="💰Mening Hisobim"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🎟Sizning hisobingiz: *$pul* tanga
🎟Takliflar: *$odam* ta",
'parse_mode'=>"markdown",
]);
}
//////////Bu zayafka berish bulimlar///////

//telegram
if($text=="Obunachi (Kanal)"){

put($cid.'/type.txt',"telegram obunachi");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Obunachi(guruh)"){

put($cid.'/type.txt',"telegram obunachi guruh");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Prosmotr"){
put($cid.'/type.txt',"telegram prosmotr");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

//Instagram
if($text=="Obunachi"){

put($cid.'/type.txt',"Instagram obunachi");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Like"){

put($cid.'/type.txt',"Instagram like");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Kometariya"){

put($cid.'/type.txt',"Instagram Kometariya");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Prosmotr👁️"){

put($cid.'/type.txt',"Instagram prosmotr");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

       //TikTok//

if($text=="Obunachilar"){

put($cid.'/type.txt',"Tikatok obunachi");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Likelar"){

put($cid.'/type.txt',"TikTok like");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}


if($text=="Kometariyalar"){

put($cid.'/type.txt',"TikTok kometariya");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}

if($text=="Prosmotrlar"){

put($cid.'/type.txt',"Tiktok prosmotr");
  sm($cid,"Nechta a'zo qo'shmoqchisiz",'html',$button_son);
put($cid.'/holat.txt',"odamson");
}


if($text == '/file' and $cid == $admin){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>new CURLFile(__FILE__),
]);
}
//////////// Bu olmos almashtrsh patpischikga///////
if($text=="Almashtirish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz Botga Kanalingiz lichkasi va nakrutka miqdorini Yuboring!</b>
‼️Diqqat‼️ /insta sozidan song profilingiz linkini yozing

<b>📜 Na'muna: /insta 
 https://instagram.com/jonli_obunachilar?utm_medium=copy_link </b>

<b>Minimal Nakrutka urish narxi 💎10 Ball💰</b>",   
'parse_mode'=>'html',
'reply_markup'=>$key15,
]);
}
if(mb_stripos($text,"/insta")!==false){
file_put_contents("qiwi/$cid.txt","$text");
$qiwi=file_get_contents("qiwi/$cid.txt");
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=10){ /*nakrutka uchun minimal miqdor*/
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"To'g'ri bajarildi sizning zayafkangiz adminga yuborildi 24ichda zayafka bajariladi",
'parse_mode'=>'markdown',
'reply_markup'=>$key4
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <b>$cid</b> olmoslarini patpischikka alishtirmoqchi

🍈kanal useri : <code>$qiwi</code>
💰Balansi: <b>$pul </b> olmos
 Yechib olindi: 10 olmos
 Obunachi : 50 ta
👥Taklif qilgan odamlari: <b>$odam</b> ta
🆔ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);
$pul = file_get_contents("pul/$cid.txt");
$k=$pul-10; /*nakrutka uchun minimal miqdor*/
file_put_contents("pul/$cid.txt","$k");
$sum=file_get_contents("bajarildi");
$uio=$pul+$sum;
file_put_contents("bajarildi","$uio");
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>🚫 😾Sizda Yetarli Balans Yo'q❗</b>.",
'parse_mode'=>'html',
'reply_markup'=>$key15,
]);
}
}

/* Assalomu Alaykum Ushbu kod @Ramshodbek_Dev Tomonidan Zakazga tuzib chiqildi!
Zakaz bergan odam hurmatini yoqotgani uchun atayn tarqatyabman 
Iltimos Manbasiz hech qayerda korme xafalashamz agarda korib qolsam
Nafsga Jilov bermang!!!!*/

?>
