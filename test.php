<!DOCTYPE html>
<html>
<title>Print form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <form method="post" action="" id="receipt">
        <fieldset>
            <legend>Personal information:</legend>
            First name:<br>
            <input type="text" name="firstname">
            <br> Last name:<br>
            <input type="text" name="lastname">
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <p align="center"><input type="button" onclick="myPrint('receipt')" value="print"></p>
    <script>
        function myPrint(receipt) {
            var printdata = document.getElementById(receipt);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
</body>
</html>