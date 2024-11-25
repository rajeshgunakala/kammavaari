<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-19 00:04:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:14:15 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 00:15:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:32:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:37:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:39:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:40:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:42:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:42:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:43:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:44:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:45:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:45:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:45:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:46:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:46:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:48:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:50:55 --> To Id is not available for User - 6411
ERROR - 2023-04-19 00:50:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:51:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:51:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:52:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:55:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:56:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:58:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 00:58:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:02:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:04:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:06:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:06:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:07:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:08:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:08:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:08:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:09:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:09:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:09:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:15:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:16:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:17:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:17:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:17:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:17:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:18:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:19:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:33:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:33:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:33:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:34:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:42:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:44:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:45:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:47:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:48:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:54:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 01:58:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 02:10:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 02:10:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 02:10:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 02:51:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 02:53:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 03:14:15 --> To Id is not available for User - 6750
ERROR - 2023-04-19 03:14:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 03:17:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 03:35:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 04:06:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 04:06:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 04:24:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:02:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:02:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:04:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:05:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:23:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:24:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:34:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:38:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:40:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:40:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:44:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:52:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:53:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:54:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:54:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:54:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:54:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:54:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:55:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:56:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:56:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:57:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 05:58:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:05:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:05:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:15:13 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 06:15:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:15:18 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 06:15:51 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 06:28:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:48:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:50:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:54:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:54:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 06:56:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:00:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:01:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:02:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:03:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:03:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:04:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:04:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:04:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:05:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:06:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:06:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:06:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:06:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:07:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:08:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:09:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:12:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:21:07 --> To Id is not available for User - 5653
ERROR - 2023-04-19 07:21:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:26:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:28:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:29:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:29:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:37:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:37:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:38:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:38:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:39:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:39:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:39:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:39:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:39:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:39:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:40:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:40:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:41:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:41:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:41:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:44:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:45:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:47:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:48:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:53:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:54:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:54:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:54:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:55:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 07:55:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:02:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:08:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:09:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:13:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:14:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:15:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:17:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:17:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:17:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:20:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:21:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:23:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:24:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:24:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:24:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:25:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:25:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:29:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:32:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:32:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:33:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:34:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:40:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:40:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:41:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:42:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:42:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:46:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:47:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:47:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:47:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:47:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:48:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:49:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:51:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:51:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:53:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:54:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:55:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:55:48 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 08:55:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:56:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:56:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:57:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:57:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:57:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:58:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:58:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:58:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:59:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:59:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 08:59:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:00:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:00:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:00:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:00:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:01:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:01:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:01:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:02:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:03:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:03:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:04:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:06:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:07:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:09:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:09:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:09:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:09:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:10:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:11:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:11:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:11:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:12:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:13:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:13:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:14:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:14:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:14:36 --> To Id is not available for User - 2821
ERROR - 2023-04-19 09:14:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:16:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:18:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:18:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:20:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:21:24 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 09:21:31 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 09:21:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:26:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:27:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:29:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:32:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:33:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:34:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:34:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:34:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:35:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:35:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:36:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:36:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:37:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:37:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:38:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:38:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:38:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:39:32 --> To Id is not available for User - 5788
ERROR - 2023-04-19 09:39:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:40:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:40:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:41:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:42:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:43:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:45:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:45:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:45:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:45:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:47:52 --> To Id is not available for User - 4827
ERROR - 2023-04-19 09:47:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:47:58 --> To Id is not available for User - 4827
ERROR - 2023-04-19 09:48:35 --> To Id is not available for User - 5410
ERROR - 2023-04-19 09:48:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:49:40 --> To Id is not available for User - 6634
ERROR - 2023-04-19 09:50:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:53:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:53:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:54:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:55:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:56:33 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 09:56:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:56:51 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 09:56:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:57:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:58:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:59:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 09:59:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2023-04-19 09:59:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:00:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:01:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:02:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:02:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:04:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:04:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:04:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:05:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:06:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:08:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:10:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:11:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:12:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:13:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:13:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:13:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:14:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:16:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:16:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:17:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:18:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:18:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:19:03 --> To Id is not available for User - 6847
ERROR - 2023-04-19 10:20:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:24:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:24:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:26:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:26:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:26:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:28:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:31:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:32:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:34:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:36:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:36:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:36:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:36:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:37:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:37:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:37:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:37:40 --> To Id is not available for User - 6847
ERROR - 2023-04-19 10:37:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:39:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:39:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:42:22 --> To Id is not available for User - 6847
ERROR - 2023-04-19 10:42:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:42:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:44:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:44:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:44:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:44:58 --> To Id is not available for User - 5773
ERROR - 2023-04-19 10:45:01 --> To Id is not available for User - 2821
ERROR - 2023-04-19 10:45:03 --> To Id is not available for User - 6515
ERROR - 2023-04-19 10:45:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:45:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:45:05 --> To Id is not available for User - 4827
ERROR - 2023-04-19 10:45:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:45:09 --> To Id is not available for User - 5247
ERROR - 2023-04-19 10:45:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:45:11 --> To Id is not available for User - 5410
ERROR - 2023-04-19 10:45:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:45:21 --> To Id is not available for User - 5788
ERROR - 2023-04-19 10:45:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:46:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:46:34 --> To Id is not available for User - 6847
ERROR - 2023-04-19 10:46:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:47:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:47:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:47:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:48:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:48:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:48:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:48:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:49:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:50:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:51:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:52:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:52:36 --> To Id is not available for User - 6668
ERROR - 2023-04-19 10:52:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:52:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:53:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:54:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:55:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:55:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:55:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:56:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:56:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:56:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:56:42 --> To Id is not available for User - 6847
ERROR - 2023-04-19 10:56:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:57:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:58:10 --> To Id is not available for User - 6847
ERROR - 2023-04-19 10:58:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:58:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:58:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:58:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:58:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:59:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 10:59:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:00:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:01:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:01:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:01:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:04:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:06:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:06:16 --> To Id is not available for User - 6500
ERROR - 2023-04-19 11:06:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:07:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:08:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:08:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:08:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:08:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:08:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:08:37 --> To Id is not available for User - 6847
ERROR - 2023-04-19 11:08:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:09:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:09:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:09:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:09:42 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 11:09:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:09:51 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 11:11:02 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 11:11:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:11:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:11:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:11:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:11:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:11:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:11:37 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 11:11:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:12:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:12:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:13:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:13:50 --> To Id is not available for User - 6847
ERROR - 2023-04-19 11:13:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:14:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:15:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:15:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:16:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:17:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:17:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:17:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:17:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:18:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:18:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:20:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:20:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:20:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:20:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:21:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:22:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:22:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:22:31 --> To Id is not available for User - º
ERROR - 2023-04-19 11:22:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:22:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:22:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:23:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:23:34 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 11:23:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:23:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:23:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:25:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:25:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:26:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:26:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:27:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:27:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:29:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:30:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:30:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:32:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:32:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:32:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:32:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:32:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:33:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:33:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:33:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:34:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:34:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:35:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:36:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:37:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:37:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:37:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:37:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:37:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:37:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:38:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:38:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:40:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:40:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:40:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:42:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:43:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:44:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:44:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:45:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:45:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:46:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:47:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:47:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:47:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:48:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:50:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:50:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:52:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:52:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:52:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:54:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:54:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:55:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:55:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:55:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:55:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:55:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:55:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:57:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:57:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:57:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:57:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:57:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:57:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:58:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:58:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:58:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:58:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 11:59:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:00:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:01:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:01:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:01:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:03:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:04:07 --> To Id is not available for User - 6064
ERROR - 2023-04-19 12:04:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:04:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:04:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:04:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:04:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:05:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:05:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:05:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:05:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:05:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:06:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:07:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:07:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:07:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:07:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:07:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:07:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:09:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:09:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:10:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:10:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:10:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:10:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:11:05 --> To Id is not available for User - 5467
ERROR - 2023-04-19 12:11:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:11:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:11:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:11:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:11:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:12:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:12:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:12:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:12:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:13:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:14:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:15:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:15:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:16:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:16:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:16:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:17:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:18:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:19:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:19:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:19:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:19:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:20:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:20:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:20:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:21:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:21:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:21:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:21:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:21:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:21:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:22:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:22:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:22:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:22:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:23:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:23:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:23:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:24:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:25:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:25:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:25:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:25:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:26:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:26:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:26:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:26:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:26:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:27:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:27:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:27:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:27:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:28:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:28:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:28:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:29:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:29:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:29:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:29:52 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-19 12:30:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:30:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:30:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:30:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:31:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:32:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:33:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:33:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:33:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:34:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:34:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:35:21 --> Severity: error --> Exception: Invalid address:  (to):  /home/kammavaari/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2023-04-19 12:35:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:36:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:36:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:36:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:36:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:36:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:37:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:37:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2023-04-19 12:37:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:37:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:37:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:37:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:38:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:38:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:38:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:39:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:40:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:40:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:21 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 12:41:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:34 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 12:41:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:41:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:42:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:43:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:43:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:43:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:44:50 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 12:44:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:45:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:45:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:46:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:46:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:46:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:46:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:46:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:47:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:47:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:47:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:47:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:47:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:47:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:48:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:48:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:48:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:48:14 --> To Id is not available for User - 6847
ERROR - 2023-04-19 12:48:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:49:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:49:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:49:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:49:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:49:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:50:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:51:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:51:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:51:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:52:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:52:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:52:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:53:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:53:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:53:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:54:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:54:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:54:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:55:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:55:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:55:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:55:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:56:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:58:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 12:59:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:00:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:00:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:00:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:00:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:00:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:01:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:01:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:01:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:01:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:02:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:04:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:04:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:05:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:05:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:05:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:05:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:06:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:07:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:07:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:08:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:08:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:08:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:08:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:09:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:09:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:09:21 --> To Id is not available for User - 6414
ERROR - 2023-04-19 13:09:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:09:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:09:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:09:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:10:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:10:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:11:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:12:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:12:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:12:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:12:46 --> To Id is not available for User - 6771
ERROR - 2023-04-19 13:12:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:12:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:40 --> To Id is not available for User - 6414
ERROR - 2023-04-19 13:13:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:13:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:14:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:15:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:16:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:17:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:17:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:17:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:17:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:21:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:22:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:22:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:23:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:23:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:24:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:24:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:25:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:27:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:29:00 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-19 13:29:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:29:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:29:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:29:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:30:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:30:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:30:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:31:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:31:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:31:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:31:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:32:09 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 13:32:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:33:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:34:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:34:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:34:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:35:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:35:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:36:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:36:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:37:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:37:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:37:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:38:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:38:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:39:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:40:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:42:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:44:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:47:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:49:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:49:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:51:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:51:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:52:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:52:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:52:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:53:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:53:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:53:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:54:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:54:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:54:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:54:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:55:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:56:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:57:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:57:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:58:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:58:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:58:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:58:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:59:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:59:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:59:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:59:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 13:59:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:00:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:00:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:00:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:00:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:01:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:01:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:01:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:01:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:02:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:02:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:02:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:02:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:03:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:03:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:03:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:04:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:04:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:04:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:04:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:05:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:06:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:06:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:06:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:07:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:08:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:08:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:09:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:09:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:09:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:10:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:12:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:13:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:13:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:13:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:13:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:13:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:14:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:14:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:14:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:14:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:14:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:15:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:15:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:15:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:15:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:16:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:21:06 --> To Id is not available for User - 6847
ERROR - 2023-04-19 14:21:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:21:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:22:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:24:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:24:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:25:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:26:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:26:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:27:54 --> To Id is not available for User - 1950
ERROR - 2023-04-19 14:27:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:27:59 --> To Id is not available for User - 1950
ERROR - 2023-04-19 14:28:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:28:06 --> To Id is not available for User - 1950
ERROR - 2023-04-19 14:28:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:29:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:29:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:31:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:32:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:32:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:34:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:34:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:34:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:35:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:35:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:35:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:35:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:37:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:38:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:39:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:41:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:41:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:41:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:42:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:42:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:43:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:43:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:43:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:43:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:44:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:44:20 --> To Id is not available for User - 1950
ERROR - 2023-04-19 14:44:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:44:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:45:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:46:00 --> To Id is not available for User - 1950
ERROR - 2023-04-19 14:46:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:46:02 --> To Id is not available for User - 1950
ERROR - 2023-04-19 14:46:19 --> To Id is not available for User - º
ERROR - 2023-04-19 14:46:20 --> To Id is not available for User - º
ERROR - 2023-04-19 14:46:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:47:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:47:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:48:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:48:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:52:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:52:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:54:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:54:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:54:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:54:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:57:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:58:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:58:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:58:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 14:59:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:00:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:02:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:02:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:03:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:03:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:03:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:03:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:04:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:04:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:04:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:04:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:04:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:05:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:05:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:05:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:05:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:05:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:05:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:06:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:06:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:06:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:07:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:07:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:08:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:08:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:10:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:11:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:12:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:12:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:12:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:12:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:13:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:13:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:13:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:13:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:14:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:15:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:15:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:15:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:15:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:15:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:16:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:16:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:16:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:16:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:16:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:16:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:17:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:18:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:18:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:18:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:18:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:18:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:19:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:19:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:20:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:20:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:21:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:21:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:23:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:23:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:24:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:24:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:24:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:25:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:25:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:26:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:26:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:26:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:26:59 --> To Id is not available for User - 6500
ERROR - 2023-04-19 15:27:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:27:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:28:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:29:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:30:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:30:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:31:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:31:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:31:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:31:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:32:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:32:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:32:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:32:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:32:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:33:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:34:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:35:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:35:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:36:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:37:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:38:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:39:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:39:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:39:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:40:19 --> To Id is not available for User - 1499
ERROR - 2023-04-19 15:40:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:40:22 --> To Id is not available for User - 1540
ERROR - 2023-04-19 15:40:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:40:25 --> To Id is not available for User - 1555
ERROR - 2023-04-19 15:40:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:40:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:40:27 --> To Id is not available for User - 2217
ERROR - 2023-04-19 15:40:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:40:30 --> To Id is not available for User - 2306
ERROR - 2023-04-19 15:40:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:42:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:42:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:42:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:42:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:42:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:42:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:43:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:45:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:45:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:45:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:46:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:47:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:47:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:47:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:48:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:48:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:49:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:49:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:49:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:50:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:50:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:50:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:51:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:51:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:51:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:52:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:53:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:53:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:54:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:54:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:54:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:54:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:55:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:56:05 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 15:56:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:56:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:56:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:56:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:56:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:56:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:57:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:58:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:58:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:58:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:58:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:58:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:58:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:59:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:59:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:59:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:59:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 15:59:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:00:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:00:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:00:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:00:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:00:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:02:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:02:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:02:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:03:43 --> To Id is not available for User - 6414
ERROR - 2023-04-19 16:04:05 --> To Id is not available for User - 6414
ERROR - 2023-04-19 16:04:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:05:14 --> To Id is not available for User - 6414
ERROR - 2023-04-19 16:05:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:05:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:06:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:06:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:06:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:06:43 --> To Id is not available for User - 6847
ERROR - 2023-04-19 16:06:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:07:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:07:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:08:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:08:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:08:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:08:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:09:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:09:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:10:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:11:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:11:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:11:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:12:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:12:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:12:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:12:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:13:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:13:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:13:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:13:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:14:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:14:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:14:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:17:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:17:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:17:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:18:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:20:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:20:59 --> To Id is not available for User - 6847
ERROR - 2023-04-19 16:21:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:21:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:21:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:21:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:22:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:22:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:22:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:22:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:22:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:22:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:23:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:24:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:24:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:25:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:25:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:25:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:25:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:26:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:26:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:26:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:26:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:26:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:27:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:27:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:28:05 --> To Id is not available for User - 6847
ERROR - 2023-04-19 16:28:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:28:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:28:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:28:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:29:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:29:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:29:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:29:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:31:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:32:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:33:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:33:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:33:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:33:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:35:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:35:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:35:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:36:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:36:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:36:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:36:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:36:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:37:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:38:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:38:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:38:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:39:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:39:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:15 --> To Id is not available for User - 5070
ERROR - 2023-04-19 16:40:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:40:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:41:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:41:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:41:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:41:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:41:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:41:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:42:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:42:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:44:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:44:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:44:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:44:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:44:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:45:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:45:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:45:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:46:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:46:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:46:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:47:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:48:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:49:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:49:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:49:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:50:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:50:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:50:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:51:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:53:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:53:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:54:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:54:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:55:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:55:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:56:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:56:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:57:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:58:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:58:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 16:59:50 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 16:59:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:00:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:00:09 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 17:00:20 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 17:00:39 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 17:00:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:01:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:01:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:01:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:01:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:03:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:03:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:03:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:03:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:03:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:05:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:05:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:06:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:07:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:07:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:09:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:09:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:12:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:12:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:12:32 --> To Id is not available for User - º
ERROR - 2023-04-19 17:12:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:12:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:12:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:13:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:13:25 --> To Id is not available for User - 5653
ERROR - 2023-04-19 17:13:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:13:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:13:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:13:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:14:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:15:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:15:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:17:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:17:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:18:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:18:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:18:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:19:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:20:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:21:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:22:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:23:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:24:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:24:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:24:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:25:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:25:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:25:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:25:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:26:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:26:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:26:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:26:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:28:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:28:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:28:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:29:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:29:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:29:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:30:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:31:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:32:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:32:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:33:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:33:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:33:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:36:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:38:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:38:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:41:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:41:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:41:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:42:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:43:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:43:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:44:37 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 17:45:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:45:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:45:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:46:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:46:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:46:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:46:53 --> To Id is not available for User - 5410
ERROR - 2023-04-19 17:47:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:47:12 --> To Id is not available for User - 5410
ERROR - 2023-04-19 17:47:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:47:20 --> To Id is not available for User - 5247
ERROR - 2023-04-19 17:47:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:47:30 --> To Id is not available for User - 4827
ERROR - 2023-04-19 17:47:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:47:40 --> To Id is not available for User - 6515
ERROR - 2023-04-19 17:48:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:48:32 --> To Id is not available for User - 6515
ERROR - 2023-04-19 17:48:42 --> To Id is not available for User - 2821
ERROR - 2023-04-19 17:48:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:49:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:49:56 --> To Id is not available for User - 2821
ERROR - 2023-04-19 17:49:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:51:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:52:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:52:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:52:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:53:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:53:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:53:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:53:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:53:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:54:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:54:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:54:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:54:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:54:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:54:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:55:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:55:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:55:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:56:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:57:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:58:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:58:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:58:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:58:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:58:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:58:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:59:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:59:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:59:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:59:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:59:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 17:59:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:00:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:00:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:00:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:00:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:00:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:01:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:01:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:02:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:03:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:03:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:05:36 --> To Id is not available for User - 2821
ERROR - 2023-04-19 18:05:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:05:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:05:55 --> To Id is not available for User - 5773
ERROR - 2023-04-19 18:05:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:06:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:06:31 --> To Id is not available for User - 5773
ERROR - 2023-04-19 18:06:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:06:42 --> To Id is not available for User - 2821
ERROR - 2023-04-19 18:06:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:06:49 --> To Id is not available for User - 6515
ERROR - 2023-04-19 18:06:58 --> To Id is not available for User - 4827
ERROR - 2023-04-19 18:07:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:07:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:07:05 --> To Id is not available for User - 5247
ERROR - 2023-04-19 18:07:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:07:10 --> To Id is not available for User - 5410
ERROR - 2023-04-19 18:07:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:07:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:07:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:08:05 --> To Id is not available for User - 6699
ERROR - 2023-04-19 18:09:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:09:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:09:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:14:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:16:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:19:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:20:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:20:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:20:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:20:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:23:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:23:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:23:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:24:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:24:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:24:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:30:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:30:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:30:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:30:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:30:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:30:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:31:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:31:24 --> To Id is not available for User - 6335
ERROR - 2023-04-19 18:31:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:31:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:32:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:33:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:34:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:35:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:35:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:35:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:36:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:36:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:36:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:36:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:36:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:37:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:37:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:37:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:37:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:37:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:37:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:39:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:40:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:42:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:42:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:42:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:42:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:43:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:43:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:43:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:44:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:45:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:46:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:47:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:47:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:47:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:48:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:51:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:52:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:52:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:53:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:53:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:54:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:54:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:54:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:54:31 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-19 18:55:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:55:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:56:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:56:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:57:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:58:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:58:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:58:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:58:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:58:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:59:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:59:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:59:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:59:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:59:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 18:59:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:00:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:00:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:00:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:00:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:02:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:02:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:02:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:03:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:03:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:03:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:04:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:04:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:04:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:04:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:04:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:05:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:05:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:05:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:33 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 19:06:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:06:56 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 19:06:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:07:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:07:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:08:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:08:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:08:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:08:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:10:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:10:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:11:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:11:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:11:57 --> To Id is not available for User - 5247
ERROR - 2023-04-19 19:12:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:12:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:13:27 --> To Id is not available for User - 5968
ERROR - 2023-04-19 19:14:02 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.r.height' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`
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
ERROR - 2023-04-19 19:15:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:15:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:15:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:15:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:15:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:15:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:15:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:16:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:17:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:18:40 --> To Id is not available for User - 6847
ERROR - 2023-04-19 19:18:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:19:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:20:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:20:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:20:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:21:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:21:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:24:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:25:15 --> To Id is not available for User - 5968
ERROR - 2023-04-19 19:26:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:27:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:28:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:28:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:29:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:31:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:32:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:33:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:33:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:35:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:35:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:35:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:36:20 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:39:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:42:15 --> To Id is not available for User - 5788
ERROR - 2023-04-19 19:42:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:42:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:43:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:43:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:44:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:45:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:45:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:45:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:45:24 --> To Id is not available for User - 4827
ERROR - 2023-04-19 19:45:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:45:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:46:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:46:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:46:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:47:04 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:47:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:47:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:49:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:49:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:49:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:50:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:50:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:50:41 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:51:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:51:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:51:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:52:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:53:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:53:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:53:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:54:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:54:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:55:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:55:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:55:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:56:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:56:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:57:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:57:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:57:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:58:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:58:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 19:59:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:00:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:04:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:04:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:04:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:06:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:07:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:07:44 --> To Id is not available for User - 5410
ERROR - 2023-04-19 20:07:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:07:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:07:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:08:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:09:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:10:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:10:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:10:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:10:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:10:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:10:47 --> To Id is not available for User - 6847
ERROR - 2023-04-19 20:10:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:11:21 --> 404 Page Not Found: ../modules/dashboard/controllers/Dashboard/images
ERROR - 2023-04-19 20:12:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:12:11 --> To Id is not available for User - 5410
ERROR - 2023-04-19 20:12:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:12:20 --> To Id is not available for User - 5410
ERROR - 2023-04-19 20:12:26 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:12:42 --> To Id is not available for User - 5247
ERROR - 2023-04-19 20:12:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:12:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:12:50 --> To Id is not available for User - 4827
ERROR - 2023-04-19 20:12:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:12:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:13:03 --> To Id is not available for User - 6515
ERROR - 2023-04-19 20:13:09 --> To Id is not available for User - 2821
ERROR - 2023-04-19 20:13:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:13:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:15:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:16:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:16:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:17:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:17:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:17:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:18:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:20:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:20:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:21:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:21:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:22:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:27:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:30:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:31:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:31:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:33:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:34:16 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:34:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:37:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:38:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:38:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:39:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:46:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:46:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:46:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:49:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:50:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:50:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:50:06 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:50:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:50:29 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:50:36 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:51:10 --> To Id is not available for User - 6424
ERROR - 2023-04-19 20:54:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:54:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:59:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 20:59:53 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:00:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:00:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:04:19 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:08:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:08:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:09:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:10:21 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:10:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:11:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:11:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:11:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:12:05 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:12:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:12:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:12:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:13:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:15:34 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:15:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:15:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:19:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:21:16 --> To Id is not available for User - º
ERROR - 2023-04-19 21:28:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:29:07 --> To Id is not available for User - 5788
ERROR - 2023-04-19 21:29:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:32:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:32:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:32:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:33:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:37:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:37:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:38:42 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:38:51 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:40:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:41:03 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:41:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:41:56 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:42:24 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:43:48 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:44:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:44:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:47:43 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:47:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:48:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:48:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:48:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:48:28 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:49:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:49:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:49:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:49:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:50:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:50:11 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:50:30 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:53:15 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:55:09 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:55:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:57:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 21:59:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:01:57 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:08:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:09:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:09:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:11:13 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:13:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:14:49 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:17:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:17:33 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:17:55 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:18:02 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:19:12 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:21:18 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:21:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:21:31 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:21:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:22:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:22:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:22:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:22:23 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:30:39 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:30:45 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:32:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:32:52 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:35:17 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:35:44 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:36:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:37:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:50:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 22:55:25 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:01:37 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:02:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:06:08 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:06:27 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:06:50 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:09:58 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:11:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:14:38 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:20:00 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:20:59 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:21:01 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:21:14 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:21:32 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:21:40 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:22:07 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:24:35 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:27:55 --> To Id is not available for User - 6064
ERROR - 2023-04-19 23:29:10 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:29:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:29:22 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:29:54 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:45:46 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:45:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:45:47 --> 404 Page Not Found: /index
ERROR - 2023-04-19 23:45:47 --> 404 Page Not Found: /index
