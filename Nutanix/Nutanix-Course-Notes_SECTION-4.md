# HYBRID CLOUD ENGINEER: 
Udacity Nanodegree Program - Nutanix Scholarship Fall 2020-Spring 2021<br>
[ReadMe](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix) | [Section 1](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-1.md) | [Section 2](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-2.md) | [Section 3](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-3.md) | [Section 4](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-4.md) | [Section 5](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-5.md) | [Section 6](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-6.md) | [Resources](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix/Nutanix-Resources) | [Images](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix/Images)

# SECTION 4 
* Managing multiple cluster and workload resources. 
* Learn how to manage and govern multiple clusters. 
* learn to manage/govern multiple VM workloads
* learn identity management
* learn role-based access control, categories, and projects
* learn Prisim Centrol 
# SECTION 4: On-Premises Private Cloud Automation 


## Lesson 1: Managing Multiple cluster and Workload Resources 
1.1 Course Overview: On-Premises Private Cloud Automation!
* Previously, we've learned infrastructure modernization with HCI and the evolution of the modern Hybric cloud.  We'e also learned about the basic drawbacks of legacy IT infrastructure.  It just cannot keep up with business today. 
* Nutanix integrates all IT resources to run any application. Nutanix is a simple and effective approach to meet business needs: security, management of VMs (virtual machines), networking, disaster recovery.
* Automation eliminates the most time-consuming parts of managing IT resources manually.  
* Nutanix Prism and Nutanix Calm are two key components in the Nutanix automation process which can overcome repetitive and laborious IT tasks. 
* Nutanix Pris helps manage multiple workloads and clusters. 
* Nutanix Calm is simple and provides repeatable and automated management of app creation, consumption, and governance. 

1.2 Lesson Overview: On-Premises Private Cloud Automation!
* Managing Multiple Cluster and Workload Resources. 
* Focus on Prism. 
* Prism is a management plane of the Hybrid Cloud solution.
* Prism allows for visualizing the cloud infrastructure. 
* Learn Prism Element vs Prism Central
* Prism Central is key to identity management, role-based access control, image management, self-service, and categories. 
* All of Prism's features play a role in successfully contributing to the effective management of VMs and workloads.
* Goal: by the end of this lesson, you should be able to be familiar with and know how to manage categories, images, as well as creating custom roles.  
* You should be able to configure projects using Prism Self Service. 

1.3 The Big Picture 
RESUME STUDIES HERE: https://classroom.udacity.com/nanodegrees/nd321/parts/89c29bc4-dd70-45d6-9d93-0b1e18d73ca2/modules/c617ce84-4be2-4b11-a90a-b25e2feb2ed3/lessons/6c1ca154-045a-44e9-b381-09bf01dc1515/concepts/497c0f16-6af6-41ad-ab91-81d472b8e001
* When you have more than one custer, management can be a pain. 
* On premise management problem really compounds quickly when you have lots of different groups of people, all using different hybervisors, as many customers do. 
* The cloud makes this even more complex. 
* Nutanix Prism central unites management across all different types of Nutanix clusters and their workloads. 
* Nutanix Prism Central is the single pane of glass solution everyone wants. 
* Nutanix Calm is available for automation. 

1.4 Intro to Cluster & Workload Management.
* working with 1 of anything, is simple. 
* as soon as you add another--the scale causes complexity
* working at scale also causes more challenges, points of failure, and all kinds of issues. 
* yet business needs scale to grow so these issues must be overcome. 
* Application Automation 
* Self Service 
* Instant Configuration and Operation 
* Scaling can cause Double opersations and confirguration work
* Governance & Operations include:
    
      Customer Self Service and Automation            | Multiple Systems 
      
      Safety                                          | Framentation 
      Security Audis                                  | Low Consistency 
      Resource Management                             | High Complexity 
      
      The role of the Hybrid Cloud Engineer is to balance:
      1. Governance 
      2. Consistency
      3. Conveinence 
      
      This balance is key for short-term and long-term business requirements. 
* To enable sucessful delecation and self service, as well as automation we need safety gaurds in place. 
* Must have security audits and resource management in place. 
* Combined these elements are known as "governance"
* in the cloud, governance and operations are divided across multiple systems 
* this fragmentation causes stress in achieving consistency and drives up the level of complexity involved 

