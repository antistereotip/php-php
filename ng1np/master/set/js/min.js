function toggle(id) {
  'use strict';

  var e = document.getElementById(id);

  if (e.style.display === '') {
    e.style.display = 'none';
  }
  else {
    e.style.display = '';
  }
}

function toggle2(id, link) {
  'use strict';

  var e = document.getElementById(id);

  if (e.style.display === '') {
    e.style.display = 'none';
    link.innerHTML = 'dw';
  }
  else {
    e.style.display = '';
    link.innerHTML = 'up';
  }
}

function getSelect(s) {
  'use strict';

  return s.options[s.selectedIndex].value;
}

function showResult(str){if (str.length==0){document.getElementById('livesearch').innerHTML='';
document.getElementById('livesearch').style.border='0px'; return;} if (window.XMLHttpRequest) 
{xmlhttp=new XMLHttpRequest();} else {xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');} 
xmlhttp.onreadystatechange=function() {if (xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById('livesearch').innerHTML=xmlhttp.responseText; 
document.getElementById('livesearch').style.border='0px solid #414141';}} 
xmlhttp.open('GET','set/lsearch.php?q='+str,true); xmlhttp.send(); }
