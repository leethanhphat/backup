function showNba(str) {
    if (str == "") { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest(); 
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { 
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getnba.php?id=" + str, true);
        xmlhttp.send();
    }
}
