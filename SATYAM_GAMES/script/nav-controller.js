function toggleNav() {
  var sidebar = document.getElementById("mySidenav");
  if (sidebar.style.display === "none" || sidebar.style.display === "") {
    sidebar.style.display = "block";
  } else {
    sidebar.style.display = "none";
  }
}