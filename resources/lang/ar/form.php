<?php

return [
    'tabs' => [
        'general' => 'عام',
        'styling' => 'التصميم',
        'scheduling' => 'الجدولة',
    ],
    'fields' => [
        'id' => 'المعرف',
        'name' => 'الاسم',
        'content' => 'المحتوى',
        'render_location' => 'موقع العرض',
        'render_location_help' => 'من خلال موقع العرض، يمكنك اختيار مكان عرض البنر في الصفحة. بالاشتراك مع النطاقات، يصبح هذا أداة قوية لإدارة مكان وزمان عرض البنرات الخاصة بك. يمكنك اختيار عرض البنرات في الرأس أو الشريط الجانبي أو مواقع استراتيجية أخرى لزيادة رؤيتها وتأثيرها.',
        'render_location_options' => [
            'panel' => [
                'header' => 'الرأس',
                'page_start' => 'بداية الصفحة',
                'page_end' => 'نهاية الصفحة',
            ],
            'authentication' => [
                'login_form_before' => 'قبل نموذج تسجيل الدخول',
                'login_form_after' => 'بعد نموذج تسجيل الدخول',
                'password_reset_form_before' => 'قبل نموذج إعادة تعيين كلمة المرور',
                'password_reset_form_after' => 'بعد نموذج إعادة تعيين كلمة المرور',
                'register_form_before' => 'قبل نموذج التسجيل',
                'register_form_after' => 'بعد نموذج التسجيل',
            ],
            'global_search' => [
                'before' => 'قبل حقل البحث',
                'after' => 'بعد حقل البحث',
            ],
            'page_widgets' => [
                'header_before' => 'قبل أدوات(ودجت) الرأس',
                'header_after' => 'بعد أدوات(ودجت) الرأس',
                'footer_before' => 'قبل أدوات(ودجت) التذييل',
                'footer_after' => 'بعد أدوات(ودجت) التذييل',
            ],
            'sidebar' => [
                'nav_start' => 'قبل تنقل الشريط الجانبي',
                'nav_end' => 'بعد تنقل الشريط الجانبي',
            ],
            'resource_table' => [
                'before' => 'قبل جدول الموارد',
                'after' => 'بعد جدول الموارد',
            ],
        ],
        'scope' => 'النطاق',
        'scope_help' => 'من خلال النطاق، يمكنك التحكم في مكان عرض البنر الخاص بك. يمكنك استهداف البنر لصفحات محددة أو موارد كاملة، مما يضمن عرضه للجمهور المناسب في الوقت المناسب.',
        'options' => 'الخيارات',
        'can_be_closed_by_user' => 'يمكن إغلاق البنر من قبل المستخدم',
        'can_truncate_message' => 'يمكن تقليص محتوى البنر',
        'is_active' => 'نشط',
        'text_color' => 'لون النص',
        'icon' => 'الأيقونة',
        'icon_color' => 'لون الأيقونة',
        'background' => 'الخلفية',
        'background_type' => 'نوع الخلفية',
        'background_type_solid' => 'موحدة',
        'background_type_gradient' => 'متدرجة',
        'start_color' => 'لون البداية',
        'end_color' => 'لون النهاية',
        'start_time' => 'وقت البدء',
        'start_time_reset' => 'إعادة تعيين وقت البدء',
        'end_time' => 'وقت الانتهاء',
        'end_time_reset' => 'إعادة تعيين وقت الانتهاء',
    ],
    'badges' => [
        'scheduling_status' => [
            'active' => 'نشط',
            'scheduled' => 'مجدول',
            'expired' => 'منتهي',
        ],
    ],
    'actions' => [
        'help' => 'مساعدة',
        'reset' => 'إعادة تعيين',
    ],
];
