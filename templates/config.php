<?php
$config->custom->appearance['friendly_attrs'] = array(
        'facsimileTelephoneNumber' => 'Fax',
        'gid'                      => 'Group',
        'mail'                     => 'Email',
        'telephoneNumber'          => 'Telephone',
        'uid'                      => 'User Name',
        'userPassword'             => 'Password'
);
$servers = new Datastore();


$servers->newServer('ldap_pla');
$servers->setValue('server','name','ldap01.sha2017.nl');
$servers->setValue('server','host','ldap01.sha2017.nl');
$servers->setValue('server','base',array('dc=sha2017,dc=nl'));
$servers->setValue('login','auth_type','session');
$servers->setValue('login','bind_id','cn=admin,dc=sha2017,dc=nl');

$servers->newServer('ldap_pla');
$servers->setValue('server','name','ldap02.sha2017.nl');
$servers->setValue('server','host','ldap02.sha2017.nl');
$servers->setValue('server','port',389);
$servers->setValue('server','base',array('dc=sha2017,dc=nl'));
$servers->setValue('login','auth_type','session');
$servers->setValue('login','bind_id','cn=admin,dc=sha2017,dc=nl');
$servers->setValue('server','tls',false);

?>
