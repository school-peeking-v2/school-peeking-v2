<?php

include('src/DB.php');  // coupon.php 기준으로 include

$_SESSION['ss_mb_id'] = $mb_id; // have to fix: 세션이 왜 안 받아질까???????????
$mb_id = 's2018w21@e-mirim.hs.kr';
$sql = "SELECT certificate_id FROM coupon WHERE member_id = '$mb_id'";
$result = mysqli_query($conn, $sql);

// 기본 인증서 출력
$itemList = "<div class='row'><div class='col-md'><div class='inven-item'><img class='item-img' src='images/coupon0.png' id='img0'><div class='inven-item-name'>기본인증서</div></div></div>";

// 기본 인증서 제외 현재 인증서 출력
$itemName = ['알파반', '앱앤미', '게임메이커'];
while($row = mysqli_fetch_assoc($result)){
    $itemList = $itemList . "<div class='col-md'><div class='inven-item'><img class='item-img' src='images/coupon0.png' id='img" . $row['certificate_id'] . "'><div class='inven-item-name'>" . $itemName[$row['certificate_id']-1] . "</div></div></div>";
}

$itemList = $itemList . "</div>";
?>

<script>
    document.getElementById('inven-inst').innerHTML = "인증서의 진위여부는 동아리 부장들이 확인할 수 있습니다!";
    document.getElementById('inven-list').innerHTML = "<?php echo $itemList; ?>";
</script>

<?php

mysqli_close($conn);

?>