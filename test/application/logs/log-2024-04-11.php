<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-11 01:33:04 --> 404 Page Not Found: /index
ERROR - 2024-04-11 11:46:34 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:10:43 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:12:03 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:12:21 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:12:40 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:12:51 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:16:13 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:19:45 --> 404 Page Not Found: /index
ERROR - 2024-04-11 14:20:13 --> Query error: Table 'kammavaari_duplicate.MS_photos' doesn't exist - Invalid query: SELECT `p`.`gender`, `p`.`id`, `p`.`status`, `p`.`age`, `p`.`dob`, `p`.`living_in`, `p`.`profile_id`, `p`.`first_name`, `p`.`last_name`, `s`.`ms_usertype`, `r`.`height`, `r`.`marital_status`, `r`.`religion`, `r`.`mother_tounge`, `r`.`user_id`, `r`.`caste`, `e`.`user_id`, `e`.`heighst_education`, `e`.`annual_income`, `e`.`occupation`, `e`.`about_me`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `adm`.`id` as `rm_id`, `adm`.`username`, `adm`.`name` as `rm_name`, `adm`.`email` as `rm_email`, `adm`.`phone_no` as `rm_phone`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id`
INNER JOIN `ms_profilesetting` as `s` ON `p`.`id`=`s`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `s`.`profileowner` = `adm`.`id`
WHERE `p`.`status` = '1'
AND `p`.`last_name` = 'vidiyala'
AND `p`.`gender` != 'male'
AND `s`.`ms_showntype` = 'yes'
AND `s`.`profileowner` >0
GROUP BY `u`.`MS_id`
ERROR - 2024-04-11 15:00:18 --> 404 Page Not Found: /index
ERROR - 2024-04-11 15:41:16 --> 404 Page Not Found: /index
ERROR - 2024-04-11 15:42:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 15:42:17 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-04-11 15:42:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 15:42:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 15:53:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 15:53:17 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 15:53:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:02:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:04:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2024-04-11 16:14:22 --> 404 Page Not Found: ../modules/admin/controllers/Admin/null
ERROR - 2024-04-11 16:14:45 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:16:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:16:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:17:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:17:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:23:00 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-11 16:23:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-11 16:23:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:23:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-11 16:23:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:24:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-11 16:24:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:24:14 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-11 16:24:28 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-11 16:26:52 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-11 16:27:14 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 16:38:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 17:15:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-11 17:15:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
