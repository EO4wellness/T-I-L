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
* Prism Image Management
* Needs to provide benefits of:
    - Hand-Free Replication 
    - Upload directly 
* inventory of images 
* images are in the ISO format (or vdsk) 
* To find Image Management:

            Login --> Dashboardh --> Viritual Infrastructure --> Images 
            View a directory of existing images 
            can add an image from an URL
            description 
            policy where it will be consumed / used 
            mark its categories 
            place on a culture (specific), all or some clusters as needed 
            then it populates in the image directory 
* Intro to Image Manaement 
* Direct Image Upload (ISO) 
* UPload from a Remote Server (cloud) 
* Modifying an Image
        
        To modify an image:
        Go to Images.
        Select the image you want to modify.
        Select Update Image from the Action pull-down menu.
        Make the desired changes.
        Click Save.
        
        To delete an image, select the target image and then select Delete from the Action pull-down menu. 

* Import Images 
To import images:

    Go to Images.
    Click the import Images button.
    Select Import type. a. To import all images from all registered clusters, click All Images. b.To import all images from a selection of registered clusters, click Images On a Cluster, and then select the clusters. c. To import specific images from a given cluster, click the Select Images link provided for the cluster. Select the images that you want to import and click Done. d. Repeat this step for all the clusters from which you want to import images.
    To begin the import, click Save.
    
    Prism Central imports the metadata of the selected images and marks the images as read-only entities on the clusters.
    
