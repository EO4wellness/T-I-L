# Search Engine Project
# End of Basic Python Course Challenge 
#
# You’re working on a search engine. Watch your back Google!
# 
# The given code takes a text and a word as input and passes them to a function called search().
# 
# The search() function should return "Word found" if the word is present in the text, or "Word not found", if it’s not.
# 
# Sample Input
# "This is awesome"
# "awesome"
# 
# Sample Output
# Word found
# Define the search() function, so that the given code works as expected.
#
# Certificate: https://www.sololearn.com/certificates/course/en/15619122/1157/landscape/png
# 
def search():
    text = input()
    word = input()
    if word in text:
        print ("Word found")
    else:
        print ("Word not found")
search()