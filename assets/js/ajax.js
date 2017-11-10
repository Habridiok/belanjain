var button = document.querySelector('#request');

button.addEventListener('click', () => {
  var xhr = new XMLHttpRequest();
  var url = 'http://localhost/ajaxbasic/ajax-basic.php';

  xhr.open('GET', url, true);

  xhr.onreadystatechange = () => {
  	if (xhr.readyState === 4 && xhr.status === 200){
  		alert(xhr.responseText);
  	}
  };

  xhr.send(null);

});