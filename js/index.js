fetch('/api/archivos')
      .then(res => res.json())
      .then(data => {
        console.log(data);
});