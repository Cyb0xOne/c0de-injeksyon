<?php

global $evil_functions_array;
$evil_functions_array = array(
    'contents', 'file_get_contents', 'file_put_contents', 'fwrite','fopen', 'stream_context_create',
    'escapeshellcmd', 'escapeshellarg', 'passthru', 'shell_exec', 'exec', 'system', 'eval', 'apache_child_terminate',
    'apache_setenv', 'bindtextdomain', 'bind_textdomain_codeset', 'bzclose', 'bzcompress', 'bzdecompress', 'bzerrno',
    'bzerror', 'bzerrstr', 'bzflush', 'bzopen', 'bzread', 'bzwrite', 'chdir', 'checkdnsrr', 'chgrp', 'chmod', 'chown',
    'chroot', 'clearstatcache', 'closedir', 'closelog', 'connection_aborted', 'connection_status', 'copy', 'create_function',
    'curl_close', 'curl_errno', 'curl_error', 'curl_exec', 'curl_getinfo', 'curl_init', 'curl_setopt', 'curl_version',
    'dbase_add_record', 'dbase_close', 'dbase_create', 'dbase_delete_record', 'dbase_get_record', 'dbase_get_record_with_names',
    'dbase_numfields', 'dbase_numrecords', 'dbase_open', 'dbase_pack', 'dbase_replace_record', 'dba_close', 'dba_delete', 'dba_exists',
    'dba_fetch', 'dba_firstkey', 'dba_handlers', 'dba_insert', 'dba_list', 'dba_nextkey', 'dba_open', 'dba_optimize', 'dba_popen',
    'dba_replace', 'dba_sync', 'dblist', 'dbmclose', 'dbmdelete', 'dbmexists', 'dbmfetch', 'dbmfirstkey', 'dbminsert', 'dbmnextkey',
    'dbmopen', 'dbmreplace', 'dcgettext', 'dcngettext', 'debug_backtrace', 'debug_print_backtrace', 'define_syslog_variables', 'delete',
    'dgettext', 'dir', 'diskfreespace', 'disk_free_space', 'disk_total_space', 'dl', 'dngettext', 'domxml_open_file', 'error_log', 'escapeshellarg',
    'escapeshellcmd', 'exec', 'exif_read_data', 'fclose', 'feof', 'fflush', 'fgetc', 'fgetcsv', 'fgets', 'fgetss', 'file', 'fileatime', 'filectime',
    'filegroup', 'fileinode', 'filemtime', 'fileowner', 'fileperms', 'filesize', 'filetype', 'file_exists', 'xfile_get_contents', 'xfile_put_contents',
    'flock', 'fmod', 'fnmatch', 'fopen', 'fp', 'fpassthru', 'fput', 'fputcsv', 'fputs', 'fread', 'frenchtojd', 'fscanf', 'fseek', 'fsockopen', 'fstat',
    'ftell', 'ftok', 'ftp_cdup', 'ftp_chdir', 'ftp_close', 'ftp_connect', 'ftp_delete', 'ftp_exec', 'ftp_fget', 'ftp_fput', 'ftp_get', 'ftp_get_option',
    'ftp_login', 'ftp_mdtm', 'ftp_mkdir', 'ftp_nb_continue', 'ftp_nb_fget', 'ftp_nb_fput', 'ftp_nb_get', 'ftp_nb_put', 'ftp_nlist', 'ftp_pasv', 'ftp_put',
    'ftp_pwd', 'ftp_quit', 'ftp_raw', 'ftp_rawlist', 'ftp_rename', 'ftp_rmdir', 'ftp_set_option', 'ftp_site', 'ftp_size', 'ftp_ssl_connect', 'ftp_systype',
    'ftruncate', 'fwrite', 'getcwd', 'getenv', 'getlastmod', 'getmxrr', 'getmygid', 'getmyinode', 'getmypid', 'getmyuid', 'getprotobyname', 'getprotobynumber',
    'getrusage', 'gettext', 'get_cfg_var', 'get_current_user', 'get_defined_funcs', 'get_include_path', 'get_loaded_extensions', 'gzclose', 'gzcompress', 'gzdeflate',
    'gzencode', 'gzeof', 'gzfile', 'gzgetc', 'gzgets', 'gzgetss', 'gzinflate', 'gzopen', 'gzpassthru', 'gzputs', 'gzread', 'gzrewind', 'gzseek', 'gztell',
    'gzuncompress', 'gzwrite', 'highlight_file', 'html_doc_file', 'imagecreate', 'imagecreatefromgd', 'imagecreatefromgd2', 'imagecreatefromgd2part', 'imagecreatefromgif',
    'imagecreatefromjpeg', 'imagecreatefrompng', 'imagecreatefromstring', 'imagecreatefromwbmp', 'imagecreatefromxbm', 'imap_8bit', 'imap_alerts', 'imap_append',
    'imap_base64', 'imap_binary', 'imap_body', 'imap_bodystruct', 'imap_check', 'imap_clearflag_full', 'imap_close', 'imap_create', 'imap_createmailbox',
    'imap_delete', 'imap_deletemailbox', 'imap_errors', 'imap_expunge', 'imap_fetchbody', 'imap_fetchheader', 'imap_fetchstructure', 'imap_fetchtext', 'imap_fetch_overview',
    'imap_getmailboxes', 'imap_getsubscribed', 'imap_get_quota', 'imap_get_quotaroot', 'imap_header', 'imap_headerinfo', 'imap_headers', 'imap_last_error', 'imap_list',
    'imap_listmailbox', 'imap_listsubscribed', 'imap_lsub', 'imap_mail', 'imap_mailboxmsginfo', 'imap_mail_compose', 'imap_mail_copy', 'imap_mail_move', 'imap_mime_header_decode',
    'imap_msgno', 'imap_num_msg', 'imap_num_recent', 'imap_open', 'imap_ping', 'imap_qprint', 'imap_rename', 'imap_renamemailbox', 'imap_reopen', 'imap_rfc822_parse_adrlist',
    'imap_rfc822_parse_headers', 'imap_rfc822_write_address', 'imap_scan', 'imap_scanmailbox', 'imap_search', 'imap_setacl', 'imap_setflag_full', 'imap_set_quota', 'imap_sort',
    'imap_status', 'imap_subscribe', 'imap_thread', 'imap_timeout', 'imap_uid', 'imap_undelete', 'imap_unsubscribe', 'imap_utf7_decode', 'imap_utf7_encode', 'imap_utf8', 'include',
    'include_once', 'ini_alter', 'ini_get', 'ini_get_all', 'ini_restore', 'ini_set', 'inject_code', 'is_dir', 'is_executable', 'is_file', 'is_link', 'is_readable', 'is_uploaded_file',
    'is_writable', 'is_writeable', 'lchgrp', 'lchown', 'link', 'linkinfo', 'lstat', 'magic_quotes_runtime', 'mail', 'md5_file', 'mkdir', 'move_uploaded_file', 'mysql',
    'mysql_affected_rows', 'mysql_client_encoding', 'mysql_close', 'mysql_connect', 'mysql_data_seek', 'mysql_dbname', 'mysql_db_name', 'mysql_db_query',
    'mysql_errno', 'mysql_error', 'mysql_escape_string', 'mysql_fetch_array', 'mysql_fetch_assoc', 'mysql_fetch_field', 'mysql_fetch_lengths',
    'mysql_fetch_object', 'mysql_fetch_row', 'mysql_fieldflags', 'mysql_fieldlen', 'mysql_fieldname', 'mysql_fieldtable', 'mysql_fieldtype',
    'mysql_field_flags', 'mysql_field_len', 'mysql_field_name', 'mysql_field_seek', 'mysql_field_table', 'mysql_field_type', 'mysql_freeresult',
    'mysql_free_result', 'mysql_get_client_info', 'mysql_get_host_info', 'mysql_get_proto_info', 'mysql_get_server_info', 'mysql_info', 'mysql_insert_id',
    'mysql_listdbs', 'mysql_listfields', 'mysql_listtables', 'mysql_list_dbs', 'mysql_list_fields', 'mysql_list_processes', 'mysql_list_tables', 'mysql_numfields',
    'mysql_numrows', 'mysql_num_fields', 'mysql_num_rows', 'mysql_pconnect', 'mysql_ping', 'mysql_query', 'mysql_real_escape_string', 'mysql_result', 'mysql_selectdb',
    'mysql_select_db', 'mysql_stat', 'mysql_tablename', 'mysql_table_name', 'mysql_thread_id', 'mysql_unbuffered_query', 'ngettext', 'opendir', 'openlog', 'openssl_csr_export',
    'openssl_csr_export_to_file', 'openssl_csr_new', 'openssl_csr_sign', 'openssl_error_string', 'openssl_free_key', 'openssl_get_privatekey', 'openssl_get_publickey', 'openssl_open',
    'openssl_pkcs7_decrypt', 'openssl_pkcs7_encrypt', 'openssl_pkcs7_sign', 'openssl_pkcs7_verify', 'openssl_pkey_export', 'openssl_pkey_export_to_file', 'openssl_pkey_free',
    'openssl_pkey_get_private', 'openssl_pkey_get_public', 'openssl_pkey_new', 'openssl_private_decrypt', 'openssl_private_encrypt', 'openssl_public_decrypt', 'openssl_public_encrypt',
    'openssl_seal', 'openssl_sign', 'openssl_verify', 'openssl_x509_checkpurpose', 'openssl_x509_check_private_key', 'openssl_x509_export', 'openssl_x509_export_to_file',
    'openssl_x509_free', 'openssl_x509_parse', 'openssl_x509_read', 'output_add_rewrite_var', 'output_reset_rewrite_vars', 'parse_ini_file', 'passthru', 'pathinfo',
    'pclose', 'pfsockopen', 'phpAds_remoteInfo', 'phpAds_XmlRpc', 'phpAds_xmlrpcDecode', 'phpAds_xmlrpcEncode', 'phpinfo', 'php_uname', 'popen', 'posix_getpwuid', 'posix_kill',
    'posix_mkfifo', 'posix_setpgid', 'posix_setsid', 'posix_setuid', 'posix_uname', 'proc_close', 'proc_get_status', 'proc_nice', 'proc_open', 'proc_terminate', 'readdir', 'readfile',
    'readgzfile', 'readlink', 'realpath', 'register_shutdown_function', 'register_tick_function', 'rename', 'require', 'require_once', 'restore_error_handler', 'restore_exception_handler',
    'restore_include_path', 'rewind', 'rewinddir', 'rmdir', 'scandir', 'session_cache_expire', 'session_cache_limiter', 'session_commit', 'session_decode', 'session_destroy',
    'session_encode', 'session_get_cookie_params', 'session_id', 'session_is_registered', 'session_module_name', 'session_name', 'session_regenerate_id', 'session_register',
    'session_save_path', 'session_set_cookie_params', 'session_set_save_handler', 'session_start', 'session_unregister', 'session_unset', 'session_write_close', 'xsetcookie',
    'set_content', 'set_error_handler', 'set_exception_handler', 'set_file_buffer', 'set_include_path', 'set_magic_quotes_runtime', 'set_socket_blocking', 'set_time_limit',
    'sha1_file', 'shell_exec', 'shmop_close', 'shmop_delete', 'shmop_open', 'shmop_read', 'shmop_size', 'shmop_write', 'show_source', 'socket_get_status', 'socket_set_blocking',
    'socket_set_timeout', 'sprintf', 'sqlite_array_query', 'sqlite_busy_timeout', 'sqlite_changes', 'sqlite_close', 'sqlite_column', 'sqlite_create_aggregate', 'sqlite_create_function',
    'sqlite_current', 'sqlite_error_string', 'sqlite_escape_string', 'sqlite_exec', 'sqlite_fetch_all', 'sqlite_fetch_array', 'sqlite_fetch_single', 'sqlite_fetch_string',
    'sqlite_field_name', 'sqlite_has_more', 'sqlite_last_error', 'sqlite_last_insert_rowid', 'sqlite_libencoding', 'sqlite_libversion', 'sqlite_next', 'sqlite_num_fields',
    'sqlite_num_rows', 'sqlite_open', 'sqlite_popen', 'sqlite_query', 'sqlite_rewind', 'sqlite_seek', 'sqlite_single_query', 'sqlite_udf_decode_binary', 'sqlite_udf_encode_binary',
    'sqlite_unbuffered_query', 'sql_regcase', 'sscanf', 'stat', 'stream_context_create', 'stream_context_get_options', 'stream_context_set_option', 'stream_context_set_params',
    'stream_filter_append', 'stream_filter_prepend', 'stream_get_meta_data', 'stream_register_wrapper', 'stream_select', 'stream_set_blocking', 'stream_set_timeout',
    'stream_set_write_buffer', 'stream_wrapper_register', 'symlink', 'syslog', 'system', 'tempnam', 'textdomain', 'tmpfile', 'touch', 'umask', 'xunlink', 'unpack',
    'unregister_tick_function', 'vprintf', 'vsprintf', 'wddx_add_vars', 'wddx_deserialize', 'wddx_packet_end', 'wddx_packet_start', 'wddx_serialize_value', 'wddx_serialize_vars',
    'xmldocfile', 'xmlrpc_entity_decode', 'zip_close', 'zip_entry_close', 'zip_entry_compressedsize', 'zip_entry_compressionmethod', 'zip_entry_filesize', 'zip_entry_name',
    'zip_entry_open', 'zip_entry_read', 'zip_open', 'zip_read', 'zlib_get_coding_type', 'zzz_error_reporting', 'zzz_eval', 'zzz_getenv', 'zzz_get_extension_funcs',
    'zzz_get_included_files', 'zzz_get_magic_quotes_gpc', 'zzz_get_magic_quotes_runtime', 'zzz_get_required_files', 'zzz_parse_ini_string', 'zzz_parse_url',
    'base64_encode', 'base64_decode', '_server', '$_server', '$_env', 'ffi', 'cdef', 'eval', 'assert', 'preg_replace', 'preg_match', 'preg_match_all',
    'preg_split', 'read', 'readflag ak mw ben dera', '\\x', '\\', 'chr', 'ord', 'hex2bin', 'bin2hex', 'strrev', 'str_rot13', 'str_shuffle', 'str_split',
);

function strposa($needle, $haystack, $offset=0): bool
{
    foreach($haystack as $each_method) {
        if(preg_match("~\b". $each_method ."\b~", $needle)) {
            return true;
        }
    }
    return false;
}