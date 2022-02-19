<?php
$db = mysqli_connect("localhost", "studenttest", "studenttest123","EEMS");
if (mysqli_connect_error()) {
    echo "连接数据库失败";
}
$UserID = $_POST["UserID"];
$ApplQty = intval($_POST["ApplQty"]);
$LendBegn = $_POST["LendBegn"];
$LendEnd = $_POST["LendEnd"];
$ApplDesc = $_POST["ApplDesc"];
$ApplCre = $_POST["ApplCre"];
$query = "INSERT INTO Applications VALUES (NULL, ?, ?, ?, ?, ?, ?, '未处理', NULL, NULL)";
$stmt = $db->prepare($query);
$stmt->bind_param('sissss', $UserID, $ApplQty, $LendBegn, $LendEnd, $ApplDesc, $ApplCre);
$stmt->execute();
$stmt->store_result();
if (!$stmt->num_rows()) {
    echo "申请成功";
} else {
    echo "申请失败";
}
$stmt->free_result();
$db->close();
?>