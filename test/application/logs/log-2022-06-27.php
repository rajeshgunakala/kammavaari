<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-27 01:03:56 --> 404 Page Not Found: /index
ERROR - 2022-06-27 01:47:19 --> 404 Page Not Found: /index
ERROR - 2022-06-27 02:53:22 --> 404 Page Not Found: /index
ERROR - 2022-06-27 03:50:19 --> 404 Page Not Found: /index
ERROR - 2022-06-27 04:58:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:53 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:44:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 05:46:32 --> 404 Page Not Found: /index
ERROR - 2022-06-27 06:53:37 --> 404 Page Not Found: /index
ERROR - 2022-06-27 07:40:32 --> 404 Page Not Found: /index
ERROR - 2022-06-27 08:10:23 --> 404 Page Not Found: /index
ERROR - 2022-06-27 08:59:17 --> 404 Page Not Found: /index
ERROR - 2022-06-27 09:07:31 --> 404 Page Not Found: /index
ERROR - 2022-06-27 09:22:45 --> 404 Page Not Found: /index
ERROR - 2022-06-27 09:32:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2022-06-27 09:56:02 --> 404 Page Not Found: /index
ERROR - 2022-06-27 09:56:07 --> 404 Page Not Found: /index
ERROR - 2022-06-27 11:03:41 --> 404 Page Not Found: /index
ERROR - 2022-06-27 11:31:23 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2022-06-27 11:35:49 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_marriage.kv_mysideinterests.kv_msi_client_rmid' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `kv_msi_client_rmid`, `kv_msi_interested_rmid`, `kv_msi_profilefkid`, `kv_msi_interested_on`, `kv_msi_rmstatus`, `kv_msi_id`, `kv_msi_modified_date`, `sd`.`username`, `sd`.`phone_no`, `sd`.`id` as "staffid", `piinton`.`first_name` as "intonclientfname", `piinton`.`last_name` as "intonclientlname", `piclient`.`first_name` as "clientfname", `piclient`.`last_name` as "clientlname", `kv_msi_created_date`, `piclient`.`profile_id` as "clientprofileid", `piinton`.`profile_id` as "intonclientprofileid"
FROM `kv_mysideinterests`
JOIN `tbl_admin_data` as `sd` ON `sd`.`id`=`kv_msi_interested_rmid`
JOIN `tbl_primary_info` as `piinton` ON `piinton`.`id`=`kv_msi_interested_on`
JOIN `tbl_primary_info` as `piclient` ON `piclient`.`id`=`kv_msi_profilefkid`
WHERE `kv_msi_status` = 'sentinterested'
AND `kv_msi_onresstatus` = 'accepted'
AND `kv_msi_rmstatus` = 'mms'
GROUP BY `kv_msi_profilefkid`, `kv_msi_interested_on`
ORDER BY `kv_msi_created_date` DESC
ERROR - 2022-06-27 11:44:34 --> 404 Page Not Found: /index
ERROR - 2022-06-27 11:52:50 --> 404 Page Not Found: /index
ERROR - 2022-06-27 11:57:56 --> 404 Page Not Found: /index
ERROR - 2022-06-27 11:59:54 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:00:05 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:03:44 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:10:23 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:18:47 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:27:42 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:27:44 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:29:57 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:33:50 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:34:13 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:34:57 --> Query error: Table 'kammavaari_marriage.ms_profilesetting' doesn't exist - Invalid query: SELECT ms.*,prm.id as userid,prm.mobile, prm.profile_id as ms_profile_id, prm.registered_on, prm.status as prof_status,CONCAT( prm.last_name,' ' ,prm.first_name) as ms_user_name 
        from ms_profilesetting as ms 
        JOIN tbl_primary_info as prm ON (prm.id = ms.ms_id)
        WHERE ms.profilesetting_id=4784
ERROR - 2022-06-27 12:35:02 --> Query error: Table 'kammavaari_marriage.ms_profilesetting' doesn't exist - Invalid query: SELECT ms.*,prm.id as userid, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) as ms_user_name 
            from ms_profilesetting as ms 
            INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id  WHERE ms.profileowner=3 AND prm.status=1 ORDER BY ms.last_call_updated DESC
ERROR - 2022-06-27 12:35:08 --> Query error: Table 'kammavaari_marriage.ms_profilesetting' doesn't exist - Invalid query: SELECT ms.*,prm.id as userid, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) as ms_user_name 
            from ms_profilesetting as ms 
            INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id  WHERE ms.profileowner=3 AND prm.status=1 ORDER BY ms.last_call_updated DESC
ERROR - 2022-06-27 12:35:15 --> Query error: Table 'kammavaari_marriage.ms_profilesetting' doesn't exist - Invalid query: SELECT ms.*,prm.id as userid, prm.profile_id as ms_profile_id, CONCAT( prm.last_name,prm.first_name) as ms_user_name 
            from ms_profilesetting as ms 
            INNER JOIN tbl_primary_info as prm ON prm.id = ms.ms_id  WHERE ms.profileowner=6 AND prm.status=1 ORDER BY ms.last_call_updated DESC
ERROR - 2022-06-27 12:35:21 --> Query error: Table 'kammavaari_marriage.tbl_caste' doesn't exist - Invalid query: SELECT `caste`, `status`
FROM `tbl_caste`
WHERE `status` = 1
ORDER BY `caste` ASC
ERROR - 2022-06-27 12:35:46 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:46:29 --> 404 Page Not Found: /index
ERROR - 2022-06-27 12:47:34 --> 404 Page Not Found: /index
ERROR - 2022-06-27 13:04:15 --> 404 Page Not Found: /index
ERROR - 2022-06-27 14:03:27 --> 404 Page Not Found: /index
ERROR - 2022-06-27 15:09:12 --> 404 Page Not Found: /index
ERROR - 2022-06-27 15:12:15 --> 404 Page Not Found: /index
ERROR - 2022-06-27 16:05:01 --> 404 Page Not Found: /index
ERROR - 2022-06-27 16:53:22 --> 404 Page Not Found: /index
ERROR - 2022-06-27 18:02:23 --> 404 Page Not Found: /index
ERROR - 2022-06-27 18:48:53 --> 404 Page Not Found: /index
ERROR - 2022-06-27 20:00:05 --> 404 Page Not Found: /index
ERROR - 2022-06-27 20:04:11 --> Severity: error --> Exception: Call to undefined method Login_model::email() /home/kammavaari1/public_html/application/modules/login/controllers/Login.php 298
ERROR - 2022-06-27 20:20:49 --> 404 Page Not Found: /index
ERROR - 2022-06-27 20:38:55 --> 404 Page Not Found: /index
ERROR - 2022-06-27 20:47:30 --> 404 Page Not Found: /index
ERROR - 2022-06-27 20:55:24 --> 404 Page Not Found: /index
ERROR - 2022-06-27 21:21:01 --> 404 Page Not Found: /index
ERROR - 2022-06-27 21:57:10 --> 404 Page Not Found: /index
ERROR - 2022-06-27 23:00:37 --> 404 Page Not Found: /index
ERROR - 2022-06-27 23:09:40 --> 404 Page Not Found: /index
ERROR - 2022-06-27 23:09:41 --> 404 Page Not Found: /index
ERROR - 2022-06-27 23:23:38 --> 404 Page Not Found: /index
ERROR - 2022-06-27 23:23:38 --> 404 Page Not Found: /index
