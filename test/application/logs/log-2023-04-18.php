<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-18 00:00:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:02:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:04:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:13:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:14:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:14:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:15:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:15:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:15:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:15:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:16:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:16:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:16:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:16:57 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-18 00:16:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:17:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:17:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:17:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:17:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:18:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:19:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:23:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:24:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:24:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:24:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:25:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:25:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:25:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:27:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:34:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 00:53:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:12:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:23:41 --> To Id is not available for User - 2234
ERROR - 2023-04-18 01:23:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:33:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:34:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:34:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:34:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:37:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:38:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:39:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:39:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:43:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:46:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 01:48:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 02:05:54 --> Query error: Expression #32 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_profileview_on`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.*, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`gothram`, `r`.`star`, `r`.`raasi`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `powner`.`profileowner`, `adm`.`id` as `rm_id`, `adm`.`username`, `adm`.`name` as `rm_name`, `adm`.`email` as `rm_email`, `adm`.`phone_no` as `rm_phone`, `svi`.`shortlist_status`, `svi`.`ignore_status`, `msi`.`kv_msi_onresstatus`
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_profileview_on`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `powner` ON `p`.`id` = `powner`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `powner`.`profileowner` = `adm`.`id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `kv_mysideinterests` as `msi` ON `p`.`id` = `msi`.`kv_msi_interested_on`
WHERE `kv_userfkid` IS NULL
AND `p`.`status` = 1
GROUP BY `kv_profileview_on`
ORDER BY `kv_profileview_id` DESC
ERROR - 2023-04-18 02:05:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 02:27:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 02:43:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 02:46:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 03:01:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 03:07:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:05:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:21:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:21:43 --> To Id is not available for User - 6115
ERROR - 2023-04-18 04:21:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:21:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:22:34 --> To Id is not available for User - 6115
ERROR - 2023-04-18 04:22:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:24:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 04:24:40 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6115'
ERROR - 2023-04-18 04:24:54 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6115'
ERROR - 2023-04-18 04:25:20 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6115'
ERROR - 2023-04-18 04:25:33 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6115'
ERROR - 2023-04-18 05:06:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:23:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:27:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:27:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:27:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:28:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:36:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:38:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:39:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:46:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:53:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:53:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:54:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:55:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:55:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:55:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:56:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:56:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:57:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:58:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:58:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 05:58:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:00:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:02:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:02:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:03:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:10:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:10:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:14:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:19:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:21:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:25:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:26:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:31:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:33:29 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='3789'
ERROR - 2023-04-18 06:33:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:33:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:33:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:33:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:33:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:33:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:34:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:34:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:34:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:34:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:34:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:47:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:47:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:47:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:48:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:48:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:48:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:50:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:50:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:50:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:51:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:51:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:51:25 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='3789'
ERROR - 2023-04-18 06:52:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:56:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:56:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 06:57:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:06:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:06:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:06:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:07:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:07:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:07:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:07:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:07:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:13:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:13:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:15:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:16:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:16:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:16:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:17:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:18:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:18:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:19:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:20:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:20:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:20:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:20:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:20:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:20:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:22:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:22:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:22:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:22:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:22:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:23:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:23:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:23:48 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='2602'
ERROR - 2023-04-18 07:23:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:24:05 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='2602'
ERROR - 2023-04-18 07:24:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:24:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:24:37 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_profilefkid` = '2602'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 07:24:53 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 07:24:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:25:10 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 07:25:15 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 07:25:27 --> Query error: Expression #32 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_profileview_on`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.*, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`gothram`, `r`.`star`, `r`.`raasi`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `powner`.`profileowner`, `adm`.`id` as `rm_id`, `adm`.`username`, `adm`.`name` as `rm_name`, `adm`.`email` as `rm_email`, `adm`.`phone_no` as `rm_phone`, `svi`.`shortlist_status`, `svi`.`ignore_status`, `msi`.`kv_msi_onresstatus`
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_profileview_on`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `powner` ON `p`.`id` = `powner`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `powner`.`profileowner` = `adm`.`id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `kv_mysideinterests` as `msi` ON `p`.`id` = `msi`.`kv_msi_interested_on`
WHERE `kv_userfkid` IS NULL
AND `p`.`status` = 1
GROUP BY `kv_profileview_on`
ORDER BY `kv_profileview_id` DESC
ERROR - 2023-04-18 07:25:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:26:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:27:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:27:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:27:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:27:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:27:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:29:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:31:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:31:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:32:01 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 07:32:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:32:13 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 07:32:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:33:08 --> To Id is not available for User - 6572
ERROR - 2023-04-18 07:33:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:35:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:41:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:46:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:46:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:46:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:46:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:46:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:47:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:47:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:52:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:52:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:55:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:58:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:58:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:59:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 07:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:03:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:03:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:06:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:07:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:09:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:09:30 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:09:32 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:09:33 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:09:33 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:09:41 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:09:50 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:10:13 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:10:24 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:10:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:11:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:11:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:11:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:12:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:13:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:13:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:15:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:15:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:16:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:16:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:16:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:18:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:19:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:19:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:19:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:19:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:20:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:20:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:28:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:32:26 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='4843'
ERROR - 2023-04-18 08:32:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:35:40 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='4843'
ERROR - 2023-04-18 08:35:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:38:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:39:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:41:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:42:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:42:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:42:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:44:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:45:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:46:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:49:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:55:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:57:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:57:52 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:57:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:58:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:58:21 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:58:30 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 08:58:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:58:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:58:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 08:59:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:02:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:02:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:03:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:03:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:04:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:04:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:04:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:05:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:06:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:06:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:07:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:07:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:07:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:07:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:08:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:08:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:09:26 --> To Id is not available for User - º
ERROR - 2023-04-18 09:09:44 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_profilefkid` = '6500'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 09:09:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:09:50 --> To Id is not available for User - º
ERROR - 2023-04-18 09:09:57 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6500'
ERROR - 2023-04-18 09:09:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:09:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:09:59 --> To Id is not available for User - º
ERROR - 2023-04-18 09:10:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:04 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_profilefkid` = '6500'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 09:10:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:08 --> To Id is not available for User - º
ERROR - 2023-04-18 09:10:12 --> To Id is not available for User - º
ERROR - 2023-04-18 09:10:13 --> To Id is not available for User - º
ERROR - 2023-04-18 09:10:19 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6500'
ERROR - 2023-04-18 09:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:10:30 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_profilefkid` = '6500'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 09:11:04 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='6500'
ERROR - 2023-04-18 09:11:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:11:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:11:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:11:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:11:38 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_profilefkid` = '6500'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 09:11:44 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_profilefkid` = '6500'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 09:11:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:12:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:13:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:13:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:13:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:15:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:18:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:19:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:20:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:20:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:20:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:20:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:20:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:20:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:21:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:21:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:21:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:21:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:21:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:21:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:22:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:22:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:23:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:23:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:23:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:24:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:24:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:25:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:29:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:30:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:31:22 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:31:25 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:31:33 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:31:35 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:31:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:31:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:31:44 --> To Id is not available for User - º
ERROR - 2023-04-18 09:31:47 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:31:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:32:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:32:03 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:32:05 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:32:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:32:44 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='5883'
ERROR - 2023-04-18 09:33:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:33:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:33:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:37:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:39:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:40:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:41:24 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:41:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:41:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:41:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:42:16 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:42:53 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:42:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:42:57 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:43:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:43:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:43:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:43:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:44:07 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:44:53 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:44:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:45:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:45:04 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:45:11 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:45:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:45:32 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:45:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:45:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:45:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:46:59 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 09:47:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:48:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:48:26 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 09:48:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:50:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:50:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:50:52 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 09:50:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:50:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:51:33 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:51:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:51:42 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 09:51:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:51:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:52:02 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 09:52:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:52:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:52:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:52:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:52:54 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:52:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:53:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:53:32 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:53:35 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:53:46 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:53:48 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:53:57 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8019850777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 09:54:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:55:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:55:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:55:27 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:56:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:57:53 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:58:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:58:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:58:43 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:58:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:58:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:58:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:58:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:58:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:59:19 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:59:41 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 09:59:43 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:59:45 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 09:59:49 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:59:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 09:59:50 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 09:59:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:00:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:00:56 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:01:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:01:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:01:51 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8019850777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:03:07 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:03:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:03:11 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:03:36 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:03:37 --> Query error: Expression #32 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_profileview_on`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.*, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`gothram`, `r`.`star`, `r`.`raasi`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `powner`.`profileowner`, `adm`.`id` as `rm_id`, `adm`.`username`, `adm`.`name` as `rm_name`, `adm`.`email` as `rm_email`, `adm`.`phone_no` as `rm_phone`, `svi`.`shortlist_status`, `svi`.`ignore_status`, `msi`.`kv_msi_onresstatus`
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_profileview_on`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `powner` ON `p`.`id` = `powner`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `powner`.`profileowner` = `adm`.`id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `kv_mysideinterests` as `msi` ON `p`.`id` = `msi`.`kv_msi_interested_on`
WHERE `kv_userfkid` = '1716'
AND `p`.`status` = 1
AND `v`.`kv_profileview_on` NOT IN('6467')
AND `v`.`kv_profileview_on` NOT IN('434', '1348', '6567', '6564', '6543')
GROUP BY `kv_profileview_on`
ORDER BY `kv_profileview_id` DESC
ERROR - 2023-04-18 10:03:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:04:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:04:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:04:25 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:04:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:04:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:04:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:04:45 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8019850777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:05:01 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:05:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:05:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:05:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:05:11 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:05:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:06:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:06:22 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:06:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:06:37 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:06:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:06:53 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:06:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:06:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:07:33 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:07:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:07:36 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:07:38 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:07:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:07:43 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:07:46 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:08:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:10:56 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:11:05 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:11:58 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8297256969'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:13:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:13:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:14:41 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_interested_on` NOT IN('6467')
AND `v`.`kv_msi_profilefkid` = '1716'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 10:14:57 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:15:01 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:15:02 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:16:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:06 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:06 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:06 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:06 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:11 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:11 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:12 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:12 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:16:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:16:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:17:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:17:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:17:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:17:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:17:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:17:29 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:17:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:18:47 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:18:51 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:20:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:20:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:21:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:21:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:21:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:22:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:23:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:23:38 --> To Id is not available for User - 6303
ERROR - 2023-04-18 10:23:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:24:11 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:24:14 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:24:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:24:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:24:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:25:50 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:25:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:26:31 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8297256969'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:26:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:27:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:27:24 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '157'
AND `r`.`height_cm` <= '165'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '26'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '30'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:27:44 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:28:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_interested_on` NOT IN('6467')
AND `v`.`kv_msi_profilefkid` = '1716'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 10:28:10 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_interested_on` NOT IN('6467')
AND `v`.`kv_msi_profilefkid` = '1716'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 10:28:16 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:28:31 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:28:35 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:29:01 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:29:22 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8297256969'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:29:47 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:31:47 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:32:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:32:13 --> Query error: In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'kammavaari_marriage.tbl_profilebattery.photo'; this is incompatible with sql_mode=only_full_group_by - Invalid query: select SUM(IFNULL(`basicdetails`, 0) + IFNULL(`religion`, 0) + IFNULL(`edu_prof`, 0) + IFNULL(`parents`, 0) + IFNULL(`Siblings`, 0) + IFNULL(`photo`, 0)) as total,photo,basicdetails,religion,edu_prof,parents,Siblings from tbl_profilebattery where user_id='1716'
ERROR - 2023-04-18 10:32:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:32:50 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_interested_on` NOT IN('6467')
AND `v`.`kv_msi_profilefkid` = '1716'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 10:33:02 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.v.kv_msi_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
FROM `kv_mysideinterests` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `p`.`id`=`v`.`kv_msi_interested_on`
LEFT JOIN `tbl_religion_info` as `r` ON `v`.`kv_msi_interested_on`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `v`.`kv_msi_interested_on`=`e`.`user_id`
LEFT JOIN `MS_shortlist_viewedd_ignored` as `svi` ON `p`.`id` = `svi`.`to_msid`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`status` = 1
AND `v`.`kv_msi_interested_on` NOT IN('6467')
AND `v`.`kv_msi_profilefkid` = '1716'
AND `u`.`ismain` = 1
AND `kv_msi_onresstatus` = 'oneside_accepted'
GROUP BY `v`.`kv_msi_interested_on`
ORDER BY `v`.`kv_msi_created_date` DESC
ERROR - 2023-04-18 10:33:26 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:33:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:34:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:35:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:36:18 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:36:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:36:45 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:36:47 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:36:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:37:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:38:00 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:38:21 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:38:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:38:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:38:43 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:38:46 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '8297256969'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:39:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:39:42 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '157'
AND `r`.`height_cm` <= '165'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '26'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '30'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:40:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:40:16 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '157'
AND `r`.`height_cm` <= '165'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '26'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '30'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:41:03 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:41:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:42:19 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`mobile` = '9160513777'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:42:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:42:38 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:42:48 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:43:19 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:44:04 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:45:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:45:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:46:01 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:46:16 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:46:32 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:47:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:47:28 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:47:31 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:49:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:49:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:49:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:49:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:49:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:50:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:50:30 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:50:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:51:09 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:51:12 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:51:13 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:51:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:51:33 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:51:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:51:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:52:01 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:52:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:52:05 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:52:14 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:52:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:53:04 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '157'
AND `r`.`height_cm` <= '165'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '26'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '30'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:53:04 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:53:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:53:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:53:28 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:53:34 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:53:48 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:54:03 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:54:06 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:54:09 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '157'
AND `r`.`height_cm` <= '165'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '26'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '30'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:54:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:54:35 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:54:39 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:54:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:54:55 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:55:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:55:47 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:56:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:56:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:56:36 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:56:39 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:56:40 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:56:46 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:56:46 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:56:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:57:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:57:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:57:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:57:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:57:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:57:52 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 10:58:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:59:01 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 10:59:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:59:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:59:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 10:59:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:00:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:00:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:00:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:00:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:00:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:00:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:02:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:02:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:03:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:03:41 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:04:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:04:46 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:04:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:05:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:05:21 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:05:21 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:05:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:05:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:06:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:06:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:06:30 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:06:31 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:06:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:07:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:07:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:07:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:08:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:08:15 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:09:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:09:55 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:10:07 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`height_cm` >= '157'
AND `r`.`height_cm` <= '165'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '26'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '30'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India')
AND `p`.`status` IN('1')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:10:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:11:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:12:18 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:12:20 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:12:22 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:12:25 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:13:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:13:09 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:14:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:15:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:15:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:15:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:16:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:16:17 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:16:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:17:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:17:36 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:17:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:17:41 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:17:42 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:17:42 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:17:43 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:17:59 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`gender` = 'male'
AND `r`.`height_cm` >= '152'
AND `r`.`height_cm` <= '183'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) >= '18'
AND (DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),p.dob)), '%Y')+0) <= '40'
AND `r`.`marital_status` IN('never_married')
AND `r`.`religion` IN('Hindu')
AND `r`.`mother_tounge` IN('Telugu')
AND `r`.`caste` IN('Kamma')
AND `e`.`country` IN('India', 'USA', 'Canada', 'Australia', 'UK', 'East Africa', 'United Arab Emirates', 'Nigeria', 'Srilanka', 'West Indies', 'Europe', 'Abu Dhabi', 'Ukraine', 'South Korea', 'Maldives', 'Thailand', 'Chaina', 'Switzerland', 'Sweden', 'NewZealand', 'Mexico', 'Malaysia', 'Kenya', 'Jamaica', 'Germany', 'Kuwait', 'South Africa', 'Saudi Arabia', 'Singapore')
AND `p`.`status` IN('1')
AND `mprosetting`.`profileowner` IN('15')
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:18:08 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:18:11 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2023-04-18 11:18:25 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%pottlu%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:19:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:19:51 --> To Id is not available for User - 849
ERROR - 2023-04-18 11:19:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:36 --> To Id is not available for User - 849
ERROR - 2023-04-18 11:20:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:20:50 --> Query error: Expression #12 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, DATE_FORMAT(FROM_DAYS(DATEDIFF(now(), p.dob)), '%Y')+0 as cur_age, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `ms_usertype`, `prime`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`last_name` LIKE '%vemuri%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `mprosetting`.`ms_usertype` IN('regular', 'confidential', 'superconfidential', 'elite')
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2023-04-18 11:21:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:21:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:21:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:21:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:21:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:22:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:22:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:22:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:22:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:23:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:23:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:23:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:23:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:23:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:24:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:24:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:24:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:24:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:24:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:24:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:25:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:25:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:25:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:25:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:26:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:26:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:26:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:26:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:26:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:27:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:28:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:28:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:29:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:29:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:30:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:31:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:33:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:33:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:33:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:35:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:36:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:37:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:37:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:38:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:39:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:40:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:41:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:41:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:41:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:41:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:42:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:42:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:42:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:42:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:43:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:44:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:45:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:46:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:46:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:46:43 --> To Id is not available for User - 6667
ERROR - 2023-04-18 11:46:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:46:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:47:02 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 11:47:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:47:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:50:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:50:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:50:41 --> To Id is not available for User - 6424
ERROR - 2023-04-18 11:50:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:51:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:52:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:53:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:54:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:54:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:54:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:55:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:55:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:56:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:56:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:56:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:58:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 11:59:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:00:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:00:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:01:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:01:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:01:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:01:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:02:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:02:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:03:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:03:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:03:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:04:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:04:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:05:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:05:13 --> To Id is not available for User - 4751
ERROR - 2023-04-18 12:05:29 --> To Id is not available for User - 5162
ERROR - 2023-04-18 12:06:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:06:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:06:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:07:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:07:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:07:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:07:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:08:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:08:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:08:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:08:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:08:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:09:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:09:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:10:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:10:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:10:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:10:30 --> To Id is not available for User - 5653
ERROR - 2023-04-18 12:11:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:11:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:11:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:12:46 --> To Id is not available for User - 5653
ERROR - 2023-04-18 12:14:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:15:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:15:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:15:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:15:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:16:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:16:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:16:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:17:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:19:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:19:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:20:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:20:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:20:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:20:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:20:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:20:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:21:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:22:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:23:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:23:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:23:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:24:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:37 --> To Id is not available for User - 849
ERROR - 2023-04-18 12:25:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:47 --> To Id is not available for User - 849
ERROR - 2023-04-18 12:25:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:25:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:26:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:26:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:26:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:26:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:26:49 --> To Id is not available for User - 849
ERROR - 2023-04-18 12:26:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:26:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:27:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:28:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:28:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:28:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:29:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:29:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:29:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:29:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:29:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:29:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:30:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:30:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:30:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:30:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:30:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:30:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:31:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:31:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:31:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:31:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:32:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:33:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:34:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:34:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:34:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:14 --> To Id is not available for User - 6424
ERROR - 2023-04-18 12:36:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:36:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:37:01 --> To Id is not available for User - 5467
ERROR - 2023-04-18 12:37:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:37:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:37:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:37:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:37:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:37:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:38:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:38:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:38:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:39:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:39:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:39:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:39:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:39:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:40:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:40:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:40:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:40:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:41:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:41:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:42:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:42:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:44:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:44:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:44:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:44:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:45:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:45:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:46:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:46:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:46:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:46:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:46:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:46:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:47:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:47:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:47:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:47:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:47:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:48:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:49:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:49:30 --> To Id is not available for User - 6862
ERROR - 2023-04-18 12:49:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:49:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:50:02 --> To Id is not available for User - 6862
ERROR - 2023-04-18 12:50:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:50:39 --> To Id is not available for User - 6411
ERROR - 2023-04-18 12:50:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:50:52 --> To Id is not available for User - 6411
ERROR - 2023-04-18 12:50:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:50:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:52:01 --> To Id is not available for User - 6411
ERROR - 2023-04-18 12:52:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:52:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:52:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:52:25 --> To Id is not available for User - 6411
ERROR - 2023-04-18 12:52:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:53:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:53:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:54:55 --> To Id is not available for User - 6411
ERROR - 2023-04-18 12:54:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:55:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:56:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:56:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:56:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:56:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:57:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:57:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:57:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:57:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:58:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:58:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 12:59:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:00:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:00:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:01:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:02:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:02:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:02:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:02:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:02:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:03:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:04:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:06:03 --> To Id is not available for User - º
ERROR - 2023-04-18 13:06:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:06:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2023-04-18 13:06:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:08:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:10:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:10:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:11:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:12:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:12:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:12:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:13:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:13:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:13:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:13:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:13:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:14:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:14:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:17:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:18:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:19:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:20:22 --> To Id is not available for User - 6500
ERROR - 2023-04-18 13:20:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:20:47 --> To Id is not available for User - 6500
ERROR - 2023-04-18 13:20:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:21:31 --> To Id is not available for User - 6500
ERROR - 2023-04-18 13:21:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:21:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:22:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:22:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:22:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:23:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:24:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:24:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:24:47 --> To Id is not available for User - 5467
ERROR - 2023-04-18 13:24:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:27:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:29:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:31:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:31:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:32:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:33:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:34:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:35:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:36:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:36:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:37:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:37:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:37:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:38:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:38:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:39:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:39:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:40:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:40:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:40:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:40:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:40:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:40:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:41:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:41:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:41:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:41:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:42:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:43:35 --> To Id is not available for User - 6862
ERROR - 2023-04-18 13:44:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:44:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:44:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:46:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:46:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:47:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:50:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:50:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:50:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:51:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:51:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:51:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:52:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:53:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:55:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:55:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:56:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:57:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:58:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:58:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 13:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:00:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:00:51 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 14:00:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:00:57 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 14:01:12 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 14:01:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:01:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:02:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:03:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:03:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:05:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:06:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:06:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:07:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:07:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:07:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:07:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:08:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:09:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:09:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:10:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:11:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:12:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:12:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:12:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:12:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:13:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:13:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:13:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:13:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:13:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:14:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:14:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:14:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:15:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:15:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:15:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:15:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:15:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:16:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:17:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:17:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:17:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:18:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:20:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:20:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:21:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:21:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:21:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:21:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:23:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:23:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:24:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:25:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:26:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:26:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:26:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:27:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:27:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:27:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:27:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:27:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:27:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:29:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:29:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:29:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:31:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:31:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:34:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:35:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:38:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:39:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:41:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:42:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:42:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:42:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:43:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:43:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:43:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:44:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:44:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:45:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:46:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:47:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:49:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:50:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:51:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:51:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:52:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:54:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:54:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:54:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:55:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:55:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:55:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:56:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:57:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:57:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:58:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:59:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:59:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:59:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 14:59:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:00:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:00:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:01:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:01:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:01:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:02:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:02:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:02:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:03:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:03:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:03:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:04:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:04:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:04:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:05:45 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:06:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:07:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:08:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:09:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:09:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:09:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:09:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:10:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:11:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:11:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:12:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:13:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:14:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:14:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:14:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:15:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:15:11 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:15:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:15:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:15:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:15:21 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:15:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:15:48 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:16:11 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:18:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:18:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:18:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:18:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:19:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:19:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:19:33 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:19:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:19:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:19:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:20:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:21:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:21:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:22:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:22:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:22:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:23:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:23:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:23:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:23:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:24:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:24:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:24:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:24:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:25:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:26:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:26:46 --> To Id is not available for User - 5121
ERROR - 2023-04-18 15:26:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:27:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:27:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:28:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:28:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:28:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:28:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:29:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:30:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:30:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:30:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:31:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:31:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:31:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:31:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:33:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:33:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:33:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:34:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:35:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:35:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:35:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:35:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:36:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:36:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:37:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:38:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:39:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:41:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:42:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:42:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:43:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:43:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:44:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:44:09 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:44:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:44:44 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 15:44:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:45:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:45:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:47:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:47:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:47:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:48:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:49:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:49:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:49:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:50:21 --> To Id is not available for User - 5121
ERROR - 2023-04-18 15:50:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:51:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:51:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:52:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:52:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:53:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:54:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:54:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:55:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:55:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:55:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:55:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:56:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:56:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:57:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:57:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:57:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:57:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:58:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:58:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:58:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 15:59:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:00:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:00:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:00:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:00:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:00:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:01:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:02:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:02:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:02:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:03:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:03:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:03:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:03:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:04:26 --> To Id is not available for User - 4781
ERROR - 2023-04-18 16:04:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:04:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:05:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:05:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:05:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:06:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:07:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:07:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:07:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:07:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:08:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:08:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:08:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:08:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:08:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:08:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:09:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:10:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:10:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:11:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:12:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:12:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:12:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:12:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:12:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:13:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:14:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:15:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:15:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:16:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:16:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:17:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:17:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:17:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:20:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:20:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:20:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:20:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:20:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:20:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:21:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:21:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:22:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:22:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:22:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:22:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:23:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:23:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:24:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:24:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:25:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:25:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:25:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:26:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:26:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:26:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:27:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:28:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:29:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:29:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:29:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:29:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:30:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:30:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:30:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:31:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:31:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:32:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:33:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:33:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:33:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:33:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:34:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:35:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:36:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:36:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:36:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:37:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:37:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:37:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:37:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:37:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:37:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:38:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:38:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:38:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:38:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:38:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:39:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:39:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:39:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:40:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:40:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:40:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:40:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:40:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:41:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:41:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:41:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:41:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:41:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:42:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:43:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:43:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:43:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:43:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:43:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:44:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:45:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:45:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:46:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:46:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:46:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:46:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:46:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:47:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:47:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:47:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:47:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:47:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:47:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:48:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:48:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:48:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:48:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:49:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:49:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:49:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:49:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:50:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:50:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:50:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:50:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:50:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:50:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:51:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:51:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:52:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:52:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:52:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:53:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:53:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:53:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:54:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:55:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:55:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:55:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:55:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:56:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:56:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:56:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:56:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:56:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:57:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:58:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:59:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:59:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 16:59:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:00:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:00:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:00:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:01:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:01:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:01:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:01:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:02:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:02:48 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-18 17:02:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:02:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:02:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:03:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:03:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:03:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:03:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:03:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:03:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:04:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:05:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:05:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:07:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:07:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:08:31 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-18 17:08:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:10:02 --> To Id is not available for User - 6064
ERROR - 2023-04-18 17:10:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:10:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:10:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:11:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:11:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:11:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:11:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:11:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:12:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:12:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:13:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:13:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:13:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:13:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:14:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:15:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:15:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:15:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:15:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:15:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:16:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:16:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:16:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:16:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:17:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:17:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:17:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:18:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:18:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:18:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:19:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:19:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:19:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:20:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:20:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:20:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:20:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:20:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:20:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:21:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:21:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:21:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:22:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:23:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:23:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:23:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:23:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:23:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:24:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:24:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:24:37 --> To Id is not available for User - 6667
ERROR - 2023-04-18 17:24:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:24:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:24:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:25:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:25:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:25:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:25:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:26:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:26:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:26:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:26:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:27:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:27:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:27:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:29:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:30:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:30:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:30:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:30:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:31:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:32:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:32:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:32:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:32:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:33:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:33:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:33:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:33:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:33:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:33:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:34:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:35:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:35:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:35:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:35:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:35:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:35:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:36:13 --> To Id is not available for User - 6064
ERROR - 2023-04-18 17:36:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:36:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:36:32 --> To Id is not available for User - 6064
ERROR - 2023-04-18 17:36:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:36:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:36:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:37:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:37:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:37:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:37:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:38:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:38:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:38:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:38:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:38:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:39:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:40:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:40:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:40:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:40:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:41:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:41:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:41:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:42:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:42:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:42:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:43:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:43:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:43:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:44:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:45:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:45:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:45:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:45:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:45:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:45:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:46:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:46:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:47:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:48:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:48:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:48:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:49:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:50:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:50:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:52:05 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 17:52:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:52:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:52:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:53:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:53:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:54:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:54:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:55:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:56:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:57:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:59:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:59:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 17:59:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:00:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:01:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:01:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:02:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:03:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:04:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:04:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:04:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:05:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:05:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:05:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:06:11 --> To Id is not available for User - 6396
ERROR - 2023-04-18 18:06:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:06:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:06:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:06:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:07:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:08:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:09:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:11:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:13:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:14:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:15:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:15:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:16:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:18:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:19:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:20:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:22:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:22:40 --> To Id is not available for User - 6411
ERROR - 2023-04-18 18:22:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:22:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:22:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:22:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:23:16 --> To Id is not available for User - 6411
ERROR - 2023-04-18 18:23:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:23:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:23:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:23:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:23:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:23:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:24:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:24:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:25:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:25:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:25:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:26:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:26:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:26:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:26:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:26:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:26:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:27:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:28:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:28:07 --> Severity: error --> Exception: Too few arguments to function Admin_search::viewprofile(), 0 passed in /home/kammavaari/public_html/system/core/CodeIgniter.php on line 481 and exactly 1 expected /home/kammavaari/public_html/application/modules/admin/controllers/Admin_search.php 949
ERROR - 2023-04-18 18:28:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:28:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:28:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:28:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:28:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:29:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:29:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:29:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:30:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:30:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:31:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:31:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:31:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:31:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:32:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:32:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:36:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:36:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:40:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:41:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:41:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:41:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:41:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:41:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:42:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:42:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:42:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:43:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:44:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:44:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:45:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:46:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:54:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:54:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:57:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:58:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 18:59:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:01:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:02:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:03:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:04:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:06:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:06:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:07:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:07:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:08:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:11:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:13:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:14:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:14:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:20:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:27:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:28:10 --> To Id is not available for User - 6424
ERROR - 2023-04-18 19:28:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:28:53 --> To Id is not available for User - 6424
ERROR - 2023-04-18 19:29:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:30:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:30:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:31:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:32:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:33:12 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 19:33:13 --> To Id is not available for User - 6424
ERROR - 2023-04-18 19:33:20 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 19:34:24 --> To Id is not available for User - 6424
ERROR - 2023-04-18 19:34:29 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 19:35:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:35:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:36:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:36:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:37:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:38:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:40:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:41:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:41:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:41:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:42:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:42:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:42:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:42:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:42:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:42:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:43:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:44:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:44:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:44:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:44:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:44:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:45:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:47:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:49:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:50:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:50:34 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:50:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:52:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:52:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:52:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:52:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:52:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:53:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:54:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:55:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:55:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:55:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:57:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:59:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:59:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 19:59:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:00:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:01:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:01:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:01:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:03:49 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:06:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:07:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:09:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:09:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:10:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:13:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:13:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:14:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:14:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:14:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:14:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:15:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:15:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:16:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:16:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:16:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:17:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:17:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:17:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:18:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:18:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:19:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:21:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:21:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:22:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:22:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:24:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:25:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:25:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:25:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:26:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:27:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:27:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:27:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:29:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:29:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:29:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:30:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:32:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:32:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:32:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:33:38 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:33:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:33:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:33:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:33:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:39:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:41:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:43:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:43:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:44:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:44:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:45:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:45:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:03 --> To Id is not available for User - 6315
ERROR - 2023-04-18 20:47:04 --> To Id is not available for User - 6315
ERROR - 2023-04-18 20:47:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:47:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:48:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:48:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:48:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:50:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:50:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:51:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:52:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:54:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:55:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:56:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:56:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:58:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:58:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 20:59:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:00:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:01:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:02:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:03:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:03:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:04:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:05:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:07:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:08:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:08:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:08:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:10:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:10:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:11:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:11:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:12:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:12:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:13:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:13:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:13:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:14:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:15:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:16:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:16:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:18:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:20:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:21:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:22:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:23:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:23:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:24:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:24:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:25:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:28:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:28:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:28:56 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 21:29:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:31:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:31:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:32:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:32:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:32:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:33:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:34:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:34:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:34:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:34:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:35:53 --> To Id is not available for User - º
ERROR - 2023-04-18 21:36:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:36:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:36:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:36:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:36:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:36:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:36:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:43:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:44:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:44:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:45:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:46:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:47:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:47:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:50:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:51:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:53:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:54:50 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:57:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:57:14 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-18 21:57:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:57:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:57:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:58:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:58:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:58:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:58:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:59:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:59:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:59:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:59:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:59:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 21:59:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:00:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:00:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:00:58 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:01:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:02:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:02:54 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 22:02:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:03:06 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 22:03:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:03:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:04:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:06:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:06:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:07:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:07:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:08:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:08:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:09:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:09:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:09:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:10:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:10:02 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:10:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:11:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:11:26 --> To Id is not available for User - 6572
ERROR - 2023-04-18 22:11:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:11:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:11:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:12:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:14:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:14:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:15:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:16:37 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:17:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:17:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:18:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:19:52 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:19:58 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 22:20:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:21:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:22:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:22:36 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:23:06 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 22:23:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:27:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:27:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:28:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:28:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:29:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:29:36 --> To Id is not available for User - 5653
ERROR - 2023-04-18 22:29:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:30:00 --> To Id is not available for User - 5653
ERROR - 2023-04-18 22:30:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:33:29 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 22:33:57 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:36:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:36:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:41:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:41:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:41:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:41:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:42:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:42:43 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:43:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:43:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:43:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:43:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:43:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:43:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:44:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:44:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:44:10 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:45:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:45:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:45:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:46:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:46:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:46:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:47:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:47:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:47:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:47:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:48:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:51:41 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 22:52:44 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:53:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:54:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:55:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:55:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:55:54 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:56:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:57:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:57:19 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:57:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:58:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:58:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:59:11 --> To Id is not available for User - 1662
ERROR - 2023-04-18 22:59:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 22:59:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:01:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:01:25 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:01:45 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
FROM `tbl_primary_info` as `p`
INNER JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `p`.`gender` = 'female'
AND `r`.`religion` = 'Hindu'
AND `r`.`mother_tounge` = 'Telugu'
AND `p`.`status` = 1
AND `s`.`elite` = 'no'
AND `s`.`ms_usertype` = 'regular'
AND `u`.`ismain` = 1
AND `u`.`photoname` != ''
AND `u`.`applicationphotopath` != ''
GROUP BY `u`.`MS_id`
ORDER BY `registered_on` DESC
 LIMIT 8
ERROR - 2023-04-18 23:03:22 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:03:33 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:05:18 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:06:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:06:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:07:55 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:08:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:08:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:08:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:08:48 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:09:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:09:47 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:10:24 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:11:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:11:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:12:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:12:26 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:12:28 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:13:03 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:13:11 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:13:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:14:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:14:09 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:14:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:14:20 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:14:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:14:30 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:15:07 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:17:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:27:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:28:59 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:29:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:29:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:29:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:29:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:41:39 --> To Id is not available for User - 6411
ERROR - 2023-04-18 23:41:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:42:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:44:46 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:44:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:45:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:46:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:47:13 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:47:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:48:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:48:39 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:48:42 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:49:00 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:49:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:49:12 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:49:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:49:16 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:50:01 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:51:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:51:08 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:51:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:51:32 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:51:41 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:51:53 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:52:05 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:52:14 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:52:23 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:52:35 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:52:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:52:51 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:53:04 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:53:15 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:53:21 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:53:29 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:06 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:17 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:27 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:31 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:40 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:45 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:54:56 --> 404 Page Not Found: /index
ERROR - 2023-04-18 23:58:17 --> 404 Page Not Found: /index
