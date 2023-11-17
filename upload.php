<html>
<body>
<?php

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

$files = $_FILES['files'];

if(!empty($files)){
  $file_desc = reArrayFiles($files);
  // print_r($file_desc);

  foreach($file_desc as $val){
     $file_name = $val['name'];
     $location = 'upload/'.$file_name;
    /* Permanently save the file upload to the upload folder */
    if ( move_uploaded_file($val['tmp_name'], $location) ) { 
      echo "<p> upload $file_name succeeded...</p>"; 
    } else { 
      echo '<p>upload $file_name failed....</p>'; 
    }
  }
}

?>

</body>
</html>