<?php 

namespace App\Entity;

Class BaseDatos{


    static function getArticulos(){

        $articulos = array (
            0 => array(
                "id" => 1,
                "nombre" => "Logitech G915 LIGHTSPEED TKL",
                "descripcion_corta" => "Teclado Gaming Mecánico Inalámbrico con teclas GL-Táctil de bajo perfil",
                "descripcion_larga" => "Tecnología inalámbrica LIGHTSPEED: Esta solución inalámbrica profesional ofrece un rendimiento superrápido con una velocidad de respuesta de 1 ms; Consigue una estética despejada y libre de cables
                RGB LIGHTSYNC: La iluminación RGB del teclado se sincroniza con cualquier contenido; Personaliza cada tecla o crea animaciones personalizadas a partir de ~16,8 millones de colores con el software Logitech G HUB",
                "stock" => 10,
                "imagen" => "1.jpg"),
            1 => array(
                "id" => 2,
                "nombre" => "Acer Nitro 50 N50-640 ",
                "descripcion_corta" => "Ordenador de Sobremesa Gaming",
                "descripcion_larga" => "Ordenador de Sobremesa Gaming Nitro 50 N50-640
                Procesador Intel Core i5-12400F
                Memoria de 16 GB RAM
                Almacenamiento 1 TB SSD
                Gráfica NVIDIA GeForce GTX 1650
                Sin sistema operativo",
                "stock" => 2,
                "imagen" => "2.jpg"),
            2 => array(
                "id" => 3,
                "nombre" => "Alfombrilla de Ratón RGB",
                "descripcion_corta" => "Tapete de Juego Extra Grande, Alfombrilla Raton LED 14 Efectos de Iluminación",
                "descripcion_larga" => "[ Gran alfombrilla para ratón para juegos ]: nuestra gaming alfombrilla ratón está diseñada en un tamaño de 800 x 300 x 4 mm y puede cubrir perfectamente el escritorio y mantener tu portátil y el teclado. También puede proporcionar suficiente espacio para el ratón para garantizar tu mejor experiencia de juego",
                "stock" => 110,
                "imagen" => "3.jpg"),
            3 => array(
                "id" => 4,
                "nombre" => "Dell Gaming G15 5510",
                "descripcion_corta" => "Ordenador Portátil Gaming de 15,6'' FullHD 120Hz",
                "descripcion_larga" => "Pantalla de 15.6 FullHD 1920x1080 píxeles, 120Hz
                Procesador Intel Core i5-10500
                Memoria RAM de 8GB",
                "stock" => 1,
                "imagen" => "4.jpg"),
            4 => array(
                "id" => 5,
                "nombre" => "Base Vertical Brydge",
                "descripcion_corta" => "Compatible con MacBook Pro de 15 Pulgadas (2019-2016) con Touch Bar | 2 x Puertos Thunderbolt™ 3 | (Gris Espacial)",
                "descripcion_larga" => "CONECTE PERIFÉRICOS RÁPIDAMENTE: Adaptación de forma para una integración impecable y conexión instantánea con todos sus dispositivos, incluyendo pantallas externas dobles. (MacBook no incluido). Para MacBooks con Touch Bar.
                ESPACIO DE TRABAJO DIGITAL: Configure para escritorio, multimedia para el hogar, o configuración de sala de conferencias. La Base vertical funciona con cualquier conexión apta para su MacBook haciendo que se adapte a cualquier entorno. Un verdadero soporte vertical para portátil.",
                "stock" => 8,
                "imagen" => "5.jpg"),
            5 => array(
                "id" => 6,
                "nombre" => "Corsair HS60 PRO Surround",
                "descripcion_corta" => "Auriculares para Juegos (7.1 Sonido envolvente, Espuma viscoelástica almohadillas, Unidireccional micrófono",
                "descripcion_larga" => "Creados para ofrecer comodidad: las almohadillas ajustables de lujosa espuma viscoelástica proporcionan una comodidad óptima durante horas de juego
                Calidad de sonido óptimo : los transductores de neodimio de 50 mm ajustados a medida y de buen calidad ofrecen el alcance suficiente para oír todo lo necesario en el campo de batalla
                Sonido envolvente e inmersivo 7.1: cree una experiencia de audio multicanal en PC para que siempre esté en el medio de la acción",
                "stock" => 32,
                "imagen" => "6.jpg"),
            6 => array(
                "id" => 7,
                "nombre" => "Protector Pantalla para iPhone 11",
                "descripcion_corta" => "Cristal Templado, con Posicionador, Sin Burbujas, 6.1 Pulgadas, Negro, 2 Piezas",
                "descripcion_larga" => "Diseño de borde redondeado en 3D: El tamaño de corte láser preciso proporciona la máxima protección para la superficie de la pantalla táctil del dispositivo, una sensación de funcionamiento suave y evita arañazos en el borde del vidrio.
                Alta transparencia y sensibilidad: la perfecta adhesión conserva la claridad original y ofrece una sensación táctil original.
                Dureza 9H: Este protector de pantalla utiliza vidrio templado de alta calidad, equivalente a 3 veces más que el vidrio ordinario La película protectora es muy resistente a los arañazos y la abrasión.",
                "stock" => 210,
                "imagen" => "7.jpg"),
            7 => array(
                "id" => 8,
                "nombre" => "Mochila para portátiles",
                "descripcion_corta" => "Mochila, compatible con la mayoría de los ordenadores portátiles de 43 cm",
                "descripcion_larga" => "Mochila grande multicompartimento con un bolsillo para ordenadores portátiles de hasta 17 pulgadas (43 cm) y otro bolsillo TechSpot para tabletas
                Bolsillos laterales de redecilla elástica para botella de agua
                Compartimentos organizadores para bolígrafos, llaves, teléfono móvil, etc.
                Medidas internas: 30,5 x 11,5 x 44,5 cm (largo x ancho x alto); medidas externas: 38 x 17,8 x 48,3 cm (largo x ancho x alto)",
                "stock" => 10,
                "imagen" => "8.jpg"),
            8 => array(
                "id" => 9,
                "nombre" => "Funda para portátiles",
                "descripcion_corta" => "Funda protectora compatible con ordenadores portátiles de hasta 13.3",
                "descripcion_larga" => "Descripción larga del artículo para mostrar en detalles de artículos",
                "stock" => 10,
                "imagen" => "9.jpg"),
            9 => array(
                "id" => 10,
                "nombre" => "Altavoz Portátil Inalámbrico",
                "descripcion_corta" => "Ultimate Ears Wonderboom Altavoz Portátil Inalámbrico Bluetooth, Sonido Envolvente de 360°",
                "descripcion_larga" => "Sonido Sorprendentemente Grande: El mini altavoz Bluetooth portátil tiene una sonido claro con graves equilibrados; escucha tu música mejor que nunca con un sonido perfecto
                10 Horas de Felicidad: El altavoz inalámbrico WONDERBOOM se carga fácilmente con un puerto micro USB y te ofrece 10 horas de éxtasis musical constante, 10 horas de entretenimiento con sonido claro",
                "stock" => 50,
                "imagen" => "10.jpg"),                    

            );
            return $articulos;
    }

    static function getArticulo($id){
        $articulos = self::getArticulos();
        foreach ($articulos as $articulo){
            if ($articulo["id"] == $id){
                $articuloBuscado = $articulo;
            }
        }
        return $articuloBuscado;
    }


    static function sugerencias(){
            $listaSugerencias = array(
            array(
                "usuario" => "Juan Lopez",
                "sugerencia" => "No tienen precios, así no se puede comprar"),	
            array(
                "usuario" => "Victor A.",
                "sugerencia" => "Lo he visto todo más barato en Aliexpress"),
            array(
                "usuario" => "Alvaro",
                "sugerencia" => "Copian de Amazon"),
            array(
                "usuario" => "Mari",
                "sugerencia" => "Mejoren los envíos"),
            array(
                "usuario" => "Beatriz M.",
                "sugerencia" => "Me encanta! pero mejoraría el tema envíos"),
            array(
                "usuario" => "Juan Carlos",
                "sugerencia" => "Poca variedad de ratones"),
            array(
                "usuario" => "Jose Manuel",
                "sugerencia" => "No tienen monitores panorámicos"),
            array(
                "usuario" => "Lorenzo",
                "sugerencia" => "Me llegó roto el producto, no compraré más") 
        );
        
        return $listaSugerencias;
    }
}

?>