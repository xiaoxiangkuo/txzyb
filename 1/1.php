<?php
 $storage = new SaeStorage();
 $domain = 'newspic';
 $destFileName = 'write_test.txt';
 $content = 'Hello,I am from the method of write';
 $attr = array('encoding'=>'gzip');
 $result = $storage->write($domain,$destFileName, $content, -1, $attr, true);
?>