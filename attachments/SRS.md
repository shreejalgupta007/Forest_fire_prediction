# Project plan: Forest Fire Prediction

## 1. Introduction:

This document lays out a project plan for the development of “Forest Fire Prediction” open source repository system by Priyansh Gupta. The intended readers of this document are current and future developers working on “Forest Fire Prediction” and the sponsors of the project. The plan will include, but is not restricted to, a summary of the system functionality, the scope of the project from the perspective of the “Forest Fire Prediction” team, scheduling and delivery estimates, project risks and how those risks will be mitigated, the process by which we will develop the project, and metrics and measurements that will be recorded throughout the project.

## 2. Overview:

Forest fires are a major environmental issue, creating economical and ecological damage while endangering human lives. Fast detection is a key element for controlling such phenomenon.

For example: In Australia, throughout 4 months at least 33 people were killed including four firefighters and more than 11 million hectares (110,000 sq km or 27.2 million acres) of bush, forest and parks has burnt. We aim to develop an application in which the forest fire will be predicted over the static data and if possible real time satellite data.

##    2.1 Customers:

   * This application can be used by anyone ranging from a child to an old-adult.
   * The application will use simple regional languages so that everyone could understand it.
   * This will our contribution to forest departments, FRI, NIDM and other such Govt. departments.

##    2.2 Functionality:

   * It can detect and/or predict forest fire at a faster rate.
   * It can predict the data more accurately by analyzing the data of other recent forest fires.
   * If given appropriate and accurate data, it can also predict the severity of the fire so proper action can be taken accordingly.
   * Upon detecting a forest fire, it will immediately send an emergency message to the nearest fire department.
   * The workflow reads the data trains a regression model based on the spatial, temporal, and weather variables. It can predict the direction of flow of forest fire by analysing the wind speed and hence can also predict the probable area to be affected.
   * This application will predict forest fire with the help of available statistical data. It is a data mining approach to predict forest fire.
   * The model is then used to predict the burnt area based on current data and the coordinates where the fire is spotted.
   * This prediction can be used for calculating the concerned forces to be sent to the incident.
   * *It can be made live by using satellite API’s.*
   
   