1.5 Prism Element vs. Prism Central
* Nutanix has a solution to this problem. 
* The Nutanix solution is two fold:

      Prism
      Acropolys 
* Acropolys is the distributed data plane. 
* Prism is the management plane. 
* Prism allows you to manage your global Nutanix infrastructre all from from console. 
* Prism simplifies the management of hypervisor and workloads
* Prism is comprised of distinct parts:

      1. Prism Element 
      2. Prism Central 
* Prism Element: allows for full control to configure, manage and monitor Nutanix clusters, running ANY hypervisors. 
* Prism Element is ONLY allowing you to manage ONE single cluster. 
* Prism Central allows us to manage and confirgue different clusters across all locations (even those in the same location, or those in separate physical locations.
* Prism Central also allows you to VIEW the entire distributed environment. 
* Prism Central is the manager of managers. 
* Use Prism Element to manage on location's resources; and Prism Central to manage ALL of the various Prism Element management of all of your different location(s)/resouce(s). 
* Prism Architecture allows users to scale up and out. 
* Additional "add on services" available as needed include:

      Prism Pro (enhanced features)
      Calm (for automation) 
      Flow (for networking) 
      Prism Central VM
      none of the add-ons require any design, installation or separate depolyment 
* Resources 

      Prism Central Overview : https://portal.nutanix.com/page/documents/details?targetId=Prism-Central-Guide-Prism-v5_17:mul-pc-overview-c.html
      Prism Architecture : https://nutanixbible.com/#anchor-book-of-prism-architecture 
      Book of Prism - Prism Central : https://nutanixbible.com/#anchor-book-of-prism-prism-central

1.6 Quiz: Prism Element vs. Prism Central

      !. Which core component of Prism provides a single pane of glass for managing multiple clusters?
      Choices:  Pirsm Central, Calm, Prism Element, Acropolis. 
      My Answer: prism central. 
      
      That’s right! Prism Central is the centralized management console to manage multiple clusters.
      
      
      2. In a datacenter wit 30 remote offices, each running a Nutanix cluster, which core Pirsm component is responsible for managing the individual Nutanix cluster at each remote office? 
      Choices: Pirsm Central, Calm, Prism Element
      My Answer: Prism Element
      
      That’s right! Prism Element manages a single cluster.

1.7 Understanding Prism Central
* Designed from the ground up. 
* 5 key features created to make management more easy 
    1. Idenity Management 
    2. Role-Based Access Control (RBAC) 
    3. Categories 
    4. Prism Self Service 
    5. Image Management 
* take a bit of a look at each:
* *Identity Management* primarily for security. 
 
        Local Accounts 
        Authentication Based on Identity Provider (IDP) 
        
* RBAC (Role-Based Access Control) limits to role and permissions. 
* Categories - group entites into key value pairs called categories. New entities can be assigned a category based on specified criteria. 
* Self Service - doesn't require IT to scal or provision VMs.  This increases productivity and decreases overall costs. 
* Image Management vital role when you have a lot of clusters. Highly available repository for images. 

1.8 Quiz: Understanding Prism Central

        1. Which prism central feature enables you to group entities into a key-value pair?
        Choices: Prism Self service, Identity Management, Categories, or Role-based Access control
        My Answer: Categories 
        
        That’s right! Categories group entities into a key-value pair.
        
        2. Match Prism features with the appropriate description of each. 
        Available Choices: Identitye Management. Categories. RBAC. Image Management.  Self-Service. 
        
        Identity Management: Ensure that only trusted users are provided with access to the cloud environment.
        
        RBAC: Maintain granular control over which IT staff can perform specified actions on entities such as VMs, applications, reports, and clusters.
        
        Categories: Group entities into a key-value pair; tie policies to those key-value pairs.
        
        Self-Service: Provision applications and virtual machines without the intervention of IT.
        
        Image Management: Access a highly available repository for guest OS ISOs or your application disk images.

1.9 Prism Central and Governance
* Information and Technology: shortened to (IT)
* IT requires governance. 
* the goal of IT governance is to deliver improved value from IT investments
* IT governance is also intended to enhance the overall administration 
* IT Governance is a needed element of Coporate Governance 
* IT Governance empowers businesses to manage IT risks effectively 
* without IT governance, there wouldn't be any assurances in place that the IT activities associated with, and invested in by a business would actually align with the business stated objectives/goals
* Generally the managers of staff cannot visualize or see WHO is using WHAT when it comes to IT.
* Because management cannot easily visualize or see this, often results in under utilized resources or unrealistic expectations. ie: over utalized with growing expectations until resource failure causes downtime. 
* To achieve IT Governance, one must be able to VISUALIZE IT. 
* Prism Central provides 4 methods to assist in IT Governance needs
  
      1. Infrastructure Management 
      2. Just in Time Forecast 
      3. Automatic Remediation 
      4. One-Click Upgrades

* Infrastructure Management: Nutanix HCI Infastructure management from one console. 
  Simplefies and streamlines common workflows. 
  Checking your hypervisor and workload, management of the same, is as easy as checking your email.

* Just in Time Forecast: Shows HOW much CAPACITY is being used. 
  Offers accurate forecast on how the current provisioning will the various IT resource demands
  Illustrates any hidden wastes. 
  
* Automatic Remediation: Providing real-time performance behavior 
  Visualize how the VMs are doing 
  detects anomalies automatically 
  enables remediation 
  
* One-Click Upgrades 


1.10 Quiz: Prism Central and Governance

        1. Select the four capabilities of Prisim Central which help in achieving IT governance. 
        
        Choices: 
        _ Infrastructure Management 
        Native baackup and recovery options 
        _ Automatic Remediation 
        _ One Click upgrades 
        Native file services 
        _ Just in time forecast 
        Compression and deduplication 
        
        That’s right! Infrastructure management, Just in time forecast, automatic remediation, 
        and one click upgrades are four capabilities of Prism Central that help in achieving
        IT governance.
        

1.11 Identity Management
* Only trusted users should be allowed access.  
* All security is based on this.
* Identiy Management provides for authentication and authorization of users. 
* Types of User Authentication:

      1. Local User Authentication 
      2. Active Directory Authentication (based on IDP) 
      3. SAML (based on IDP) 
      
* Thus, Prism allows organizations to use their existing user accounts to control access (or start new) 
* Each Nutanix cluster includes a Prism Central admin user account that is created automatically. You can add more locally defined users as needed and update the permissions as necessary.
* Users can authenticate using their Active Directory or OpenLDAP credentials when Active Directory support is enabled for Prism Central.
* Active Directory (AD) is a directory service implemented by Microsoft for Windows domain networks.
* OpenLDAP is a free, open source directory service, which uses the Lightweight Directory Access Protocol (LDAP), developed by the OpenLDAP project. 
* Nutanix currently supports the OpenLDAP 2.4 release running on CentOS distributions only.
* The Security Assertion Markup Language (SAML)
* If SAML is enabled inside Prism central, it can be used for exchanging authentication and authorization
* once user authentication is configured, you can later use these user groups/accounts to assign explicit roles and permissions.
* [Configuring Authentiation](https://portal.nutanix.com/page/documents/details?targetId=Nutanix-Security-Guide-v5_18:mul-security-authentication-pc-t.html)

1.12 Quiz: Identity Management.

        1. Which are the 3 authetication options available in Prism Central 
        My Answers: Local User Authentication, Active Directory Authentication, SAML Authentication 
        
        2. Which authentication option in Prism Central when enabled lets users authenticate using their Open LDAP credentials?
        My Answer: Active Directory Authentication 
        

1.13 Exercise: Identity Management

      STEPS to configure Prism Self Service 
      
      1.  Navigate to AUTHENTICATION option under settings 
      2.  Now, create a NEW DIRECTORY 
      3.  Enter Name: "Active Directory"
      4.  Enter Domain: "mydomain.com" 
      5.  Scroll down
      6.  Enter the IDAP://myurl into the Directory URL
      7.  Scroll down 
      8.  Under the "Directory List" enter the Username 
      9.  Enter the password.
      10.  Click SAVE 
      11.  Message pops up stating: "We detected that this directory has no role mapping.  Click here to configure role mapping for this directory." 
      12.  Use the "CLICK HERE" to configure. 
      13.  Click on "+ New Mapping"
      14.  Fill in the Create Role Mapping box.  The available attributes for role mapping listed were:
           `diectory or provider`
           `type`
           `role`
           `values`
           They had us fill in "Type: Group" and "Values:AAPM" 
       15. Click "SAVE" 
       16.  SUCCESS MESSAGE:  
            Role Mapping Management 
            
            Successfully Saved Role Mappings 
            (button to create a new one)
            list of current roles
           

      
1.14 Role-Based Access Control
* User access needs to be control. 
* Example: Overutilization of hardware resources is costly.  
* RBAC involves controlling level of access across users 
* Roles: 
  1. Built-In Roles (8 defined, out of the box)
  2. Custom Roles (configure) 
* How to create a custom role:

      1. Log in. 
      2. Begin in the dashboard of Prism Central
      3. Use left-hand menu to navigate to "Administration" then "roles"
      4. Now you can see ALL available roles to chose from. 
         NOTE: If a role says "SYSTEM" next to it, it is a built-in role. 
      5. Click "CREATE ROLE" at the top menu to make a new role. 
      6. Give it a name. 
      7. Give it a description. 
      8. Figure out which permissions you want to enable. 
         Default is "NO ACCESS" on each permission. 
         In addition, these have drop-down menus for you to monitor
         Later, after the fact, return to the list to audit who can and who cannot
         access resource(s) or abilities
* How to Modify a Custom Role

      1. Go to the Roles Dashboard of Prism (log in, of course)
      2. select the desired role from the list. 
      3. Select "Update Role" from the Actions Pull Down list
      4. Update the field values as desired 
      5. Click Save 
 
 * [Custom Role Permissions](https://portal.nutanix.com/page/documents/details?targetId=Nutanix-Security-Guide-v5_18:ssp-ssp-role-custom-permission-pc-r.html)
 * [Configure Role Mapping](https://portal.nutanix.com/page/documents/details?targetId=Nutanix-Security-Guide-v5_18:mul-security-role-permissions-pc-t.html) 
 * [Assigning a Role](https://portal.nutanix.com/page/documents/details?targetId=Nutanix-Security-Guide-v5_18:ssp-ssp-role-assignment-pc-t.html)
 * [Displaying Role Permissions](https://portal.nutanix.com/page/documents/details?targetId=Nutanix-Security-Guide-v5_18:ssp-ssp-displaying-permissions-role-pc-t.html)


1.15 Quiz: Role-Based Access Control

        1. Which of the following statements are true about Role-Based acccess control (RBAC)?
            a) RBAC ensures that only specified individuals get access to the data they should have access to. 
            b) RBAC helps you authenticate a user's identity against a trusted source of truth. 
            c) Prism Central supports RBAC that you can configure to provide customized role-based access permissions for users. 
            d) RBAC helps you confirgure projects without IT intervention 
        My Answers: A and C
        
        That’s right! RBAC ensures that only specified individuals get access to the data they should have access to and Prism Central supports RBAC to provide customized role based access permissions for users.
        
        B - That’s incorrect. RBAC is not an authentication option. RBAC ensures that only specified individuals get access to the data they should have access to and Prism Central supports RBAC to provide customized role based access permissions for users.
        
        D - That’s incorrect. RBAC is not a self service portal. RBAC ensures that only specified individuals get access to the data they should have access to and Prism Central supports RBAC to provide customized role based access permissions for users. 
        
        2. What is the access privilede for a Prism Administrator?  
            a) view-only priviledge. 
            b) full administrator priviledges. 
            c) full administrator priviledges but cannot create or modify user accounts.
            d) view access to only blueprints of a project. 
        
        My Answer: C. 
        
        Prism Administrator does not have full administrator access. Prism administrator cannot create or modify user roles. Prism Administrator has all admin privileges but cannot create or modify user accounts.
        
        3. Matching Quiz - Scenario
        
        Consider a scenario in which you are the Super Admin, where one of your main responsibilities is managing all user access. You also have 4 users you wish to support:

         Alice is your Prism expert. You wish to give enough access such that Alice can administer the cluster but you don’t want Alice to have access to manage user accounts.
         
         Rayshawn is an infrastructure admin within your organization, so you wish to give him the ability to deploy and manage cloud-oriented resources.
         
         Olivia and Owen are developers in your organization working on a project, so they need to be able to test, develop, and troubleshoot the applications in a project.
         
         Additionally, you also have a group of users, let’s call them Group A, who should only be able to deploy applications in the project.
         
         Please read the scenario above. How will you make use of the Prism built-in roles to provide access to these four users? Match the name with the role you would assign. 

        ALL ROLES AVAILABLE FOR ASSIGNMENT:   Operator, Prism Admin, Self service Admin, Developer, Consumer. 
        
        Users to assign Built In Roles to: 
        
          Alice - Prism Admin
          Rayshawn - self-service admin
          Olivia and Owen - Developer 
          Group A - Consumer 
          
          That’s correct - you’ve matched each user with the appropriate role!
        
