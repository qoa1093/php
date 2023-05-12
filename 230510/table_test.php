<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style type = "test/css">
        tr>td{
            border: 1px, solid;
        }

    </style>
</head>
<body>
    <?php
    $name = "노채은";
    $number1="2124";
    $number2="3352";
    $address = "충북 청주시 청원구 율량동";
    $email1 = "qoa1093";
    $email2 = "gmail.com";
    $phone_number="010"."-".$number1."-".$number2;
    ?>
    <table style = "border : solid">
            <tr>
                <td>이름</td><td>휴대폰번호</td><td>주소</td><td>이메일</td>
            </tr>
            <tr>
                <td>
                <?=$name?>
                </td>
                <td>
                <?=$phone_number?>
                </td>
                <td>
                <?=$address?>
                </td>
                <td>
                <?= $email1."@".$email2?>
                </td>
            </tr>

            

    </table>
    
</body>
</html>