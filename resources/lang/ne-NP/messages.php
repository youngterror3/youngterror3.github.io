<?php

return [

    'success' => [
        'added'             => ':type थपियो!',
        'updated'           => ':type अद्यावधिक भयो!',
        'deleted'           => ':type हटाईयो!',
        'duplicated'        => ':type नक्कल भयो!',
        'imported'          => ':type आयात भयो!',
        'import_queued'     => ': प्रकार आयात तालिकाबद्ध गरिएको छ! यो समाप्त भए पछि तपाईं ईमेल प्राप्त गर्नुहुनेछ।',
        'exported'          => ':type निर्यात भयो!',
        'export_queued'     => ': प्रकारको निर्यात तालिकाबद्ध गरिएको छ! डाउनलोड गर्नका लागि तयार भएपछि तपाईंले ईमेल प्राप्त गर्नुहुनेछ।',
        'enabled'           => ':type सकृय भयो!',
        'disabled'          => ':type निष्कृय भयो!',

        'clear_all'         => 'महान! तपाईंले आफ्नो सबै : type खाली गर्नुभयो।',
    ],

    'error' => [
        'over_payment'      => 'त्रुटी: भुक्तानी थपिएन! तपाईले प्रविष्ट गरेको रकम जम्मा :amount भन्दा बढी छ |',
        'not_user_company'  => 'Error: तपाईलाई यो कम्पनी व्यवस्थापन गर्ने अनुमति छैन!',
        'customer'          => 'त्रुटि: प्रयोगकर्ता सृजत भएको छैन! यो.ईमेल ठेगाना :name द्वारा प्रयोग गरिएको छ।',
        'no_file'           => 'त्रुटि: कुनै फाईल छानिएको छैन!',
        'last_category'     => 'त्रुटि: अन्तिम :type वर्ग हटाउन सकिदैन!',
        'change_type'       => 'त्रुटी: प्रकार परिवर्तन गर्न सकिएन किनकियो सँग :text सम्बन्धित छ! ',
        'invalid_apikey'    => 'त्रुटि: प्रविष्ट गरिएको API Key अमान्य छ!',
        'import_column'     => 'त्रुटि:: सन्देश स्तम्भ नाम: स्तम्भ। लाइन नम्बर: लाइन।',
        'import_sheet'      => 'त्रुटि: पानाको नाम अमान्य छ. कृपया नमुना फाईल चेक गर्नुहोस।',
    ],

    'warning' => [
        'deleted'           => 'चेतावनी: तपाई लाई <b>:name</b> हटाउन अनुमति छैन किनभने यो :text सँग सम्बन्धित छ।',
        'disabled'          => 'चेतावनी: तपाईलाई <b>:name</b> निष्कृय गर्न अनुमति छैन किनभने यो :text सँग सम्बन्धित छ।',
        'reconciled_tran'   => 'चेतावनी: तपाईलाई कारोवार परिवर्तन/मेट्न अनुमति छैन किनकि यो मिलान गरिसकिएको छ!',
        'reconciled_doc'    => 'चेतावनी: तपाईलाई :type परिवर्तन/मेट्न अनुमति छैन किनकि योसँग सम्बन्धित मिलान गरिसकिएको कारोवारहरू छन!',
        'disable_code'      => 'चेतावनी: तपाईलाई <b>: name </ b> को मुद्रा असक्षम वा परिवर्तन गर्न अनुमति छैन किनकि यससँग :text सम्बन्धित छ।',
        'payment_cancel'    => 'चेतावनी: तपाइले तपाईको हालको :method भुक्तानी रद्द गर्नुभयो!',
    ],

];
