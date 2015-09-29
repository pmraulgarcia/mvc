.htacces

<IfModule mod_rewrite.c>
Esta línea verifica que el módulo mod_rewrite esté disponible en el servidor web. Si no está, nada que esté dentro de esta etiqueta se va a procesar.

RewriteEngine On
Esta directiva habilita la rutina del motor de reescrita de las URLs.

RewriteBase /
Le permite saber al servidor que se llegó al .htaccess desde / y no desde otra carpeta.

RewriteCond %{REQUEST_FILENAME} !-f
Esta condición es verdadera cuando la ruta al REQUEST_FILENAME no hace referencia a un archivo que existe en el servidor.

RewriteCond %{REQUEST_FILENAME} !-d
Esta condición es verdadera cuando la ruta al REQUEST_FILENAME no hace referencia a una carpeta que existe en el servidor.

RewriteRule . /index.php [L]

Si las dos RewriteCond mencionadas anteriormente nos dieron verdadero entonces se va a cargar el archivo index.php y la directiva [L] significa que después de esto ninguna otra regla de reescritura de URL será procesada. Pero si alguno de los anteriores RewriteCond nos dieron falso entonces se va cargar el archivo o carpeta en lugar del index.php.


http://techtastico.com/post/el-.htaccess-de-wordpress-explicado-linea-por-linea/