1.16 Categories 
* Prism Central allows you to group users into a key-value pair called a category.
* Categories are used define groups of entities to which policies are applied and enforced. 
* Each category can contain one or more values. 
* example:  you have many departments within your organization and they all need different (or the same/similar) backup policies for their data: Fiance, Video, Sales, etc. 
* Categories also allow you to visualize relationships between categories. 
*  Creating a category:

      1.  Go to the Categories dashboard.
      2.  Click to create category button 
      3. enter the name
      4. enter the description of the category's main purpose
      5. enter a category value in the Value Field. 
      6.  Save 
*  there are also out-of-the-box categories available 
* Modifying a Category
  Built-in categories cannot be modified or deleted. 
  To update an existing custom category:
  
        Go to the Categories dashboard.
        Select the desired category from the list.
        Select Update from the Actions pull-down menu.
        Update the field values as desired.
        Click Save.
 * Deleting a Category

       Go to the Categories dashboard.
       Select the desired category from the list.
        Select Delete from the Actions pull-down menu.
       Click OK when prompted.
       
       Note: You cannot delete a category if it is used in an existing policy. All associations with existing policies must be removed before a category can be deleted.

* Assigning a Category 
To assign a category value to one or more entities, such as cluster, VM, image, or subnet:

    Go to the entity type dashboard.
    Select all the entities of that type you want to tag with the same category value.
    Select Manage Categories from the Actions pull-down menu.
    In the Manage [Cluster|VM|Image|Subnet] Categories page: a. Enter a category name. b. Select the target value from the list. c. Click the plus sign (+) to assign that category value to the selected entities. Repeat this step to assign a value for a second category.
    Click Save.
    
    Note: Categories support multi-cardinality, which means you can assign multiple category values to the same entity.

