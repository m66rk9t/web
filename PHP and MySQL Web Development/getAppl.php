<?php
//连接数据库
$db = mysqli_connect("localhost", "admintest", "admintest123", "EEMS");
if (mysqli_connect_error()) {
    echo "连接数据库失败，请联系管理员并反馈问题";
}
//执行查询
$query = "SELECT * FROM Applications";
$stmt = $db->prepare($query);
$stmt->execute();
//将查询结果保存为JSON数据
$result = $stmt->get_result();
$applications = $result->fetch_all(MYSQLI_ASSOC);
$stmt->free_result();
$db->close();
$applications_json = json_encode(["applications"=>$applications], JSON_UNESCAPED_UNICODE);
echo $applications_json;
// 将JSON数据写入JSON文件
// file_put_contents("applications.json", $applications_json);
exit;
?>