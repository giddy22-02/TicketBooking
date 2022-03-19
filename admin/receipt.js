
        function myPrint(receipt) {
            var printdata = document.getElementById(receipt);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
  