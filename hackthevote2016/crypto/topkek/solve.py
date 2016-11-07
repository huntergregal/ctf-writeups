#!/usr/bin/python
import binascii

binStr = "0b"

with open('kek.txt', 'r') as f:
	data = f.read().split()
	for item in data:
		i = 0
		for letter in item:
			if letter == "!":
				i += 1
		if "KEK" in item:
			code = "0"*i
		elif "TOP" in item:
			code = "1"*i
		binStr += code
with open('solved.txt', 'w') as s:
	#s.write(binStr)
	n = int(binStr, 2)
	s.write(binascii.unhexlify('%x' % n))
	
