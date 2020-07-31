<?php
header ( 'Access-Control-Allow-Origin: *' );
header ( 'Content-Encoding', 'chunked' );
header ( 'Transfer-Encoding', 'chunked' );
header ( 'Connection', 'keep-alive' );
echo " " . "\r\n";
ob_flush ();
flush ();

$response = array (
		"event" => "progress",
		"data" => 0 
);

for($i = 1; $i <= 10; $i ++) {
	sleep ( rand ( 1, 3 ) );
	// 暫停隨機秒數
	$response ["data"] = $i * 20;
	// 將i傳給上述定義的陣列欄位裡的data
	echo json_encode ( $response ) . "\r\n";
	//用json_encode去編碼response
	ob_flush ();
	//把 PHP output_buffer (假設有打開)的東西輸出，但並不是立刻輸出到終端
	flush ();
	//把非 PHP output_buffer，伺服器上準備輸出的資料輸出到瀏覽器上”顯示出來”
}

?>