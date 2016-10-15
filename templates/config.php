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


{% for host in groups['wehost_ldap_servers'] %}
$servers->newServer('ldap_pla');
$servers->setValue('server','name','{{ host }}');
$servers->setValue('server','host','{{ host }}');
$servers->setValue('server','port',389);
$servers->setValue('server','base',array('{{ openldap_.domain_base }}'));
$servers->setValue('login','auth_type','session');
$servers->setValue('login','bind_id','{{ openldap_.binduser }}');
$servers->setValue('server','tls',{{ openldap_.ssl }});

{% endfor %}



?>
