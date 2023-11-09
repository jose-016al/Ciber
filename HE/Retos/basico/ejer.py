import hashlib
import sys

if len(sys.argv) == 2:
    hashmd5 = hashlib.md5()
    text = sys.argv[1]
    hashmd5.update(text.encode())
    print ('flag{'+hashmd5.hexdigest()+'}')