<?php

include_once './OPDBS.php';

$opdbs = new OPDBS();

$sql = "SELECT * FROM student";

$rows = $opdbs->getAll($sql);


$sql = "SELECT * FROM registration";

$rowsReg = $opdbs->getAll($sql);


$sql = "SELECT * FROM module";

$rowsMod = $opdbs->getAll($sql);


$sql = "SELECT * FROM lectuer";

$rowsLec = $opdbs->getAll($sql);

?>



<!DOCTYPE html>
<HTML>
<head>
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" 
></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div class="tabbable" id="tabs-943595">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-1" class="tabH" data-toggle="tab">student</a>
					</li>
					<li>
						<a href="#panel-2" class="tabH"  data-toggle="tab">regostration</a>
					</li>
                    
					<li>
						<a href="#panel-3" class="tabH"  data-toggle="tab">module</a>
					</li>
                    
					<li>
						<a href="#panel-4" class="tabH"  data-toggle="tab">lectuer</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<p>
                        <h1>Student Information</h1>
    <table id="student_table" class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
    </table>
<a href="#panel-11" data-toggle="tab">add</a>

						</p>
					</div>
					<div class="tab-pane " id="panel-2">
						<p>
    <table id="registration_table" class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>st_id</th>
            <th>l_id</th>
            <th>block</th>
            <th>mark</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
    </table>
                    <a href="#panel-21" data-toggle="tab">add</a>
	</p>
					</div>
                    
					<div class="tab-pane " id="panel-3">
						<p>
    <table id="module_table" class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>credit</th>
            <th>level</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
    </table>
                            <a href="#panel-31" data-toggle="tab">add</a>
						</p>
					</div>
                    
					<div class="tab-pane " id="panel-4">
						<p>
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
    </table>
                            <a href="#panel-41" data-toggle="tab">add</a>
						</p>
					</div>
				</div>
			</div>
  </div>
  <div class="col-md-2"></div>

    <br>

  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div class="tabbable" id="tabs-2">
				<div class="tab-content">
					<div class="tab-pane" id="panel-11">
						<p>	
                        <form action="./student/addstudent.php" method="post">
    Student ID: <input type="text" name="STID"><br>
    Name: <input type="text" name="name"><br>
    Last name: <input type="text" name="lname"><br> E-mail: <input type="text" name="email"><br>
    Address: <input type="text" name="address"><br> <input type="submit" value="submit">
</form>

                        </p>
					</div>
					<div class="tab-pane" id="panel-21">
						<p>
						<form action="./registration/addregistration.php" method="post">
    st_id: <input type="text" name="st_id"><br>
    l_id: <input type="text" name="l_id"><br>
    block: <input type="text" name="block"><br>
    mark: <input type="text" name="mark"><br>
    <input type="submit" value="submit">
</form>
						</p>
					</div>
                    
					<div class="tab-pane " id="panel-31">
						<p><form action="./module/addmodule.php" method="post">
    Name: <input type="text" name="name"><br>
    credit: <input type="text" name="credit"><br>
    level: <input type="text" name="level"><br>
    <input type="submit" value="submit">
</form>
						</p>
					</div>
                    
					<div class="tab-pane " id="panel-41">
						<p>
                        <form action="./lectuer/addlectuer.php" method="post">
    Name: <input type="text" name="name"><br>
    Last name: <input type="text" name="last_name"><br>
    E-mail: <input type="text" name="email"><br>
    Address: <input type="text" name="address"><br>

    salary: <input type="text" name="salary"><br>
    qualitfication: <input type="text" name="qualitfication"><br>
    <input type="submit" value="submit">
</form>
						</p>
					</div>
				</div>
			</div>
  </div>
  </div>
  <div class="col-md-2"></div>


</body>
</HTML>

