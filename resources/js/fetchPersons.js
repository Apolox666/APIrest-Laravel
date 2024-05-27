document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost/postgres/public/api/v1/persons') // Actualiza esta URL si es necesario
        .then(response => {
            console.log('Raw response:', response); // Depura la respuesta cruda
            return response.text(); // Obtén la respuesta como texto primero
        })
        .then(text => {
            console.log('Response text:', text); // Muestra el texto de la respuesta
            return JSON.parse(text); // Luego parsea el texto como JSON
        })
        .then(data => {
            console.log('Datos recibidos:', data);
            const tableBody = document.getElementById('personTableBody');
            data.forEach(person => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="px-6 py-3 text-black">${person.name}</td>
                    <td class="px-6 py-3 text-black">${person.email}</td>
                    <td class="px-6 py-3 text-black">${person.phone}</td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});
