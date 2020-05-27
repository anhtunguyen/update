<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2015 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 07 Mar 2015 03:43:56 GMT
 */

if (!defined('NV_IS_UPDATE')) {
    die('Stop!!!');
}

$nv_update_config = [];

// Kieu nang cap 1: Update; 2: Upgrade
$nv_update_config['type'] = 1;

// ID goi cap nhat
$nv_update_config['packageID'] = 'NVUD4309';

// Cap nhat cho module nao, de trong neu la cap nhat NukeViet, ten thu muc module neu la cap nhat module
$nv_update_config['formodule'] = '';

// Thong tin phien ban, tac gia, ho tro
$nv_update_config['release_date'] = 1590570000;
$nv_update_config['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$nv_update_config['support_website'] = 'https://github.com/nukeviet/update/tree/to-4.3.09';
$nv_update_config['to_version'] = '4.3.09';
$nv_update_config['allow_old_version'] = ['4.3.00', '4.3.01', '4.3.02', '4.3.03', '4.3.04', '4.3.05', '4.3.06', '4.3.07', '4.3.08', '4.3.09'];

// 0:Nang cap bang tay, 1:Nang cap tu dong, 2:Nang cap nua tu dong
$nv_update_config['update_auto_type'] = 1;

$nv_update_config['lang'] = [];
$nv_update_config['lang']['vi'] = [];
$nv_update_config['lang']['en'] = [];

// Tiếng Việt
$nv_update_config['lang']['vi']['nv_up_modnews4301'] = 'Cập nhật module news lên 4.3.01';
$nv_update_config['lang']['vi']['nv_up_modlang4301'] = 'Cập nhật module language lên 4.3.01';
$nv_update_config['lang']['vi']['nv_up_modusers4302'] = 'Cập nhật module users lên 4.3.02';
$nv_update_config['lang']['vi']['nv_up_modcontact4302'] = 'Cập nhật module contact lên 4.3.02';
$nv_update_config['lang']['vi']['nv_up_sys4302'] = 'Cập nhật hệ thống lên 4.3.02';
$nv_update_config['lang']['vi']['nv_up_delfile4302'] = 'Xóa các file thừa v4.3.02';
$nv_update_config['lang']['vi']['nv_up_delfile4303'] = 'Xóa các file thừa v4.3.03';
$nv_update_config['lang']['vi']['nv_up_delfile4304'] = 'Xóa các file thừa v4.3.04';
$nv_update_config['lang']['vi']['nv_up_googleplus4305'] = 'Gỡ bỏ Google Plus';
$nv_update_config['lang']['vi']['nv_up_modusers4305'] = 'Cập nhật module users lên 4.3.05';
$nv_update_config['lang']['vi']['nv_up_sys4305'] = 'Cập nhật hệ thống lên 4.3.05';
$nv_update_config['lang']['vi']['nv_up_modusers4306'] = 'Cập nhật module users lên 4.3.06';
$nv_update_config['lang']['vi']['nv_up_modnews4306'] = 'Cập nhật module news lên 4.3.06';
$nv_update_config['lang']['vi']['nv_up_sys4306'] = 'Cập nhật hệ thống lên 4.3.06';
$nv_update_config['lang']['vi']['nv_up_modusers4307'] = 'Cập nhật module users lên 4.3.07';
$nv_update_config['lang']['vi']['nv_up_sys4307'] = 'Cập nhật hệ thống lên 4.3.07';
$nv_update_config['lang']['vi']['nv_up_sys4308'] = 'Cập nhật hệ thống lên 4.3.08';
$nv_update_config['lang']['vi']['nv_up_finish'] = 'Cập nhật CSDL lên phiên bản 4.3.09';

// English
$nv_update_config['lang']['en']['nv_up_modnews4301'] = 'Update module news to 4.3.01';
$nv_update_config['lang']['en']['nv_up_modlang4301'] = 'Update module language to 4.3.01';
$nv_update_config['lang']['en']['nv_up_modusers4302'] = 'Update module users to 4.3.02';
$nv_update_config['lang']['en']['nv_up_modcontact4302'] = 'Update module contact to 4.3.02';
$nv_update_config['lang']['en']['nv_up_sys4302'] = 'Update system to 4.3.02';
$nv_update_config['lang']['en']['nv_up_delfile4302'] = 'Delete unused files v4.3.02';
$nv_update_config['lang']['en']['nv_up_delfile4303'] = 'Delete unused files v4.3.03';
$nv_update_config['lang']['en']['nv_up_delfile4304'] = 'Delete unused files v4.3.04';
$nv_update_config['lang']['en']['nv_up_googleplus4305'] = 'Remove Google Plus';
$nv_update_config['lang']['en']['nv_up_modusers4305'] = 'Update module users to 4.3.05';
$nv_update_config['lang']['en']['nv_up_sys4305'] = 'Update system to 4.3.05';
$nv_update_config['lang']['en']['nv_up_modusers4306'] = 'Update module users to 4.3.06';
$nv_update_config['lang']['en']['nv_up_modnews4306'] = 'Update module news to 4.3.06';
$nv_update_config['lang']['en']['nv_up_sys4306'] = 'Update system to 4.3.06';
$nv_update_config['lang']['en']['nv_up_modusers4307'] = 'Update module users to 4.3.07';
$nv_update_config['lang']['en']['nv_up_sys4307'] = 'Update system to 4.3.07';
$nv_update_config['lang']['en']['nv_up_sys4308'] = 'Update system to 4.3.08';
$nv_update_config['lang']['en']['nv_up_finish'] = 'Update to new version 4.3.09';

$nv_update_config['tasklist'] = [];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.01',
    'rq' => 2,
    'l' => 'nv_up_modnews4301',
    'f' => 'nv_up_modnews4301'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.01',
    'rq' => 2,
    'l' => 'nv_up_modlang4301',
    'f' => 'nv_up_modlang4301'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.02',
    'rq' => 2,
    'l' => 'nv_up_modusers4302',
    'f' => 'nv_up_modusers4302'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.02',
    'rq' => 2,
    'l' => 'nv_up_modcontact4302',
    'f' => 'nv_up_modcontact4302'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.02',
    'rq' => 2,
    'l' => 'nv_up_sys4302',
    'f' => 'nv_up_sys4302'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.02',
    'rq' => 2,
    'l' => 'nv_up_delfile4302',
    'f' => 'nv_up_delfile4302'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.03',
    'rq' => 2,
    'l' => 'nv_up_delfile4303',
    'f' => 'nv_up_delfile4303'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.04',
    'rq' => 2,
    'l' => 'nv_up_delfile4304',
    'f' => 'nv_up_delfile4304'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.05',
    'rq' => 2,
    'l' => 'nv_up_googleplus4305',
    'f' => 'nv_up_googleplus4305'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.05',
    'rq' => 2,
    'l' => 'nv_up_modusers4305',
    'f' => 'nv_up_modusers4305'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.05',
    'rq' => 2,
    'l' => 'nv_up_sys4305',
    'f' => 'nv_up_sys4305'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.06',
    'rq' => 2,
    'l' => 'nv_up_modusers4306',
    'f' => 'nv_up_modusers4306'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.06',
    'rq' => 2,
    'l' => 'nv_up_modnews4306',
    'f' => 'nv_up_modnews4306'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.06',
    'rq' => 2,
    'l' => 'nv_up_sys4306',
    'f' => 'nv_up_sys4306'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.07',
    'rq' => 2,
    'l' => 'nv_up_modusers4307',
    'f' => 'nv_up_modusers4307'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.07',
    'rq' => 2,
    'l' => 'nv_up_sys4307',
    'f' => 'nv_up_sys4307'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.08',
    'rq' => 2,
    'l' => 'nv_up_sys4308',
    'f' => 'nv_up_sys4308'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.3.09',
    'rq' => 2,
    'l' => 'nv_up_finish',
    'f' => 'nv_up_finish'
];

