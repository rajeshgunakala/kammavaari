<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-03-22 16:07:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:08:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:08:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:08:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:09:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:09:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 16:09:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:09:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:09:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:09:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:10:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:10:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:10:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:10:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:10:17 --> Query error: Table 'kammavaari_demo.user_share_activity' doesn't exist - Invalid query: 
                SELECT A.activity_id,B.profile_id as receive_cust_id,C.profile_id as send_cust_id, B.first_name as receive_cust,C.first_name as send_cust_name,D.name as send_by,A.send_Date
                FROM user_share_activity AS A
                LEFT JOIN tbl_primary_info AS B ON A.to_msID = B.profile_id
                LEFT JOIN tbl_primary_info AS C ON A.from_msID = C.id
                LEFT JOIN tbl_admin_data AS D ON A.sentby_ID = D.id
                where D.id = '1' 
          
ERROR - 2024-03-22 16:10:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:10:59 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `ps`.`profileowner` = '1'
AND `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:11:01 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:11:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:11:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `ps`.`profileowner` = '1'
AND `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:11:17 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:11:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:11:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:11:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:14:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:14:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:14:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:14:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:14:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 16:14:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:14:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:14:45 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `ps`.`profileowner` = '1'
AND `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:14:46 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:14:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:15:15 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:15:16 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:15:29 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:15:32 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:15:33 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:15:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:15:42 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:15:44 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:15:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:16:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:18:00 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:18:01 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:18:13 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:18:14 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:21:02 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:21:03 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:24:42 --> Severity: error --> Exception: Call to undefined function nearbyexpiryprofiles_count_header() /home/kammavaari/public_html/demo/application/modules/admin/views/admin_header.php 1198
ERROR - 2024-03-22 16:24:43 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:25:20 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:25:21 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:26:36 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:26:38 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:28:42 --> Query error: Unknown column 'other_columns_here' in 'field list' - Invalid query: SELECT `pi`.`id`, `other_columns_here`, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id` = `pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id` = `pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:28:44 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:29:29 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:29:30 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:30:54 --> Query error: Unknown column 'pi.other_column1' in 'field list' - Invalid query: SELECT `pi`.`id`, `pi`.`other_column1`, `pi`.`other_column2`, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id` = `pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id` = `pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:30:55 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:32:16 --> Query error: Unknown column 'pi.other_column1' in 'field list' - Invalid query: SELECT `pi`.`id`, `pi`.`other_column1`, `pi`.`other_column2`, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id` = `pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id` = `pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:32:22 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:32:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:33:14 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:16 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:16 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:17 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:18 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:18 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:18 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:18 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:18 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:18 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:19 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:19 --> Query error: Expression #35 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'kammavaari_demo.pl.paymentlog_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, MAX(DATE(pl.expiry_date)) as formatted_expiry_date
FROM `tbl_primary_info` `pi`
JOIN `tbl_payments_log` `pl` ON `pl`.`user_id`=`pi`.`id`
JOIN `ms_profilesetting` `ps` ON `ps`.`ms_id`=`pi`.`id`
WHERE `pi`.`status` NOT IN(2, 3)
GROUP BY `pi`.`id`
HAVING `formatted_expiry_date` < NOW()
ERROR - 2024-03-22 16:33:23 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:33:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:37:27 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:37:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:37:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:37:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:37:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:38:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:38:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:38:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:07 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:38:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:38:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 16:38:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:38:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:38:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:38:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 16:39:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:40:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:40:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:55:55 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 16:56:02 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:56:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 16:56:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:56:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:57:50 --> Severity: error --> Exception: Message body empty /home/kammavaari/public_html/demo/application/third_party/phpmailer/src/PHPMailer.php 1569
ERROR - 2024-03-22 16:58:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:58:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:58:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:58:45 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:59:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 16:59:56 --> Severity: error --> Exception: Message body empty /home/kammavaari/public_html/demo/application/third_party/phpmailer/src/PHPMailer.php 1569
ERROR - 2024-03-22 17:37:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:37:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:37:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:37:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:38:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:38:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:41:19 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:41:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:42:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:42:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:43:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:43:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:43:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:43:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:43:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 17:44:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:44:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:44:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:44:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:44:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:45:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:45:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:46:02 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:46:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:46:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:46:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:46:53 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:53 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:46:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:20 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:20 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:22 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:22 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:22 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:28 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:28 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:28 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:36 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:36 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:36 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:39 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:39 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:39 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:41 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:41 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:41 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:42 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:42 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:42 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:42 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:43 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:43 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:43 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:43 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:44 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:44 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:44 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:45 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:45 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:45 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:45 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:46 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:46 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:46 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:46 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:47 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:47 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:47 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:48 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:48 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:49 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:49 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:49 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:49 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:50 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:50 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:50 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:50 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:51 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:51 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:51 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:51 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:52 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:52 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:52 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:52 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:53 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:53 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:53 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:53 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:54 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:55 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:57 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:47:59 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:01 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:02 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:03 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:05 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:10 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:11 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:12 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:16 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:17 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:18 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:19 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:20 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:20 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:20 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:20 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:21 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:22 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:22 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:22 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:23 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:24 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:26 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:27 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:28 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:28 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:28 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:32 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:33 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:34 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:35 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:36 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:36 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:36 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:37 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:38 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:39 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:39 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:48:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:49:12 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:49:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:50:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:51:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:52:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 17:52:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:53:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:54:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:54:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 17:55:58 --> 404 Page Not Found: /index
ERROR - 2024-03-22 17:56:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:57:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:57:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:57:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:58:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:58:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 17:58:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:59:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 17:59:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:00:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:00:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:00:53 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 18:01:28 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 18:01:44 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 18:02:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:02:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:02:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:03:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:03:46 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:03:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:03:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:04:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:04:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:05:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:05:20 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT `pfs`.`ms_usertype`, `p`.*, adm.id as 'rmid', `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pi`.`fathers_father_district`, `pi`.`mothers_father_district`, `pi`.`father_mobile`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pi` ON `p`.`id`=`pi`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id` AND `u`.`ismain`="1" AND `u`.`isactive`="1"
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `pfs`.`payment_status` IN(0, 1)
AND `adm`.`id` = '7'
GROUP BY `p`.`id`
ORDER BY `pfs`.`assign_date` DESC, `p`.`registered_on` DESC
 LIMIT 50
ERROR - 2024-03-22 18:05:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:06:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:06:14 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT `pfs`.`ms_usertype`, `p`.*, adm.id as 'rmid', `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pi`.`fathers_father_district`, `pi`.`mothers_father_district`, `pi`.`father_mobile`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pi` ON `p`.`id`=`pi`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id` AND `u`.`ismain`="1" AND `u`.`isactive`="1"
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`status` = '1'
AND `pfs`.`payment_status` IN(0, 1)
AND `adm`.`id` = '7'
GROUP BY `p`.`id`
ORDER BY `pfs`.`assign_date` DESC, `p`.`registered_on` DESC
 LIMIT 50
ERROR - 2024-03-22 18:06:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:06:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:07:09 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT `pfs`.`ms_usertype`, `p`.*, adm.id as 'rmid', `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pi`.`fathers_father_district`, `pi`.`mothers_father_district`, `pi`.`father_mobile`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `tbl_parents_info` as `pi` ON `p`.`id`=`pi`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `MS_photos` as `u` ON `p`.`id`=`u`.`MS_id` AND `u`.`ismain`="1" AND `u`.`isactive`="1"
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`status` = '1'
AND `pfs`.`payment_status` IN(0, 1)
AND `pfs`.`profileowner` = '34'
AND `adm`.`id` = '7'
GROUP BY `p`.`id`
ORDER BY `pfs`.`assign_date` DESC, `p`.`registered_on` DESC
 LIMIT 50
ERROR - 2024-03-22 18:07:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:07:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:07:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:08:02 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:08:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:08:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:08:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:08:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:08:47 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:08:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:09:25 --> Query error: Incorrect DATETIME value: '1-4-2023' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `pfs`.`payment_status` IN(0, 1)
AND `p`.`registered_on` >= '1-4-2023'
AND `p`.`registered_on` <= '15-3-2024'
AND `adm`.`id` = '7'
GROUP BY `p`.`id`
ERROR - 2024-03-22 18:09:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:09:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:09:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:10:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 18:10:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:11:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:11:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:12:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:12:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:12:12 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:12:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:12:22 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:15:31 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `MS_photos` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV967746'
ERROR - 2024-03-22 18:15:40 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `MS_photos` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV957788'
ERROR - 2024-03-22 18:15:45 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `MS_photos` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV957788'
ERROR - 2024-03-22 18:15:49 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `MS_photos` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV957788'
ERROR - 2024-03-22 18:15:50 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `MS_photos` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV957788'
ERROR - 2024-03-22 18:15:51 --> Query error: Table 'kammavaari_demo.MS_photos' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `MS_photos` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV957788'
ERROR - 2024-03-22 18:15:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:16:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:16:18 --> Query error: Table 'kammavaari_demo.ms_photoss' doesn't exist - Invalid query: SELECT *, `p`.`profile_id`, `p`.`id`
FROM `ms_photoss` as `u`
INNER JOIN `tbl_primary_info` as `p` ON `u`.`MS_id`=`p`.`id`
WHERE `p`.`profile_id` = 'KV967746'
ERROR - 2024-03-22 18:16:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:16:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:16:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:16:56 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:16:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:17:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:17:00 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:17:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:17:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:17:29 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:18:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:18:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:18:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:18:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:19:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:19:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:19:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:19:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:19:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:19:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:19:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:21:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:21:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:21:52 --> Query error: Table 'kammavaari_demo.MS_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `to_msid`
FROM `MS_shortlist_viewedd_ignored`
WHERE `from_msid` = '788 '
ERROR - 2024-03-22 18:21:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:22:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:06 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:07 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:08 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:23:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:17 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:23:51 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:23:53 --> Query error: Table 'kammavaari_demo.MS_shortlist_viewedd_ignored' doesn't exist - Invalid query: SELECT `to_msid`
FROM `MS_shortlist_viewedd_ignored`
WHERE `from_msid` = '716 '
ERROR - 2024-03-22 18:23:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:24:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:24:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:24:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:26:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:28:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:28:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:28:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:28:51 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:29:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:29:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:29:26 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 18:29:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:29:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:29:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:30:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:30:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:30:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:30:47 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:30:47 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:32:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:34:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:34:25 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:34:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:34:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 18:34:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:36:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:37:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-03-22 18:38:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:39:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:40:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:40:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:42:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:42:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:42:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:42:40 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:43:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:43:31 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-03-22 18:44:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:44:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-03-22 18:44:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:45:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:45:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:47:43 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 18:50:02 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 18:50:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:50:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:50:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:51:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 18:54:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:57:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:57:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:57:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:57:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:57:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:57:30 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:57:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:57:31 --> 404 Page Not Found: /index
ERROR - 2024-03-22 18:59:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 18:59:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 19:13:39 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 19:40:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 19:40:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 19:41:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-03-22 19:44:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 20:03:53 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 20:04:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 20:04:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 20:04:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:39:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:40:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:40:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:40:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-03-22 21:41:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:41:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-03-22 21:41:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:42:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-03-22 21:42:47 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:43:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:43:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-03-22 21:44:06 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:44:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 21:44:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 21:44:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 21:44:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 21:44:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 21:44:09 --> 404 Page Not Found: /index
ERROR - 2024-03-22 21:45:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:45:31 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:46:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:46:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:52:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:52:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:53:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:53:21 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:53:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:53:45 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:53:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:55:31 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:55:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:55:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:55:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:56:11 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:56:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:57:03 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:57:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:57:18 --> Query error: Incorrect DATETIME value: '1-4-2023' - Invalid query: SELECT `p`.*, `r`.`caste`, `r`.`height`, `r`.`star`, `r`.`time_of_birth`, `r`.`raasi`, `prp`.`property_value`, `e`.`occupation`, `e`.`education_degree`, `e`.`visatype`, `e`.`city`, `e`.`country`, `e`.`annual_income`, `pfs`.`payment_status`, `pfs`.`profilesetting_id` as `pfs_id`, `pfs`.`last_call_updated`, `adm`.`username` as `profile_owner`
FROM `tbl_primary_info` as `p`
LEFT JOIN `tbl_religion_info` as `r` ON `p`.`id`=`r`.`user_id`
LEFT JOIN `ms_property_info` as `prp` ON `p`.`id`=`prp`.`ms_id`
LEFT JOIN `tbl_professional_info` as `e` ON `p`.`id`=`e`.`user_id`
LEFT JOIN `ms_profilesetting` as `pfs` ON `p`.`id`=`pfs`.`ms_id`
LEFT JOIN `tbl_admin_data` as `adm` ON `pfs`.`profileowner`=`adm`.`id`
WHERE `p`.`gender` = 'male'
AND `p`.`status` = '1'
AND `pfs`.`payment_status` IN(0, 1)
AND `p`.`registered_on` >= '1-4-2023'
AND `p`.`registered_on` <= '15-3-2024'
AND `adm`.`id` = '7'
GROUP BY `p`.`id`
ERROR - 2024-03-22 21:57:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-03-22 21:57:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:58:30 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:58:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:59:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:59:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 21:59:45 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 22:00:15 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 22:00:48 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-03-22 22:01:02 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 22:03:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:13 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:14 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 22:03:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:14 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:15 --> 404 Page Not Found: /index
ERROR - 2024-03-22 22:03:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-03-22 22:03:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
