<?php 
echo '<pre>';
// var_dump($_COOKIE);
echo '</pre>';
echo '<hr>';   

copy('text.txt', 'folder/text.txt');

if(file_exists('folder/text.txt')){
    echo 'File exist';
}else{
    echo 'File not exist';
}
echo '<hr>';   

$file = file_get_contents('text.txt');
echo $file;
echo '<hr>';   

echo nl2br($file);
echo '<hr>';  

$fileweb = file_get_contents('https://php.net/');
echo $fileweb;
echo '<hr>';  

file_put_contents('folder/localfile.txt', $file);
file_put_contents('folder/websitefile.txt', $fileweb);
echo '<hr>';  

$fileArray = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
print_r($fileArray);
echo '</pre>';
echo '<hr>';  

$fileArray1 = file('text2.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
print_r($fileArray1);
echo '</pre>';
echo '<hr>';

if (is_dir('folder')){
    echo 'Dir exist';
}else{
    echo 'Dir not exist';
}
echo '<hr>';

if(is_file('folder/websitefile.txt')){
    echo 'File exist';
}else{
    echo 'File not exist';
}
echo '<hr>';   

rename('text3.txt', 'text_new.txt');
mkdir('folder2/folder3', 0777, true);

touch('folder/localfile.txt', time()-3600*24);

unlink('folder/websitefile.txt');