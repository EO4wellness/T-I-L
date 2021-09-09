# Why: API?
* [INFOWORLD QUOTE](https://www.infoworld.com/article/3296487/15-apis-every-developer-should-know.html): "Was it Isaac Newton who said he saw further because he stood on the shoulders of giants? APIs are like pithy, 
* epigrammatic quotes for those who write code. They let programmers see further and stand on the shoulders of giants."


## Web APIs you need to know about. 
* @Ravin from twitter:
  - Push API
  - Fetch API
  - Canvas API
  - Vibration API
  - Web share API
  - Full-screen API
  - Web workers API

## Useful Reads/Articles:
* [What is an API? Everything You Need to Know](https://www.cleo.com/blog/knowledge-base-what-is-an-api)
* [Most Popular APIs](https://rapidapi.com/blog/most-popular-api/)
* [What are Endpoints](https://www.youtube.com/watch?v=lE7obYznoyk) YouTube 

## [Git API tutorial](https://renanmf.com/using-the-github-api-in-python/)
* The following section is my follow-along notes from "renanmouraf" article linked in this section's title. 
* some times when students first learn about API, it is difficult to visualize
* when people have trouble visualizing something, they also often have trouble learning it 
* here is one such visualization using GitHub
* enter "api.github.com" into a browser window
* view: https://api.github.com/  
* what you see visually looks like a Python dictionary
* however, it is a list of all of the available github api
* it also tells us it is in the "JSON" format 
* there are links to every available api 
* there are several APIs which have space to insert a variable, such as username, which return data specific to that user 
* Example: for myself https://api.github.com/users/eo4wellness  but any github username could replace my own 
* Git Requests are not built into Python.  Install it with this code: 
```pip install requests ```
* Example code to create a file "test_api.py", type the following and run it with python3 test_api.py.
```
import requests
import json

response = requests.get('https://api.github.com/users/renanmouraf/repos')
print(response.status_code)
repos = response.json()
print(json.dumps(repos, indent = 4, sort_keys=True))
```
* What does the above code do?  
```
Here we are making a GET using requests.get() passing the URL we want, which is my repos.
Then we print the status_code, which will be 200 if everything went alright.
Then we take the json() with the ist of repos and use dumps() to print it in a more readable way.
```
* [GitHub specific Access tokens](https://docs.github.com/en/github/authenticating-to-github/keeping-your-account-and-data-secure/creating-a-personal-access-token)
* Chart of Codes / And their Meanings which GitHub offers: 
      
      REPO              | Full control of private repos 
        repo:status     | Access commit status 
        repo_deployment | access deployment status 
        public_repo     | access public repositories 
        repo:invite     | access repositoryinvitations 
        security_events | read and write security events 
        
      delete_repo       |  delete repositories 
      
      
* Example of using a token to create a repo: 
```
import requests
import json

token = '3a5f50e43ec0886fb38ffe950fd3add479567863'

repo = 'test_book'
description = 'A test repo'

payload = {'name': repo, 'description': description}

headers = {'Authorization': f'token {token}'}

response = requests.post(f'https://api.github.com/user/repos', 
                        headers=headers, data=json.dumps(payload))

print(response.status_code)
```
* In this example, we are going to replace the example username with our own.  this creates a repo 
```
import requests
import json

token = '3a5f50e43ec0886fb38ffe950fd3add479567863'

repo = 'test_book'
description = 'A test repo'

payload = {'name': repo, 'description': description}

headers = {'Authorization': f'token {token}'}

response = requests.post(f'https://api.github.com/user/repos', 
                        headers=headers, data=json.dumps(payload))

print(response.status_code)
```
* If status 201 (created) is returned, that means we have success at creating this
* Example: Deleting using ```requests.delete()```
```
import requests
import json

username = 'renanmouraf'
token = '3a5f50e43ec0886fb38ffe950fd3add479567863'

repo = 'test_book'

headers = {'Authorization': f'token {token}'}

response = requests.delete(f'https://api.github.com/repos/{username}/{repo}', 
                          headers=headers)

print(response.status_code)
```

* if 204 (no content) is returned, it means it was successfully deleted 


## Selected API Reading: 
* [How API Use Cases Have Evolved, and What It Means for API Security](https://checkmarx.com/resources/checkmarx-blog/how-api-use-cases-have-evolved-and-what-it-means-for-api-security) 
