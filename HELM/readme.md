# HELM 
![helm-kubernettes-logos](https://d33wubrfki0l68.cloudfront.net/d9a3dd9398904a13c211c703709d7ad7daaef72f/3f473/images/kubernetes-helm.png)
*  HELM is a package manager for Kubernettes 
*  HELM has surpassed the 1 million downloads a month. 
*  [Introduction to Helm](https://www.youtube.com/watch?v=Zzwq9FmZdsU)
*  Helm uses semantic versioning in the format of: version (major). (minor). (patch) 
*  "Release Candidates" before it comes out announced via Power Release emailing list for notifications. 
*  Many maintainers (not just one company behind HELM) so it is likely "here to stay" 

![video-image](https://github.com/EO4wellness/T-I-L/blob/main/HELM/Images/helm-basic-video-content.jpg)
[YouTube Basic Beginner Video: What is HELM?](https://youtu.be/fy8SHvNZGeE)

## Helm Charts: 
*  HELM Charts: packages are referred to as charts. 
*  HELM Charts are deployable units for Kubernetes applications. 
```
metadata:            chart.yaml 
default config:      values.yaml 
manifest templates:  templates/ 
                     service.yaml 
                     deployment.yaml 
```
* charts are made of well-known files in a directory tree 
* Commands:
Example Command:  
```
helm create myapp
```
Example OUtput: 
```
myapp/
  Chart.yaml 
  charts
  templates
    NOTES.txt
    _helpers.tpl
    deployment.yaml
    ingress.yaml
    service.yaml
    serviceaccount.yaml
    tests
      test-connection.yaml
 values.yaml      
```

## Helm Files: 
* Chart.yaml is the place where you place the metadata. 
- What is the name of the chart?
- What is the version? 
- What is the description? 
- What other important information is required for HELM to know what to do with the package? 
- What dependencies are required? 
* Values.yaml: this file displays the default settings 
- What is the container image? 
- What type of service? 
- What are the configurable parameters? 
* Templates directory - treated as a YAML template 
{} are the templating aspect of GO(lang). 
* helpers is an optional file.  this would be things which you would repeat in more than one place 
* tests: HELM test file 
* NOTES.txt (friendly, tempateable) end user gets this. 
* values.yaml includes the default baseline values 
* Templates + Values = valid Kubernates YAML

## Installation: 
* Installing a Helm Chart: 
1. From a chart directory:
``` helm install myrelease ./myapp```
2. From a remote chart repository: 
``` helm install myrelease myrepo/myapp```

## Using Custom Values: 
* key-value pairs
* overrides chart defaults 
* overlayed from left to right 
* methods: 
 1. Using a Values File (in the helm chart) 
    ``` helm install myrelease ./myapp -f custom.yml ```
    
 2. Using individual key-value pair: 
    ``` helm install myrelease .myapp --set image.tag=master ```
    
 3. Advanced Usage: 
   ``` helm install my release .myapp \
          -f staging.yaml \
          -f us-east-1.yaml \
          --set tracing.enabled=true
```  

## Commands: 
* ```helm status``` myrelease (manage lifecycle) 
* ``` helm list``` manages the revision of the release in a record 
* ``` help upgrade myrelease ./myapp --set image.tag=1.16.1-alpine``` you can make changes to your existing release settings 
* ``` helm rollback myrelease 1``` you can roll back if something goes wrong or things in the future change.  
* ``` helm delete myrelease ``` completely uninstalled everything, powerful. helm is a good way to put it into a box and remove all of it when its time without having to keep track of every thing. 
* All of the above in a basic [blog article](https://www.freecodecamp.org/news/helm-charts-tutorial-the-kubernetes-package-manager-explained/)
    
## [HELM HUB:]
* Multiple Clients - Multiiple Projects 
* Search for existing (other peeps) Helm Charts: https://artifacthub.io/  
* Was hosted at hub.helm.sh but is now https://artifacthub.io/  
* https://helm.sh/blog/intro-helm-hub/
* Historic: Archived-read only https://github.com/helm/monocular 
* Historic: Archived-read only https://github.com/helm/hub 
* [Chart Museum](https://github.com/helm/chartmuseum)


## Reading Topics: 
* [Best Practicies](https://codersociety.com/blog/articles/helm-best-practices)
* [Helm is not Enough?](https://itnext.io/helm-is-not-enough-you-also-need-kustomize-82bae896816e)
* [Helm 3 vs. Helm 2](https://itnext.io/after-using-helm-for-2-years-in-production-now-helm3-38461a2d8047)
* [Deploy WP with Helm](https://dzone.com/articles/deploy-wordpress-on-kubernetes-in-15-minutes-using)
* [Forking Helm Project-Lessons Learned](https://itnext.io/lessons-learned-from-forking-a-helm-project-743ad48112e7)
* [Very Basic Helm Intro](https://enlear.academy/introduction-to-helm-package-manager-628400ab9517)
* [HELM: Past Present Future from 2020](https://www.infoq.com/presentations/helm-4/)
* [security update info July 2021](https://thenewstack.io/upgrade-helm-if-you-dont-want-to-share-your-username-and-password/)
* [Jenkins](https://itnext.io/jenkins-redis-deployment-and-helm-subchart-values-633a3e31541c)
* [Kubernetes CI/CD Pipeline GitLab & Helm](https://nextlinklabs.com/insights/kubernetes-ci-cd-gitlab-with-helm)
* [ArgoCD & working with Helm secrets](https://itnext.io/argocd-a-helm-chart-deployment-and-working-with-helm-secrets-via-aws-kms-96509bfc5eb3)
* https://medium.com/geekculture/how-to-use-helm-with-kubernetes-363d5eee6371
* https://dzone.com/articles/introduction-to-kubernetes-deployment-using-helm
* [Helm Plugin](https://romanlab.hashnode.dev/how-to-build-a-helm-plugin-in-minutes)
* [Helm + Minecraft + Ansible](https://opensource.com/article/20/10/kubernetes-minecraft-ansible)

https://events19.linuxfoundation.org/events/kubecon-cloudnativecon-north-america-2019/
The CNCF [Cloud Native Computing Foundation] youtube channel has these seminars online for 2020 and 2021. . . 
