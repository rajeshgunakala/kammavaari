<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-21 00:01:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:05:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:06:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:09:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:13:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:17:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:18:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:18:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:18:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:19:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:22:27 --> Severity: error --> Exception: Call to a member function result_array() on null /home4/cowcdrmy/public_html/application/modules/dashboard/models/My_account_model.php 911
ERROR - 2022-03-21 00:24:00 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
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
ERROR - 2022-03-21 00:24:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:26:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:35:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:39:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:40:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:44:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:47:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:48:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:50:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:51:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:52:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 00:54:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:01:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:11:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:12:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:16:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:18:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:19:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:26:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:31:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:35:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:36:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:47:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 01:57:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:04:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:06:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:17:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:19:02 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 02:19:02')
ERROR - 2022-03-21 02:21:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:25:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:26:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:26:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:26:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:28:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:36:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:39:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:50:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 02:53:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:11:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:14:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:30:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:37:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:40:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:42:14 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 03:42:14')
ERROR - 2022-03-21 03:50:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:50:36 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 03:50:36')
ERROR - 2022-03-21 03:51:25 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 03:51:25')
ERROR - 2022-03-21 03:54:34 --> Query error: Column 'to_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES ('4187', NULL, 1, '2022-03-21 03:54:34')
ERROR - 2022-03-21 03:55:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 03:56:09 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 03:56:09')
ERROR - 2022-03-21 03:58:01 --> Query error: Column 'to_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES ('4187', NULL, 1, '2022-03-21 03:58:01')
ERROR - 2022-03-21 03:59:19 --> Query error: Column 'to_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES ('4187', NULL, 1, '2022-03-21 03:59:19')
ERROR - 2022-03-21 04:01:05 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '4187'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="4187")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "4187" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="4187"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-21 04:08:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:08:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:22:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:33:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:37:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:40:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:41:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:41:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:42:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:56:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:57:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:58:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:59:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:59:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 04:59:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:02:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:04:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:10:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:19:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:19:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:19:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:21:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:22:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:22:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:26:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:26:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:28:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:30:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:30:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:34:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:40:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:40:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:43:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:44:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:54:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:56:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 05:59:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:02:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:04:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:09:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:21:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:22:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:25:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:25:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:28:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:30:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:32:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:35:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:35:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:40:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:43:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:45:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:45:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:45:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:46:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:47:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:48:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:49:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:50:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:51:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:51:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:52:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 06:59:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:03:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:04:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:04:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:05:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:05:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:06:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:07:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:09:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:10:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:11:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:12:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:14:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:14:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:15:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:15:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:18:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:20:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:23:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:23:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:25:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:25:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:26:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:27:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:28:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:31:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:32:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:32:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:33:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:34:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:37:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:39:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:42:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:42:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:43:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:43:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:45:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:45:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:46:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:48:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:48:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:54:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:55:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:58:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 07:59:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:00:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:00:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:01:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:05:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:06:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:06:28 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 08:06:28')
ERROR - 2022-03-21 08:07:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:07:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:09:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:10:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:10:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:10:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:10:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:11:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:12:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:12:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:13:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:14:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:16:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:16:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:16:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:16:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:17:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:18:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:18:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:18:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:19:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:21:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:23:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:24:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:24:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:27:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:28:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:30:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:32:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:33:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:35:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:37:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:37:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:38:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:38:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:42:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:43:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:44:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:45:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:45:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:45:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:45:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:46:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:46:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:46:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:47:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:49:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:49:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:49:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:50:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:53:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:53:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:54:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:55:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:55:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:55:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:56:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:56:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:56:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:56:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:57:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:59:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 08:59:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:01:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:01:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:02:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:02:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 09:04:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:04:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:06:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:07:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:07:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:09:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:09:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:09:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:11:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:11:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:11:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:12:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:12:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:12:57 --> To Id is not available for User - 125
ERROR - 2022-03-21 09:13:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:14:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:14:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:14:30 --> To Id is not available for User - 125
ERROR - 2022-03-21 09:14:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:14:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:14:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:22 --> To Id is not available for User - 1786
ERROR - 2022-03-21 09:15:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:15:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:16:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:17:14 --> To Id is not available for User - 1786
ERROR - 2022-03-21 09:17:51 --> To Id is not available for User - 922
ERROR - 2022-03-21 09:18:58 --> To Id is not available for User - 922
ERROR - 2022-03-21 09:20:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:20:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:20:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:21:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 09:21:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:22:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:23:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:24:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:24:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:24:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:24:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:24:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:24:56 --> To Id is not available for User - 922
ERROR - 2022-03-21 09:25:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:25:45 --> To Id is not available for User - 125
ERROR - 2022-03-21 09:25:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:25:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:25:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:26:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:26:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:27:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:28:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:29:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:30:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:32:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:32:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:33:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:34:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:34:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:36:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:36:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:36:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:37:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:38:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:39:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:39:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:40:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:43:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:44:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:44:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:44:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:46:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:48:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:48:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:48:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:49:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:49:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:50:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:50:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:52:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:53:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:53:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:54:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:55:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:55:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:55:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:56:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:56:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:57:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:57:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:58:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:59:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 09:59:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:00:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:01:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:02:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:02:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:03:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:03:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:04:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:04:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:05:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:05:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:06:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:08:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:08:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 10:08:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:08:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:10:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:12:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:12:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:13:05 --> Query error: Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_general_ci,COERCIBLE) for operation 'like' - Invalid query: SELECT `p`.`first_name`, `p`.`last_name`, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`date`, `p`.`month`, `p`.`year`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `r`.`time_of_birth`, `r`.`place_of_birth`, `r`.`gothram`, `r`.`star`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `e`.`country`, `pa`.`fathers_father_district`, `pa`.`mothers_father_district`, `pa`.`father_mobile`, `pa`.`mother_mobile`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `payment_status`, `elite`, `profileowner`, `pr`.`property_value`, `pr`.`property_type`, `pr`.`property_Desc`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pa` ON `p`.`id`=`pa`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
LEFT JOIN `ms_profilesetting` as `mprosetting` ON `p`.`id`=`mprosetting`.`MS_id`
LEFT JOIN `ms_property_info` as `pr` ON `p`.`id`=`pr`.`ms_id`
WHERE `p`.`profile_id` LIKE '%KÌ¤VÌ¤944183%' ESCAPE '!'
AND `u`.`ismain` = 1 AND `u`.`isactive` = 1
AND `mprosetting`.`profileowner` >0
AND `mprosetting`.`ms_usertype` != 'elite'
AND `p`.`status` = 1
GROUP BY `p`.`id`
ORDER BY `p`.`registered_on` DESC
ERROR - 2022-03-21 10:13:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:14:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:16:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:20:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:21:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:21:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:22:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:22:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:22:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:22:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:22:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:22:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:23:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:23:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:23:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:23:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:23:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:24:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:25:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:25:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:26:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:26:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:26:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:27:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:28:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:28:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:29:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:31:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:31:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:33:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:36:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 10:37:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:37:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:37:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:38:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:40:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:42:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:43:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:44:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:45:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:46:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:48:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:49:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:50:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:54:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:56:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:57:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:58:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:58:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:58:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:59:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:59:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 10:59:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:00:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:01:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:02:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:02:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:03:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:03:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 11:03:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:03:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:04:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:05:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:06:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:07:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:07:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:08:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:08:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:09:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:09:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:09:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:10:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:10:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:10:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:10:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:11:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:12:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:12:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:13:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:15:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:16:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:17:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:18:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:19:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:19:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:20:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:22:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:25:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:25:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:26:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:29:03 --> To Id is not available for User - 3973
ERROR - 2022-03-21 11:29:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:29:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:32:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:33:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:33:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:33:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:33:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:33:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:35:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:35:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:35:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:35:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:36:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:36:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:38:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:38:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:39:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:39:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:40:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:40:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:41:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:41:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:41:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:42:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:43:24 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `r`.`caste` = `Array`
AND `pfs`.`profileowner` = '12'
AND `adm`.`id` = '12'
GROUP BY `p`.`id`
ERROR - 2022-03-21 11:44:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:45:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:46:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:47:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:47:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:48:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:48:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:48:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:49:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:50:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:50:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:50:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:51:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:51:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:52:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:53:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:54:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:55:33 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 11:55:33')
ERROR - 2022-03-21 11:55:53 --> To Id is not available for User - 1653
ERROR - 2022-03-21 11:55:53 --> To Id is not available for User - 1653
ERROR - 2022-03-21 11:56:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:57:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:57:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:58:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:58:39 --> To Id is not available for User - 1653
ERROR - 2022-03-21 11:58:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:59:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:59:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:59:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 11:59:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:00:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:00:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:00:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:00:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:01:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:01:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:01:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:01:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:02:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:02:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:03:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:03:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:05:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:05:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:07:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:07:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:08:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:09:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:09:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:10:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:10:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:12:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:12:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:12:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:12:16 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 12:12:16')
ERROR - 2022-03-21 12:12:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:12:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:14:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:14:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:14:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:15:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:15:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:16:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:17:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:17:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:17:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:19:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:19:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:19:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:21:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:21:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:22:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:22:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:22:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:22:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:23:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:23:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:23:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:24:10 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '2994'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="2994")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "2994" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="2994"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-21 12:24:20 --> Query error: Table 'cowcdrmy_kammamarriage.ms_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `v`.*, `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `last_name`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `s`.*
FROM `kv_profileview` as `v`
LEFT JOIN `tbl_primary_info` as `p` ON `v`.`kv_profileview_on` = `p`.`id`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`ms_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
WHERE `s`.`elite` = 'no'
AND `p`.`status` = 1
AND `v`.`kv_userfkid` = '2994'
AND `u`.`ismain` = 1
AND  `p`.`id` not in(select kv_msi_interested_on from kv_mysideinterests where kv_msi_profilefkid="2994")
AND  p.id not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid = "2994" AND `shortlist_status` = 1)
AND  `p`.`id` not in(select to_msid from ms_shortlist_viewedd_ignored where from_msid="2994"AND ignore_status=1)
ORDER BY `v`.`kv_profileview_created_date` DESC
 LIMIT 10
ERROR - 2022-03-21 12:24:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:25:36 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 12:25:36')
ERROR - 2022-03-21 12:29:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:30:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:30:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:31:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:32:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:33:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:35:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:35:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:35:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:37:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:37:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:38:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:38:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:39:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:40:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:40:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:41:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:43:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:44:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:45:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:46:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:49:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:50:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:50:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:50:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:51:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:53:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:54:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:54:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:55:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:56:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:56:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:58:55 --> To Id is not available for User - 1653
ERROR - 2022-03-21 12:59:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:59:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 12:59:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:00:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:01:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:01:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:02:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:03:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:05:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:06:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:07:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:07:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:08:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:08:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:08:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:08:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:08:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:08:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:10:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:12:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:12:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:12:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:12:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:13:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:15:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:16:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:19:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:23:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:24:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:25:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:25:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:26:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:26:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:27:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:27:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:28:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:28:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:29:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:30:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:31:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:31:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:33:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:34:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:34:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:35:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:36:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:36:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:36:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:37:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:38:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:38:26 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 13:38:26')
ERROR - 2022-03-21 13:38:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:39:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:39:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:39:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:40:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:40:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:41:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:41:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:43:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:43:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:44:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:45:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:45:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:45:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:47:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:51:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:54:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:56:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:56:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:57:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:57:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:57:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:57:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:58:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 13:59:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:00:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:00:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:00:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:02:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:03:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:03:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:03:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:05:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:07:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:07:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:07:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:07:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:07:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:08:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:08:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:08:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:09:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '<script>alert("xssvuln")</script> AND <script>alert("xssvuln") < `/script>`
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
ERROR - 2022-03-21 14:10:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:10:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:11:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:11:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:12:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:13:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:13:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:14:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:15:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:16:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:16:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:17:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:17:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:17:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:18:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:19:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:20:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:20:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:20:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:21:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:22:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:23:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:25:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:27:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:28:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:29:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:30:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:31:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:32:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:32:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:33:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:36:20 --> To Id is not available for User - 3973
ERROR - 2022-03-21 14:38:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:38:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:39:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:42:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:43:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:44:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:45:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:46:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:47:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:47:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:47:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:49:55 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 14:49:55')
ERROR - 2022-03-21 14:50:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:51:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:53:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:55:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:57:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:57:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:58:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:58:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:58:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 14:59:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:00:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:00:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:00:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:01:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:07:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:07:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:07:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:07:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:10:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:10:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:11:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:12:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:13:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:13:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:14:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:14:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:14:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:14:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:14:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:14:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:15:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:15:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:15:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:15:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:15:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:15:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:16:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:16:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:16:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:17:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:19:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:20:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:20:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:20:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:21:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:24:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:26:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:26:11 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 15:26:11')
ERROR - 2022-03-21 15:26:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:26:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:27:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:27:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:28:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:28:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:30:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:31:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:33:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:34:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:34:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:34:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:35:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:35:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:35:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:37:01 --> Severity: error --> Exception: Invalid address:  (to): kakani susmith@gmail.com /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1157
ERROR - 2022-03-21 15:39:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:39:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:40:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:40:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:42:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:42:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:43:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:44:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:44:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:44:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:45:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:45:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:45:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:47:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 15:48:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:48:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:49:20 --> Severity: error --> Exception: Invalid address:  (to):  /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1092
ERROR - 2022-03-21 15:49:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:49:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:50:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:50:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:50:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:50:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:51:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:52:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:52:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:53:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:53:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:53:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:53:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:53:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:54:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:56:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:57:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:58:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 15:59:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:00:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:00:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:01:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:01:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:01:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:02:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:02:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:03:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:04:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:04:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:05:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:05:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:05:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:06:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:06:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:06:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:07:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:07:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:08:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:08:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:09:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:09:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:09:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:09:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:10:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:10:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:11:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:12:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:13:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:14:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:15:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:15:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:15:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 16:15:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:15:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:16:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:16:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:16:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:17:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:17:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:17:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:18:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:18:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:19:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:19:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:20:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:23:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:24:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:25:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:25:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:27:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:28:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:29:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:30:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:31:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:33:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:34:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:34:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:35:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:36:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:36:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:36:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:37:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:37:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:39:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:39:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:40:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:41:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:42:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:43:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:44:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:44:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:45:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:46:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:46:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:46:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:47:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:48:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:49:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:49:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:50:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:51:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:51:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:51:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:51:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:51:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:52:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:52:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:52:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:52:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:52:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:53:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:53:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:53:29 --> Query error: Column 'phone' cannot be null - Invalid query: INSERT INTO `tbl_contactus` (`name`, `email`, `phone`, `message`, `contacted_date_time`) VALUES ('Lana Wein', 'JessieGamon@gmail.com', NULL, 'I was wondering if you wanted to submit your new site to our free business directory? https://bit.ly/submit-yoursite-now', '2022-03-21 16:53:29')
ERROR - 2022-03-21 16:53:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:53:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:53:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:54:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:54:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:54:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:54:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:54:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:56:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 16:57:39 --> To Id is not available for User - 1947
ERROR - 2022-03-21 16:58:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:00:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:01:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:01:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:01:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:02:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:05:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:05:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:05:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:06:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:06:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:06:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:07:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:07:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:08:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:08:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:09:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:09:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:10:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:11:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:11:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:12:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:14:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:16:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:17:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:17:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:17:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:17:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:18:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:18:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:18:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:19:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:19:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:21:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:21:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:21:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:23:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:23:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:23:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:23:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:24:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:24:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:25:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:25:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:25:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:25:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:26:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:26:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 17:28:03 --> To Id is not available for User - 2424
ERROR - 2022-03-21 17:28:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:28:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:28:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:28:19 --> To Id is not available for User - 2424
ERROR - 2022-03-21 17:28:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:29:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:30:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:31:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:31:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:31:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:33:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:33:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:33:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:33:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:33:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:34:11 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 17:34:11')
ERROR - 2022-03-21 17:35:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:35:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:36:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:36:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:37:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:37:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:37:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:38:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:38:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:38:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:38:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:38:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:40:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:40:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:42:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:42:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:42:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:42:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:42:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:43:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:44:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:45:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:46:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:46:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:46:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:48:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:49:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:49:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:49:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:50:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:51:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:51:59 --> To Id is not available for User - 2345
ERROR - 2022-03-21 17:52:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:52:06 --> To Id is not available for User - 2206
ERROR - 2022-03-21 17:52:10 --> To Id is not available for User - 2185
ERROR - 2022-03-21 17:52:37 --> To Id is not available for User - 2345
ERROR - 2022-03-21 17:52:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:52:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:52:57 --> To Id is not available for User - 2345
ERROR - 2022-03-21 17:53:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:53:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:54:37 --> To Id is not available for User - 1640
ERROR - 2022-03-21 17:54:41 --> To Id is not available for User - 2345
ERROR - 2022-03-21 17:54:44 --> To Id is not available for User - 1743
ERROR - 2022-03-21 17:54:49 --> To Id is not available for User - 2345
ERROR - 2022-03-21 17:54:55 --> To Id is not available for User - 2206
ERROR - 2022-03-21 17:55:02 --> To Id is not available for User - 2185
ERROR - 2022-03-21 17:56:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:56:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:58:28 --> To Id is not available for User - 1947
ERROR - 2022-03-21 17:58:33 --> To Id is not available for User - 1947
ERROR - 2022-03-21 17:58:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:59:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 17:59:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:00:25 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:25')
ERROR - 2022-03-21 18:00:25 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:25')
ERROR - 2022-03-21 18:00:25 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:25')
ERROR - 2022-03-21 18:00:25 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:25')
ERROR - 2022-03-21 18:00:25 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:25')
ERROR - 2022-03-21 18:00:26 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:26')
ERROR - 2022-03-21 18:00:26 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:00:26')
ERROR - 2022-03-21 18:01:04 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 18:01:04')
ERROR - 2022-03-21 18:02:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:02:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:03:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:03:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:03:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:04:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:06:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:07:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:07:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:08:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:08:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:10:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:10:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:10:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:11:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:11:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:13:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:16:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:17:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:17:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:18:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:18:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:19:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:20:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:20:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:21:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:21:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:21:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:23:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:24:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:25:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:27:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:27:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:28:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:29:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:30:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:31:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:32:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:32:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:34:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:35:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:36:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:36:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:37:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:38:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:39:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:42:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:42:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:43:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:44:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:46:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:46:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:46:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:46:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:47:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:47:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:47:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:47:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:48:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:49:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:49:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:49:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:51:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:51:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:51:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:52:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:52:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:52:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:52:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:52:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:54:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:55:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:55:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:55:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 18:55:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:01:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:02:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:03:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:03:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:05:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:07:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:08:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:09:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:10:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:10:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:11:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:11:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:11:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:12:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:12:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:12:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:12:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:12:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:13:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:13:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:14:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:15:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:15:26 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 19:15:26')
ERROR - 2022-03-21 19:15:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:16:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:18:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:19:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:19:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:19:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:20:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:20:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:20:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:21:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:21:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:22:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:22:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:24:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:25:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:27:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:27:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:27:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:28:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:29:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:30:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:31:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:31:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:33:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:34:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:34:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:34:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:35:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:35:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:36:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:36:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:37:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:37:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:38:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:39:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:39:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:43:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:43:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:43:50 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:44:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:44:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:44:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:44:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:45:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:45:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:45:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:45:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:46:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:47:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:49:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:49:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:49:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:51:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:51:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:51:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:52:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:54:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:54:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:54:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:54:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:56:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:57:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:58:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 19:59:24 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 19:59:24')
ERROR - 2022-03-21 20:03:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:03:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:04:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:04:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:05:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:06:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:06:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:08:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:09:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:11:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:13:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:15:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2022-03-21 20:17:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:17:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:18:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:20:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:22:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:22:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:22:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:22:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:23:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:23:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:25:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:27:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:28:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:30:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:30:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:30:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:31:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:32:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:33:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:33:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:34:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:37:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:39:21 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:39:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:41:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:41:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:42:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:42:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:42:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:44:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:45:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:45:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:47:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:48:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:48:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:49:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:50:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:51:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:52:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:54:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:55:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:56:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:56:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:57:14 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:57:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:58:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:58:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:59:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 20:59:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:00:54 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:01:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:02:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:02:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:02:54 --> To Id is not available for User - ®
ERROR - 2022-03-21 21:02:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:02:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:03:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:06:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:07:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:08:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:08:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:09:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:09:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:10:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:10:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:10:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:11:22 --> To Id is not available for User - ®
ERROR - 2022-03-21 21:11:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:11:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:12:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:12:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:13:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:13:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:14:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:15:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:15:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:15:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:17:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:18:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:18:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:18:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:18:49 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 21:18:49')
ERROR - 2022-03-21 21:19:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:19:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:19:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:19:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:19:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:19:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:20:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:21:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:21:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:21:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:24:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:26:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:27:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:27:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:27:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:28:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:29:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:30:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:31:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:31:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:32:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:33:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:34:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:35:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:36:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:36:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:36:30 --> To Id is not available for User - 1816
ERROR - 2022-03-21 21:36:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:37:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:38:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:38:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:40:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:40:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:43:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:44:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:44:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:44:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:44:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:45:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:47:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:48:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:48:46 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:49:05 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:49:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:50:52 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:51:07 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:51:25 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:51:31 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:51:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:52:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:53:09 --> Severity: error --> Exception: Invalid address:  (to): 9701466476@u@gmail.com /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1157
ERROR - 2022-03-21 21:53:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:54:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:54:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:54:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:55:19 --> Severity: error --> Exception: Invalid address:  (to): 9701466476@u@gmail.com /home4/cowcdrmy/public_html/application/third_party/phpmailer/src/PHPMailer.php 1157
ERROR - 2022-03-21 21:57:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:57:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:58:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 21:58:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:00:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:00:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:01:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:02:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:02:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:05:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:05:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:08:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:08:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:08:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:09:03 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:09:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:09:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:11:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:13:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:13:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:18:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:18:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:20:43 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:21:12 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:22:28 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:23:10 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:24:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:27:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:28:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:30:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:31:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:32:08 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:32:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:33:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:35:02 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:36:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:36:32 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:36:36 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:36:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:38:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:38:40 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:40:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:40:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:41:52 --> Query error: Column 'to_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES ('1540', NULL, 1, '2022-03-21 22:41:52')
ERROR - 2022-03-21 22:42:07 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 22:42:07')
ERROR - 2022-03-21 22:42:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:28 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 22:42:28')
ERROR - 2022-03-21 22:42:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:56 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:42:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:44:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:45:01 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:45:47 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:45:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:47:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:48:04 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:48:09 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:48:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:49:34 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:51:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:52:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:52:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:52:48 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:53:15 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:54:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:54:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:55:19 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:55:20 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:55:57 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:55:59 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:56:06 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:56:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:56:35 --> 404 Page Not Found: /index
ERROR - 2022-03-21 22:57:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:03:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:03:22 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:04:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:04:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:06:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:06:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:06:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:06:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:09:16 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:13:51 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:14:26 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:15:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:16:23 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:19:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:19:55 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:20:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:24:44 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:25:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:26:49 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:28:27 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:28:30 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:32:45 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:33:38 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:34:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:35:37 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:38:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:40:41 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:43:00 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:43:39 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:43:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:45:18 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:46:29 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:47:17 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:48:17 --> Query error: Column 'from_msid' cannot be null - Invalid query: INSERT INTO `MS_shortlist_viewedd_ignored` (`from_msid`, `to_msid`, `viewed_status`, `viewed_date`) VALUES (NULL, NULL, 1, '2022-03-21 23:48:17')
ERROR - 2022-03-21 23:49:11 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:49:53 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:49:58 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:50:24 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:52:33 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:54:13 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:56:42 --> 404 Page Not Found: /index
ERROR - 2022-03-21 23:57:29 --> 404 Page Not Found: /index
