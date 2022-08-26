<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form registrasi</title>
</head>
<body>
    <h3>formulir registrasi</h3>
    <br>
    <form action="simpan_registrasi.php"method="post">
    <table>
        <tr>
            <td>nama lengkap</td>
            <td>input type="text" name="level"</td>
        </tr>
        <tr>
            <td>username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="password"></td>
        </tr>
        <td>
            <td colospan="4" style="text-align: center;"><input type="submit" name="simpan" value="simpan"></td>
        </td>
    </table>
    </form>    
</body>
</html>