<script language="JavaScript">
    $(".tabH").click(function(){
        $("#panel-11").attr('class', 'tab-pane')
        $("#panel-21").attr('class', 'tab-pane')
        $("#panel-31").attr('class', 'tab-pane')
        $("#panel-41").attr('class', 'tab-pane')
    });
    var result = <?php echo json_encode($rows); ?>;
    let table = document.getElementById("student_table");

    let nrow = table.rows.length; //Number of rows in the table (1 atthe beginning)
    for (i = 0; i < result.length; i++) {
        table.insertRow(nrow);
        let row = table.rows[nrow];
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        cell1.innerHTML = "<div contenteditable='false'>" + result[i].STID + " </div>";
        cell2.innerHTML = "<div contenteditable='true'>" + result[i].Name + " </div>";
        cell3.innerHTML = "<div contenteditable='true'>" + result[i].Lastname + " </div>";
        cell4.innerHTML = "<div contenteditable='true'>" + result[i].Email + " </div>";
        var x = document.createElement("button");//Creating the button
        x.setAttribute("id", "deletst-" + i);
        x.setAttribute("style", "width:100%");
        x.className = "btn";
        x.innerHTML = '<span class="fa fa-trash"></span>';
        x.onclick = function () {
            delete_student(table, this);
        }
        cell5.appendChild(x); //Appending the button to the end of the list

        var z = document.createElement("button");
        z.setAttribute("id", "applyeditst-" + i);
        z.setAttribute("style", "width:33%");
        z.className = "btn";
        z.innerHTML = '<span class="fa fa-check"></span>';
        z.onclick = function () {
            apply_edit_student(table, this);
        }
        cell5.appendChild(z);
    }

    function apply_edit_student(table, element) {
        let row = element.parentElement.parentElement;
        let STID = row.cells[0].innerText;
        let Name = row.cells[1].innerText;
        let Lastname = row.cells[2].innerText;
        let Email = row.cells[3].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table.deleteRow(row.rowIndex); // Record has been successfully
                deleted
            }
        };
        xmlhttp.open("GET", "./student/editstudent.php?STID=" + STID + "&Name=" + Name + "&Lname=" + Lastname +"&Email=" + Email, true);
        xmlhttp.send();
        location.reload(true)
    }
    function delete_student(table, element) {
        let row = element.parentElement.parentElement;
        let STID = row.cells[0].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table.deleteRow(row.rowIndex); // Record has been successfully
                deleted
            }
        };
        xmlhttp.open("GET", "./student/deletestudent.php?STID=" + STID, true);
        xmlhttp.send();
    }
</script>

<script language="JavaScript">
    var result = <?php echo json_encode($rowsReg); ?>;
    let table1 = document.getElementById("registration_table");

    let nrow1 = table1.rows.length; //Number of rows in the table (1 atthe beginning)
    for (i = 0; i < result.length; i++) {
        table1.insertRow(nrow1);
        var row = table1.rows[nrow1];
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        let cell6 = row.insertCell(5);
        let cell7 = row.insertCell(6);
        cell1.innerHTML = "<div contenteditable='false'>" + result[i].id + " </div>";
        cell2.innerHTML = "<div contenteditable='false'>" + result[i].st_id + " </div>";
        cell3.innerHTML = "<div contenteditable='false'>" + result[i].l_id + " </div>";
        cell4.innerHTML = "<div contenteditable='true'>" + result[i].block + " </div>";
        cell5.innerHTML = "<div contenteditable='true'>" + result[i].mark + " </div>";
        var x = document.createElement("button");//Creating the button
        x.setAttribute("id", "deletst-" + i);
        x.setAttribute("style", "width:100%");
        x.className = "btn";
        x.innerHTML = '<span class="fa fa-trash"></span>';
        x.onclick = function () {
            delete_registration(table1, this);
        }
        cell7.appendChild(x); //Appending the button to the end of the list

        var z = document.createElement("button");
        z.setAttribute("id", "applyeditst-" + i);
        z.setAttribute("style", "width:33%");
        z.className = "btn";
        z.innerHTML = '<span class="fa fa-check"></span>';
        z.onclick = function () {
            apply_edit_registration(table1, this);
        }
        cell6.appendChild(z);
    }

    function apply_edit_registration(table1, element) {
        let row = element.parentElement.parentElement;
        let id = row.cells[0].innerText;
        let st_id = row.cells[1].innerText;
        let l_id = row.cells[2].innerText;
        let block = row.cells[3].innerText;
        let mark = row.cells[4].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table1.list(row.rowIndex); // Record has been successfully
            }
        };
        xmlhttp.open("POST", "./registration/editregistration.php?id=" + id + "&st_id=" + st_id + "&l_id=" + l_id +"&block="
            + block + "&mark=" + mark, true);
        xmlhttp.send();
    }
    function delete_registration(table1, element) {
        let row = element.parentElement.parentElement;
        let STID = row.cells[0].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table1.deleteRow(row.rowIndex); // Record has been successfully
                deleted
            }
        };
        xmlhttp.open("GET", "./registration/deleteregistration.php?id=" + STID, true);
        xmlhttp.send();
    }
