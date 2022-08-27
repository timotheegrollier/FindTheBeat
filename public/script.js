if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('worker.js')
      .then(function () {console.log('Enregistrement reussi.')})
      .catch(function (e) {console.error(e)});
  }