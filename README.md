# Introduction

**Objective:** The objective of this scenario is to streamline communication and ensure timely updates regarding the Admin Lead follow-up pipeline within the Krayin package.

**Components Involved:**

**Krayin Package:** This refers to the specific software or application suite being used to manage CRM (Customer Relationship Management) and administrative tasks.

**Admin Lead Follow-Up Pipeline:** This is a structured process within the Krayin package that tracks and manages follow-up activities related to administrative leads. It likely includes stages such as initial contact, follow-up calls, meetings scheduled, proposals sent, and so forth.

**Automated Email Notification System:** This system is designed to automatically trigger and send email notifications based on specific events or updates within the Krayin package.

Email Recipient (Admin): Refers to the individual or team responsible for administrative tasks and follow-ups within the organization.

## Installation 

-> Unzip the respective extension zip and then merge "packages" folder into project root directory.

* Goto **config/app.php** file and add the below line under 'providers'
~~~
Webkul\CustomWorkflow\Providers\CustomWorkflowServiceProvider::class
~~~

* Goto composer.json file and add the below line under 'psr-4'
~~~
"Webkul\\CustomWorkflow\\": "packages/Webkul/CustomWorkflow/src"
~~~

* Run these below commands to complete the setup:
~~~
composer dump-autoload
~~~

That's it, now just execute the project on your specified domain.