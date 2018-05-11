<?php
/**
 * Created by PhpStorm.
 * User: onehome
 * Date: 2018/4/8
 * Time: 10:50
 */
$files = array();
echo '<br>';
function read_all ($dir){
    if(!is_dir($dir)){
        return false;
    }else{
        $handle = opendir($dir);

        if($handle){
            while(($fl = readdir($handle)) !== false){
                $temp = $dir.DIRECTORY_SEPARATOR.$fl;
                if(is_dir($temp) && $fl!='.' && $fl != '..'){
                    read_all($temp);
                }else{
                    if($fl!='.' && $fl != '..'&& !preg_match('/.+\.(js|css|png|jpg)$/is',$fl,$arr)){
//                        array_push($files,$temp);
                        echo $temp.'<br>';
                    }
                }
            }
        }
    };
}

read_all('E:\web\frontEnd\templates\onehome\html');
?>