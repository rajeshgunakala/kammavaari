<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-29 00:11:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:16:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:17:00 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 00:20:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:24:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:25:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:28:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:28:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:29:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:30:52 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 00:30:52')
ERROR - 2022-03-29 00:35:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:43:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:45:59 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 00:46:04 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 00:48:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:49:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:50:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 00:54:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:09:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:09:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:10:48 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 01:10:48')
ERROR - 2022-03-29 01:12:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:13:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:15:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:22:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:31:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:43:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:45:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:47:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 01:58:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:10:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:13:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:14:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:15:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:16:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:18:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:23:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:37:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:40:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 02:56:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:00:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:18:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:18:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:19:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:20:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:30:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:34:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:34:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:34:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 03:59:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:01:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:04:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:10:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:10:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:15:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:16:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:19:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:20:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:22:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:42:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:45:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:45:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:47:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:51:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:51:30 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 04:51:56 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 04:52:20 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 04:52:23 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 04:52:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:52:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:52:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:52:59 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 04:53:01 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 04:53:04 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 04:53:06 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 04:54:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:54:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:55:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:55:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:55:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:56:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:56:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:56:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:56:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:57:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:00:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:08:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:13:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:18:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:25:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:34:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:37:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:38:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:46:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:47:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:51:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:52:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 05:58:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:02:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:02:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:04:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:05:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:10:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:12:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:13:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:22:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:24:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:25:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:28:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:28:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:32:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:32:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:33:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:33:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:36:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:37:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:39:07 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 06:39:07')
ERROR - 2022-03-29 06:42:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:44:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id=
ERROR - 2022-03-29 06:47:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:48:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:49:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:50:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:52:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:55:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:56:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:59:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 06:59:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:02:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:03:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:04:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:08:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:08:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:17:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:17:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:18:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:18:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:20:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:24:17 --> To Id is not available for User - 3046
ERROR - 2022-03-29 07:24:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:25:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:29:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:30:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:30:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:32:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:33:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:36:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:37:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:38:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:40:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:43:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:44:09 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 07:44:09')
ERROR - 2022-03-29 07:46:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:47:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:51:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:51:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:53:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:56:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:58:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 07:59:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:01:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:05:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:06:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:07:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:07:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:11:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:13:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:15:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:20:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:23:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:27:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:28:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:30:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:31:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:31:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:33:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:33:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:34:41 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 08:34:41')
ERROR - 2022-03-29 08:35:08 --> To Id is not available for User - 4189
ERROR - 2022-03-29 08:35:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:35:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:40:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:44:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:46:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:46:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:47:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:49:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:50:32 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 08:50:32')
ERROR - 2022-03-29 08:50:32 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 08:50:32')
ERROR - 2022-03-29 08:52:28 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 08:52:28')
ERROR - 2022-03-29 08:52:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:55:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:59:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:00:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:00:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:03:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:03:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:05:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:05:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:06:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:13:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:15:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:15:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:15:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:15:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:16:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:16:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:16:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:18:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:18:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:18:59 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 09:18:59')
ERROR - 2022-03-29 09:19:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:20:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:20:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:23:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:24:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:24:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:24:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:25:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:25:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:25:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:26:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:29:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:29:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:31:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:32:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:32:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:33:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:34:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:34:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 09:34:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 09:35:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:35:14 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 09:35:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:35:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:35:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 09:36:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:37:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:37:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:38:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:38:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:38:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:38:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:39:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:40:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:40:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:40:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:41:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:41:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:44:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:44:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:44:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:45:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:45:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:45:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:45:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:45:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:45:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:46:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:48:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:48:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:49:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:49:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:50:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:50:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:50:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:50:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:51:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:51:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:51:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:51:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:51:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:51:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:53:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:53:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:55:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:55:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:55:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:56:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:56:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:56:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:57:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:57:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:58:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:58:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:59:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 09:59:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:01:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:01:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:02:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:05:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:05:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:06:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:08:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:08:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:09:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:10:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:10:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:10:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:10:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:10:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:11:41 --> To Id is not available for User - 1710
ERROR - 2022-03-29 10:11:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:11:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:12:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:12:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:12:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:13:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:13:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:13:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:14:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:15:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:18:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:20:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:21:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:21:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:23:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:23:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:23:56 --> To Id is not available for User - 1896
ERROR - 2022-03-29 10:24:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:25:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:26:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:26:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:26:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:26:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:27:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:28:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:28:31 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-03-29 10:28:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:30:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:30:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:30:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:33:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:34:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:35:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:35:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:36:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:38:11 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-03-29 10:38:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:38:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:39:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:39:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:39:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:40:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:40:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:41:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:41:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:41:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:43:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:43:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:44:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:44:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:44:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:44:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:45:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:45:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:46:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:47:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:47:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:48:07 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 10:48:07')
ERROR - 2022-03-29 10:48:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:50:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:51:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:51:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:51:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:51:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:53:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:53:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:55:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:55:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:55:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:56:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:56:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:56:48 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:56:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:56:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:56:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:56:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:57:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:57:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:57:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:57:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:57:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:57:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:58:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:58:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:58:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 10:59:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 10:59:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:00:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:00:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:01:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:01:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:01:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:02:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:02:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:06:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:06:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:08:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:09:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:10:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:10:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:10:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:11:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:11:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:11:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:11:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:12:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:12:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:13:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:16:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:20:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:20:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:21:18 --> To Id is not available for User - 2440
ERROR - 2022-03-29 11:21:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:22:21 --> To Id is not available for User - 1765
ERROR - 2022-03-29 11:22:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:23:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:23:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:23:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:24:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:24:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:24:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:24:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:24:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:25:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:25:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:26:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:27:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:28:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:28:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:28:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:28:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:28:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:29:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:29:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:29:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:30:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:31:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:32:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:32:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:32:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:32:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:32:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:34:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:34:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:35:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:35:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:35:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:36:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:36:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:36:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:36:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:37:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:37:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:37:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:37:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:37:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:38:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:38:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:38:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:38:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:39:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:39:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:39:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:39:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:39:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:39:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:40:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:40:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:40:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:40:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:41:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:41:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:42:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:42:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:42:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:42:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:42:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:43:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:43:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:44:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:45:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:46:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:46:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:48:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:48:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:48:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:49:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:49:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:51:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:52:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 11:53:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:53:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:53:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:54:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:54:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:56:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:56:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:57:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:58:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:58:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:58:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:59:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:59:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:59:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:00:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:01:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:02:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:03:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:04:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:05:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:05:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:05:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:05:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:06:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:06:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:06:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:07:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:07:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:09:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:09:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:10:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:10:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:10:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:11:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:11:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:11:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:12:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:12:29 --> To Id is not available for User - 2440
ERROR - 2022-03-29 12:13:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:14:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:16:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:16:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:17:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:17:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:18:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:19:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:22:45 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:22:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:23:37 --> Query error: Column 'user_id' cannot be null - Invalid query: INSERT INTO `tbl_professional_info` (`user_id`, `heighst_education`, `education_degree`, `specialization`, `university`, `college`, `education_description`, `status`, `created_time`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-29 12:23:37')
ERROR - 2022-03-29 12:23:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:23:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:23:52 --> Query error: Column 'user_id' cannot be null - Invalid query: INSERT INTO `tbl_professional_info` (`user_id`, `heighst_education`, `education_degree`, `specialization`, `university`, `college`, `education_description`, `status`, `created_time`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-29 12:23:52')
ERROR - 2022-03-29 12:24:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:24:18 --> Query error: Column 'user_id' cannot be null - Invalid query: INSERT INTO `tbl_professional_info` (`user_id`, `heighst_education`, `education_degree`, `specialization`, `university`, `college`, `education_description`, `status`, `created_time`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-29 12:24:18')
ERROR - 2022-03-29 12:24:20 --> Query error: Column 'user_id' cannot be null - Invalid query: INSERT INTO `tbl_professional_info` (`user_id`, `heighst_education`, `education_degree`, `specialization`, `university`, `college`, `education_description`, `status`, `created_time`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-29 12:24:20')
ERROR - 2022-03-29 12:24:24 --> Query error: Column 'user_id' cannot be null - Invalid query: INSERT INTO `tbl_professional_info` (`user_id`, `heighst_education`, `education_degree`, `specialization`, `university`, `college`, `education_description`, `status`, `created_time`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-29 12:24:24')
ERROR - 2022-03-29 12:24:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:26:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:26:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:26:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:27:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:27:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:29:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:30:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:30:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:31:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:31:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:31:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:33:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:33:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:33:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:34:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:34:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:34:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:34:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:35:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:36:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:36:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:36:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:37:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:37:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:38:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:38:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:39:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:39:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:39:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:40:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:41:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:41:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:42:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:43:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:43:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:43:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:45:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:46:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:46:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:47:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:47:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:48:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:48:45 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 12:49:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:50:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:52:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:53:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:53:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:54:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:55:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:56:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:57:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:57:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 12:58:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:00:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:00:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:00:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:00:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:00:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:00:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:01:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:02:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:03:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:04:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:06:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:06:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:07:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:08:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:08:17 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:08:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:08:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:09:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:11:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:11:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:12:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:12:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:12:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:12:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:12:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:13:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:13:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:13:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:13:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:13:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:13:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:14:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:14:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:15:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:15:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:15:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:17:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:17:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:17:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:17:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:17:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:19:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:19:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:19:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:19:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:20:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:20:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:20:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:20:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:20:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:20:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:20:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:20:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:21:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:21:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:22:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:23:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:23:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:23:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:24:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:24:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:24:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:25:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:25:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:27:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:27:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:28:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:29:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:30:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:30:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:31:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:31:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:32:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:32:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:34:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:35:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:35:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:35:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:36:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:36:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:37:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:37:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:37:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '<script>alert("xssvuln")</script> AND <script>alert("xssvuln") < `/script>`
AND ' at line 8 - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = '<script>alert(\"xssvuln\")</script>'
AND `p`.`age` BETWEEN <script>alert("xssvuln")</script> AND <script>alert("xssvuln") < `/script>`
AND `r`.`religion` = '<script>alert(\"xssvuln\")</script>'
AND `r`.`mother_tounge` = '<script>alert(\"xssvuln\")</script>'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2022-03-29 13:38:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:39:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:39:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:39:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:40:17 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:40:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:40:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:40:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:41:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:41:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:41:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:42:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:43:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:43:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:43:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:44:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:44:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:44:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:44:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:44:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:45:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:45:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:45:45 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:45:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:45:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:45:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:46:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:46:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:46:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:47:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:49:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:50:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:50:22 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 13:50:22')
ERROR - 2022-03-29 13:51:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:52:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 13:52:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:52:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:53:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:55:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:55:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:55:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:56:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:56:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:56:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:57:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:57:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:57:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:57:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:59:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:00:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:01:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:02:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:02:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:02:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:03:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:03:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:05:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:06:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:06:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:08:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:09:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:09:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:11:05 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 14:11:05')
ERROR - 2022-03-29 14:11:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:12:18 --> To Id is not available for User - 322
ERROR - 2022-03-29 14:13:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:16:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home4/cowcdrmy/public_html/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2022-03-29 14:16:03 --> Severity: error --> Exception: Unable to connect to the database. /home4/cowcdrmy/public_html/system/database/DB_driver.php 433
ERROR - 2022-03-29 14:17:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:17:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:18:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:18:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:20:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:20:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:20:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:21:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:21:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:21:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:22:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:22:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:22:36 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 14:22:36')
ERROR - 2022-03-29 14:23:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:25:10 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 14:25:10')
ERROR - 2022-03-29 14:25:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:25:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:26:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:26:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:26:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:26:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:27:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:27:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:28:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:28:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:28:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:28:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:29:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:30:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:30:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:30:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:30:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 14:30:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:30:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:30:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:31:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:31:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:32:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:33:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:33:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:33:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:34:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:34:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:35:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:36:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:37:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:37:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:37:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:37:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:37:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:38:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:39:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:39:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:39:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:41:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:41:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:42:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:42:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:43:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:43:49 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 14:43:49')
ERROR - 2022-03-29 14:44:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:45:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:45:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:47:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:47:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:48:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:48:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:48:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:49:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:50:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:51:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:51:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:51:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:52:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:54:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:54:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:54:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:56:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:56:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:58:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:59:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:59:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:00:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:00:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:00:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:00:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:00:51 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:01:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:01:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:01:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:01:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:02:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:02:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:03:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:04:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:05:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:06:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:07:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:08:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:08:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:09:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:11:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:11:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:11:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:11:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:11:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:12:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:13:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:14:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:14:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:15:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:15:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:17:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:17:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:19:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:19:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:20:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:20:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:20:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:20:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:21:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:22:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:22:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:22:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:23:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:24:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:24:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:25:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:28 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 15:26:28')
ERROR - 2022-03-29 15:26:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:26:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:27:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:28:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:29:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:29:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:29:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:30:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:30:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:31:24 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 15:31:24')
ERROR - 2022-03-29 15:31:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:31:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:32:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:32:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:32:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:32:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:33:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:33:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:33:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:34:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:36:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:36:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:36:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:37:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:37:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:38:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:38:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:38:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:39:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:40:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:41:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:42:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:42:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:42:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:43:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:44:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:44:07 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 15:44:07')
ERROR - 2022-03-29 15:45:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:46:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:46:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:47:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:48:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:48:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:49:19 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 15:49:19')
ERROR - 2022-03-29 15:49:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:49:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:49:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:51:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:51:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:51:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:51:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:52:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:53:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:53:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 15:53:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:53:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:53:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:54:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:54:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:55:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:55:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:55:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:56:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:00:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:00:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:00:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:01:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:01:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:01:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:03:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:03:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:03:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:04:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:04:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:04:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:04:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:04:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:06:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:07:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:07:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:07:56 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 16:07:56')
ERROR - 2022-03-29 16:08:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:10:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:11:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:11:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:13:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:14:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:14:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:14:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:14:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:16:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:18:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:18:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:18:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:18:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:18:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:20:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:20:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:20:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:20:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:22:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:22:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:24:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:25:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:27:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:28:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:29:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:29:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:32:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:32:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:32:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:33:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:33:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:34:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:34:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:34:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:34:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:35:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:35:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 16:36:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:37:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:37:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:38:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:38:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:39:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:40:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:40:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:40:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:41:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:42:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:42:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:43:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:44:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:44:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:45:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:46:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:46:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:48:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:49:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:49:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:49:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:49:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:50:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:51:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:51:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:52:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:52:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:52:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:53:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:53:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:53:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:54:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:54:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:54:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:55:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:55:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:55:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 16:55:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:56:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:56:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:56:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:56:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:56:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:57:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:57:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:57:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:58:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:58:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:59:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:59:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 16:59:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:00:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:01:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:01:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:02:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:02:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:02:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:02:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:02:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:03:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:03:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:04:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:04:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:04:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:05:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:06:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:06:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:07:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:07:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:07:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:08:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:09:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:09:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:09:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:09:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:09:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:09:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:10:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:10:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:11:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:11:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:12:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:12:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:12:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:13:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:13:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:13:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:14:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:14:44 --> To Id is not available for User - 4338
ERROR - 2022-03-29 17:14:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:15:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:15:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:15:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:15:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:15:18 --> To Id is not available for User - 4338
ERROR - 2022-03-29 17:15:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:16:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:16:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:16:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:17:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:18:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:19:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:19:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:19:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:19:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:19:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:20:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:22:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:22:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:23:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:23:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:25:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:25:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:25:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:25:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:26:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:27:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:27:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:29:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:30:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:31:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:33:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:33:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:33:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:34:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:34:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:34:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:34:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:35:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:35:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:35:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:36:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:37:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:37:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:37:50 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 17:38:17 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 17:38:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:38:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:38:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:39:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:39:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:40:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:40:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:40:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:41:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:41:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:41:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:42:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:42:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:42:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:43:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:43:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:43:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:43:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:44:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:44:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:46:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:48:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:48:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:48:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 17:52:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:52:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:54:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:55:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:56:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:57:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:57:25 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 17:57:27 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 17:57:29 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-29 17:57:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:57:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:57:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:58:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:58:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:59:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:59:33 --> To Id is not available for User - 3046
ERROR - 2022-03-29 17:59:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:59:36 --> To Id is not available for User - 3046
ERROR - 2022-03-29 17:59:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:00:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:01:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:01:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:01:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:01:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:02:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:02:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:02:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:03:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:03:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:03:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:04:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:05:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:06:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:06:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:07:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:07:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:09:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:10:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:11:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:12:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:12:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:12:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:12:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:13:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:13:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:14:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:15:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:15:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:15:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:16:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:16:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:17:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:17:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:18:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:19:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:21:05 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3959'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3959")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3959" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3959"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 18:21:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:21:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:22:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:22:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:25:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:25:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:25:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:26:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:26:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:30:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:31:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:32:34 --> To Id is not available for User - 3740
ERROR - 2022-03-29 18:32:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:32:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:32:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:33:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:34:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:34:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:35:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:35:05 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 18:35:05')
ERROR - 2022-03-29 18:35:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:37:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:38:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:39:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:40:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:42:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:42:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:42:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:43:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:43:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:45:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:46:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:47:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:48:12 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 18:48:12')
ERROR - 2022-03-29 18:48:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:50:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:50:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:50:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:51:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:52:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:52:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:54:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:55:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:55:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:56:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:56:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:57:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:57:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:57:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:58:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:58:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:59:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:59:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 18:59:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:00:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:00:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:01:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:02:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:02:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:03:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:04:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:05:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:06:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:06:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:06:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:06:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:06:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:07:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:07:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:07:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:07:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:07:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:08:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:08:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:08:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:08:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:08:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:09:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:09:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:11:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:12:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:12:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:13:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:15:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:16:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:16:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:16:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:17:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:17:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:17:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:17:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:17:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:17:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:18:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:18:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:18:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:18:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:18:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:19:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:19:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:19:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:21:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:21:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:21:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:22:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:22:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:23:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:24:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:24:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:26:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:26:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:27:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:27:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:27:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:27:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:28:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:28:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:28:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:29:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:29:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:29:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:29:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:30:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:30:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:31:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:31:42 --> Query error: Column 'phone' cannot be null - Invalid query: INSERT INTO `tbl_contactus` (`name`, `email`, `phone`, `message`, `contacted_date_time`) VALUES ('Tabetha Alcosiba', 'VonPilant@gmail.com', NULL, 'Submit your site to over 1000 directories all with one click here> https://bit.ly/submit-your-site-here', '2022-03-29 19:31:42')
ERROR - 2022-03-29 19:31:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:31:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:32:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:32:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:32:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:32:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:33:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:33:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:33:21 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 19:33:21')
ERROR - 2022-03-29 19:33:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:33:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 19:34:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:34:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:34:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:34:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:35:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:35:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:35:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:35:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:36:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:36:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:37:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:37:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:37:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:38:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:38:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:38:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:38:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:38:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:39:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:39:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:39:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:39:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:40:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:41:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:41:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:41:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:42:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:42:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:42:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:42:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:43:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:43:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:43:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:44:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:45:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:45:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:45:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:46:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:47:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:47:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:47:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:48:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:48:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:49:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:49:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:49:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:51:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:53:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:53:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:57:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 19:58:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:00:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:00:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:01:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:02:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:03:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:03:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:04:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:04:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:05:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:06:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:07:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:07:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:08:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:08:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:08:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:09:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:10:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:11:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:12:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:13:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:13:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:13:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:13:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:14:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:14:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:14:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:14:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:15:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:15:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:16:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:16:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:16:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:16:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:16:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:17:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:17:30 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 20:17:30')
ERROR - 2022-03-29 20:18:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:20:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:22:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:23:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:23:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:25:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-29 20:25:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:25:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:25:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:26:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:27:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:27:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:28:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:29:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:30:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:30:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:31:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:31:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:31:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:31:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:31:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:32:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:32:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:32:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:32:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:32:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:32:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:33:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:34:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:34:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:34:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:34:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:34:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:35:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:35:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:35:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:36:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:36:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:36:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:36:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:36:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:36:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:39:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:40:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:40:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:40:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:40:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:41:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:42:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:42:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:44:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:44:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:45:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:45:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:47:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:47:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:47:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:48:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:48:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:50:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:50:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:50:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:52:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:52:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:52:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:53:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:53:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:53:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:54:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:54:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:54:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:54:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:54:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:54:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:55:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:55:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:55:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:56:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:56:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:57:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:57:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:57:21 --> To Id is not available for User - 4189
ERROR - 2022-03-29 20:57:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:57:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:57:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 20:59:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:00:02 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:00:18 --> To Id is not available for User - 4189
ERROR - 2022-03-29 21:00:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:01:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:01:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:01:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:01:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:02:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:02:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:02:26 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3581'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3581")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3581" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3581"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-29 21:02:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:02:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:03:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:03:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:04:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:04:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:05:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:05:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:07:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:07:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:07:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:07:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:07:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:08:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:08:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:08:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:08:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:09:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:09:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:10:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:10:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:10:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:11:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:11:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:11:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:11:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:11:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:12:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:13:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:13:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:14:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:16:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:16:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:16:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:16:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:17:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:17:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:17:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:18:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:19:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:19:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:21:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:21:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:21:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:21:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:22:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:22:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:22:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:22:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:23:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:23:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:23:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:23:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:23:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:23:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:24:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:25:19 --> To Id is not available for User - 3740
ERROR - 2022-03-29 21:25:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:26:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:27:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:27:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:28:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:29:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:29:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:30:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:31:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:31:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:31:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:32:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:32:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:32:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:32:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:33:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:34:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:34:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:35:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:36:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:37:24 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:37:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:37:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:37:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:38:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:38:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:38:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:39:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:39:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:39:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:39:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:39:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:39:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:40:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:41:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:41:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:41:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:42:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:42:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:42:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:42:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:43:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:43:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:45:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:45:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:48:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:49:10 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:49:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:49:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:50:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:50:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:51:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:51:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:52:13 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:52:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:52:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:53:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:53:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:54:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:54:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:54:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:55:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:56:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:56:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:57:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:58:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:59:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:59:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:00:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:00:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:01:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:01:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:01:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:02:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:02:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:02:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:03:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:05:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:05:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:08:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:08:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:08:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:09:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:11:18 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:11:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:11:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:12:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:12:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:12:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:14:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:14:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:14:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:14:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:15:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:15:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:15:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:15:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:16:21 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 22:16:21')
ERROR - 2022-03-29 22:16:28 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 22:16:28')
ERROR - 2022-03-29 22:17:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:17:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:18:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:20:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:20:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:20:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:21:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:21:38 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:23:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:23:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:23:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:24:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:25:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:25:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:26:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:27:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:27:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:27:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:27:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:28:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:28:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:28:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:29:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:29:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:30:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:30:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:30:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:31:12 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:31:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:32:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:33:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:33:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:33:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:34:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:34:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:34:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:34:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:35:15 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:35:55 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:36:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:36:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:36:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:37:08 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:37:22 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:37:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:38:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:38:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:39:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:39:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:39:35 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:40:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:42:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:43:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:43:37 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:43:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:44:29 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:44:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:45:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:45:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:46:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:46:19 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:46:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:47:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:47:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:47:50 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:48:11 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:48:23 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:48:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:49:00 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:49:03 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:49:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:49:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:50:36 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:50:47 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:52:51 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:53:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:53:45 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:40 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:41 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:55:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:56:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:57:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:57:46 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:58:17 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:58:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:59:52 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:00:21 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:02:14 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:03:28 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:05:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:08:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:10:20 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:15:07 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:17:34 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:21:58 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:23:09 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:28:16 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:28:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:29:05 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:32:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:33:33 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-29 23:33:33')
ERROR - 2022-03-29 23:34:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:35:27 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:35:59 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:37:53 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:40:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:41:33 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:42:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:42:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:50:32 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:53:30 --> 404 Page Not Found: /index
