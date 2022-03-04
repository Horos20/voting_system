function results(results) {
    fetch(results, {
         method:'GET'
    }).then(response => {
          return response.text();
    }).then(response => {
          document.getElementById('tul').innerHTML = response;
    });
}

function submitForm(e, form) {
    fetch(form.action, {
         method:'POST',
         body: new FormData(form)
    }).then(response => {
          return response.text();
    }).then(response => {
          alert(response)
    });
    e.preventDefault();
}

function log(log) {
    fetch(log, {
         method:'GET'
    }).then(response => {
          return response.text();
    }).then(response => {
          document.getElementById('log_results').innerHTML = response;
    });
}
