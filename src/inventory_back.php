<?php

include('src/DB.php');  // inventory.php 기준으로 include

$sql = "SELECT * FROM icon";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

// 현재 모습과 아이템 출력
$itemList = "<div class='row'>";
$itemName = ["신입생1", "신입생2", "신입생3", "신입생4", "신입생5", "신입생6"];
    
for($i = 0; $i < $count; $i++){
    $itemList = $itemList . "<div class='col-md' onclick='chgItem(" . $i . ")'><div class='inven-item'><img class='item-img' src='images/character" . $i . ".png' id='img" . $i . "'><div class='inven-item-name'>" . $itemName[$i] . "</div></div></div>";
}

$itemList = $itemList . "</div>";

$_SESSION['ss_mb_id'] = $mb_id; // have to fix: 세션이 왜 안 받아질까???????????
$mb_id = 's2018w21@e-mirim.hs.kr';
$sql = "SELECT icon_id FROM inven WHERE member_id='$mb_id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $meImg = './images/character' . $row['icon_id'] . '.png';
}
?>

<script>
    document.getElementById('inven-inst').innerHTML = "원하는 아이템을 클릭하면, 현재 모습이 바뀝니다!";
    document.getElementById('inven-me').innerHTML = "<img class='item-img-me' src='<?php echo $meImg; ?>' id='inven-me-img'>";
    document.getElementById('inven-list').innerHTML = "<?php echo $itemList; ?>";

// 아이템 변경
function chgItem(num) {
    document.getElementById('inven-me-img').src = "./images/character" + num + ".png";

    <?php
        // have to fix: 자바스크립트에서 php로 num 값 받아오기 ㅠㅠ
        $num = 3;
        $sql = "UPDATE inven SET icon_id=$num  WHERE member_id='$mb_id'";
        $result = mysqli_query($conn, $sql);
    ?>
}
</script>

<?php

mysqli_close($conn);

?>