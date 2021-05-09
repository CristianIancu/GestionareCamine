function Upload() {
	var fileUpload = document.getElementById("input-file");
	var form = document.getElementById("form");
	var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
	if (regex.test(fileUpload.value.toLowerCase())) {
		if (typeof (FileReader) != "undefined") {
			var reader = new FileReader();
			reader.onload = function (e) {
				var table = document.getElementById('display');
				var rows = e.target.result.split("\n");
				for (var i = 0; i < rows.length; i++) {
					var cells = rows[i].split(",");
					if (cells.length > 1) {
						var row = table.insertRow(-1);
						for (var j = 0; j < cells.length; j++) {
							var cell = row.insertCell(-1);
							cell.innerHTML = cells[j];
						}
					}
					table.style.display = "block";
					form.style.display = "none";
				}
			}
			reader.readAsText(fileUpload.files[0]);
			
		} else {
			alert("This browser does not support HTML5.");
		}
	} else {
		alert("Please upload a valid CSV file.");
	}
}

function myFunction() {
  var x = document.getElementById("display");
  var y = document.getElementById("form");
  var z = document.getElementById("input-file");
  if (x.style.display === "none" && y.style.display == "block") {
    x.style.display = "block"
	y.style.display = "none";
  } else {
    x.style.display = "none"
	y.style.display = "block";
  }
  
}

function ManualAdd() {
	
	var row = 1;

	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var faculty = document.getElementById("faculty").value;
	var specialization = document.getElementById("specialization").value;
	var average = document.getElementById("average").value;
	
	if(!fname || !lname || !faculty || !specialization || !average) {
		alert("Vă rugăm să completați toate căsuțele");
		return;
	}
	
	var display = document.getElementById('display');
	
	var newRow = display.insertRow(row);
	
	var cell1 = newRow.insertCell(0);
	var cell2 = newRow.insertCell(1);
	var cell3 = newRow.insertCell(2);
	var cell4 = newRow.insertCell(3);
	var cell5 = newRow.insertCell(4);
	
	cell1.innerHTML = fname;
	cell2.innerHTML = lname;
	cell3.innerHTML = faculty;
	cell4.innerHTML = specialization;
	cell5.innerHTML = average;
	
	row++;
}




