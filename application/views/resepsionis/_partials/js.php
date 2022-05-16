<script>
    function myTableName() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Myname");
  filter = input.value.toUpperCase();
  table = document.getElementById("Mytable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    
    td = tr[i].getElementsByTagName("td")[1];
    // console.log(td);
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
    function myTableNameD() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("MynameD");
  filter = input.value.toUpperCase();
  table = document.getElementById("MytableD");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    
    td = tr[i].getElementsByTagName("td")[1];
    // console.log(td);
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function myKodReff() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("Myreff");
  filter = input.value.toUpperCase();
  table = document.getElementById("Mytable");
  tr = table.getElementsByTagName("tr");
  console.log(tr);
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
function myKodReffD() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("MyreffD");
  filter = input.value.toUpperCase();
  table = document.getElementById("MytableD");
  tr = table.getElementsByTagName("tr");
  console.log(tr);
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function myCheckin() {
  // Declare variables 
  var option, filter, table, tr, td, i, txtValue;
  option = document.getElementById("Mycheckin");
  filter = option.value.toUpperCase();
  table = document.getElementById("Mytable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>