<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi red social</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

<header>
    <h1>Mi Blog</h1>
</header>
    <aside> 
        <nav>
        <a href=""><b>Inicio</b></a>
        <a href=""><b>Sobre mi</b></a>
        <a href=""><b>Blog</b></a>
        <a href=""><b>Contacto</b></a>
        </nav>
        
    </aside>
    <main>
        <?php 
        
        
        class Post{
            private $titulo;
            private $descripcion;
            private $tagsDelPost;
            private $likes;

            public function __construct($titulo, $descripcion, $tagsDelPost =[], $likes){
                $this->titulo = $titulo;
                $this->descripcion = $descripcion;
                $this->tagsDelPost = $tagsDelPost;
                $this->likes = $likes;
            }

            public function getTitulo(){
                return $this->titulo;
            }
            public function getDescripcion(){
                return $this->descripcion;
            }
            public function getTagsDelPost(){
                return $this->tagsDelPost;
            }
            public function getLikes(){
                return $this->likes;
            }

        }

        class Tag{
            private $titulo;
            public function __construct($titulo) {
                $this->titulo = $titulo;
            }
            public function getTitulo(){
                return $this->titulo;
            }
        }

        $arrayPosts = [];

        $arrayPosts[]=new Post("Título del primer post","Este es el comentario del primer post de mi blog.", [new Tag("#Tecnología"),new Tag("#Programacion"),new Tag("#HTML")],10);



        $arrayPosts[]=new Post("Título del segundo post","Este es el comentario del segundo post del blog.", [new Tag("#Viajes"),new Tag("#Aventura"),new Tag("#Fotografia")],5);

        $arrayPosts[]=new Post("Título del tercer post","Este es el comentario del tercer post de mi blog.", [new Tag("#Salud"),new Tag("#Bienestar"),new Tag("#EstiloDeVida")],3);


        echo "<section>";
        foreach ($arrayPosts as $cadaPost) {
                echo "<article>";
                echo "<h3>{$cadaPost->getTitulo()}</h3><br>
                <p>{$cadaPost->getDescripcion()}</p> 
                <p>Tags: ";
                foreach ($cadaPost->getTagsDelPost() as $tageado) {
                    echo "<span class='pintarTags'> {$tageado->getTitulo()} </span> ";
                }
                echo "</p>";
                echo "<p><b>Likes: {$cadaPost->getLikes()}</b> <span  class='pintarAzul'>Me gusta</span></p>";
                ;
            echo"</article>";
        }
        echo "</section>";
        
        
        ?>



    </main>
    
</body>
</html>