<?php
$conn = mysqli_connect(
  'localhost',
  'chan',
  'ninano',
  'chaum');
//
$filtered = array(
  'mom_id'=>mysqli_real_escape_string($conn, $_POST['mom_id']),
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'blood'=>mysqli_real_escape_string($conn, $_POST['blood']),
  'hospital'=>mysqli_real_escape_string($conn, $_POST['hospital']),
  'delivery'=>mysqli_real_escape_string($conn, $_POST['delivery']),
  'gastation'=>mysqli_real_escape_string($conn, $_POST['gastation']),
  'birthday'=>mysqli_real_escape_string($conn, $_POST['birthday']),
  'weight_birth'=>mysqli_real_escape_string($conn, $_POST['weight_birth']),
  'enterday'=>mysqli_real_escape_string($conn, $_POST['enterday']),
);
$sql = "
  INSERT INTO baby(mom_id, name, blood, hospital, delivery, gastation, birthday, weight_birth, enterday)
    VALUES(
      '{$filtered['mom_id']}',
      '{$filtered['name']}',
      '{$filtered['blood']}',
      '{$filtered['hospital']}',
      '{$filtered['delivery']}',
      '{$filtered['gastation']}',
      '{$filtered['birthday']}',
      '{$filtered['weight_birth']}',
      '{$filtered['enterday']}'
    )";

// print_r($filtered);
// die($sql);
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  echo mysqli_error($conn);
}else{
  header('Location: create_baby.php');
}
?>
