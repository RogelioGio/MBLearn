fetch('http://localhost:8000/php/endpoint.php')
  .then(response => {
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
    return response.json();
  })
  .then(data => {
    console.log("Data received from PHP API:", data);
    // Here you can manipulate the DOM or set state if using a framework like React or Vue
    const message = document.createElement('p');
    message.textContent = data.message;
    document.body.appendChild(message);
  })
  .catch(error => console.error("Error fetching data:", error));