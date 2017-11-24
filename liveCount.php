<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LiveCount SDRC</title>
</head>
<body>
    <h1>Jumlah Tamu</h1>
    <!-- Yang dibawah buat nampilin angka perhtungannya -->
    <h3 id="counter">XX</h3>
    <!-- Import library jQuery -->
    <script src="jquery.min.js"></script>
    <script>
        function update(){
            $("#counter").load("counter.php");
        }

        setInterval("update()", 500);
    </script>
</body>
</html>