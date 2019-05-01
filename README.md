# SCORM-LocalStorage
This is developed in Moodle technology with JavaScript. SCORM contains list of questions or activities. So when a user submits the question, It strores the data in localStorage and has no database facility. So opening the same question for the same user in different system will give data loss. So this is made with database facility.
Any user can submit the question from any system and updated data fetched. This is done with localstorage concept to db concept. All SCORM package is identified by their identical key eg. LearningJournal.

There can be different question in different SCORM. Data is fetched based on question number.

## Installation
STEP1: In a course when you go to the course --> Turn Editing On --> SCORM activity --> Upload the SCORM plugin. Create two activities say 1 and 2.<br>

STEP2: Open activity 1 answer the questions<br>

STEP3: Open activity 2, you will find the answers of attepted question there. You can rewrite the answer and can check back again in activity 1<br>

STEP4: You can also try different system. Atempt acivity 1 from 1 system and open acivity 1 or 2 from different system from the same user. You will get the attempted answer <br>

## Screenshot
![Screenshot of Quit Smoking Addiction Website](https://user-images.githubusercontent.com/15896579/57000786-c988ca00-6bd2-11e9-8a22-8abd072a2847.PNG?raw=true "Screenshot of Quit Smoking Addiction Website")

![Screenshot of QSA Course](https://user-images.githubusercontent.com/15896579/57000793-cd1c5100-6bd2-11e9-8975-78ec33ecd64c.PNG?raw=true "Screenshot of QSA Course")

![Screenshot of SCORM 1 ](https://user-images.githubusercontent.com/15896579/57000795-d0174180-6bd2-11e9-9cbc-c030eb9c473f.PNG?raw=true "Screenshot of SCORM 1")

![Screenshot of SCORM 1 quesion](https://user-images.githubusercontent.com/15896579/57000796-d3aac880-6bd2-11e9-8d45-88c8742e49ac.PNG?raw=true "Screenshot of SCORM 1 quesion")

![Screenshot of SCORM 1 quesion](https://user-images.githubusercontent.com/15896579/57000799-d7d6e600-6bd2-11e9-9147-b93f19650853.PNG?raw=true "Screenshot of SCORM 1 quesion")

![Screenshot of SCORM 2 quesion - answers fetched](https://user-images.githubusercontent.com/15896579/57000803-da394000-6bd2-11e9-8a8a-0f122fd84ffb.PNG?raw=true "Screenshot of SCORM 2 quesion - answers fetched")

![Screenshot of SCORM 2 quesion - answers fetched](https://user-images.githubusercontent.com/15896579/57000804-dd343080-6bd2-11e9-8171-9b23a1ba0c4a.PNG?raw=true "Screenshot of SCORM 2 quesion - answers fetched")