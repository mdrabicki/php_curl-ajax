<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script>
//        function getData() {
//            var xmlhtml = new XMLHttpRequest();
//            xmlhtml.onreadystatechange = function () {
//                if (this.status = 200) {
//                    for (var i = 0; i < 2; i++) {
//                        data = this.responeText;
//                        tr = $('<tr/>');
//                        tr.append("<td>" + data[i].Id + "</td>");
//                        tr.append("<td>" + data[i].FirstName + "</td>");
//                        tr.append("<td>" + data[i].LastName + "</td>");
//                        $('data').append(tr);
//                    }
//                }
//            }
//            xmlhtml.open("GET", "api.php", true);
//            xmlhtml.send();
//
//        }
        function getData() {
            $.getJSON('api.php',
                    function (json) {
                        var tr;
//                        tr = $('<tr/>');
//                        tr.append("<td>" + 'Id' + "</td>");
//                            tr.append("<td>" + 'Firstname' + "</td>");
//                            tr.append("<td>" + "LastName" + "</td>");
//                            $('table').append(tr);
                        for (var i = 0; i < json.length; i++) {
                            tr = $('<tr/>');
                            tr.append("<td>" + json[i].Id + "</td>");
                            tr.append("<td>" + json[i].FirstName + "</td>");
                            tr.append("<td>" + json[i].LastName + "</td>");
                            $('table').append(tr);
                        }
                    }
            );
        }
    </script>
    <body>
        <button type="button" onclick="getData()"> Pobierz </button>
        <table >
            <tr>
                <th>
                    Id
                </th>
                <th>

                    FirstName
                </th>
                <th>
                    LastName
                </th>
            </tr>
        </table>
    </body>
</html>
