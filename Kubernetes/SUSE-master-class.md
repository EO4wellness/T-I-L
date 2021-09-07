# Kubernetes Master Class: 
* HA Rancher Managing EKS, GKE and AKS
* Tue, Sep 7, 2021 10:00 AM
* https://www.crowdcast.io/e/ha-rancher-eks-gke-aks
* Operating Cloud Native at Scale 
* First in Series: Thru Sept and October 
* Manage Multiple Clusters 
* Instructor: Luke Mwila 

## Agenda: 
1. Managing Multiple Clusters 
2. Things to consider in Multi-cluster management 
3. lifecycle management of EKS, GKE, AKS 
4. Security 
5. Organization
6. Deployments 
7. Q&A 


## Housekeeping:  
* crowdcast
* -upvote existing questions
* find and use polls, etc. 

## What does it mean to operate at scale or "cloud native at scale". 
* this series running sep thru oct looks at 4 aspects of this
1. (Today's Session) cluster Managment at scale 
2. Applications at Scale 
3. Utilization at Scale 
4. Deployments at Scale 


## When to use Multiple clusters 
- this is a strategy for deploying to Kubernetes 
- scalability and availability 
- environment isoloation 
- application security 
- cluster optimization for specific environments 
- reduce blast radius 
- lock down access to specific k8s cluster 
- adopting a multi cloud model 


## Challenges 
* Different environments in the same cluster 
* Lack of Isolation between applications 
* Complex administration
* Consistency
* High costs 

## Multiple Clusters in Multiple clouds
* K8s alleviates risk in multi-cloud (infra-agnostic) 
* workload and workflow portability 
* redundancy and availability 
* managed control planes 
* cloud burstin 
* adopt multiple cloud integrations 

## Things to consider: 
* Multi-cluster Management: 
* Lifecycle Management 
* Organization 
* delopyments 
* experience 
* visiblity 
* security 


## Lifestyle Management (EKS, GKE, AKS) 
* Start with Rancher 
* Start also with a newly provisioned cluster in each of the sercices: EKS, GKE, AKS  

Google Cloud Platform
- admin
- create service account 
- give it a role wiht specific permissions to allow rancher to use the services 
- Role is "Kubernetes Admin" 
- create a key (json) 
- upload to rancher 


Azure
-register an application 
- new application
- create a certificate 
- client ID
- provide these to rancher 


AWS 
- create an IAM user 
- programic access 
- provide this to rancher 

![yaml](https://github.com/EO4wellness/T-I-L/blob/main/Kubernetes/images/aws-rancher-authentication-kubernetes.jpg)

## organization
* this is accomplished with projects 
* it is also accomplished with namespaces 
* namespaces referred to as virtual clusters 
* namespaces allow division of access control and resource quotas 
* projects are custom rancher ojbects
* projects are uses to group namespaces 
* assign resources to the project level 
* this allows each namspace in the project to use the related resources 
