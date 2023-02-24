<!DOCTYPE html>
<html>
    <head>
        <title>Практика PHP</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Таблица истинности</p>
        <table>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr> 
            <tr>
                <td><?php $z1 = 0; echo $z1?></td>
                <td><?php $z2 = 0; echo $z2?></td>
                <td><?php echo !$z1?></td>
                <td><?php $q=$z1||$z2; echo (int)$q?></td>
                <td><?php $q1=$z1&&$z2; echo(int)$q1 ?></td>
                <td><?php $q2=$z1 xor $z2; echo (int)$q2 ?></td>
            </tr>
            <tr>
                <td><?php echo $z1?></td>
                <td><?php $z3 = 1; echo $z3?></td>
                <td><?php echo !$z1?></td>
                <td><?php $q3=$z1||$z3; echo (int)$q3?></td>
                <td><?php $q4=$z1&&$z3; echo(int)$q4 ?></td>
                <td><?php $q5=$z1 xor $z3; echo (int)$q5 ?></td>
            </tr>
            <tr>
                <td><?php $z4 = 1; echo $z4?></td>
                <td><?php echo $z2?></td>
                <td><?php $q6 =!$z4; echo (int)$q6?></td>
                <td><?php $q7=$z4||$z2; echo (int)$q7?></td>
                <td><?php $q8=$z4&&$z2; echo(int)$q8 ?></td>
                <td><?php $q9=$z4 xor $z2; echo (int)$q9 ?></td>
            </tr>
            <tr>
                <td><?php echo $z4?></td>
                <td><?php echo $z3?></td>
                <td><?php echo (int)$q6?></td>
                <td><?php echo $z4||$z3;?></td>
                <td><?php echo $z4&&$z3;?></td>
                <td><?php $q10 = $z4 xor $z3; echo (int)$q10 ?></td>
            </tr>
        </table>
        <p>Гибкое сравнение ==</p>
        <table>
            <tr>
                <th></th>
                <th><?php $true = true?>true</th>
                <th><?php $false = false?>false</th>
                <th><?php $n1 = 1?>1</th>
                <th><?php $n0 = 0?>0</th>
                <th><?php $nm1 = -1?>-1</th>
                <th><?php $nst = "1"?>"1"</th>
                <th><?php $null = null?>null</th>
                <th><?php $php = "php"?>"php"</th>
            </tr> 
            <tr>
                <td>true</td>
                <td><?php $res = $true == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>false</td>
                <td><?php $res = $false == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php $res = $n1 == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>0</td>
                <td><?php $res = $n0 == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>-1</td>
                <td><?php $res = $nm1 == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>"1"</td>
                <td><?php $res = $nst == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php $res = $null == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php $res = $php == $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php == $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
        </table>
        <p>Жесткое сравнение === </p>
        <table>
            <tr>
                <th></th>
                <th><?php $true= true?>true</th>
                <th><?php $false= false?>false</th>
                <th><?php $n1= 1?>1</th>
                <th><?php $n0= 0?>0</th>
                <th><?php $nm1= -1?>-1</th>
                <th><?php $nst= "1"?>"1"</th>
                <th><?php $null= null?>null</th>
                <th><?php $php= "php"?>"php"</th>
            </tr> 
            <tr>
                <td>true</td>
                <td><?php $res = $true === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $true === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>false</td>
                <td><?php $res = $false === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $false === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>1</td>
                <td><?php $res = $n1 === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n1 === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>0</td>
                <td><?php $res = $n0 === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $n0 === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>-1</td>
                <td><?php $res = $nm1 === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nm1 === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>"1"</td>
                <td><?php $res = $nst === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $nst === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php $res = $null === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $null === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
            <tr>
                <td>null</td>
                <td><?php $res = $php === $true;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $false;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $n1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $n0;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $nm1;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $nst;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $null;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
                <td><?php $res = $php === $php;$converted_res = $res ? 'true' : 'false';echo $converted_res?></td>
            </tr>
        </table>
    </body>
</html>