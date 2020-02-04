<?php

$conn = mysqli_connect(
  'localhost',
  'chan',
  'ninano',
  'chaum');
//
$filtered = array(
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'phone'=>mysqli_real_escape_string($conn, $_POST['phone']),
  'age'=>mysqli_real_escape_string($conn, $_POST['age']),
  'hospitalized'=>mysqli_real_escape_string($conn, $_POST['hospitalized']),
  'discharged'=>mysqli_real_escape_string($conn, $_POST['discharged'])
);
//
$sql = "
  INSERT INTO mom(name, phone, age, hospitalized, discharged)
    VALUES(
      '{$filtered['name']}',
      '{$filtered['phone']}',
      '{$filtered['age']}',
      '{$filtered['hospitalized']}',
      '{$filtered['discharged']}'
    )";
print_r($_POST);
die($sql);
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  echo mysqli_error($conn);
}else{
  header('Location: create.php');
}
?>
