var rep = document.getElementById("txtHint");
function showUser(str) {

    if (str == "") {
      rep.innerHTML = "";
      return;
    } else {
      var xml = new XMLHttpRequest();
      xml.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          rep.innerHTML = this.responseText;
        }        
        if(this.readyState == 4 && this.status == 405) {
          console.log(xml);
          var retour = JSON.parse(xml.response);
          rep.innerHTML = retour.explication;
        }
      };
      xml.open("GET","http://garage-automobile.store/public/ajax/annuaire.php?q="+str,true);
      xml.send();
    }
}