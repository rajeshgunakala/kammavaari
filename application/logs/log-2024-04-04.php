<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-04 09:08:44 --> 404 Page Not Found: /index
ERROR - 2024-04-04 09:09:13 --> Query error: Unknown column 'online' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tbl_current_login`
WHERE `online` = 'Yes'
ERROR - 2024-04-04 09:09:14 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:09:23 --> Query error: Unknown column 'e.online' in 'field list' - Invalid query: SELECT a.id, a.first_name, b.image,c.applicationphotopath,e.last_activity,e.online
                                         FROM tbl_primary_info AS a 
                                         LEFT JOIN `upload-images` AS b ON a.id = b.user_id
                                         LEFT JOIN  ms_photos AS c  ON a.id = c.MS_id
                                         INNER JOIN ms_profilesetting AS d ON a.id = d.ms_id
                                         LEFT JOIN tbl_current_login  AS e  ON a.id = e.user_id
                                         WHERE d.profileowner = '11'
                                         GROUP BY a.id, a.first_name, b.image, c.applicationphotopath, e.last_activity, e.online
                                         ORDER BY e.online DESC 
                                         LIMIT 50
ERROR - 2024-04-04 09:12:38 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-04 09:12:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:13:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:13:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-04-04 09:13:47 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:14:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:14:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:14:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/ws
ERROR - 2024-04-04 09:14:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:15:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:15:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:15:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:19:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:56:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 09:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'limit 1' at line 4 - Invalid query:  SELECT `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
        FROM `tbl_primary_info` as `p` 
        LEFT JOIN `ms_photos` as `u` ON `p`.`id`=`u`.`MS_id` 
        WHERE u.ms_id=  limit 1 
ERROR - 2024-04-04 10:01:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'limit 1' at line 4 - Invalid query:  SELECT `u`.`photoname`, `u`.`MS_id`, `u`.`ismain`, `u`.`isactive`, `u`.`applicationphotopath`
        FROM `tbl_primary_info` as `p` 
        LEFT JOIN `ms_photos` as `u` ON `p`.`id`=`u`.`MS_id` 
        WHERE u.ms_id=  limit 1 
ERROR - 2024-04-04 10:03:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:05:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:09:50 --> 404 Page Not Found: /index
ERROR - 2024-04-04 10:10:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:10:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:10:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:10:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:11:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:11:46 --> 404 Page Not Found: /index
ERROR - 2024-04-04 10:11:46 --> 404 Page Not Found: /index
ERROR - 2024-04-04 10:12:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:12:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-04-04 10:13:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:14:33 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:14:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:14:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:17:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:19:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:25:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:25:56 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:26:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:26:15 --> 404 Page Not Found: /index
ERROR - 2024-04-04 10:26:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 10:36:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:36:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 10:36:35 --> 404 Page Not Found: /index
ERROR - 2024-04-04 10:36:46 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 10:38:13 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:38:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 10:40:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 10:42:38 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 10:44:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 10:49:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 10:49:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:12:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:12:58 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:13:32 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:14:53 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:16:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:16:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:18:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:19:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:19:36 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:21:43 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:22:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:29:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 11:32:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 11:37:16 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 11:37:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 11:37:35 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 11:52:34 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 11:55:45 --> 404 Page Not Found: /index
ERROR - 2024-04-04 12:22:22 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 12:29:31 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 12:31:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 12:32:05 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 12:34:04 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 12:39:18 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-04-04 12:39:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 12:39:49 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-04-04 13:05:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:06:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:06:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:08:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:10:57 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:11:07 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:11:15 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:11:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 13:11:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin/Updatepayment
ERROR - 2024-04-04 13:13:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:14:25 --> 404 Page Not Found: ../modules/admin/controllers/Admin_payment/images
ERROR - 2024-04-04 13:15:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:16:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:17:12 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:18:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:21:28 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:21:51 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:22:02 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:29:27 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:29:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin_search/images
ERROR - 2024-04-04 13:29:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:29:59 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:29:59 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:29:59 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:30:08 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:30:08 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:08 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:20 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:30:20 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:20 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:37 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:30:37 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:37 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:40 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:30:40 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:40 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:44 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:30:52 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:30:52 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:52 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:30:53 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:31:23 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:31:24 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:31:24 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:31:26 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:31:26 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:31:26 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:33:31 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:35:22 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:38:14 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:43:07 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:45:21 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:45:26 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:45:55 --> 404 Page Not Found: ../modules/admin/controllers/Admin_pv/images
ERROR - 2024-04-04 13:48:46 --> Query error: Undeclared variable: images - Invalid query: SELECT p.*, r.caste, r.height, r.star, r.time_of_birth, r.raasi, prp.property_value, e.occupation,
e.education_degree,e.visatype,e.city,e.country,e.annual_income,pfs.payment_status, pfs.ms_usertype,
pfs.profilesetting_id AS pfs_id,   pfs.last_call_updated, adm.username AS profile_owner
FROM
tbl_primary_info AS p
LEFT JOIN
tbl_religion_info AS r ON p.id = r.user_id
LEFT JOIN
ms_property_info AS prp ON p.id = prp.ms_id
LEFT JOIN
tbl_professional_info AS e ON p.id = e.user_id
LEFT JOIN
ms_profilesetting AS pfs ON p.id = pfs.ms_id
LEFT JOIN
tbl_admin_data AS adm ON pfs.profileowner = adm.id
WHERE
  adm.id != 0  AND  p.status NOT IN (2,3,4)     
