<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-12 07:41:20 --> 404 Page Not Found: Login_user/check_login
ERROR - 2018-07-12 15:15:09 --> Query error: Unknown column 'StateName' in 'order clause' - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`EmailAddress`, `us`.`Password`, `us`.`Address1`, `us`.`Address2`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
ORDER BY `UserId` ASC, `StateName` ASC
ERROR - 2018-07-12 15:15:18 --> Query error: Unknown column 'StateName' in 'order clause' - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`EmailAddress`, `us`.`Password`, `us`.`Address1`, `us`.`Address2`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
ORDER BY `UserId` ASC, `StateName` ASC
