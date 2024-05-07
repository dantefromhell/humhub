<?php
return array (
  'Base DN' => '@Base DN@',
  'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'يحدد عامل التصفية لتطبيقه ، عند محاولة تسجيل الدخول. يستبدل٪ s اسم المستخدم في إجراء تسجيل الدخول. مثال: "(sAMAccountName=%s)" or "(uid=%s)"',
  'E-Mail Address Attribute' => 'سمة عنوان البريد الإلكتروني',
  'Enable LDAP Support' => '@Enable LDAP Support@',
  'Encryption' => 'التشفير',
  'Fetch/Update Users Automatically' => 'احضار/تحديث قائمة الأعضاء اوتوماتيكياً',
  'Hostname' => 'اسم المضيف',
  'ID Attribute' => 'سمة المعرف',
  'Ignored LDAP entries' => 'إدخالات LDAP تم تجاهلها',
  'LDAP' => '@LADP@',
  'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => 'سمة LDAP لعنوان البريد الإلكتروني. الافتراضي: & quot؛ mail & quot؛',
  'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => 'سمة LDAP لاسم المستخدم. مثال: & quot؛ uid & quot؛ أو & quot؛ sAMAccountName & quot؛',
  'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'تقييد الوصول إلى المستخدمين الذين يستوفون هذه المعايير. مثال: & quot؛ (objectClass = posixAccount) & quot؛ أو & quot؛ (& (objectClass = person) (memberOf = CN = العمال، CN = Users، DC = myDomain، DC = com)) & quot؛',
  'Login Filter' => 'فرز تسجيل الدخول',
  'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => 'سمة LDAP غير قابلة للتغيير لتعريف المستخدم بشكل لا لبس فيه في الدليل. إذا كانت فارغة ، فسيتم تحديد المستخدم تلقائيًا عن طريق عنوان البريد الإلكتروني أو اسم المستخدم. أمثلة: دليل الكائنات (ActiveDirectory) أو uidNumber (OpenLDAP)',
  'One DN per line which should not be imported automatically.' => 'DN  واحد لكل سطر ولا ينبغي استيراده تلقائيًا.',
  'Password' => 'كلمة السر',
  'Port' => 'المنفذ',
  'Specify your LDAP-backend used to fetch user accounts.' => 'حدد خلفية LDAP المستخدمة لجلب حسابات المستخدمين.',
  'Status: Error! (Message: {message})' => 'الحالة: خطأ! (الرسالة: {message})',
  'Status: OK! ({userCount} Users)' => 'الحالة: حسنا! (مستخدمو {userCount})',
  'Status: Warning! (No users found using the ldap user filter!)' => 'الحالة: تحذير! (لم يتم العثور على مستخدمين باستخدام مرشح مستخدم ldap!)',
  'The default base DN used for searching for accounts.' => 'الاسم المميز الأساسي الافتراضي المستخدم للبحث عن الحسابات.',
  'The default credentials password (used only with username above).' => 'كلمة مرور بيانات الاعتماد الافتراضية (تُستخدم فقط مع اسم المستخدم أعلاه).',
  'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'اسم مستخدم أوراق الاعتماد الافتراضي. تتطلب بعض الخوادم أن يكون هذا في شكل DN. يجب تقديم ذلك في شكل اسم مميز إذا كان خادم LDAP يتطلب اسمًا مميزًا للربط ويجب أن يكون الربط ممكنًا باستخدام أسماء مستخدمين بسيطة.',
  'User Filter' => 'فرز الأعضاء',
  'Username' => 'اسم المستخدم',
  'Username Attribute' => 'معلومات اسم المستخدم',
);
