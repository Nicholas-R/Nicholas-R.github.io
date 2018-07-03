(function loadServices() {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '../services.json', true);
  xhr.send();
  xhr.onreadystatechange = function() {
    if (xhr.readyState != 4) return;
    if (xhr.status != 200) {
      alert(xhr.status + ': ' + xhr.statusText);
    } else {
     try {
      var services = JSON.parse(xhr.responseText);
    } catch (e) {
      alert("Invalid answer " + e.message);
    }
    showServices(services);
  }
}

})();

var wrap = document.getElementById('wrap');
function showServices(services){
  for (var i in services.data){
    var block = `
  <a href="#" class="service-block__link">
    <span class="service-block__img">
      <img src="${services.data[i].icon}" alt="services">
    </span>
    <span class="service-block__descr">${services.data[i].title}</span>
  </a>`;
  wrap.insertAdjacentHTML("beforeEnd", block);
  }
}


