import pandas as pd
import os
floc = "C:/Users/Jiven/Downloads/Mozilla Rajasthan Launch Party (1).xlsx"
file=open('e:/Project Hackathon/contacts.txt','a')
var2= pd.read_excel(floc)
var3=var2[['Name','Phone Number']]
for i in range(len(var3)):
    file.write('BEGIN:VCARD\n'+ 'VERSION:3.0' + 'N:'+ var3['Name'][i] + ';' + '' + ';;;' + '\nFN:First Last' + '\nTEL;TYPE=CELL;TYPE=PREF:' + str(var3['Phone Number'][i]) + '\nEND:VCARD')
file.close()
rfile='e:/Project Hackathon/contacts.txt'
base = os.path.splitext(rfile)[0]
os.rename(rfile, base + '.vcf')