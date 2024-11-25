<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-08 00:08:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:11:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:20:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:20:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:29:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:29:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:30:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:31:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:32:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:34:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:36:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:36:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:44:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:45:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 00:45:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:01:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:01:39 --> To Id is not available for User - 4543
ERROR - 2022-04-08 01:03:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:09:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:10:18 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '4535'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="4535")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "4535" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="4535"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 01:12:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:14:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:14:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:15:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:16:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:21:02 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-04-08 01:21:02 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-04-08 01:21:03 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-04-08 01:22:14 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '3507'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="3507")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "3507" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="3507"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 01:22:21 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-04-08 01:22:48 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-04-08 01:25:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:33:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:34:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:35:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:39:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:39:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:39:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:40:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:40:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:40:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:40:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:42:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:45:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:54:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 01:55:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 02:04:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 02:22:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 02:22:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 02:23:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 02:49:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 02:55:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:00:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:18:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:24:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:37:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:40:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:41:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:42:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:42:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 03:43:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:10:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:17:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:25:06 --> To Id is not available for User - 4189
ERROR - 2022-04-08 04:25:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:33:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:35:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:36:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:42:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:45:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:49:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:50:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:51:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:51:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:51:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:54:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 04:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:00:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:00:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:05:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:07:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:13:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:14:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:17:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:20:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:21:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:22:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:23:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:23:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:26:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:27:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:29:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:31:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:32:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:32:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:32:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:32:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:34:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:34:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:34:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:37:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:44:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:46:39 --> To Id is not available for User - 2723
ERROR - 2022-04-08 05:51:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:51:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:51:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:52:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:54:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:57:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:59:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:59:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:59:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 05:59:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:00:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:00:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:01:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:01:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:01:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:11:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:16:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:16:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:19:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:23:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:24:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:28:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:29:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:29:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:30:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:31:06 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 06:31:06')
ERROR - 2022-04-08 06:32:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:34:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:34:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:36:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:37:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:37:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:39:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:41:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:41:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:42:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:45:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:45:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:46:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:48:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:50:32 --> To Id is not available for User - 2306
ERROR - 2022-04-08 06:50:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:52:47 --> To Id is not available for User - 2306
ERROR - 2022-04-08 06:52:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:52:50 --> To Id is not available for User - 2217
ERROR - 2022-04-08 06:52:53 --> To Id is not available for User - 1555
ERROR - 2022-04-08 06:52:57 --> To Id is not available for User - 1540
ERROR - 2022-04-08 06:53:01 --> To Id is not available for User - 1499
ERROR - 2022-04-08 06:53:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:55:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:56:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 06:58:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:00:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:02:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:03:00 --> To Id is not available for User - 4189
ERROR - 2022-04-08 07:03:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:03:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:03:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:07:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:08:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:08:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:09:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:09:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:10:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:15:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:15:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:17:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:28:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:28:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:28:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:29:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:29:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:30:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:34:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:34:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:38:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:39:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:42:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:44:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:44:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:44:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:45:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:47:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:47:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:48:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:50:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:51:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:51:32 --> To Id is not available for User - 4543
ERROR - 2022-04-08 07:51:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:52:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:52:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:52:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:53:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:55:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:58:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:59:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 07:59:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:00:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:00:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:01:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:03:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:04:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:04:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:04:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:04:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:05:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:06:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:06:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:06:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:06:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:06:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:07:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:07:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:07:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:08:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:08:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:11:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:12:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:13:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:13:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:14:45 --> To Id is not available for User - 4543
ERROR - 2022-04-08 08:14:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:15:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:15:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:15:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:16:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:16:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:17:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:17:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:18:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:18:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:18:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:25:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:25:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:25:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:26:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:29:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:29:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:31:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:33:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:33:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:34:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:35:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:35:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:35:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:36:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:37:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:38:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:39:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:39:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:40:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:40:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:41:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:42:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:43:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:49:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:50:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:55:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:56:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:57:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 08:58:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:00:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:03:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:05:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:08:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:08:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:09:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:09:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:12:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:13:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:13:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:15:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:16:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:16:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:17:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:18:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:20:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:20:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:20:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:22:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:22:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:23:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:24:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:25:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:25:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:25:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:26:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:27:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:27:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:27:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:28:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:31:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:31:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:31:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:33:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:33:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:35:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:36:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:36:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:36:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:37:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:39:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:39:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:39:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:39:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:40:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:42:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:43:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:45:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:45:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:46:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:46:14 --> Severity: error --> Exception: Call to undefined method My_account_model::from() /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 849
ERROR - 2022-04-08 09:48:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:48:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:49:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:49:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:50:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:54:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:56:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:57:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:57:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 09:58:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:00:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:00:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:01:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:01:45 --> To Id is not available for User - 2059
ERROR - 2022-04-08 10:01:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:03:03 --> To Id is not available for User - 4543
ERROR - 2022-04-08 10:04:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:04:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:05:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:05:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:06:54 --> To Id is not available for User - 2100
ERROR - 2022-04-08 10:07:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:08:21 --> To Id is not available for User - 2100
ERROR - 2022-04-08 10:08:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:09:12 --> To Id is not available for User - 2100
ERROR - 2022-04-08 10:09:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:11:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:11:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:12:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:12:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:13:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:13:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:14:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:15:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:15:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:16:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:16:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:16:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:16:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:17:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:19:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:19:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:20:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin_ap/eliteprofiles
ERROR - 2022-04-08 10:20:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:20:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:20:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:21:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:21:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:21:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:22:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:22:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:22:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:23:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:23:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:23:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:23:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:24:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:24:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:25:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:26:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:26:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:26:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:28:34 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 10:28:34')
ERROR - 2022-04-08 10:28:34 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 10:28:34')
ERROR - 2022-04-08 10:28:34 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 10:28:34')
ERROR - 2022-04-08 10:28:34 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 10:28:34')
ERROR - 2022-04-08 10:28:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:28:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 10:28:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:28:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:29:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:30:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:30:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:30:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:30:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:31:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:33:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:34:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:35:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:35:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:35:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:36:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:36:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:37:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:37:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:39:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:40:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:41:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:42:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:43:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:43:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:44:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:44:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:44:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:44:48 --> To Id is not available for User - 4543
ERROR - 2022-04-08 10:44:56 --> To Id is not available for User - 4543
ERROR - 2022-04-08 10:45:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:45:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:47:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:47:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:47:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:47:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:48:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:49:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:49:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:50:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:51:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:51:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:52:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:52:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:52:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:54:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:54:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:56:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:56:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:56:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:56:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:56:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:57:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:57:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 10:57:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 10:57:53 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 10:58:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 10:59:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:02:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:03:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:03:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:03:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:04:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:04:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:04:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:05:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:05:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:06:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:06:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:06:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:06:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:07:15 --> To Id is not available for User - 4549
ERROR - 2022-04-08 11:07:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:07:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:07:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:08:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:08:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:08:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:09:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:11:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:11:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:12:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:12:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:13:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:14:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:14:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:14:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:14:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:15:35 --> To Id is not available for User - 4543
ERROR - 2022-04-08 11:15:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:16:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:16:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:16:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:18:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:18:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:19:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:19:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:19:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:20:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:20:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:20:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:20:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:21:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:21:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:40 --> To Id is not available for User - 4543
ERROR - 2022-04-08 11:22:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:22:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:23:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `profileowner`' at line 3 - Invalid query: SELECT *
FROM `ms_profilesetting`
WHERE `ms_id` in()
GROUP BY `profileowner`
ERROR - 2022-04-08 11:23:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `profileowner`' at line 3 - Invalid query: SELECT *
FROM `ms_profilesetting`
WHERE `ms_id` in()
GROUP BY `profileowner`
ERROR - 2022-04-08 11:23:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `profileowner`' at line 3 - Invalid query: SELECT *
FROM `ms_profilesetting`
WHERE `ms_id` in()
GROUP BY `profileowner`
ERROR - 2022-04-08 11:23:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:23:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:23:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:24:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:24:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:24:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:24:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:25:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:26:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:26:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:26:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:27:19 --> To Id is not available for User - 2474
ERROR - 2022-04-08 11:27:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:28:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:29:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:29:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:29:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:29:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:30:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:31:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:32:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:33:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:34:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:34:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:35:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:35:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:37:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:37:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:38:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:38:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:39:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:42:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:42:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:42:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:42:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:42:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:43:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:43:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:43:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:43:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:43:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:43:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:44:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:44:13 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 11:44:13')
ERROR - 2022-04-08 11:44:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:45:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:45:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:45:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:45:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:46:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:46:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:46:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:46:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:46:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:47:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:47:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:47:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:47:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:48:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:48:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:51:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:51:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:51:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:52:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:52:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:52:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:53:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:54:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:54:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:54:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:54:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:56:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:57:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:57:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:59:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:59:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 11:59:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:01:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:01:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:01:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:01:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:01:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:02:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:02:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:02:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:03:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:07:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:08:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:08:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:08:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:08:37 --> To Id is not available for User - 4543
ERROR - 2022-04-08 12:08:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:08:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:09:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:10:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:11:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:11:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:12:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:13:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:13:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:13:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:14:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:14:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:14:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:14:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:15:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:15:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:16:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:16:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:17:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:17:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:18:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:18:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:19:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:20:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:20:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:20:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:20:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:21:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:23:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:24:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:24:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:25:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:25:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:26:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:26:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:27:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:27:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:28:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:28:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:29:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:29:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:29:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:29:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:19 --> To Id is not available for User - 4543
ERROR - 2022-04-08 12:30:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:30:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:31:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:31:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:32:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:32:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:32:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:32:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:32:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:32:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:33:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 12:33:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:34:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:34:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:35:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:35:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:35:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:36:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:36:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:36:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:37:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:37:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:37:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:37:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:38:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:38:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:40:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:40:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:40:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:41:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:42:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:42:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:42:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:43:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:43:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:43:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:43:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:43:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:43:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:44:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:44:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:45:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:45:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:46:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:47:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:47:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:48:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:48:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:49:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:51:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:51:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:51:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:51:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:52:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:53:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:53:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:53:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:53:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:53:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:53:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:54:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:55:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:55:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:55:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:56:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:57:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:59:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 12:59:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:03:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:04:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:06:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:06:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:06:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:06:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:06:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:07:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:07:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:08:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:10:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:11:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:11:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:12:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:13:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:13:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:13:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:13:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:13:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:16:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:17:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:19:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:20:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:20:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:20:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:21:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:21:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:24:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:24:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:24:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:24:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:24:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:25:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:26:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:27:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:27:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:27:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:29:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:29:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:30:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:30:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:31:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:34:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:35:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:35:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:35:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:36:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:36:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:37:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:37:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:37:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '<script>alert("xssvuln")</script> AND <script>alert("xssvuln") < `/script>`
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
ERROR - 2022-04-08 13:38:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:38:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:40:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:40:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:41:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:44:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:46:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:47:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:48:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:48:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:48:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:49:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:49:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:49:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:49:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:50:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:50:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:50:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:51:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:51:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:51:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:52:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:52:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:52:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:53:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:53:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:53:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:53:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:54:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:54:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:54:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:55:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:56:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:56:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:56:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:57:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:58:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 13:59:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:00:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:00:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:01:45 --> To Id is not available for User - 4543
ERROR - 2022-04-08 14:04:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:04:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:07:49 --> To Id is not available for User - 4340
ERROR - 2022-04-08 14:07:53 --> To Id is not available for User - 4340
ERROR - 2022-04-08 14:08:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:10:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:12:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:12:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:12:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:13:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:14:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:14:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:15:08 --> To Id is not available for User - 4340
ERROR - 2022-04-08 14:15:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:15:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:16:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:16:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:17:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:18:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:18:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:19:48 --> To Id is not available for User - 4340
ERROR - 2022-04-08 14:20:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:22:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:23:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:24:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:24:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:24:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:25:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:29:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:29:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:32:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:33:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:34:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:34:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:34:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:34:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:38:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:38:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:38:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:40:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:42:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:42:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:43:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:43:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:44:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:44:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:45:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:46:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:47:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:47:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:48:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:48:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:48:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:48:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:48:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:49:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:50:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:50:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:50:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:50:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:50:52 --> To Id is not available for User - 2059
ERROR - 2022-04-08 14:51:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:51:00 --> To Id is not available for User - 2059
ERROR - 2022-04-08 14:51:36 --> To Id is not available for User - 4509
ERROR - 2022-04-08 14:52:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:53:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:53:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:54:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:55:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:56:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 14:57:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:57:20 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 14:57:30 --> To Id is not available for User - 4509
ERROR - 2022-04-08 14:57:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:58:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:59:11 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 14:59:11')
ERROR - 2022-04-08 14:59:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 14:59:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 14:59:44 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 14:59:44')
ERROR - 2022-04-08 15:00:22 --> Severity: error --> Exception: Invalid address:  (to): venkateswarlukolluru1.@gmail.com /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1157
ERROR - 2022-04-08 15:01:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:01:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:02:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:03:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:03:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:03:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:04:43 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'female'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `adm`.`id` = '3'
GROUP BY `p`.`id`
ERROR - 2022-04-08 15:04:46 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'female'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `adm`.`id` = '3'
GROUP BY `p`.`id`
ERROR - 2022-04-08 15:04:48 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'female'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `adm`.`id` = '3'
GROUP BY `p`.`id`
ERROR - 2022-04-08 15:05:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:05:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:05:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:06:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:06:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:06:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:07:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:07:22 --> To Id is not available for User - 2100
ERROR - 2022-04-08 15:07:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `profileowner`' at line 3 - Invalid query: SELECT *
FROM `ms_profilesetting`
WHERE `ms_id` in()
GROUP BY `profileowner`
ERROR - 2022-04-08 15:08:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:08:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:08:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:09:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:09:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:10:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:11:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:13:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:13:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:13:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:13:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:13:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:15:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:15:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:16:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:16:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:16:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:17:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:17:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:18:27 --> To Id is not available for User - 4509
ERROR - 2022-04-08 15:18:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:19:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:19:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:19:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:20:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:21:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:22:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:22:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:23:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:24:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:25:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:27:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:27:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:28:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:29:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:30:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:30:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:30:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:32:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:32:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:32:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:33:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:33:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:33:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:33:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:33:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:34:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:34:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:34:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:35:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:36:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:37:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:37:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:37:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:39:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:39:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:39:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:40:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:41:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:42:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:42:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:42:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:43:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:43:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:44:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:44:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:45:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:47:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:47:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:49:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:50:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:50:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:52:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:52:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:52:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:53:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:55:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:56:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:57:05 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 15:57:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:57:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 15:58:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:02:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:02:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:05:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:05:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:05:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:09:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:09:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:09:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:10:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:10:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:10:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:10:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:11:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:12:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:12:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:13:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:14:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:14:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:14:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:15:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:16:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:16:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:16:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:17:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:17:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:17:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:19:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:19:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:20:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:20:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:20:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:20:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:20:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:21:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:23:25 --> To Id is not available for User - 2100
ERROR - 2022-04-08 16:23:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:23:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:24:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:25:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:25:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:25:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:25:34 --> To Id is not available for User - 2100
ERROR - 2022-04-08 16:26:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:26:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:28:12 --> To Id is not available for User - 2100
ERROR - 2022-04-08 16:28:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:28:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:28:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:28:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:29:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:30:02 --> To Id is not available for User - 4543
ERROR - 2022-04-08 16:30:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:30:21 --> To Id is not available for User - 4543
ERROR - 2022-04-08 16:31:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:31:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:31:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:31:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:32:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:33:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:33:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:34:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:34:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:34:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:34:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:34:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:34:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:35:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:35:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:36:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:37:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:37:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:37:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:38:05 --> To Id is not available for User - 401
ERROR - 2022-04-08 16:39:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:40:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:40:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:41:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:41:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:41:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:42:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:43:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:43:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:43:32 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `adm`.`id` = '2'
GROUP BY `p`.`id`
ERROR - 2022-04-08 16:43:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:43:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:45:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:45:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:45:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:45:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:45:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:46:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:47:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:48:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:48:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:48:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:48:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:48:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:48:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:49:32 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 16:49:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:50:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:50:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:50:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:51:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:51:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:51:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:52:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:52:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:52:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:53:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:53:57 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 16:53:57')
ERROR - 2022-04-08 16:54:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:54:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:54:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:54:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-04-08 16:55:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:56:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:56:29 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 16:56:29')
ERROR - 2022-04-08 16:56:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:57:27 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 16:57:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:58:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:58:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:58:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:59:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:59:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 16:59:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:00:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:00:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:00:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:01:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:01:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:02:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:02:23 --> To Id is not available for User - 4388
ERROR - 2022-04-08 17:02:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:03:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:04:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:04:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:04:30 --> To Id is not available for User - 2059
ERROR - 2022-04-08 17:04:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:05:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:05:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:05:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:05:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:05:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:06:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:06:27 --> To Id is not available for User - 4543
ERROR - 2022-04-08 17:06:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:06:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:06:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:06:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:07:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:07:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:07:41 --> To Id is not available for User - 4549
ERROR - 2022-04-08 17:08:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:08:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:08:19 --> To Id is not available for User - 2059
ERROR - 2022-04-08 17:08:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:08:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:09:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:10:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:10:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:11:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:12:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:13:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:13:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:14:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:15:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:15:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:15:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:16:20 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 17:18:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:18:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:19:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:19:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:20:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:20:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:20:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:21:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:22:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:23:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:24:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:24:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:24:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:25:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:25:39 --> To Id is not available for User - 2059
ERROR - 2022-04-08 17:25:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:25:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:25:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:25:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:26:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:27:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:27:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:27:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:28:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:30:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:30:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:30:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:33:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:35:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:36:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:36:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:36:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:36:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:38:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:38:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:38:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:38:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:39:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:40:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:42:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:42:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:44:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:44:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:44:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:44:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:44:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:45:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:47:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:47:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:47:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:48:03 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 17:49:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:50:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:55:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:55:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:56:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 17:58:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:01:13 --> To Id is not available for User - 2059
ERROR - 2022-04-08 18:02:21 --> To Id is not available for User - 2059
ERROR - 2022-04-08 18:02:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:03:44 --> To Id is not available for User - 2059
ERROR - 2022-04-08 18:04:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:04:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:06:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:08:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:08:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:09:58 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-04-08 18:09:58')
ERROR - 2022-04-08 18:10:48 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `adm`.`id` = '3'
GROUP BY `p`.`id`
ERROR - 2022-04-08 18:10:50 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `adm`.`id` = '3'
GROUP BY `p`.`id`
ERROR - 2022-04-08 18:11:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:11:54 --> To Id is not available for User - 2059
ERROR - 2022-04-08 18:12:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:13:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:18:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:19:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:19:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:19:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:20:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:20:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:20:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:20:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:20:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:22:30 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '4509'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="4509")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "4509" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="4509"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 18:23:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:25:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:25:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:25:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:28:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:28:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:28:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:28:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:29:54 --> To Id is not available for User - 2059
ERROR - 2022-04-08 18:31:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:33:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:33:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:33:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:36:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:39:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:40:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:40:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:40:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:40:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:41:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:42:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:43:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:43:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:44:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:45:06 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:45:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:45:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:46:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:47:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:47:16 --> To Id is not available for User - 4538
ERROR - 2022-04-08 18:47:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:48:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:49:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:50:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:50:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:51:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:51:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:51:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:52:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:52:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:53:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:53:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:53:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:55:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:57:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:57:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:58:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:58:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 18:59:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:00:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:01:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:01:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:01:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:02:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:02:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:02:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:03:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:03:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:05:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:05:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:07:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:07:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:07:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:08:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:08:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:08:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:09:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:12:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:12:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:12:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:13:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:13:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:13:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:13:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:16:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:19:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:20:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:20:19 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:21:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:23:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:24:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:25:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:25:26 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:30:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:31:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:32:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:32:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:32:55 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:33:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:34:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:35:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:37:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:37:03 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:37:11 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:37:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:39:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:39:22 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:42:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:42:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:43:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:45:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:46:46 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:47:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:51:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:51:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:51:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:53:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:55:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:56:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:57:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:58:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 19:59:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:01:17 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:03:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:04:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:04:56 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:05:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:07:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:07:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:09:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:09:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:12:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:17:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:18:33 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:18:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:20:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:20:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:20:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:20:54 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:21:40 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:22:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:28:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:28:47 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:30:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:30:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:30:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:31:10 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:39:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:39:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:39:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:40:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:41:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:42:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:46:07 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:51:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:52:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:53:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:54:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:54:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:54:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:55:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 20:58:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:00:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:01:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:02:31 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:04:28 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:06:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:06:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:07:00 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:08:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:09:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:10:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:13:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:14:48 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:15:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:15:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:15:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:20:21 --> To Id is not available for User - 401
ERROR - 2022-04-08 21:21:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:22:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:24:17 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 21:25:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:25:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:25:36 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-04-08 21:26:30 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:27:02 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:27:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:27:41 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '1540'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="1540")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "1540" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="1540"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 21:29:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:31:04 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:33:43 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:38:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:39:34 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:40:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:41:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:42:23 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:44:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:45:22 --> To Id is not available for User - 4189
ERROR - 2022-04-08 21:45:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:47:22 --> To Id is not available for User - 2006
ERROR - 2022-04-08 21:47:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:47:50 --> To Id is not available for User - 2006
ERROR - 2022-04-08 21:47:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:47:55 --> To Id is not available for User - 2006
ERROR - 2022-04-08 21:47:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:51:29 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:52:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:52:16 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:52:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:53:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:55:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:55:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:55:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:55:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:55:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:55:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 21:59:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:01:50 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:03:45 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:05:24 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:05:39 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:08:21 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:08:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:13:58 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:14:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:14:49 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:18:52 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:20:51 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:22:32 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:30:59 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:31:01 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:33:08 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:34:32 --> To Id is not available for User - 4543
ERROR - 2022-04-08 22:34:57 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:36:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:36:53 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:39:28 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '2784'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="2784")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "2784" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="2784"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 22:39:36 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '2784'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="2784")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "2784" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="2784"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 22:40:10 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '2784'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="2784")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "2784" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="2784"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 22:40:41 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:42:05 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:42:25 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:45:19 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '2784'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="2784")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "2784" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="2784"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-04-08 22:47:44 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:49:21 --> To Id is not available for User - 2059
ERROR - 2022-04-08 22:49:42 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:50:36 --> 404 Page Not Found: /index
ERROR - 2022-04-08 22:57:37 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:06:02 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-04-08 23:06:18 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:08:38 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:09:27 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:13:15 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:29:13 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:39:12 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:40:14 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:49:20 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:49:35 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:50:09 --> 404 Page Not Found: /index
ERROR - 2022-04-08 23:53:59 --> 404 Page Not Found: /index
