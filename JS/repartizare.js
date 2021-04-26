function Upload() {
	var fileUpload = document.getElementById("input-file");
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

function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("display");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("tr");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // start by saying there should be no switching:
      shouldSwitch = false;
      /* check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}