1.17 Quiz: Categories.

      1. What is the purpose of Categories:

      My Answer:  Categories are used to define groups of entities in which policies and encouragement are applied to. 
      
      That’s right! Categories are used to define groups of entities in which policies and enforcement are applied to.
      
      2.  An entity can be assigned with multiple category values. 
      
      My Answer: True. 
      
      That’s right! An entity can be assigned with one or more category values.
      
      3. You are heading a project in which you are deploying 100 Linux VMs and around 150 Windows VMs. You want a set of users, Group A, to only have view access to the Linux VMs and the Windows VMs. You also want another set of users, Group B, to have edit access to the Windows VMs. Thus, you create 2 roles, one for edit access to VMs and the other for view access to VMs.
      
      Many more Windows and Linux VMs are expected to be eventually added. As the number of VMs is expected to grow, you do not want to manually configure the roles every time a VM is added. How will you create the newly added VMs to automatically obtain the permissions?

      My Answer:  Create 2 categories: one for Windows VMs and one for Linux VMs.
      Assign Group A with view access to Windows and Linux category.
      Assing group B with edit access to the Windows VMs. 
      
      That’s right! By creating categories you can ensure the newly added VMs will automatically obtain RBAC permissions.

1.18 Prisim Central Projects. 
* this feature allows for well-designed hybrid cloud self service
* use of this feature gives the people who need it INSTANT access to what they need, once provisioned for them to use.
* it is cost effective, as quotas can be set, as needed. 
* IT staf doesn't have to serve as a middle man. 
* Saves IT staff and time. 
* Decreases time-to-market. 
* Enables a simple view within Prisim Central for end-users. 
* Allows end-users to create VMs without IT interventions 
* The Prism Self Service feature allows you to create projects where consumers of IT infrastructure within an enterprise—individual users or teams such as development, test, and DevOps—can provision and manage VMs in a self-service manner, without having to engage IT in day-to-day operations.
* Projects allow specificity of people or groups who have common goals and need common resources to achieve the end-results they are look forward to producing. 
* To Access Prisim Central Projects:
      
        Once logged in navigate using the left-hand menu to Administration
        Then select Projects 
        We will now see a directory of existing projects. 
        Click CREATE PROJECT to start a new one 
        Give it a name
        Give it a description 
        Choose which cluster (if we have more than one)
        Add users
        Add roles 
        or add groups (we can add individuals and team) 
        Allow colaboration so they can share resources 
        [can set a limit or quota for use ] 
        save changes
        takes a moment 


