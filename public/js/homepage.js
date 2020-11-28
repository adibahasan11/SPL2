function button3_open() {
    document.getElementById("mySidebar1").style.display = "block";
}
  
function button3_close() {
    document.getElementById("mySidebar1").style.display = "none";
}
function button5_open() {
    document.getElementById("mySidebar2").style.display = "block";
}
  
function button5_close() {
    document.getElementById("mySidebar2").style.display = "none";
}

function button7_open() {
    document.getElementById("mySidebar3").style.display = "block";
}
  
function button7_close() {
    document.getElementById("mySidebar3").style.display = "none";
}
function AddMore_open() {
    document.getElementById("NewRow").style.display = "table-row";
}
function AddMore_Submit() {
    document.getElementById("submit").textContent = "Edit";
}
function edit() {
    if (document.getElementById("edit").textContent= "Edit"){
        document.getElementById("edit").textContent = "Submit";
        document.getElementById("delete").style.display = "block";
    }
    else{
        document.getElementById("edit").textContent = "Edit";
        document.getElementById("delete").style.display = "none";
    }
}

function DeleteRow() {
    document.getElementById(row1).style.display = "none";
}
