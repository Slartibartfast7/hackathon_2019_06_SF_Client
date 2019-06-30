<?php
$arr_file_types = ['application/javascript','text/javascript'];

if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  echo "false";
  return;
}

move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['file']['name']);

echo "File uploaded successfully. Proof of your work will soon be stored in the blockchain.";
?>
