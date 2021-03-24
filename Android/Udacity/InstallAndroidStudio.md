# [Udacity Course Link](https://classroom.udacity.com/courses/ud808/lessons/4216368924/concepts/43001585890923)

### 1.1 Introduction
* Course Instructor: Layla
* Android Studio is Udacity's development environment choice for creating Android Apps
* Once installed & set up, your emulator is connected, you can make a "Hello World" app in a matter of minutes. 
* you should have java 7 or greater
* if not, install.
* [Download the Java Development Kit (JDK)](https://www.oracle.com/java/technologies/javase-downloads.html)

### 1.2 Windows: INstall Java Development 
* Installing the Java Development Kit: Windows Guide
* Verify that you have Java 
* To check if you have JDK installed (and which version)
*  open a terminal window and type: java -version and hit enter. 

        c:\ java -version
        java version "15.0.2" 2021-01-19
        Java(TM) SE Runtime Environment (build 15.0.2+7-27)
        Java HotSpot(TM) 64-Bit Server VM (build 15.0.2+7-27, mixed mode, sharing)

### 1.3 Mac: Install Java Development Kit 
* Instructions available but not needed in my case. 

### 1.4 Windows and Mac: Install Android Studio
* This is our Workshop for all we do. 
* This is a large file.
* You will want to have a good internet connection.
* [Download Link](https://developer.android.com/studio)
* Set Up Wizzard--select all defaults. 

### 1.5 Windows: Guide to Install Android Studio
* Install the JDK before installing Android Studio IDE
* Verify it is all set up and ready to go. (It is)

### 1.6 Mac: Guide to Intstall Android Studio 
available, but not needed in this case

### 1.7 Hellow World: Create a New Project
video advises to use updated text instructions instead of this video

### 1.8 Making Your First App : Hello World
* 1.   Welcome to Android Studio Screen
       First, open Android Studio. You should see this window. 
       Go ahead and click Start a new Android Studio Project. 
       An Android Studio Project typically means the code and files for one Android Application
* 2.   New Project Screen 
       Here we see a few options we get to choose. 
       Application Name is the name of the application we'll see in the App Bar at the top of our app, 
       as well as shown in the All Apps screen on the device. Using the default is fine 
       (examples were made with a happy birthday app, but for our purposes the naming doesn't matter).
       Next is company domain. 
       Since we're practicing together right now, use the domain android.example.com, 
       which should be what is automatically shown. 
       If you look below, you'll see that it generates the package name com.example.android.myapplication, 
       which is combination of the reverse of the domain and your app name.
*  3.  Target Android Devices 
       Next you will see a screen to select the FORM FACTORS your app will run upon. 
       Different platforms requires seperate SDKs. 
       For our beginning example, only select Phone and Tablet. 
       Only select Phone and Tablet since we're not making an app for TV or Wear. 
       For Minimum SDK choose the deliciously named API 15: Android 4.0.3 (IceCreamSandwich). 
       If you're wondering about SDK naming, check out the wikipedia article on [Android Version History](http://en.wikipedia.org/wiki/Android_version_history)
*  4.  Add an activity to Mobile
       Here we are given a bunch of starting applications we can choose from, 
       depending on what we're trying to make. Go ahead and choose Blank Activity. 
       It's the simplest one that still gives you some default files to start with.
*  5.  Choose an option for your new file 
       Finally we have some names for different files that make up our app. 
       As you'll soon see, an application is defined in picture files, sound files, xml files, java files and more; 
       there are a lot of files that work together to make your application.
       We'll talk about this all in the future. For now, take a look at the layout name. 
       You've been working on XML layout files, so this is the name of the file we'll be editing, remember it.
       
          Use the defaults which should be:

          Activity Name: MainActivity
          Layout Name: activity_main
          Title: MainActivity
          Menu Resource Name: menu_main
          
      Depending on your computer speed it might take a minute to set up your project. 
      Go ahead and get some tea or do a stretch.

*  Running Into Errors? 
   Don't panic! Lots of students have had issues with downloading Android Studio so you are not alone. 
   To help you can try:
   Checking out this [Troubleshooting Document](https://docs.google.com/document/d/1uvDjgB7ZE3e5JT1hkwmyRJjK04TOKoD1WvtZ5xSkQw8/pub?embedded=true).
   Asking for help in the forums and on chat. 
   We'll be checking in once in a while to see what problems students are finding 
   and update the first document accordingly. 
   So if you solve a problem, consider posting about your experience. 
   When you're talking about an error, it helps to copy the text of the error. 
   You can also take a screenshot of the error with the CTRL-CMD-Shift on a mac,
   or the screenshot key on a windows.
   Copy your exact error and google it. 
   9 times out of 10, someone has run into the same problem and posted a solution about it. 
   You can try adding "Android Studio" to the search 
   if just searching for the error doesn't get Android Studio specific help.

### 1.9 Running Hello World on Your Phone 
   YouTube: https://youtu.be/HbXTbOCUqjg 
   Here is the link to the [Windows OEM Drivers](http://developer.android.com/tools/extras/oem-usb.html) webpage
   [Troubleshooting Document](https://docs.google.com/document/d/1w1Xn_hnSAODAAtdRDp7haYPBtEwX_l7Htpf8Wpgbu6w/pub?embedded=true)

### 1.10 Running Hello World on the Android Emulator 
   YouTube: https://youtu.be/Nmy6taPcDqc
   [Troubleshooting Document](https://docs.google.com/document/d/1w1Xn_hnSAODAAtdRDp7haYPBtEwX_l7Htpf8Wpgbu6w/pub?embedded=true)
   We recommend downloading [Genymotion](https://www.genymotion.com/#!/download0 and using it as your primary emulator
   —it's significantly faster than the built-in emulator!
   Watch this [Webcast](https://plus.google.com/u/0/events/c23f0fcnvphgkb5hj3u2a9crdd4?cfem=1&authkey=CMuyhs-T-4iGFA) to learn Tips, Ticks and Troubleshooting techniques in Android Studio.
   [Associated handout](https://drive.google.com/a/knowlabs.com/file/d/0B1kaWbepsXZxYV9pUVJOYUcxZGc/view) here.
