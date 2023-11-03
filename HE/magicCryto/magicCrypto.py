def atbash(text):
    alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    key = 'ZYXWVUTSRQPONMLKJIHGFEDCBA'

    text = text.upper()

    result = ''

    for char in text:
        if char in alphabet:
            index = alphabet.index(char)
            result += key[index]
        else:
            result += char
    return result


message = "GSVUOZTRHHZBWVZIVXIZAB"
print("Mensaje:", message)
print("Resultado:", atbash(message))