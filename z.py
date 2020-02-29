from tkinter import *

window = Tk()
window.title("DWARF")
window.geometry('1280x720')

class App:
    def __init__(self, master):

        fm = Frame(master)
        Button(fm, text='abc').pack(side=LEFT, expand=YES)
        Button(fm, text='abc').pack(side=LEFT, expand=YES)
        Button(fm, text='abc').pack(side=LEFT, expand=YES)
        fm.pack(fill=BOTH, expand=YES)

   
window.option_add('*font', ('verdana', 12))
display = App(window)
window.mainloop()
