<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
Test: <input type="text" id="txtTest" />
<hr>
<div id="debug"></div>

<script>
	var data = " \r\n";
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "http://jslab.000webhostapp.com/LongRequest_Server.php", true);
	// 開啟上述url 並使用get方式給xhr
	xhr.onprogress = function (e) {
		// document.getElementById("debug").innerHTML = xhr.responseText;
		responseText = xhr.responseText;
		// 將回傳的文字傳送到responseText儲存起來
		lastEvent = responseText.replace(data, "");
		// 不斷取代上一筆資料
		document.getElementById("debug").innerHTML = lastEvent;
		// 將lastevent 取得id為debug內的html
		// obj = JSON.parse(lastEvent);
		// document.getElementById("debug").innerHTML = obj.data + "%";
		data = responseText;
	}
	xhr.send(null);
</script>

</body>
</html>