* Modifying a Project To modify an existing project:

       Go to the projects dashboard.
       Select the target project.
       Select Update Project from the Actions pull-down menu.
       Update the field values as desired.
       Click Save.

* Deleting a Project To delete a project:

       Go to the projects dashboard.
       Select the target project.
       Select Delete from the Actions pull-down menu.
       Click OK.
       
       Note: Before you can delete a project, you must first remove any VMs and networks, in that order, from the project.     

* Reading [Prism Self Service Administration](https://portal.nutanix.com/page/documents/details?targetId=Prism-Central-Guide-Prism-v5_18:ssp-ssp-management-pc-c.html)


1.19 Quiz: Prism Central Projects. 

    1. How does Prism self Service benefit the Business? 
    My Answer: Reduces IT intervention 
    
    That’s right! One of the primary benefits of configuring Prism Self Service is reducing IT intervention.
    
    2. What happens if a quota is not specified when creating a project? 
    
    My Answer: No usage limit is applied for a project.
    
    That’s right! When a quota is not specified, no usage limit is applied for a project. NOTE: this could be expensive but necessary! 
    
    3. A project administrator creates a project on an AHV cluster and specifies a quota for storage. After a few days of usage, the project runs out of storage space. But when the project admin looks at the usage statistics, the project storage consumption is still below the specified quota.
    
    What could be the possible reason for insufficient storage?
    
    My Answer:  The reason could be that the AHV cluster ran out of storage. A quota does not guarantee the project a certain amount of infrastructure resources. 
    
    
    That’s right! A quota ensures that a single project or a small number of projects do not overrun the infrastructure. If the Nutanix cluster runs out of a resource, project members might not be able to use the resource, even if the project has not reached its specified limit.
    
    
1.20 Workspace Warmup 
* [Visit Lesson and CLICK to warm up the lab](https://classroom.udacity.com/nanodegrees/nd321/parts/89c29bc4-dd70-45d6-9d93-0b1e18d73ca2/modules/c617ce84-4be2-4b11-a90a-b25e2feb2ed3/lessons/6c1ca154-045a-44e9-b381-09bf01dc1515/concepts/535d8cc4-8306-487d-a978-d7509c8c7156) 
* If this is configured and working properly, after doing so, you will see a green text message stating: "Your workspace has been reserved! Please continue to the next page."

1.21 Image Management 
1.22 Quiz: Image Management 

1.23 Using Udacity Workspaces with Nutanix
* This section was _HIGHLIGHTED_ during Orientation as being super improtant to understand and follow the instructions within it.  
* Further, so far, every question I've seen any other students ask within the Student Hub, includes "refer back to this lesson" as part of (or entirely as) the answer to the student question(s). 
* The entire lesson is a DEMO of how the Nutanix workspaces work within the Udacity classroom workspaces. 


1.24 Exercise: Image Management
1.25 Exercise Solution: Image Management
1.26 Glossary 
1.27 Lesson Conclusion


## Lesson 2: Calm Automation for Application Lifecycle Management 
## Lesson 3: Creating and Publishing a single VM Blueprint 
## Lesson 4: Creating and Publishing a multi-VM Blueprint 
## Lesson 5: Calm Automation for a 3-Tier Web Application 
## Project: Private cloud SaaS: 3-tier Web application 

# HYBRID CLOUD ENGINEER: 
Udacity Nanodegree Program - Nutanix Scholarship Fall 2020-Spring 2021<br>
[ReadMe](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix) | [Section 1](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-1.md) | [Section 2](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-2.md) | [Section 3](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-3.md) | [Section 4](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-4.md) | [Section 5](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-5.md) | [Section 6](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-6.md) | [Resources](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix/Nutanix-Resources) | [Images](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix/Images)
