<?php
// Recibe el título de la película desde el cliente (JavaScript)
$movieTitle = isset($_GET['titulo']) ? $_GET['titulo'] : '';

if (!empty($movieTitle)) {
    // Configura la URL de la API de OMDB
    $apiKey = "tu_clave_de_api"; // Reemplaza con tu clave de API
    $baseUrl = "http://www.omdbapi.com/";
    $apiUrl = "{$baseUrl}?s={$movieTitle}&apikey={$apiKey}";

    // Realiza la solicitud a la API
    $apiResponse = file_get_contents($apiUrl);

    // Decodifica la respuesta JSON
    $movieData = json_decode($apiResponse, true);

    // Verifica si la respuesta contiene datos
    if (isset($movieData['Search']) && is_array($movieData['Search'])) {
        // Devuelve los datos de las películas encontradas
        echo json_encode($movieData);
    } else {
        // Si no hay datos, devuelve un mensaje de error
        echo json_encode(array('error' => 'No se encontraron resultados.'));
    }
} else {
    // Si el título está vacío, retorna un mensaje de error
    echo json_encode(array('error' => 'El título de la película no puede estar vacío.'));
}
?>
