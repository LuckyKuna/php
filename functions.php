<?php

function save_contact(){
    !empty($_POST['comment']) ? nl2br($_POST['comment']) : $_POST['comment'] = 'Коментарі відсутні';
    $str = $_POST['name'].'|'.$_POST['surname'].'|'.$_POST['phonenumber'].'|'.$_POST['comment'].'|'.date('Y-m-d H:i:s')."\r\n";
    file_put_contents('phonebook.txt', $str, FILE_APPEND);
}

function get_contact(){
    return file_get_contents('phonebook.txt');
}

function array_contacts($contacts){
    $contacts = explode("\r\n", $contacts);
    array_pop($contacts);
    // $contacts = array_reverse($contacts);
    $contacts = array_contact($contacts);
    return $contacts;
}

function array_contact($contacts){
    $arrayContact = [];
    $i = 0;
    foreach($contacts as $contact){
        $contact = explode('|', $contact);
        $arrayContact[$i] = $contact;
        $i++;
    }
    return $arrayContact;
}

function contact_update(){
    $contacts = get_contact();
    $contacts = array_contacts($contacts);
    file_put_contents("phonebook1.txt", "");
    foreach($contacts as $contact){
        if($_POST['name'] == $contact[0] && $_POST['surname'] == $contact[1]){
            $contact[2] = $_POST['phonenumber'];
            $contact[3] = $_POST['comment'];
        }
        else{
            save_contact();
        }
        $contact1 = implode('|', $contact)."\r\n";
        file_put_contents('phonebook.txt', $contact1, FILE_APPEND);
    }    
}