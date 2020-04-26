# Project plan: Forest Fire Prediction

## 1. Introduction:

This document lays out a project plan for the development of “Forest Fire Prediction” open source repository system by Priyansh Gupta. The intended readers of this document are current and future developers working on “Forest Fire Prediction” and the sponsors of the project. The plan will include, but is not restricted to, a summary of the system functionality, the scope of the project from the perspective of the “Forest Fire Prediction” team, scheduling and delivery estimates, project risks and how those risks will be mitigated, the process by which we will develop the project, and metrics and measurements that will be recorded throughout the project.

## 2. Overview:

Forest fires are a major environmental issue, creating economical and ecological damage while endangering human lives. Fast detection is a key element for controlling such phenomenon.

For example: In Australia, throughout 4 months at least 33 people were killed including four firefighters and more than 11 million hectares (110,000 sq km or 27.2 million acres) of bush, forest and parks has burnt. We aim to develop an application in which the forest fire will be predicted over the static data and if possible real time satellite data.

### 2.1 Customers:

   * This application can be used by anyone ranging from a child to an old-adult.
   * The application will use simple regional languages so that everyone could understand it.
   * This will our contribution to forest departments, FRI, NIDM and other such Govt. departments.

### 2.2 Functionality:

   * It can detect and/or predict forest fire at a faster rate.
   * It can predict the data more accurately by analyzing the data of other recent forest fires.
   * If given appropriate and accurate data, it can also predict the severity of the fire so proper action can be taken accordingly.
   * Upon detecting a forest fire, it will immediately send an emergency message to the nearest fire department.
   * The workflow reads the data trains a regression model based on the spatial, temporal, and weather variables. It can predict the direction of flow of forest fire by analysing the wind speed and hence can also predict the probable area to be affected.
   * This application will predict forest fire with the help of available statistical data. It is a data mining approach to predict forest fire.
   * The model is then used to predict the burnt area based on current data and the coordinates where the fire is spotted.
   * This prediction can be used for calculating the concerned forces to be sent to the incident.
   * *It can be made live by using satellite API’s.*
   
### 2.3 Platform:

We have planned to host this product on a website providing easy access to our end users.

### 2.4 Development Responsibility

We, the team of UsoC2020, would be developing the software and we are responsible for the creation of the Model, Database and all the other related stuffs in this project.

## 3. Goals and Scopes:

  * This application will be used by government and forest officials.
  * By prediction we will reduce the frequency and size of fires.
  * Application may use the satellite images to predict the areas of fire.
  * Users can input the wind, slope and fuel moisture data.

For future work we can produce wildfire risk maps by considering the vulnerable areas Finding the location of communities with a lower capacity to prevent the wildfires and even the recovery management will be a useful criterion for risk map production. 

## 4. Deliverables: (All the paraphernalia required during development)
●	Feature Specification
●	Product Design
●	Test Plan
●	Development Document
●	Source Code

## 5. Risk Management:

### 5.1 Risk Identification:

Following are the risk involved in the project:
- To avoid forest fire, we need real time data to predict the place where the forest fire may occur.
- We need to identify the wind speed and direction accurately, so that in case of forest fire, we can stop it as soon as possible.

### 5.2 Risk Mitigation:

- To get the real time analytics we can use Spark (which supports Real time processing) or any other tool that can do real time analysis.
- After getting real time data we can call the Forest department and police station so that they can control the fire and the area around that forest.
- To get high accuracy, we need to monitor the lattitide, longitude and many other factors to get the correct wind direction.
- Large amount of data is needed to get more accurate results to analyze the wind flow properly, which can be done by either big data analysis tools or any other technology/libraries.
