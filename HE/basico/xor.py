import base64

# Mensaje cifrado en base64
mensaje_base64 = "HQERKhYCLDc9KgQX"

# Clave para el cifrado XOR
clave = "encryptXORkey"

# Decodificar el mensaje de base64
mensaje_bytes = base64.b64decode(mensaje_base64)
print(mensaje_bytes);

# Realizar la operación XOR
mensaje_descifrado = ""
for i in range(len(mensaje_bytes)):
    # Obtener el byte correspondiente del mensaje cifrado
    byte_cifrado = mensaje_bytes[i]

    # Obtener el byte correspondiente de la clave, asegurándose de que la clave se repita
    byte_clave = ord(clave[i % len(clave)])

    # Realizar la operación XOR entre el byte del mensaje cifrado y el byte de la clave
    byte_descifrado = byte_cifrado ^ byte_clave

    # Agregar el carácter resultante de la operación XOR al mensaje descifrado
    mensaje_descifrado += chr(byte_descifrado)

# Imprimir el mensaje descifrado
""" print(mensaje_descifrado) """
