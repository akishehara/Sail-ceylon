function confirmLog(){

    function logout(){
        var reallyLogout=confirm("Do you really want to log out?");
        if(reallyLogout){
            location.href="logout.php";
        }
}
        var el = document.getElementById("logout");
        if (el.addEventListener) {
        el.addEventListener("click", logoutfunction, false);
            } else {
        el.attachEvent('onclick', logoutfunction);
}
}