/**
 * nv_up_modnews4301()
 *
 * @return
 *
 */
function nv_up_modnews4301()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường từ khóa
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_detail ADD keywords VARCHAR(255) NOT NULL DEFAULT '' AFTER bodyhtml;");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'keywords_tag', '1');");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * nv_up_modlang4301()
 *
 * @return
 *
 */
function nv_up_modlang4301()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    try {
        $db->query("ALTER TABLE " . NV_LANGUAGE_GLOBALTABLE . "_file CHANGE langtype langtype VARCHAR(50) NOT NULL DEFAULT 'lang_module';");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    try {
        $db->query("ALTER TABLE " . NV_LANGUAGE_GLOBALTABLE . " ADD langtype VARCHAR(50) NOT NULL DEFAULT 'lang_module' AFTER idfile;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    try {
        $db->query("ALTER TABLE " . NV_LANGUAGE_GLOBALTABLE . " DROP INDEX filelang, ADD UNIQUE filelang (idfile, lang_key, langtype) USING BTREE;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    // Cập nhật lại các lang key
    try {
        $sql = "SELECT idfile, langtype FROM " . NV_LANGUAGE_GLOBALTABLE . "_file";
        $result = $db->query($sql);
        while ($row = $result->fetch()) {
            $db->query("UPDATE " . NV_LANGUAGE_GLOBALTABLE . " SET langtype=" . $db->quote($row['langtype']) . " WHERE idfile=" . $row['idfile']);
        }
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    return $return;
}

/**
 * nv_up_modusers4302()
 *
 * @return
 *
 */
function nv_up_modusers4302()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường email_verification_time
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . " ADD email_verification_time INT(11) NOT NULL DEFAULT '-1' COMMENT '-3: Tài khoản sys, -2: Admin kích hoạt, -1 không cần kích hoạt, 0: Chưa xác minh, > 0 thời gian xác minh' AFTER safekey;");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * nv_up_modcontact4302()
 *
 * @return
 *
 */
function nv_up_modcontact4302()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'contact'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường từ khóa
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'sendcopymode', '0');");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'bodytext', '');");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * nv_up_sys4302()
 *
 * @return
 *
 */
function nv_up_sys4302()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Cấu hình giao diện cho từng quản trị
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . " ADD admin_theme VARCHAR(100) NOT NULL DEFAULT '' AFTER main_module;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    // Chức năng debug
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'define', 'nv_debug', '0');");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    // Chức năng cấu hình IP không kiểm tra flood
    try {
        $db->query("RENAME TABLE " . $db_config['prefix'] . "_banip TO " . $db_config['prefix'] . "_ips;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_ips ADD type tinyint(4) UNSIGNED NOT NULL DEFAULT '0' AFTER id;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_ips DROP INDEX ip, ADD UNIQUE ip (ip, type) USING BTREE;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    // Xem trước giao diện
    foreach ($global_config['allow_sitelangs'] as $lang) {
        try {
            $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', 'global', 'preview_theme', '');");
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
        }
    }

    return $return;
}

/**
 * nv_up_delfile4302()
 *
 * @return
 *
 */
function nv_up_delfile4302()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    if (file_exists(NV_ROOTDIR . '/vendor/gregwar/captcha/src/Gregwar/Captcha/CaptchaBuilder.php')) {
        nv_deletefile(NV_ROOTDIR . '/vendor/apache', true);
        nv_deletefile(NV_ROOTDIR . '/vendor/facebook', true);
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/Font', true);
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/autoload.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/CaptchaBuilder.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/CaptchaBuilderInterface.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/ImageFileHandler.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/PhraseBuilder.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha/PhraseBuilderInterface.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/symfony/css-selector', true);
        nv_deletefile(NV_ROOTDIR . '/vendor/vinades/nukeviet/Cache/CRedis.php');
        nv_deletefile(NV_ROOTDIR . '/vendor/vinades/nukeviet/Cache/Memcacheds.php');
    }

    return $return;
}

