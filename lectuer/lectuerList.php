<?php

include_once '../OPDBS.php';

$opdbs = new OPDBS();

$sql = "SELECT * FROM lectuer";

$rows = $opdbs->getAll($sql);
?>
<HTML>
<head>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.cs
s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><h1>lectuer Information</h1>
<div class=" col-sm-6">
    <table id="lectuer_table" class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>address</th>
            <th>salary</th>
            <th>qualitfication</th>
            <th></th>
        </tr>
        </thead>
</div>
<script language="JavaScript">
    var result = <?php echo json_encode($rows); ?>;
    let table = document.getElementById("lectuer_table");

    let nrow = table.rows.length; //Number of rows in the table (1 atthe beginning)
    for (i = 0; i < result.length; i++) {
        table.insertRow(nrow);
        let row = table.rows[nrow];
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        let cell6 = row.insertCell(5);
        let cell7 = row.insertCell(6);
        let cell8 = row.insertCell(7);
        cell1.innerHTML = "<div contenteditable='false'>" + result[i].id + " </div>";
        cell2.innerHTML = "<div contenteditable='true'>" + result[i].name + " </div>";
        cell3.innerHTML = "<div contenteditable='true'>" + result[i].last_name + " </div>";
        cell4.innerHTML = "<div contenteditable='true'>" + result[i].email + " </div>";
        cell5.innerHTML = "<div contenteditable='true'>" + result[i].address + " </div>";
        cell6.innerHTML = "<div contenteditable='true'>" + result[i].salary + " </div>";
        cell7.innerHTML = "<div contenteditable='true'>" + result[i].qualitfication + " </div>";
        var x = document.createElement("button");//Creating the button
        x.setAttribute("id", "deletst-" + i);
        x.setAttribute("style", "width:100%");
        x.className = "btn";
        x.innerHTML = '<span class="fa fa-trash"></span>';
        x.onclick = function () {
            delete_lectuer(table, this);
        }
        cell8.appendChild(x); //Appending the button to the end of the list

        var z = document.createElement("button");
        z.setAttribute("id", "applyeditst-" + i);
        z.setAttribute("style", "width:33%");
        z.className = "btn";
        z.innerHTML = '<span class="fa fa-check"></span>';
        z.onclick = function () {
            apply_edit_lectuer(table, this);
        }
        cell5.appendChild(z);
    }

    function apply_edit_lectuer(table, element) {
        let row = element.parentElement.parentElement;
        let id = row.cells[0].innerText;
        let name = row.cells[1].innerText;
        let last_name = row.cells[2].innerText;
        let email = row.cells[3].innerText;
        let address = row.cells[4].innerText;
        let salary = row.cells[5].innerText;
        let qualitfication = row.cells[6].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table.list(row.rowIndex); // Record has been successfully
            }
        };
        xmlhttp.open("GET", "editlectuer.php?id=" + id + "&name=" + name + "&last_name=" + last_name +"&email="
            + email +"&salary="
            + salary +"&qualitfication="
            + qualitfication +"&address="
            + address, true);
        xmlhttp.send();
    }
    function delete_lectuer(table, element) {
        let row = element.parentElement.parentElement;
        let STID = row.cells[0].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table.deleteRow(row.rowIndex); // Record has been successfully
                deleted
            }
        };
        xmlhttp.open("GET", "deletelectuer.php?id=" + STID, true);
        xmlhttp.send();
    }
</script>
</HTML>