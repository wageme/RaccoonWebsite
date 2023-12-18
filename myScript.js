function firstPopUp() {
    if(confirm("Voudrais-vous que je répondre en français?")){
        alert("Confirmé, je vous réponds en français")
    } else {
        alert("Alright, I won't respond in french")
    }
}

function change() {
    document.getElementById('myText').innerHTML = "Something changed :O";
}

// Taken from w3schools
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }