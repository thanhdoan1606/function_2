<?php
function findSupstring($str,$sub){
    return strpos($str,$sub) !== false; 
}

echo findSupstring('Hello world!','world');
echo findSupstring('Hello world!', 'foo');
?>