</script>

<script language="JavaScript">
    var result = <?php echo json_encode($rowsMod); ?>;
    let table3 = document.getElementById("module_table");

    let nrow3 = table3.rows.length; //Number of rows in the table (1 atthe beginning)
    for (i = 0; i < result.length; i++) {
        table3.insertRow(nrow3);
        let row = table3.rows[nrow3];
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        let cell5 = row.insertCell(4);
        let cell6 = row.insertCell(5);
        cell1.innerHTML = "<div contenteditable='false'>" + result[i].id + " </div>";
        cell2.innerHTML = "<div contenteditable='true'>" + result[i].name + " </div>";
        cell3.innerHTML = "<div contenteditable='true'>" + result[i].credit + " </div>";
        cell4.innerHTML = "<div contenteditable='true'>" + result[i].level + " </div>";
        var x = document.createElement("button");//Creating the button
        x.setAttribute("id", "deletst-" + i);
        x.setAttribute("style", "width:100%");
        x.className = "btn";
        x.innerHTML = '<span class="fa fa-trash"></span>';
        x.onclick = function () {
            delete_module(table3, this);
        }
        cell6.appendChild(x); //Appending the button to the end of the list

        var z = document.createElement("button");
        z.setAttribute("id", "applyeditst-" + i);
        z.setAttribute("style", "width:33%");
        z.className = "btn";
        z.innerHTML = '<span class="fa fa-check"></span>';
        z.onclick = function () {
            apply_edit_module(table3, this);
        }
        cell5.appendChild(z);
    }

    function apply_edit_module(table, element) {
        let row = element.parentElement.parentElement;
        let id = row.cells[0].innerText;
        let name = row.cells[1].innerText;
        let credit = row.cells[2].innerText;
        let level = row.cells[3].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table.list(row.rowIndex); // Record has been successfully
            }
        };
        xmlhttp.open("POST", "./module/editmodule.php?id=" + id + "&name=" + name + "&credit=" + credit +"&level="
            + level, true);
        xmlhttp.send();
    }
    function delete_module(table, element) {
        let row = element.parentElement.parentElement;
        let STID = row.cells[0].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table.deleteRow(row.rowIndex); // Record has been successfully
                deleted
            }
        };
        xmlhttp.open("GET", "./module/deletemodule.php?id=" + STID, true);
        xmlhttp.send();
    }
</script>

<script language="JavaScript">
    var result = <?php echo json_encode($rowsLec); ?>;
    let table2 = document.getElementById("lectuer_table");

    let nrow2 = table2.rows.length; //Number of rows in the table (1 atthe beginning)
    for (i = 0; i < result.length; i++) {
        table2.insertRow(nrow2);
        let row = table2.rows[nrow2];
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
            delete_lectuer(table2, this);
        }
        cell8.appendChild(x); //Appending the button to the end of the list

        var z = document.createElement("button");
        z.setAttribute("id", "applyeditst-" + i);
        z.setAttribute("style", "width:33%");
        z.className = "btn";
        z.innerHTML = '<span class="fa fa-check"></span>';
        z.onclick = function () {
            apply_edit_lectuer(table2, this);
        }
        cell5.appendChild(z);
    }

    function apply_edit_lectuer(table2, element) {
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
                table2.list(row.rowIndex); // Record has been successfully
            }
        };
        xmlhttp.open("GET", "./lectuer/editlectuer.php?id=" + id + "&name=" + name + "&last_name=" + last_name +"&email="
            + email +"&salary="
            + salary +"&qualitfication="
            + qualitfication +"&address="
            + address, true);
        xmlhttp.send();
    }
    function delete_lectuer(table2, element) {
        let row = element.parentElement.parentElement;
        let STID = row.cells[0].innerText;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                table2.deleteRow(row.rowIndex); // Record has been successfully
                deleted
            }
        };
        xmlhttp.open("GET", "./lectuer/deletelectuer.php?id=" + STID, true);
        xmlhttp.send();
    }
</script>