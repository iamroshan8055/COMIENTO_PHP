<!DOCTYPE html>
<html>
<head>
<script>
function togglecheckboxes(master,group){
	var cbarray = document.getElementsByClassName(group);
	for(var i = 0; i < cbarray.length; i++){
		var cb = document.getElementById(cbarray[i].id);
		cb.checked = master.checked;
	}
}
</script>
</head>
<body>
<input type="checkbox" id="cbgroup1_master" onchange="togglecheckboxes(this,'cbgroup1')"> Toggle All
<br><br>
<input type="checkbox" id="cb1_1" class="cbgroup1" name="cbg1[]" value="1"> Item 1<br>
<input type="checkbox" id="cb1_2" class="cbgroup1" name="cbg1[]" value="2"> Item 2<br>
<input type="checkbox" id="cb1_3" class="cbgroup1" name="cbg1[]" value="3"> Item 3<br>
<input type="checkbox" id="cb1_4" class="cbgroup1" name="cbg1[]" value="4"> Item 4<br>
</body>
</html>



<input type="time" id="appt" name="appt"min="9:00" max="18:00" required>
				      <input type="time" id="appt" name="appt"min="9:00" max="18:00" required>