Los hash o funciones de resumen son algoritmos que consiguen crear a partir de una entrada (ya sea un texto, una contraseña o un archivo, por ejemplo) una salida alfanumérica de longitud normalmente fija que representa un resumen de toda la información que se le ha dado

# Hash md5
```bash
echo -n texto | md5sum
```

# Hash sha256
```bash
echo -n texto | sha256sum
```
Para descifrar una cadena de texto podemos usar [CrackStation](https://crackstation.net/)

# base64
Decodificar fichero en base64
```bash
base64 -d base64-c6d8efd649ad94af23eb2bd2af63edd0.txt
```
Decodificar una cadena en base64
```bash
echo "UGFzc3dvcmQ6IHhvFzYMACEfBiAgIA==" | base64 -d
```

# Hexadecimal
Para codificar una cadena a hexadecimal
```bash
echo -n "Hola mundo" | xxd -p 
```
Para decodificar una cadena en hexadecimal
```bash
echo 50617373776f72643a2044346d7054686548337821 | xxd -r -p
```
Para mostrar el contenido de un fichero en hexadecimal
```bash
xxd magicNumber | less
```

# Strings
Podemos encontrar cadenas de strings, como una url a la que se intenta conectar un ejecutable
```bash
strings fichero
```

# Metadatos
Podemos ver los metadatos que tiene un fichero pdf
```bash
pdfinfo fichero
```
Para ver los metadatos de una imagen, usaremos un programa llamado exiftool
```bash
exiftool imagen
```