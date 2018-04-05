 DROP DATABASE IF EXISTS ozono;

/* CREATE DATABASE ozono;

USE ozono;

CREATE TABLE products(
    id UNSIGNED INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description_html TEXT NOT NULL,
    image_url TEXT NOT NULL,
    video_html TEXT NOT NULL
); */

 INSERT INTO products(
     name, description_html, image_url, video_html
 ) VALUES
 ("Modelo Gota en Acero Inoxidable", "<div>Descripción <h1>1</h1></div>", "min_modelo_gota.png", "<div>video <h1>1</h1></div>"),
 ("Modelo Alargado en Acero Inoxidable", "<div>Descripción <h1>2</h1></div>", "min_modelo_alargado.png", "<div>video <h1>2</h1></div>"),
 ("Modelo Mini en Acrílico - ABS", "<div>Descripción <h1>3</h1></div>", "min_modelo_mini.png", "<div>video <h1>3</h1></div>"),
 ("Modelo Aerodinámico en Acrílico - ABS", "<div>Descripción <h1>4</h1></div>", "min_modelo_aerodinamico.png", "<div>video <h1>4</h1></div>"),
 ("Ducha aséptica con Ozono", "<div>Descripción <h1>5</h1></div>", "min_ducha_ozono.png", "<div>video <h1>5</h1></div>"),
 ("Purificador de Aire Doméstico", "<div>Descripción <h1>6</h1></div>", "min_purificador_aire_domestico.png", "<div>video <h1>6</h1></div>"),
 ("Purificador de Agua Industrial", "<div>Descripción <h1>7</h1></div>", "min_purificador_agua_industrial.png", "<div>video <h1>7</h1></div>"),
 ("Filtro Plus Americano", "<div>Descripción <h1>8</h1></div>", "min_filtro_purificador.png", "<div>video <h1>8</h1></div>");