/**
 * nv_up_delfile4303()
 *
 * @return
 *
 */
function nv_up_delfile4303()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/compatibility.js');
    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/l10n.js');

    nv_deletefile(NV_ROOTDIR . '/modules/contact/admin/content.php');
    nv_deletefile(NV_ROOTDIR . '/themes/admin_default/modules/contact/content.tpl');
    nv_deletefile(NV_ROOTDIR . '/themes/mobile_default/mobile_default.png');

    return $return;
}

/**
 * nv_up_delfile4303()
 *
 * @return
 *
 */
function nv_up_delfile4304()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha', true);
    nv_deletefile(NV_ROOTDIR . '/vendor/symfony/finder', true);

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_googleplus4305()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Xóa bảng google plus
    try {
        $db->query("DROP TABLE " . $db_config['prefix'] . "_googleplus");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Xóa trường gid bảng modules
        try {
            $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_modules DROP gid");
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
        }

        // Lấy tất cả các module news và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Xóa trường gid
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_detail DROP gid");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }

        // Lấy tất cả các module page và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='page'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Xóa trường gid
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . " DROP gid");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modusers4305()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình
            try {
                $db->query("INSERT IGNORE INTO " . $db_config['prefix'] . "_" . $mod_data . "_config (config, content, edit_time) VALUES ('active_editinfo_censor', '0', " . NV_CURRENTTIME . ")");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
            // Thêm bảng dữ liệu
            try {
                $db->query("CREATE TABLE IF NOT EXISTS " . $db_config['prefix'] . "_" . $mod_data . "_edit (
                    userid mediumint(8) unsigned NOT NULL,
                    lastedit int(11) unsigned NOT NULL DEFAULT '0',
                    info_basic text NOT NULL,
                    info_custom text NOT NULL,
                    PRIMARY KEY (userid)
                ) ENGINE=MyISAM;");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4305()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Tùy chỉnh kiểu lặp lại của cronjobs
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_cronjobs ADD inter_val_type TINYINT(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0: Lặp lại sau thời điểm bắt đầu thực tế, 1:lặp lại sau thời điểm bắt đầu trong CSDL' AFTER inter_val");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modusers4306()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường dữ liệu đối tượng kích hoạt tài khoản
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . " ADD active_obj varchar(50) NOT NULL DEFAULT 'SYSTEM' COMMENT 'SYSTEM, EMAIL, OAUTH:xxxx, quản trị kích hoạt thì lưu userid' AFTER email_verification_time;");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modnews4306()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'identify_cat_change', '0');");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4306()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Gỡ bỏ Google MAP API
    try {
        $db->query("DELETE FROM " . NV_CONFIG_GLOBALTABLE . " WHERE lang='sys' AND module='site' AND config_name='googleMapsAPI';");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    // Chuyển timestamp sang UNIX timestamp
    try {
        $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value = '" . NV_CURRENTTIME . "' WHERE lang = 'sys' AND module = 'global' AND config_name = 'timestamp'");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    // CORS Settings
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'cors_restrict_domains', '1');");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'cors_valid_domains', '');");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modusers4307()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Sửa lỗi module users trên MySQL 8
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . "_field CHANGE system is_system TINYINT(1) UNSIGNED NOT NULL DEFAULT '0';");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
            // Ghi nhận thời gian tham gia nhóm thành viên
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . "_groups_users
                ADD time_requested INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thời gian yêu cầu tham gia' AFTER data,
                ADD time_approved INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thời gian duyệt yêu cầu tham gia' AFTER time_requested;");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4307()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Bật tắt tiện ích kiểm tra, thống kê đường dẫn đến site
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'referer_blocker', '1');");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    // Sửa banners
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_banners_click CHANGE click_ip click_ip VARCHAR(46) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_banners_click ADD id INT(11) unsigned NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id);");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4308()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Chức năng cấu hình các giao diện người dùng ngoài site
    foreach ($global_config['allow_sitelangs'] as $lang) {
        try {
            $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', 'global', 'user_allowed_theme', '');");
        } catch (PDOException $e) {
            trigger_error($e->getMessage());
        }
    }

    // Ghi lại thời điểm sửa thông tin tài khoản lần cuối
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường dữ liệu đối tượng kích hoạt tài khoản
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . " ADD last_update INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thời điểm cập nhật thông tin lần cuối' AFTER last_openid;");
            } catch (PDOException $e) {
                trigger_error($e->getMessage());
            }
        }
    }

    // Cập nhật phần quản lý metatags
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'private_site', '0');");
    } catch (PDOException $e) {
        trigger_error($e->getMessage());
    }

    return $return;
}

