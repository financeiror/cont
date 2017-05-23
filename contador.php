
<body bgColor="#FFFFFF">
<center><h1>BUCETA 2016</h1></center><br>
<hr>
<?php
$pasta = "./indexx";
$pasta = opendir($pasta);
$conta = 0;
$lista = array();

while ($file = readdir($pasta)) {
       if (!is_dir($file) && $file != "." && $file != "..") {
               ++$conta;
               $lista[] = $file;
       }
}

print "<font face=\"verdana\">&rsaquo;Cliques [$conta]<br>\n";
for ($i = 0; $i < count($lista); $i++) {
       print $lista[$i] . "<br>\n";
}
?>
</font>
<hr>
</body>