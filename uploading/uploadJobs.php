<?php
//include "../connect_to_mysql.php";
echo "Request Receive\n";
//$entityBody = file_get_contents('php://input');
//print_r(json_decode($entityBody, true)["data"]);


 
//foreach($json as $i)
//echo $i;   
 
$json = array("{'Title': 'PHP', 'Description': 'Compensation: based on experience  &  skillsEducation: B.Tech  /  BE  /  MCA  /  BCA  /  Diploma  /  Associates - Computer  /  ITTechnical Skills:Well versed and experienced i... More Details', 'duration': '1 - 6 yrs', 'location': 'ul.li.span.text', 'company name': 'sterlingsoftwares', 'skills': 'css,html5,phpdeveloper,bootstrap,ajax,jquery,databasemanagement,database,json,mysql,objectorientedprogramming,mvc,technicalskills,javascript,php,gateway', 'link': 'https://www.timesjobs.com/job-detail/php-developer-php-sterling-softwares-vadodara-1-to-6-yrs-jobid-juXjPMoI0c5zpSvf__PLUS__uAgZw==&source=srp'}", 
"{'Title': 'Php', 'Description': '4   years of PHP experience preferably in Linux environment.proficient in core PHP ,  MySQL ,  jQuery and MVC Frameworks  ( sound knowledge and experience on any MVC framework... More Details', 'duration': '4 - 7 yrs', 'location': 'ul.li.span.text', 'company name': 'inoviesconsultingpvtltd', 'skills': 'css,ajax,jquery,sql,java,xml,linux,yii,json,mysql,html,mvc,cakephp,svn,messaging,eclipse,php,databaseservers', 'link': 'https://www.timesjobs.com/job-detail/php-programmers-php-developers-inovies-consulting-pvt-ltd-hyderabad-secunderabad-4-to-7-yrs-jobid-YgYC6v9aOd5zpSvf__PLUS__uAgZw==&source=srp'}");
//print_r($json);

//print_r($j);

foreach($json as $i){
    extract(json_decode($i));
    echo $Title ;
}
