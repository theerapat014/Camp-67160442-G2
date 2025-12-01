<!-- resources/views/html101.blade.php -->
 <!DOCTYPE html>
<html>
    <head>
        <title>Work Shop</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        
    </head>
    
<body>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            margin: 20px;
        }
        .name-input {
            width: 300px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <div class="container">
        <h1 class="text-center">Work shop HTML_FORM</h1>
        <div class="d-flex align-items-center mt-3">
            <label class="me-2 mb-0" for="fname">ชื่อ</label>
            <input id="fname"type="text" class="form-control name-input mr-3" placeholder="พิมพ์ชื่อที่นี่...">
            <label class="me-3 mb-0 ms-2"for="lname">สกุล</label>
            <input id="lname" type="text" class="form-control name-input " placeholder="พิมพ์สกุลที่นี่...">
        </div>
        <div class="d-flex align-items-center mt-3">
            <label class="me-3" for="Date">วัน/เดือน/ปีเกิด</label>
            <input id="Date" type="date" class="form-control name-input w-50" >
        </div>
        <div class="d-flex align-items-center mt-3">
            <label class="me-2 mb-0" for="age">อายุ</label>
            <input id="age" type="number" class="form-control name-input" placeholder="พิมพ์อายุที่นี่...">
        </div>
        <div class="d-flex  align-items-center mt-3">
            <label>เพศ</label>
            <input type="radio" class="form-check-input ms-3 me-1" name="gender" >ชาย
            <input type="radio" class="form-check-input ms-3 me-1" name="gender" >หญิง
        </div>
        <div class="d-flex align-items-center mt-3">
            <label class="me-3">รูป</label>
            <input type="file" class="form-control name-input w-50" >
            

        </div>
        <div class="d-flex align-item-center mt-3">
            <label class="me-3">ที่อยู่</label>
            <textarea class="form-control" rows="3" style="width: 90%;" placeholder="พิมพ์ที่อยู่ที่นี่..."></textarea>
        </div>
        <div class="d-flex align-items-center mt-3">
            <label class="me-3">สิ่งที่ชอบ</label>
            <select name="cars" id="cars" class="form-select name-input w-50">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        <div class="d-flex mt-4">
            <label>แนวเพลงที่ชอบ</label>
            <input type="checkbox" class="form-check-input ms-3 me-1" >POP
            <input type="checkbox" class="form-check-input ms-3 me-1" >ROCK
            <input type="checkbox" class="form-check-input ms-3 me-1" >JAZZ
        </div>
        <div class="d-flex align-items-center mt-3 ">
            <input type="checkbox" class="form-check-input ms-3 me-1" >ยินยอมให้เก็บข้อมูล

        </div>
        <div class="text-center mt-4">
            <button type="button" class="btn btn-success me-3">บันทึก</button>
            <button type="button" class="btn btn-secondary">ยกเลิก</button>
        </div>
        
</body>
</html>