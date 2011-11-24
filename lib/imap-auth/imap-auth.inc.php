<?php
function authenticate_imap($user,$pass,$server,$port='143',$tls='tls',$cert_validation='validate-cert'){
  $result=false;

  $imap_login = @imap_open("{".$server.":".$port."/".$cert_validation."/".$tls."}", $user, $pass, OP_HALFOPEN, 1);
  if ($imap_login == false){
    $result = false;
  } else {
    $result = true;
    imap_close($imap_login);
  }

  return $result;
}
?>