* Image Management - in Nutanix the process has been optimized to make it quicker 
* Additional Optional Reading
    [Image Management](https://portal.nutanix.com/page/documents/details?targetId=Prism-Central-Guide-Prism-v5_17%3Amul-images-manage-pc-c.html)
    [Nutanix Just Made AHV Image Management Painless](https://next.nutanix.com/blog-40/nutanix-just-made-ahv-image-management-painless-33144)


1.22 Quiz: Image Management 

        1. What happens when an image is imported to prism central? 
        
        My Answer:  Prisim Central importa the metadata of the selected images and marks the images as read-only entries on the clusters. 
        
        That’s right! When an image is imported to Prism Central, it imports the metadata of the selected images and marks the images as read-only entities on the clusters.
        
        2.  Which image upload method helps you overcome image file size limitations of modern browsers? 
        My Answer: Uploading an image from a remote server. 
        
        That’s right! Uploading an image from a remote server helps you overcome file size limitations.
        
        3. An administrator wants to upload a 4 GB image file from a workstation. The administrator navigates to the Add Image page and then clicks the Add Image button. He then navigates to the location of the image, selects the image of his choice and clicks Open. The image upload fails. What could be the possible reason and how can it be fixed? 
        
        Most modern browsers impose file size limitations that affect this upload method.  If you must upload images larger than 2 GB, then you must upload the images from a remote server. 
        
        That’s right! When uploading an image file of size larger than 2 GB, you have to upload it from a remote server.


1.23 Using Udacity Workspaces with Nutanix
* This section was _HIGHLIGHTED_ during Orientation as being super improtant to understand and follow the instructions within it.  
* Further, so far, every question I've seen any other students ask within the Student Hub, includes "refer back to this lesson" as part of (or entirely as) the answer to the student question(s). 
* The entire lesson is a DEMO of how the Nutanix workspaces work within the Udacity classroom workspaces. 
* Nutanix Frame - a virtual desktop service with a Windows 10 Desktop configured to do everything we need to do in Prism. 
* Lab only lives for 4 hours.  SAVE FREQUENTLY! 
* To save to your student workspace, go to the virtual windows 10 in the lab. 
    go to "desktop"
    then go to WORKSPACE 
    
    or
    
    this PC
    desktop
    workspace 
    
    SAVE your work
    then "close session"
    to navigate away 
    
    BLUEPRINT: 
    
    Navigate with the ENTITIES menu 
    to Services
    then CALM 
    
    the second menu icon from the top is "BLUEPRINTS"
    click on it
    find yours
    select it with the check box
    select the download
    leave default
    submit your project 
    
    when working on the exercises--SAVE them
    when submitting your project blueprint DO NOT SAVE THEM
    leave them default for the project submission 
    https://youtu.be/Pxmbm1FZ9FY

    

1.24 Exercise: Image Management
* Booting up Virtual Machine 

1.25 Exercise Solution: Image Management
* A set of instructions to follow until completion in the lab. 

1.26 Glossary 
Jump to content
Email for accessibility support
Lesson 1: Managing Multiple Cluster and Workload Resources

1. Course Overview
2. Lesson Overview
3. The Big Picture
4. Intro to Cluster & Workload Mgmt.
5. Prism Element vs. Prism Central
6. Quiz: Prism Element vs. Prism Central
7. Understanding Prism Central
8. Quiz: Understanding Prism Central
9. Prism Central and Governance
10. Quiz: Prism Central and Governance
11. Identity Management
12. Quiz: Identity Management
13. Exercise: Identity Management
14. Role-Based Access Control
15. Quiz: Role-Based Access Control
16. Categories
17. Quiz: Categories
18. Prism Central Projects
19. Quiz: Prism Central Projects
20. Workspace Warmup
21. Image Management
22. Quiz: Image Management
23. Using Udacity Workspaces with Nutanix
24. Exercise: Image Management
25. Exercise Solution: Image Management
26. Glossary

    27. Lesson Conclusion

    Mentor Help
    Ask a mentor on our Q&A platform

Glossary
Glossary of Key Terms in this Lesson

Authentication

    Authentication is about verifying a user's identity against a trusted source of truth like Active Directory or any other IDP (Identity Provider).

Authorization

    After a user has been authenticated, authorization determines what permissions/access they have, and what they are allowed or not allowed to do.

Categories

    Categories are used to define groups of entities in which policies and enforcement are applied.

Image management

    A Prism Central feature that enables you to upload images to clusters and maintain an inventory of the images on them.

Image service

    Ensures that uploaded images are saved to a cluster, and copied to additional clusters whenever you need them, on-demand.

IT governance

    IT governance is an element of corporate governance, intended at enhancing the overall administration of IT and reaping improved value from investment in information and technology.

Prism Central

    The Nutanix scale-out control plane to manage multiple joined Nutanix clusters and provide advanced management capabilities from a single pane of glass web console.

Project

    A project defines a set of Active Directory with a common set of requirements or a common function, such as a team of people collaborating on an engineering project.

Quota

    A quota specifies a usage limit on an infrastructure resource (compute, memory, or storage) for the project.

Role-Based Access Control (RBAC)

    Role-Based Access Control ensures that only specified individuals get access to the data they should have access to and all access, requests, and grants are fully auditable.


1.27 Lesson Conclusion
To summarize, Prism Central manages multiple clusters across different locations and Prism Element manages an individual cluster. Prism is rich with various features that help to achieve IT governance.

In order to manage multiple clusters and workloads Prism supports:

    User authentication to authorize user’s identity.
    Role-Based Access Control to ensure right users have access to the right resources.
    Categories to define groups of entities for which policies and enforcement can be applied.
    Prism Self Service to create projects without IT intervention.
    Image management to manage images from a centralized location.



## Lesson 2: Calm Automation for Application Lifecycle Management 
* In this lesson, we will automate VM workloads with Calm proviers, projects, and blueprints
* We will use Marketplace and Marketplace managager. 

2.1 Lesson Overview 
* CALM Automation 
* Prism Central lays the foundation for Automation 
* other Nutanix products – Karbon, for containers; Era, for databases; Prism Pro, a license that adds machine learning, analytics, and advanced automation to Prism – are all closely integrated with Prism
* Nutanix Calm automates application deployment and simplifies lifecycle management
* centerpiece of this Private Cloud Automation course – a product called Nutanix Calm. 
* Calm answers the growing challenge of enterprise application management, a problem that IT teams across the world have been wrestling with for years
* learning about providers, projects, role-based access control, and marketplace publishing. 

2.2 Growing Need for Simplication 
* 2019 Vanson Bourne survey highlights how important Automation is
* survey of 2650 IT personnel surveyd 
* Is automating IT operations important to enterprises?  98% Yes.  56% extremely important! 
* increased complexity 
* growing complexity 
* Growing challenges in app management 
* Fragmented ownership - knowledge sillos. No one can help anyone else. 
* Automate Mundane IT Tasks
* Free up IT Time
* Focus on: Cloud-line experience on-prem, conpetitive differentiation, strategic planning 
* enabling the private cloud experinece to happen 
* obsticals : popularity of hybrid models introduces management challenges 


2.3 Intro to Application Management 
* Blueprints are the HEART of CALM
* Blueprints model business processes, infrastructure, operations, and governance 
* Unify IT silos 
* blueprints can be exported as a JSON file 
* blueprints can be shared between people and departments 
* common practice for blueprints to be placed under revision control 
* public CALM blueprints freely available in my public Git repos 
* Calm blueprints are software artifacts 


2.4 What is Nutanix Calm? 
* The basic Nutanix stack, as we've seen and studied so far is:

        One-Click Operations 
        Native Virtualization (AHV)
        Server   Data Protection   Storage 
        Networking 
        
 * Calm takes the previous studied Nutanix basic stack and adds the CALM portion atop of it. 
 * This includes: Multi-Cloud Management and Application Automation
 
 
        Multi-Cloud Management
        Application Automation
        One-Click Operations 
        Native Virtualization (AHV)
        Server   Data Protection   Storage 
        Networking 
* New CALM features rolling out in fall 2020. 
* Application Automation and Multi-Cloud mangaement means:
* Application Automation consists of 3 capabilities: app-centric automation & lifecycle management, policy-based governance, and self-service provisioning 
* Multi-cloud managment includes abstracting applications from cloud infrastructure, deploying and managing applications on any cloud, and visibility and control of public, private, and hybrid cloud consumption 

* Access CALM from Prism Central 

            Logged in
            Click on menu icon at top right 
            Select Services 
            Click on Calm 
            
* Automation products integrate easily with Prism. 
* Within Prism, once opened by menu selection calm has its own icons.  
* In order from top to bottom, the CALM icons are:
        
        Marketplace 
        Blueprints
        Applications
        Library 
        Runbooks
        Endpoints
        Settings
        Marketplace Manager 
        projects 
        
* Additional Reading: 
[Nutanix Calm: Application Centric Automation](https://www.nutanix.com/content/dam/nutanix/resources/datasheets/ds-calm-application-centric-automation.pdf)
[Introducing Nutanix Calm Video](https://youtu.be/afagsdg9Lpk)
[App Centric Infrastructure for Any Cloud](https://www.nutanix.com/blog/app-centric-infrastructure-cloud)



2.5 Quiz: What is Nutanix Calm? 

        1.  Which of the following statements are true about Nutanix Calm?
            __ Calm treats aplications as complete entities.
            __ Calm provides sophisticated application security for enterprise-grade applications 
            __ Calm optimizes aplication deployments and enables you to control and contain cloud spend.
            __ Calm automates how applications are created, consumed, governed.
            
         My Answers:  Calm treats aplications as complete entities. and Calm automates how applications are created, consumed, governed.
         
         That’s right! A big part of Calm is application automation, and this is achieved by treating applications as complete entities. Calm eliminates the need for IT teams to manually deploy apps when they are requested, and automates those activities instead.

        2. How is Nutanix Calm accessed?
        
        My Answer: Thru Prism Central 
        
        That’s right! Like most Nutanix products, Calm integrates with Prism Central so that you can manage everything from a single pane of glass.
        
        
        3. You are working with the Senior IT Manager of a large financial services company, helping her and her team modernize their IT infrastructure. One of the items on their list - and yours - is to introduce some amount of automation to the ecosystem to reduce the company’s dependence on IT for manual, cumbersome tasks.
        Because they are already running Nutanix, one of the applications that you have been evaluating is Nutanix Calm. After some study, you make a presentation of your findings to the IT Manager. She is interested, but having spent many years working with traditional, 3-tier architecture, she is concerned about adding another brand new piece of software with a brand new interface (and its own potential nuances) to the ones that her team is already working with.
        Every new piece of specialized software requires specialized skills to use and she does not want to have to hire new team members exclusively to use one new product, especially when she isn’t yet confident of the benefits it will bring.
        How do you respond to her concern?
        
        My Answer:  Calm integrates with and follows the same user interface (UI) design as Nutanix Prism. since the team is already running Nutanix, Calms user interface will be instantly familiar to them.  Calm doesn't add a new interface, it adds on functions to the existing interface. 

        

2.6 Exercise: Enable Nutanix Calm 

        Log in to Nutanix Prism
        Click on the ? in the upper left-hand corner 
        Select the drop down menu for "New in Prism central" 
        from there select "Enable App Management" 
        Click Enable 
        Click Save 
        Monitor TASKS (blue circle next to ? in the upper right hand menu) 


2.7 Workspace Warmup 1 
* "Your workspace has been reserved! Please continue to the next page." 

2.8 Generate an SSH Key Pair 
* VM Iaas for Self-Serive IT
* 3 Considerations: 
        VMs
        Security
        Multiple cloud platoforms 
* Linux-Unix like 
* Linus has multiple distributions available.  For class we're using CENTOS
* Community Enterprice Operating Systems (CentOS) 
* Open source license 
* Compatible with RedHat 
* Has support community 
* SSH (secure shell)
* SSH is a form of public key authentication 
* SSH vs passwords provides cryptographic strength that even long passwords don't offer. 
* passwords are too weak and exploitable source for criminal and bot activities 
* SSH is a KEY PAIR 
* As such SSH has 2 parts 
* SSH 2 parts are the PUBLIC key and the PRIVATE key 
* A public key is distributed to a server 
* though the public key, is public, it can only be access by a user having the coordinating private key
* SSH encrypts data in transit anywhere on the network 
* whereas private keys, because they remind with a user, serve as proof of the user's identity
* Cloud-init provides dynamic, secure config 
* Cloud-init is the industry standard for multi distirbution method of cross platform linux installation 
* Cloud-init is also bare-metal friendly
* Cloud-init can identify the host infrastructre provider during boot, read metadata, and initalize the OS 
* We will use Cloud-init to create user account

2.9 Quiz SSH Key Pairs 

        1. What is a Linux distribution?
        My Answer:  A complete Linux System 
        
        2. SSH key pairs involve two keys, namely....
        My Answer: A public key and a private key. 
        
        That’s correct! The public key is used by the server to encrypt data, and the private key is used by the user to authenticate with the server.
        
        

2.10 Exercise: Generate an SSH Key Pair

            Access Lab 
            Start Streaming 
            

2.11 Exercise Solution: Generate an SSH Key Pair 
* followed the instructions, exactly, to do the steps involved. 
* then watched this video showing these same steps 
* returned to the exercise above "worksapce" to verify the key pair generated were saved
* they were saved to the work folder 

2.12 [Components of Calm Governance](https://classroom.udacity.com/nanodegrees/nd321/parts/89c29bc4-dd70-45d6-9d93-0b1e18d73ca2/modules/c617ce84-4be2-4b11-a90a-b25e2feb2ed3/lessons/93aa28ce-2260-4179-b871-58a82b57adf1/concepts/8825821d-409e-48b0-a861-49f495417f07)
* 4 Main Capabilities are Components of Calm Governance 
    1. Providers - Public and Private cloud service providers 
    2. Projects - defines a set of users and/or groups  with a common set of requirements
    3. Role-Based Access control - RBAC define different roles within the organization and assign permissions appropriately.  
    4. Marketplace Publishing - built in version control. 
* RBAC

        Marketplace (publish, clone, provision)
        Blueprint (create, update, clone, delete, launch)
        Applications (manage, edit, create)
        Projects (add, update, assign resources)
        User (add, change, remove, roles)


2.13 Quiz: Components of Calm Governance 

        1. Why is it necessary to configure a Provider in Calm? 
        My Answer: A configured Provider allows Calm to manage applications using the provider's virtualization resources. 
        
        That’s right! Configuring a provider allows Calm to use the associated infrastructure’s resources when provisioning apps.
        
        2. What sort of information does a Calm project specify? 
        
        My Answer: Roles of members in a project; Infrastructure Usage limits; infrastructure resources that project members can use. 
        
        That’s right! A project allows members of a group with common requirements to collaborate; it defines the resources that members have access to; and it can also optionally specify usage limits that project members must adhere to.
        
        3.  What is the Marketplace? 
        
        My Answer:  A collection of application blueprints.
        
        That’s correct! The Marketplace provides users with a collection of blueprints that they can use to deploy an application.
        

2.14 Calm: Providers 
* Public and Private service providers. 
* Supported Providers include: 
    Nutanix AHV
    Nutanix VMWare
    AWS
    Gov Cloud 
    Azure 
    Google Cloud Platform
    Nutanix Xi
    Kubernetes 
    VMWare vSphere
    ESXi
    Nutanix Karbon
    GKE 
    
 * You can use any / all Providers to deploy, monitor, or govern your applications 
 * You need to use one or more of the providers, configure it, and us it to create a blueprint.
 * Nutanix AHV is native to 'what you get in box" with Nutanix.
 * Providers have their own section under --> Main left-hand menu --> serices --> providers 
 
 Configuring New Service Providers

At a very high level, to add a new service provider, you need to:

    Navigate to the Settings page in Calm.
    Click Providers at the top of the screen. By default, the Settings page opens on the General tab.
    Click + Add Provider.
    Name your provider and select the Type from the drop down menu.

You will then be required to provide configuration information specific to the type of provider you have selected.

Additional Optional Reading
[Providers Configuration](https://portal.nutanix.com/page/documents/details?targetId=Nutanix-Calm-Admin-Operations-Guide-v3_0_0:nuc-providers-configuration.html)


2.15 Quiz: Calm Providers 

2.16 Calm: Projects 

2.17 Quiz: Calm Projects 

2.18 Calm: Role-Based Access Control

2.19 Quiz Calm RBAC 

2.20 Workspace Warmup

2.21 The Nutanix Marketplace 

2.22 Quiz: The Nutanix Marketplace 

2.23 Exercise: Create a Calm Project 

2.24 Exercise Solution: Create a Calm Project 

2.25 Exercise: Publish Blueprint to Marketplace 

2.26 Exercise: Solution: Publish Blueprint to Marketplace 

2.27 Exercise: Launch a Blueprint 

2.28 Exercise Solution: Launch Blueprint 

2.29 Exercise Delete an Application 

2.30 Exercise Solution: Deleting Applications 

2.31 Glossary
Glossary

Blueprint - Blueprints are essentially recipes for applications. These recipes encompass application architecture and Infrastructure choices, provisioning and deployment steps, application binaries, command steps, monitoring endpoints, remediation steps, licensing and monetization, and policies. Every time a blueprint is executed it results in an application.

Calm - See: Nutanix Calm, below.

CentOS - A Linux distributable. For more information, see: Linux, below.

Cloud-init - Cloud-init is the industry standard multi-distribution method for cross-platform cloud instance initialization. It is supported across all major public cloud providers, provisioning systems for private cloud infrastructure, and bare-metal installations.

Linux - Linux belongs to the family of Unix-like operating systems. It was written by Linus Torvalds and has the features that are typical of a modern Unix OS. To use Linux, you need to download a distributable, which is a complete Linux system.

Marketplace The Marketplace is a common platform for both the publisher and the consumer, and provides you with the ability to provision an application instantly.

Nutanix Calm - Nutanix Calm is a software product that provides advanced application-level orchestration that transforms how IT teams manage applications and support the business. Fully integrated into the Nutanix platform, Calm delivers a powerful, common management framework that can be simultaneously leveraged by multiple IT teams to rapidly create and deliver applications.

Project - A project defines a set of Active Directory groups with a common set of requirements or a common structure and function, such as a team of engineers collaborating on a product. The project also specifies the roles to associate with its members, networks that they can use, infrastructure to deploy onto, and (optionally) usage limits on infrastructure resources.

Providers - Providers are cloud service providers, bare-metals, or existing machines that you can use to deploy, monitor, and govern your applications.

Role-Based Access Control (RBAC) - Role-Based Access Control lets you define different roles in an organization and assign permissions accordingly.


2.32 Lesson Conclusion 

## Lesson 3: Creating and Publishing a single VM Blueprint 
## Lesson 4: Creating and Publishing a multi-VM Blueprint 
## Lesson 5: Calm Automation for a 3-Tier Web Application 
## Project: Private cloud SaaS: 3-tier Web application 

# HYBRID CLOUD ENGINEER: 
Udacity Nanodegree Program - Nutanix Scholarship Fall 2020-Spring 2021<br>
[ReadMe](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix) | [Section 1](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-1.md) | [Section 2](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-2.md) | [Section 3](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-3.md) | [Section 4](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-4.md) | [Section 5](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-5.md) | [Section 6](https://github.com/EO4wellness/T-I-L/blob/main/Nutanix/Nutanix-Course-Notes_SECTION-6.md) | [Resources](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix/Nutanix-Resources) | [Images](https://github.com/EO4wellness/T-I-L/tree/main/Nutanix/Images)
