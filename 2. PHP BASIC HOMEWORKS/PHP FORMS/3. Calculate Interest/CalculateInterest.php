<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>
<body>
    <form method="post">
        <label for="amount">Enter Amount</label>
            <input type="text" name="amount"><br>
        <label for="usd">USD</label>
            <input type="radio" name="check" id="usd" value="usd">
        <label for="eur">EUR</label>
            <input type="radio" name="check" id="eur" value="eur">
        <label for="bgn">BGN</label>
            <input type="radio" name="check" id="bgn" value="bgn"><br>
        <label for="period">Compound Interest Amount</label>
            <input type="text" name="period"><br>
        <select name="periodSelect">
            <option value="6">6 Months</option>
            <option value="12">1 Year</option>
            <option value="24">2 Years</option>
            <option value="60">5 Years</option>
        </select>
        <input type="submit" value="Calculate" name="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    $amount=$_POST['amount'];
    $usd=$_POST['check'];
    $compoundAmount=$_POST['period'];
    $choseMonth=$_POST['periodSelect'];
    for ($i=0;$i< $choseMonth;$i++){
        $divide=101;
        $result=($divide/100)*$amount;
        $amount=$result;
    }

    echo round($result, 2);
}


