<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>EMPLOYEES</title>
    <style>
        .B{
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="text-center">
    <h1 class="text-center">แบบฟอร์มกรอกข้อมูล</h1>
    <form action="insertdata.php" method="POST" class="container p-5 my-5 bg-primary text-white text-center">
        <div class="form-group">
            <label for="">ชื่อ</label>
            <input type="text" name="fname" id="" >
            <label for="">นามสกุล</label>
            <input type="text" name="lname" id="" >
        </div>
        <div class="form-group">
            <label for="">เพศ</label>
            <input type="radio" name="male" id="">ชาย
            <input type="radio" name="famale" id="">หญิง
        </div>
        <div class="form-group">
            <label for="" >วันเกิด</label> 
            <input type="date" name="birthday" id=""><br>
           
        </div>  
    </form>
    <input type="submit" value="บันทึกข้อมูล" class="btn btn-success ">
    <a href="index.php" class="btn btn-info">กลับสู่หน้าหลัก</a>
</body>
</html>