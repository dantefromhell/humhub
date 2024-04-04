<?php

return [
    'Base DN' => 'Основен DN',
    'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'Определя филтъра, който да се приложи при опит за влизане. %s замества потребителското име в действието за влизане. Пример: "(sAMAccountName=%s)" или "(uid=%s)"',
    'E-Mail Address Attribute' => 'Атрибут на имейл адрес',
    'Enable LDAP Support' => 'Активирай поддръжката на LDAP',
    'Encryption' => 'Шифроване',
    'Fetch/Update Users Automatically' => 'Извличайте / актуализирайте потребителите автоматично',
    'Hostname' => 'Име на хост',
    'ID Attribute' => 'ID атрибут',
    'LDAP' => 'LDAP',
    'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => 'LDAP атрибут за имейл адрес. По подразбиране: "mail"',
    'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => 'LDAP атрибут за потребителско име. Пример: "uid" или "sAMAccountName"',
    'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'Ограничете достъпа до потребители, отговарящи на тези критерии. Пример: quot;(objectClass=posixAccount)" или "(&amp;(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))"',
    'Login Filter' => 'Филтър за вход',
    'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => 'Непроменим LDAP атрибут за еднозначно идентифициране на потребителя в директорията. Ако е празен, потребителят ще бъде определен автоматично по имейл адрес или потребителско име. Примери: objectguid (ActiveDirectory) или uidNumber (OpenLDAP)',
    'Password' => 'Парола',
    'Port' => 'Порт',
    'Specify your LDAP-backend used to fetch user accounts.' => 'Посочете вашия LDAP-бекенд, използван за извличане на потребителски акаунти.',
    'Status: Error! (Message: {message})' => 'Състояние: Грешка! (Съобщение: {message})',
    'Status: OK! ({userCount} Users)' => 'Състояние: ОК! ({userCount} потребители)',
    'Status: Warning! (No users found using the ldap user filter!)' => 'Състояние: Предупреждение! (Не са намерени потребители, използващи LDAP потребителски филтър!)',
    'The default base DN used for searching for accounts.' => 'Основният DN по подразбиране, използван за търсене на акаунти.',
    'The default credentials password (used only with username above).' => 'Паролата за идентификационни данни по подразбиране (използва се само с потребителско име по-горе).',
    'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'Потребителското име по подразбиране за идентификационни данни. Някои сървъри изискват това да е в DN форма. Това трябва да се даде в DN форма, ако LDAP сървърът изисква DN да се свързва и свързването трябва да е възможно с прости потребителски имена.',
    'User Filter' => 'Потребителски филтър',
    'Username' => 'Потребителско име',
    'Username Attribute' => 'Атрибут на потребителското име',
    'Ignored LDAP entries' => '',
    'One DN per line which should not be imported automatically.' => '',
];
