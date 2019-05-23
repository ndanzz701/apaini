<?php

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// yang ini buat generate random string. bisa ubah berapa max karakter 
//yg mau di random. $length = 20 max 20 karakter 
//bisa di ubah sesuai keinginan
//source dari sini https://stackoverflow.com/questions/4356289/php-random-string-generator


$push = [];
//bikin variable dulu isinya array kosong


function push_array($a=0){
    //nilai default 0, kalo gak ada nilai default 
    //bakal error kalo gak di kasih nilai di 
    //pemanggilan function
    //cek bawah gw panggil function push_array(value)
    //value itu nilainya kalo gak di kasih bakal error
    //makanya gw bikin nilai default


    for($i=1;$i<=$a;$i++){
        $push[] = generateRandomString();
        //nah variable push yg kosong tadi gw isi random string
        //dapet dari function generateRandomString() paling atas
        //di isi sesuai value dari pemanggilan function paling bawah
        //misal push_array(3) bakal di isi 3 data
        //coba aja ubah nilainya dibawah
    }
    return $push;
    //nge return nilai array
    //kalo dihapus bakal error soalnya gak ada nilai yg di return
}
// function push array source https://stackoverflow.com/questions/43514533/php-push-data-to-array-in-foreach-loop/43514589
// gw ubah dikit


function has_dupes($array) {
    $dupe_array = array();
    foreach ($array as $val) {
        if (array_key_exists($val,$dupe_array)) {
            return true;
        }else {
             $dupe_array[$val] = true;
         }
    }
    return false;
}
// ini gw dapet dari https://stackoverflow.com/questions/3145607/php-check-if-an-array-has-duplicates

$pusrank = push_array(3);
//nilai dari function push_array gw masukin variable
print(json_encode($pusrank));
//print array yg dimasukin varible, gw kasih json_encode biar enak dibaca
//gak pake json encode juga gpp
print(PHP_EOL);
//biar ngasih enter
var_dump(has_dupes($pusrank));
//ngecek nilai dari data array ada yg sama gak
//kalo gak sama nilainya false
//kalo sama true
