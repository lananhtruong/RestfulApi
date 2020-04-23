  <script>
    function getLinkJSONtgiac() {
        var a,b,c;
        a = document.getElementById("inputa").value;
        b = document.getElementById("inputb").value;
        c = document.getElementById("inputc").value;
        window.open("api.php/checktamgiac/"+a+"/"+b+"/"+c);
    }
    function getLinkJSONyear() {
        var a;
        a = document.getElementById("inputyear").value;
        window.open("api.php/checkyear/"+a);
    }
    function getData()
    {
        document.getElementById("txt_apijsontgiac").innerHTML = window.location.host +"/CloudPhpEX/api.php/checktamgiac/a/b/c";
        document.getElementById("txt_apijsonyear").innerHTML = window.location.host +"/CloudPhpEX/api.php/checkyear/year";
    }
</script>

<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>Ex restful api</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Kiểm tra tam giác</h1>
<form>
    <label for="fname">a</label><br>
    <input type="number" id="inputa" name="fname"><br>
    <label for="lname">b</label><br>
    <input type="number" id="inputb" name="lname"><br>
    <label for="lname">c</label><br>
    <input type="number" id="inputc" name="lname"><br>
    <input type ="button" name="OKE" value="GETJSON" onclick="getLinkJSONtgiac()">
</form>

<h1>Kiểm tra năm nhuần</h1>
<form>
    <label for="lname">Nhập năm</label><br>
    <input type="number" id="inputyear" name="lname"><br>
    <input type ="button" name="OKE" value="GETJSON" onclick="getLinkJSONyear()">
</form>
<h3>Api json pt2: </h3><h4 id="txt_apijsonyear"></h4>
<script>getData();</script>
</body>
</html>