GROUP BY
p.id  limit 50 OFFSET images
ERROR - 2024-04-04 13:49:33 --> Query error: Undeclared variable: images - Invalid query: SELECT p.*, r.caste, r.height, r.star, r.time_of_birth, r.raasi, prp.property_value, e.occupation,
e.education_degree,e.visatype,e.city,e.country,e.annual_income,pfs.payment_status, pfs.ms_usertype,
pfs.profilesetting_id AS pfs_id,   pfs.last_call_updated, adm.username AS profile_owner
FROM
tbl_primary_info AS p
LEFT JOIN
tbl_religion_info AS r ON p.id = r.user_id
LEFT JOIN
ms_property_info AS prp ON p.id = prp.ms_id
LEFT JOIN
tbl_professional_info AS e ON p.id = e.user_id
LEFT JOIN
ms_profilesetting AS pfs ON p.id = pfs.ms_id
LEFT JOIN
tbl_admin_data AS adm ON pfs.profileowner = adm.id
WHERE
  adm.id != 0  AND  p.status NOT IN (2,3,4)     
GROUP BY
p.id  limit 50 OFFSET images
ERROR - 2024-04-04 13:50:50 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:52:01 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:55:41 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:57:24 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:58:17 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:42 --> 404 Page Not Found: /index
ERROR - 2024-04-04 13:58:54 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:59:02 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 13:59:15 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 14:02:00 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 14:02:09 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 14:06:02 --> Query error: Table 'kammavaari_duplicate.user_share_activity' doesn't exist - Invalid query: 
                SELECT A.activity_id,B.profile_id as receive_cust_id,C.profile_id as send_cust_id, B.first_name as receive_cust,C.first_name as send_cust_name,D.name as send_by,A.send_Date
                FROM user_share_activity AS A
                LEFT JOIN tbl_primary_info AS B ON A.to_msID = B.profile_id
                LEFT JOIN tbl_primary_info AS C ON A.from_msID = C.id
                INNER JOIN tbl_admin_data AS D ON A.sentby_ID = D.id
                
         
ERROR - 2024-04-04 14:06:36 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-04 14:07:42 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 14:09:17 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-04 14:09:29 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-04 14:11:08 --> 404 Page Not Found: ../modules/admin/controllers/Chat_users/images
ERROR - 2024-04-04 14:15:29 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 14:26:10 --> 404 Page Not Found: ../modules/admin/controllers/Admin/images
ERROR - 2024-04-04 15:56:39 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:18:48 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:27:08 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:47:37 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:47:49 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:47:49 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:47:49 --> 404 Page Not Found: /index
ERROR - 2024-04-04 16:47:49 --> 404 Page Not Found: /index
ERROR - 2024-04-04 21:26:24 --> 404 Page Not Found: /index