/**
 * nv_up_finish()
 *
 * @return
 *
 */
function nv_up_finish()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    nv_deletefile(NV_ROOTDIR . '/admin/seotools/googleplus.php');
    nv_deletefile(NV_ROOTDIR . '/themes/admin_default/modules/seotools/googleplus.tpl');
    nv_deletefile(NV_ROOTDIR . '/themes/default/js/block.global.company_info.js');

    // Cập nhật phiên bản
    $array_modules = [
        'banners',
        'comment',
        'contact',
        'feeds',
        'freecontent',
        'menu',
        'news',
        'page',
        'seek',
        'statistics',
        'users',
        'voting',
        'two-step-verification'
    ];
    $array_themes = [
        'default',
        'mobile_default'
    ];

    $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value='" . $nv_update_config['to_version'] . "' WHERE lang='sys' AND module='global' AND config_name='version'");
    $db->query("UPDATE " . $db_config['prefix'] . "_setup_extensions SET  version='" . $nv_update_config['to_version'] . " " . $nv_update_config['release_date'] . "' WHERE type='module' AND basename IN ('" . implode("', '", $array_modules) . "')");
    $db->query("UPDATE " . $db_config['prefix'] . "_setup_extensions SET  version='" . $nv_update_config['to_version'] . " " . $nv_update_config['release_date'] . "' WHERE type='theme' AND basename IN ('" . implode("', '", $array_themes) . "')");

    nv_save_file_config_global();

    $array_config_rewrite = [
        'rewrite_enable' => $global_config['rewrite_enable'],
        'rewrite_optional' => $global_config['rewrite_optional'],
        'rewrite_endurl' => $global_config['rewrite_endurl'],
        'rewrite_exturl' => $global_config['rewrite_exturl'],
        'rewrite_op_mod' => $global_config['rewrite_op_mod'],
    ];
    nv_rewrite_change($array_config_rewrite);

    return $return;
}
