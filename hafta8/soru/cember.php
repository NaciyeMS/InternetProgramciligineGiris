<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çember Hesaplama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Açık mavi arka plan */
            color: #333;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        fieldset {
            border: 2px solid #007BFF;
            border-radius: 10px;
            padding: 20px;
        }

        legend {
            font-weight: bold;
            color: #007BFF;
            padding: 0 10px;
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="chesap.php" method="post">
        <fieldset>
            <legend>ÇEMBER</legend>
            <p><label>Yarı Çap giriniz 
                <input type="text" name="r" value="" />
                </label></p>
            <p><label> 
                <input type="submit" name="gonder" value="HESAPLA" />
                </label></p>
        </fieldset>
    </form>
</body>
</html>
